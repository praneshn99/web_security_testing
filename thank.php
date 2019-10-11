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
