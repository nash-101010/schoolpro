<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <style>
body{
  padding: 0;
  margin: 0;
  background:#f3f5ff;
  text-align: center;
  height:100vh;
  font-family: 'lato';
  font-weight: 100;;
}
.wrapper{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%); 
}
.warpper_text{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%); 
  margin-top: 100px;
  font-size: 20px;
  color: #8093ed;

}
.circle{
  display: inline-block;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  animation: loading 1.5s cubic-bezier(.8, .5, .2, 1.4) infinite;
  transform-origin: bottom center;
  position: relative;
}
@keyframes loading{
  0%{
    transform: translateY(0px);
    background-color: #adbaf7;
  }
  50%{
    transform: translateY(50px);
    background-color: #9aaaf5;
  }
  100%{
    transform: translateY(0px);
    background-color: #8093ed; 
  }
}
.circle-1{
  animation-delay: 0.1s;
}
.circle-2{
  animation-delay: 0.2s;
}
.circle-3{
  animation-delay: 0.3s;
}
.circle-4{
  animation-delay: 0.4s;
}
.circle-5{
  animation-delay: 0.5s;
}
.circle-6{
  animation-delay: 0.6s;
}
.circle-7{
  animation-delay: 0.7s;
}
.circle-8{
  animation-delay: 0.8s;
}
    </style>
</head>
<body>
  <div class="wrapper">
    <span class="circle circle-1"></span>
    <span class="circle circle-2"></span>
    <span class="circle circle-3"></span>
    <span class="circle circle-4"></span>
    <span class="circle circle-5"></span>
    <span class="circle circle-6"></span>
    <span class="circle circle-7"></span>
    <span class="circle circle-8"></span>
  </div>
  <div class="warpper_text">
    <span>光影魔盤 啟動！</span>
  </div>
</body>
</html>
<script>
  setTimeout(function (){
  location.href="arcade.html";
  }, 5000);
</script>