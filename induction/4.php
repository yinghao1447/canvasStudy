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
	// 在Js文件中获取Canvas画布，以及绘图环境
    var canvas= document.getElementById('canvas');
    var context= canvas.getContext('2d');
    
    canvas.width=600;
    canvas.height=600;
   //beginPath()
   //开始一条路径
   
   context.beginPath();
   context.moveTo(100,100);
   context.lineTo(300,300);
   context.lineTo(100,500);
   context.lineWidth=15;
   context.strokeStyle='red';
   context.stroke();

   //开始第二条的路径
   context.beginPath();
   context.moveTo(200,100);
   context.lineTo(400,300);
   context.lineTo(200,500);
   context.lineWidth=5;
   context.strokeStyle='blue';
   context.stroke();

   //开始第三条的路径
   context.beginPath();
   context.moveTo(300,100);
   context.lineTo(500,300);
   context.lineTo(300,500);
   context.lineWidth=5;
   context.strokeStyle='yellow';
   context.stroke();
</script>

</body>
</html>