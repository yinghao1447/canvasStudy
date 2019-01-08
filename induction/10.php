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

    canvas.width=500;
    canvas.height=500;
    context.fillStyle='#283D52';
    context.fillRect(0,0,500,500);

 
    for(var i=0; i<50;i++){
      //x轴偏移量
      var x=Math.random()*canvas.width;
      //y轴偏移量
      var y=Math.random()*canvas.width;
      //rot的度数
      var rot=Math.random()/360;
      draw(context,x,y,rot);
    }
/*   for(var i=0;i<=50;i++){
      //x轴偏移
      var x=Math.random()*canvas.width;
      //y轴偏移量
      var y=Math.random()*canvas.height;
      //角度
      var rot = Math.random()*360;
      draw(context,x,y,rot);
   }*/

  //2.2旋转rotate(deg);
  //使用translate,ratate的星空团
  //
  
  //x:x轴偏移量
  //y:y轴偏移量
  //rot: 旋转角度
  //星星
  function draw(ctx,x,y,rot){
    //保存路径
    context.save();
    //设置偏移量
    context.translate(x,y);
    //设置旋转角度
    context.rotate(rot/180*Math.PI);
    //绘制星星
    startPath(ctx);

    context.fillStyle='#F8D184';
    context.strokeStyle='#FAD085';
    context.lineWidth=2;
    //线交汇处圆角化
    context.lineJoin='round';

    context.fill();
    context.stroke();
    context.restore();
  }
  //最大圆的半径为10，小的是其一半5
  function startPath(ctx){
    //开始路径
    ctx.beginPath();
    for(var i=0;i<5;i++){
      ctx.lineTo(Math.cos((18+i*72)/180*Math.PI)*10,-Math.sin((18+i*72)/180*Math.PI)*10);
      ctx.lineTo(Math.cos((56+i*72)/180*Math.PI)/2*10,-Math.sin((56+i*72)/180*Math.PI)/2*10);
    }
  }
</script>

</body>
</html>