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

    canvas.width=500;
    canvas.height=500;
  	//画出多条直线
      //使用lineTo()画出首位链接的图形
    
    //画出一个三角形
    //假设有个笔尖移动到（100,100）这个位置
    
    context.moveTo(100,100);
    context.lineTo(300,300);
    context.lineTo(100,300);
    context.lineTo(100,100);

    //进行线条粗细设置
    context.lineWidth=5;
    //进行线条样式颜色设置
    context.strokeStyle='red';
    //绘制出通过moveTo() 和 lineTo()方法定义的路径。
    context.stroke();
</script>

</body>
</html>