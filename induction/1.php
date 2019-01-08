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
  	var context = canvas.getContext('2d'); 

  	//画一条直线
  	//moveTo(),lineTo()进行状态的设置
  	//stroke();进行实际的绘制
  	
  	// Canvs是基于状态的设置，不是基于对象的设置（并没有创建一个线条对象来设置线条的属性，而是设置context的属性）;



  	//假设有个笔尖移动到（100,100）这个位置
  	context.moveTo(100,100);
  	//创建到达位置(400,400)的一条直线
  	context.lineTo(400,400);
  	//精心线条粗细设置
  	context.linewidth = 5;
  	//进行线条样式设置颜色
  	context.strokeStyle = 'cyan';
  	//绘制出通过 moveTo() 和 lineTo() 方法定义的路径。默认颜色黑色
  	context.stroke();
</script>

</body>
</html>