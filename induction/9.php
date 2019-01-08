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
   
   //2.1 位移 translate(x,y)
 
/*

   //第一个正方形从(0,0)点开始，x轴平移100像素，y轴平移100像素
   
   context.fillStyle = '#559ABB';
   context.translate(100,100);
   context.fillRect(0,0,100,100);

   //第二个正方形从(100,100)点开始，x轴平移100像素，y轴平移100像素
   context.fillStyle = 'cyan';
   context.translate(100,100);
   context.fillRect(0,0,100,100);


*/

  //两个translate的效果是叠加的，为了使用图形变换的效果不影响可保存canvas的状态。
  

  //Canvas的状态保存和回复
  
  //save():保存当前图形的状态
  //restore():返回save的canvas的所有状态
  

  context.save();
  context.fillStyle = 'red';
  context.translate(100,100);
  context.fillRect(0,0,100,100);
  context.restore();

  context.save();
  context.fillStyle='blue';
  context.translate(100,100);
  context.fillRect(0,0,100,100);
  context.restore();
</script>

</body>
</html>