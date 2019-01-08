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

    canvas.width=600;
    canvas.height=600;
    context.beginPath();
    context.moveTo(100,100);
    context.lineTo(300,300);
    context.lineTo(100,300);
    //closePath(); 闭合路径
    context.closePath();

    context.lineWidth=5;
    context.strokeStyle='red';
    //设置填充颜色
    context.fillStyle='red';
    //进行填充
    context.fill();
    context.stroke();
</script>

</body>
</html>