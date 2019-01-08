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

    context.beginPath();

    window.onload = function(){
        RectDraw(context,100,100,300,300,5,'red','blue');
        RectDraw2(context,200,200,300,300,5,'blue','red');
    }

    //绘制矩形可以用rect()方法
    //或者使用fillRect(),srokeRect()
    

    //rect()方法规划矩形的路径
    //fillRect(),strokeRect()不止规划路径，还能绘制出矩形
    
    //使用rect()方法
    
   /* context.rect(100,100,200,200);
    context.closePath();
    context.lineWidth=5;
    context.strokeStyle='red';
    context.fillStyle='blue';
    context.fill();
    context.stroke();*/
    
    function RectDraw(cxt,x,y,width,height,borderwidth,bordercolor,fillcolor){
        cxt.beginPath();
        //使用rect()画一个矩形
        /*
        参数1:x轴的距离 
        参数2:y轴的距离
        参数3:宽度
        参数4:高度
        */ 
        cxt.rect(x,y,width,height);
        cxt.closePath();

        cxt.lineWidth=borderwidth;

        cxt.strokeStyle=bordercolor;
        cxt.fillStyle=fillcolor;

        cxt.fill();
        cxt.stroke();
    }

    function RectDraw2(cxt,x,y,width,height,borderwidth,bordercolor,fillcolor){
        cxt.lineWidth=borderwidth;
        cxt.strokeStyle=bordercolor;
        cxt.fillStyle = fillcolor;

        //绘制有边框的矩形默认黑色
        cxt.strokeRect(x,y,width,height);
        //绘制有颜色的矩形默认黑色
        cxt.fillRect(x,y,width,height);
    }

</script>

</body>
</html>