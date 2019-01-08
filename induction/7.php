<!doctype html>
<html dir="ltr" lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, width=device-width">
<meta name="screen-orientation" content="portrait">
<meta charset="utf-8">
<title></title>
<style>
  #canvas{border:1px solid black;}
</style>
</head>
<body>
	<!-- 在HTML中创建Canvas画布 -->
	<canvas id="canvas"></canvas>
<script>
	var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');

    canvas.width=600;
    canvas.height=600;
   //线条属性

   //lineWidth设置线条的宽度
   
   //lineCap设置线条末端线帽的样式。
   
   //lineCap属性值
   //buff默认。向线条的莫额个末端添加平直的边缘
   //round向线条的每个末端添加圆形线帽
   //square向线条的每个人末端添加正方形线帽
   
   //buff 线条的末端平直的边缘
   
   context.beginPath();
   context.moveTo(100,100);
   context.lineTo(400,100);
   context.lineCap='buff';
   context.lineWidth=20
   context.stroke();

   context.beginPath();
   context.moveTo(100,200);
   context.lineTo(400,200);
   context.lineCap='round';
   context.lineWidth=20;
   context.stroke();

   context.beginPath();
   context.moveTo(100,300);
   context.lineTo(400,300);
   context.lineCap='square';
   context.lineWidth=20;
   context.stroke();

//不重要测量线
   context.beginPath();
   context.moveTo(100,0);
   context.lineTo(100,600);
   context.lineWidth=1;
   context.strokeStyle='red';
   context.stroke();

   context.beginPath();
   context.moveTo(400,0);
   context.lineTo(400,600);
   context.strokeStyle='red';
   context.linwWidth=1;
   context.stroke();
</script>

</body>
</html>