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
   
   //R表示大圆半径
   //r表示小圆半径
   //x表示横坐标偏移量（即圆心横坐标）
   //y表示纵坐标偏移量（即圆心横坐标）
   //大圆和小圆上的顶点，后一个比前一个的角度大72度（逆时针）
   //调用函数drawStar
   drawStar(context,200,100,250,250);
   function drawStar(cxt,R,r,x,y){
      for(var i=0;i<5;i++){
         //绘制大圆上的五个坐标点
            cxt.lineTo(Math.cos((18 + i * 72) / 180 * Math.PI) * R + x,
                    -Math.sin((18 + i * 72) / 180 * Math.PI) * R + y);
         //绘制小圆上的五个坐标点
            cxt.lineTo(Math.cos((54 + i * 72) / 180 * Math.PI) * r + x,
                    -Math.sin((54 + i * 72) / 180 * Math.PI) * r + y);
      }
      cxt.closePath();
      cxt.stroke()
      //   cxt.beginPath();

   }
</script>

</body>
</html>