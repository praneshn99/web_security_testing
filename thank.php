<html>
<head>
<title>Thank You!</title>
<style>
body {
  background-color: #191A20;
  margin: 0;
  padding: 0;
}
#box1 {
  height: 350px;
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 350px;
}
.you {
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
}
#box1 .st0{
  fill: none;
  stroke: #CF002F;
  stroke-width: 6;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-miterlimit: 10;
}
.thank .st0 {
  stroke-dashoffset: 2000;
  stroke-dasharray: 2000;
  animation: dash1 2.5s ease-in;
  animation-fill-mode: forwards;
  animation-direction: reverse;
}
.you .st0{
  stroke-dashoffset: 2000;
  stroke-dasharray: 2000;
  animation: dash1 2.5s ease-in;
  animation-fill-mode: forwards;
  animation-direction: reverse;
  animation-delay: 2s;
}
@keyframes dash1 {
  from {stroke-dashoffset: 0;}
  to {stroke-dashoffset: 2000;}
} 
/* /////////////////////////////////////////// shadow //////////*/
#box2 {  
  height: 350px;
  left: calc(50% + 6px);
  position: absolute;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 350px;
  z-index: -1;
}
#box2 .st0{
  fill: none;
  stroke: #610018;
  stroke-width: 6;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-miterlimit: 10;
}
/* /////////////////////////////////////////// circle //////////*/
#box3 {
  height: 350px;
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 350px;
}
#box3 .st0{
  animation: circle-anima 15s infinite linear;
  transform-origin: center;
  fill: none;
  opacity: 0;
  stroke: #CF002F;
  stroke-width: 4;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 5.0035,15.0104;
  z-index: -5;
}
@keyframes circle-anima {
  0% {""}
  10% {opacity: 1}
  100% {transform: rotate(360deg)}
}
#link {
  bottom: 20px;
  color: #CF002F;
  opacity: 0.6;
  display: flex;
  align-items: center;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
#link p {font-size: 20px; margin: 0; margin-left: 5px;}
#link:hover {opacity: 1;}
</style>
</head>
<body>
<div id="box1" class="container">
  <div class="thank">
    <svg version="1.1"
       x="0px" y="0px" width="356px" height="193px" viewBox="0 0 356 193" style="enable-background:new 0 0 356 193;"
       xml:space="preserve">
    <path class="st0" d="M3,176.8c0,0,36.7,38.5,69.1-15.7c21-35.1,3.5-66.7,39.2-129.8c0,0-25.8-11.4-57.1-4.8S5.8,49.7,5.8,49.7
      s35.8-35.4,94.9-22.4c45.8,10.1,82.3,20.5,96-4.5c12.3-22.4-26.8-30.2-44.7,0c-13.3,22.5-27.9,71.6-42.4,132.1l12.9-50.2
      c0,0,6.6-30.1,27.3-23.7c14.5,4.5,4.5,26.9,0,39.2c0,0-7.8,20.1-2.2,26.9c8.1,9.7,21.2,0,27.9-16.8s11-49.9,23.4-58.2
      c10-6.7,20.9-0.9,15.6,19c-4.5,16.8-8.9,42.5-19,52.6c-9,9-24.6,2.2-20.1-13.4c0,0-4.8,12.8,8.3,16.7c10,3,19.5-9.6,22.8-20.3
      C209.8,116,220.1,71,220.1,71s-8.7,39.2-13.4,54.9c-4.7,15.7,12.3,25.7,24.6,9c0,0,3.3-4.5,5.6-15.7c0.9-4.5,12.3-54.9,12.3-54.9
      s-4.5,12.3,10,1.1c13.5-10.4,20.1,2.2,14.5,20.1c-4.6,14.9-14.5,39.2-3.3,45.9c11.2,6.7,20.1-2.2,24.6-16.8
      c5.5-17.9,27.9-106.3,27.9-106.3l-13.9,54.3c0,0,9.5-15.1,19.5-10.7s12.3,16.8,4.5,25.7c-7.8,9-15.6,14.6-22.3,16.8
      c0,0-4.5,25.7,14.5,26.9c19,1.1,26.8-14.6,27.9-24.6"/>
    </svg>
  </div><!--thank-->
  <div class="you">
    <svg version="1.1"
       x="0px" y="0px" width="196.6px" height="150.5px" viewBox="0 0 196.6 150.5" style="enable-background:new 0 0 196.6 150.5;"
       xml:space="preserve">
    <path class="st0" d="M54,24.2c0,0-11.4,40.1-14.5,53.6c-4.5,19,19,28.1,27.9,7.8c7.8-17.9,19-69.2,19-69.2S60.6,113,58.5,120.2
      c-5.6,19-20.3,31.9-43.5,25.7c-16.7-4.5-16.7-27.9,5.6-35.7s58.8,11,74.8-36.8C106.5,39.8,109.8,22,109.8,22s-10,38-12.3,49.1
      s12.3,23.4,24.6,6.7s17.6-49.1,16.7-58.1c-1.1-11.2-16.7-15.6-17.9-3.3c-1.7,18.9,39.1,10,43.5-6.7c0,0-10.3,37.9-13.4,50.2
      c-4.5,17.9,15.3,27.2,23.4,7.8c8.9-21.2,19-64.8,19-64.8"/>
    </svg>
  </div><!--you-->
</div>
</div>
<div id="box2" class="container">
  <div class="thank">
    <svg version="1.1"
       x="0px" y="0px" width="356px" height="193px" viewBox="0 0 356 193" style="enable-background:new 0 0 356 193;"
       xml:space="preserve">
    <path class="st0" d="M3,176.8c0,0,36.7,38.5,69.1-15.7c21-35.1,3.5-66.7,39.2-129.8c0,0-25.8-11.4-57.1-4.8S5.8,49.7,5.8,49.7
      s35.8-35.4,94.9-22.4c45.8,10.1,82.3,20.5,96-4.5c12.3-22.4-26.8-30.2-44.7,0c-13.3,22.5-27.9,71.6-42.4,132.1l12.9-50.2
      c0,0,6.6-30.1,27.3-23.7c14.5,4.5,4.5,26.9,0,39.2c0,0-7.8,20.1-2.2,26.9c8.1,9.7,21.2,0,27.9-16.8s11-49.9,23.4-58.2
      c10-6.7,20.9-0.9,15.6,19c-4.5,16.8-8.9,42.5-19,52.6c-9,9-24.6,2.2-20.1-13.4c0,0-4.8,12.8,8.3,16.7c10,3,19.5-9.6,22.8-20.3
      C209.8,116,220.1,71,220.1,71s-8.7,39.2-13.4,54.9c-4.7,15.7,12.3,25.7,24.6,9c0,0,3.3-4.5,5.6-15.7c0.9-4.5,12.3-54.9,12.3-54.9
      s-4.5,12.3,10,1.1c13.5-10.4,20.1,2.2,14.5,20.1c-4.6,14.9-14.5,39.2-3.3,45.9c11.2,6.7,20.1-2.2,24.6-16.8
      c5.5-17.9,27.9-106.3,27.9-106.3l-13.9,54.3c0,0,9.5-15.1,19.5-10.7s12.3,16.8,4.5,25.7c-7.8,9-15.6,14.6-22.3,16.8
      c0,0-4.5,25.7,14.5,26.9c19,1.1,26.8-14.6,27.9-24.6"/>
    </svg>
  </div><!--thank-->
  <div class="you">
    <svg version="1.1"
       x="0px" y="0px" width="196.6px" height="150.5px" viewBox="0 0 196.6 150.5" style="enable-background:new 0 0 196.6 150.5;"
       xml:space="preserve">
    <path class="st0" d="M54,24.2c0,0-11.4,40.1-14.5,53.6c-4.5,19,19,28.1,27.9,7.8c7.8-17.9,19-69.2,19-69.2S60.6,113,58.5,120.2
      c-5.6,19-20.3,31.9-43.5,25.7c-16.7-4.5-16.7-27.9,5.6-35.7s58.8,11,74.8-36.8C106.5,39.8,109.8,22,109.8,22s-10,38-12.3,49.1
      s12.3,23.4,24.6,6.7s17.6-49.1,16.7-58.1c-1.1-11.2-16.7-15.6-17.9-3.3c-1.7,18.9,39.1,10,43.5-6.7c0,0-10.3,37.9-13.4,50.2
      c-4.5,17.9,15.3,27.2,23.4,7.8c8.9-21.2,19-64.8,19-64.8"/>
    </svg>
  </div><!--you-->
</div>
<!-- ////////////////////////////////// CIRCLE ////////////////////////////////// -->
<div id="box3" class="container">
  <svg version="1.1"
     x="0px" y="0px" width="350px" height="350px" viewBox="0 0 520 520" style="enable-background:new 0 0 520 520;"
     xml:space="preserve">
  <g>
    <circle class="st0" cx="260" cy="260" r="258"/>
  </g>
  </svg>
</div>
<!-- ////////////////////////////////// CREDIT ////////////////////////////////// -->

  <div id="link">
    <a href="website.php"><p style = "color:red">Go Back to HomePage</p></a>
  </div>
</a>
</body>
</html>
