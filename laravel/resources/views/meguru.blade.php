<!DOCTYPE html>
  <div id="cube">
      <div class="boxBase">
          <div class="square top"> <div class= "square2"></div> </div>
          <div class="square bottom"> <div class= "square2"></div> </div>
          <div class="square front"> <div class= "square2"></div> </div>
          <div class="square back"> <div class= "square2"></div> </div>
          <div class="square left"> <div class= "square2"></div> </div>
          <div class="square right"> <div class= "square2"></div> </div>
      </div>
  </div>
  <style>
    /* この立方体は回を六面につけた形のものです */
  .square {
      width: 200px;
      height: 200px;
      border:5px solid black;
      display: flex;
      justify-content: center;
      align-items: center;
  }
  .square2 {
      width: 100px;
      height: 100px;
      border:5px solid black;
  }

  /* ここで立方体にする */
  #cube {
      perspective: 1000px;
      width:200px;
      height:200px;
      position:relative;
      top:50vh;
      left:50vw;
      transform:translateX(-50%) translateY(-50%);
    }
    .boxBase {
      transform-style:preserve-3d;
      width:200px;
      height:200px;
      /* ここの秒数をいじると回転する速度が変わるよ */
      animation: turnAround 5s linear 0s infinite normal none running;
    }
    @keyframes turnAround {
      0%{
        transform:rotateX(0deg) rotateY(0deg);
      }
      100%{
        transform:rotateX(360deg) rotateY(360deg);
      }
    }
    .boxBase > div {
      position:absolute;
      border:5px solid black;
    }
    .boxBase > .top {
      transform:translateY(100px) rotateX(-90deg);
    }
    .boxBase > .bottom {
      transform:translateY(-100px) rotateX(90deg);
    }
    .boxBase > .front {
      transform:translateZ(100px);
    }
    .boxBase > .back {
      transform:translateZ(-100px) rotateX(180deg);
    }
    .boxBase > .left {
      transform:translateX(-100px) rotateY(-90deg);
    }
    .boxBase > .right {
      transform:translateX(100px) rotateY(90deg);
    }
  </style>
