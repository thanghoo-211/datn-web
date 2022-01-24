
import './App.css';
import React, {useEffect, useRef, useState } from 'react';
import { initNotifications, notify } from '@mycv/f8-notification';
import *  as mobilenet from '@tensorflow-models/mobilenet';
import * as knnClassifier from '@tensorflow-models/knn-classifier';
import '@tensorflow/tfjs-backend-webgl';
import * as tf from '@tensorflow/tfjs';
import { Howl } from 'howler';
import soundURL from './hey_sondn.mp3';
import { randomUniformVariable } from '@tensorflow/tfjs-layers/dist/variables';
var sound = new Howl({
  src: [soundURL]
});


const NOT_TOUCH_LABEL = 'not_touch';
const TOUCHED_LABEL = 'touched';
const TRAINING_TIMES = 50;
const TOUCHED_CONFIDENCES = 0.6;


function App() {
  const video =useRef();
  const classifier =useRef();
  const mobilenetModule =useRef();
  const [touched, setTouched] = useState(false);
  const canPlaySound = useRef(true);

  
  const init = async () => {
    console.log('init..');
    await setupCamera();
    console.log('Setup camera success');
    
     classifier.current = knnClassifier.create();
     mobilenetModule.current = await mobilenet.load();
    
    console.log('Setup done...');
    console.log('Khong cham tay va bam train 1');

    initNotifications({ cooldown: 3000 });

  }
  
  const setupCamera = () => {
    return new Promise((resolve, reject) => {
      navigator.getUserMedia = navigator.getUserMedia || 
      navigator.webkitGetUserMedia ||
      navigator.mozGetUserMedia ||
      navigator.msGetUserMedia;

      if (navigator.getUserMedia) {
        navigator.getUserMedia(
          {video: true},
          stream => {
            video.current.srcObject = stream;
            video.current.addEventListener('loadeddata', resolve);
          },
          error => reject (error)
        );
      }else {
        reject();
      }
    });
  }

  const train = async label => {
    console.log(`[${label}] Dang train cho AI`);

    for (let i=0; i<=TRAINING_TIMES; ++i) {
      console.log(`Processing ${parseInt((i)/TRAINING_TIMES *100)}%`);

      await training(label);      
    }
  }

/**
 * Buoc 1 Train hinh anh ban dau khong cham tay
 * Buoc 2 Train cho AI hinh anh co thay doi 
 * Buoc 3 Lay luong hinh anh hien tai, phan tich va so sanh voi data da hoc truoc do
 * ==> Neu ket qua match voi TH2 ==> Canh bao
 * @param {*} label 
 * @returns 
 */


  const training = label => {
    return new Promise(async resolve => {
      const embedding = mobilenetModule.current.infer (
        video.current,
        true
      );
      classifier.current.addExample(embedding, label);
      await sleep(100);
      resolve();
    });
  }
  
  const run = async () =>{
    const embedding = mobilenetModule.current.infer (
      video.current,
      true
    );
    const result = await classifier.current.predictClass(embedding);

    console.log(result);
    
    if (result.label === TOUCHED_LABEL && result.confidences[result.label] > TOUCHED_CONFIDENCES) {
      console.log('Phat hien roi nha');
      if (canPlaySound.current) {
        canPlaySound.current =false;
        sound.play();
      }
      notify('Di ra nao di ra nao', { body: 'Di ra khong tao ban' });
      setTouched(true);
    }
    else
    {
      console.log('Khong co gi ca');
      setTouched(false);
    }


    await sleep(200);
    run();
  }
  
  const sleep = (ms=0) => {
    return new Promise(resolve => setTimeout(resolve, ms))
  }

  useEffect(()=>{
    init();
    sound.on('end', function(){
      canPlaySound.current=true;
    });

      //clean up
    return () => {

    }
  }, []);
  
  return (
  <div className={`main ${touched ? 'touched':'' }`}>
      <video
      ref= {video}
      className='video'
      autoPlay 
      />
    
    <div className="control">
      <button className="btn" onClick={() => train(NOT_TOUCH_LABEL)}>Train1</button>
      <button className="btn" onClick={() => train(TOUCHED_LABEL)}>Train2</button>
      <button className="btn" onClick={() => run()}>Run</button>
    </div>
    
  </div>
  );
}

export default App;
