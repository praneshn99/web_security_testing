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
