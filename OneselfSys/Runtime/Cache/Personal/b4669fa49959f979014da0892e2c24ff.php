<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="__PUBLIC__/img/title.ico" />
    <meta name="baidu-site-verification" content="SJUcrwgRw0" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8"> 
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">  
    <meta http-equiv="content-language" content="zh-CN" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="marchsoft marchsoft.cn">
    <meta name="copyright" content="© www.marchsoft.cn" />
    <meta name="description" content="这是一个专注于科技，专注于创新，专业于网络软件事业的学生团队，大学生个人IT博客园区，大学生个人说吧">
    <meta name="keywords" content="我们一起来说吧、IT博客、IT社区、IT论坛、大学生个人说吧、三月软件工作室、fantengfei、范腾飞、大学生个人网站、fantengfei.cn" />
    <meta name="robots" content="index,follow,archive" />
    <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/bootstrap/css/style.css"  rel="stylesheet">
    <link href="__PUBLIC__/css/comm.css" rel="stylesheet" >
    <link rel="stylesheet" href="__PUBLIC__/css/home.css">
	 <!--[if lt IE 8]><link rel="stylesheet" href="__ROOT__/Public/bootstrap/css/bootstrap-ie7buttonfix.css"><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" href="__ROOT__/Public/bootstrap/css/bootstrap-ie8buttonfix.css"><![endif]--> 
    <script type="text/javascript" src="__ROOT__/Public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/head.js"></script>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="__PUBLIC__/img/title.ico" />
    <meta name="baidu-site-verification" content="SJUcrwgRw0" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8"> 
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">  
    <meta http-equiv="content-language" content="zh-CN" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="marchsoft marchsoft.cn">
    <meta name="copyright" content="© www.marchsoft.cn" />
    <meta name="description" content="这是一个专注于科技，专注于创新，专业于网络软件事业的学生团队，大学生个人IT博客园区，大学生个人说吧">
    <meta name="keywords" content="我们一起来说吧、IT博客、IT社区、IT论坛、大学生个人说吧、三月软件工作室、fantengfei、范腾飞、大学生个人网站、fantengfei.cn" />
    <meta name="robots" content="index,follow,archive" />
    <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/bootstrap/css/style.css"  rel="stylesheet">
    <link href="__PUBLIC__/css/comm.css" rel="stylesheet" >
    <link rel="stylesheet" href="__PUBLIC__/css/home.css">
	 <!--[if lt IE 8]><link rel="stylesheet" href="__ROOT__/Public/bootstrap/css/bootstrap-ie7buttonfix.css"><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" href="__ROOT__/Public/bootstrap/css/bootstrap-ie8buttonfix.css"><![endif]--> 
    <script type="text/javascript" src="__ROOT__/Public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/head.js"></script>
</head>
<body id="body_bg">
  <div id='div-bg'></div>
	  <div class="navbar-inner head">
	   	<div id="top_nav">
              <span style="float:left;width:450px;">
           			<a class="logo_link" href="__ROOT__/Index.php">
                       <img style="height:35px;" src="__PUBLIC__/img/logo.png">
                </a>
           			<a class="a_nav brand" href="__ROOT__/Index.php">首页</a>
           			<a class="a_nav brand" href="<?php echo U('Index/Index/shuo');?>">说吧</a>
           			<a class="a_nav brand" href="<?php echo U('Index/Index/blog');?>">博客</a>
                <a class="a_nav brand" href="<?php echo U('Index/Index/leave_word');?>">留言</a>
                <a class="a_nav brand" href="<?php echo U('Index/Index/about');?>">关于</a>
               </span>
   			<div class="right">
          <span class="login_span login1 brand">
            <img src="__PUBLIC__/img/logo.png">登陆
          </span>
         <!--  <span class="login_span login2">
            <img class="qq_img" src="__PUBLIC__/img/qq.png">QQ登陆&nbsp;
          </span> -->
   				<font style="display:inline-block;text-align:center">|</font>
   				<a class="register" href="javascript:reg();">注册</a>
               <div style="clear:both;"></div>
   			</div>
        <div style="line-height:40px;width:70px;float:right;color:#fff;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;"><a style="color:#ccc;text-decoration:none;" href="<?php echo U('/Personal/Index/tie');?>">阳光照耀下的范范</a></div>
	   	</div>
	
      <div class="login oneself_login">
          <span onclick="$('.oneself_login').fadeOut();$('.pwd,.verify').val('');" style="display:inline-block;float:right;padding:0 10px 5px 10px;cursor:pointer">x</span>
          <div style="margin:0 auto;padding:30px 10px 0px 20px;">
              <p>&emsp;账号：<input type="text" class="idcard" name="idcard"  placeholder="请输入账号..."></p>
              <p>&emsp;密码：<input type="password" class="pwd" style='font-size:12px;' name="pwd"  placeholder="请输入密码..."></p>
              <p>验证码：<input type="text" class="verify" placeholder="请输入验证码..." style="width:120px;">&nbsp;<img src="__ROOT__/Index/Index/verify" onclick="this.src='__ROOT__/Index/Index/verify?'+Math.random()"></p>
              <input type="button" class="btn btn-primary btn-submit" style="margin-left:52px;" value="登陆">&emsp;
              <input type="button" class="btn cancer" value="取消">
              <input type="hidden" value="__ROOT__/Index/Index/" id="url">
          </div>
      </div>

      <!-- <div class="login qq_login">
         <div style="width:270px;margin:0 auto;margin-top:20px;">
            <p>账号：<input type="text" name="idcard" class="idcard"  placeholder="请输入账号..."></p>
            <p>密码：<input type="password" name="idcard" class="pwd"  placeholder="请输入密码..."></p>
            <span style="display:inline-block;width:30px;"></span>
            <input type="button" class="btn btn-primary" value="登陆">
            <input type="button" class="btn cancer" value="取消">
         </div>
         <div style="float:right;margin-right:20px;height:50px;padding-top:18px;"><font style="font-size:12px;"><a target="_blank" href="http://aq.qq.com/cn2/index">忘记密码？</a>&nbsp;|&nbsp;<a target="_blank" href="http://zc.qq.com/chs/index.html">注册</a></font></div>
      </div> -->
    </div>
    <div><?php $title = "我们一起来说吧"; ?></div>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/personal.css">
<div id="content">
	<div id="idx-film">
		<img src="__PUBLIC__/img/jpeg2.jpg">
	</div>
	<div id="per-lyt">
	 	<div class="me-pto">
	 		<div class="pto">
	 			<img src="__PUBLIC__/images/11.jpg">
	 			<button class='btn btn-mini upd-pto' onclick="window.open('__URL__/Updpto')">修改头像</button>
	 		</div>
	 		<div style="margin-top:5px">
	 			<table style="border-collapse:collapse;">
	 				<tr style="font-weight:600">
	 					<td class="td-border">2</td><td class="td-border">1</td><td >3</td>
	 				</tr>
	 				<tr><td class="td-border">发帖</td><td class="td-border">博客</td><td>相册</td><tr>
	 			</table>
	 		</div>
	 	</div>
	 	<div class="me-data" >
	 		<div class="nick">阳光照耀下的范范</div>
	 		<div class="summ">小小IT鸟</div>
 			<table border='0' cellspaceing='0' cellpadding='0'>
 				<tr>
 					<td width=30>男</td>
 					<td width=40>单身</td>
 					<td width=50>金牛座</td>
 					<td width=70><div style="width:70px" title='河南-洛阳'>河南-洛阳</div>
 					<td width=100><div style="width:100px;" title='河南科技学院新科学院'>&nbsp;<span style="color:#999">毕业于</span>河南科技学院新科学院</div></td>
 					<td style="text-align:left;"><div style="width:130px;">&nbsp;<a target="_blank" title='http://www.fantengfei.cn' href="http://www.fantengfei.cn">http://www.fantengfei.cn</a><div></td>
 				</tr>
 			</table>
 			<button class='btn btn-mini upd-data'>修改个人资料</button>
	 	</div>
	 	<div class="data-cnt">
	 		<ul class='ul-menu'>
	 			<!-- <li class='li-first li-index' ><a href="__URL__/index">我的主页</a></li> -->
	 			<li class='li-tie'><a href="__URL__/tie">我的帖子</a></li>
	 			<li class='li-data'><a href="__URL__/data">个人资料</a></li>
	 			<li class='li-blog'><a href="__URL__/blog">我的博客</a></li>
	 			<li class='li-photo'><a href="__URL__/photo">相册</a></li>
	 			<li class='li-updpto'><a href="__URL__/UpdPto">更改头像</a></li>
	 			<div style='clear:both;'></div>
	 		</ul>
	 	</div>
	 	<script>
			$('.ul-menu>li>a').css('backgroundColor','#f2f2f2');
			$('.li-'+"<?php echo (ACTION_NAME); ?>"+'>a').css('backgroundColor','#D7EEFB');
		</script>
 		<div class="cnt">
 			<title>修改头像-<?php echo $title; ?></title>
<div id='upd-pto'>
	<div class='div-img'>
		<div class=''>
			<img src='__PUBLIC__/images/11.jpg'>
		</div>
	</div>
	<div class='sel-border'>
		<div class='sel-file'>
			<form>
				<input type='text' class='span2' id='url_img'>
				<div id='div-file'><input type='file' id='file-img' onchange="url_img.value=this.value;alert(url_img.value);"></div>
				<button class='yulan'>预览</button>
				<button class='baocun' >保存</button>
			</form>
		</div>
		<div class='sel-warp'>
			<span class='warp-title'>从电脑中选择您喜欢的头像：</span>
			<span>请选择jpg、gif格式，小于2M的图片（使用高质量图片，可生成高清头像）</span>
		</div>
		<div class='clear'></div>
	</div>
</div>
<div class='clear'></div>
 		</div>
	 </div>
</div>
</div>
	<div style="clear:both;"></div>
	<div id="footer">
		<font class="font_footer">
			<center>
			<font>版权所有：范腾飞&emsp;CopyRight&nbsp;2012&nbsp;<a class="font_footer link" target="_blank" href="http://www.marchsoft.cn">三月软件工作室</a></font>
			</center>
		</font>
	</div>
	<script style="text/javascript">
		$(function(){
			var hei = $('#content').height();
			$(".menu").css('height',(hei-5)+"px");
			$("textarea[maxlength]").keyup(function(){ 
		        var area=$(this); 
		        var max=parseInt(area.attr("maxlength"),10);   //获取maxlength的值 
		        if(max>0){ 
		            if(area.val().length>max){                 //textarea的文本长度大于maxlength 
		                area.val(area.val().substr(0,max));    //截断textarea的文本重新赋值             
		            } 
		        } 
	     	}); 
		});
	</script>
</body>
</html>