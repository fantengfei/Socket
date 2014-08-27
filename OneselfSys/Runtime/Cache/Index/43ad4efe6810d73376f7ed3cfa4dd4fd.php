<?php if (!defined('THINK_PATH')) exit();?>
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
<title>写博客-我们一起来说吧</title>
<link href="__PUBLIC__/css/admin.css" rel="stylesheet">
<div id="content" style='margin-top:70px;'>
<div id="w_blog">
	<p class="w_title"><b>写博客</b></p>
	<div>
		<form class="form_blog" action="__URL__/add_blog_data" method="post" onsubmit = "return juge();">
			标题：
			<input class="w_ti write_title" type="text" name="title" placeholder="请输入您的博客标题..." ><br>
			分类：
			<input class="w_ti write_key" type="text" name="key" placeholder="请输入博客内容关键字（关键字与关键字之间用‘  .  ’分开）。" ><br>
			内容：
			<link rel="stylesheet" href="__PUBLIC__/kindeditor-4.1.2/themes/default/default.css" />
<link rel="stylesheet" href="__PUBLIC__/kindeditor-4.1.2/plugins/code/prettify.css" />
<script charset="utf-8" src="__PUBLIC__/kindeditor-4.1.2/kindeditor.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor-4.1.2/lang/zh_CN.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor-4.1.2/plugins/code/prettify.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor1 = K.create('textarea[name="content1"]', {
			cssPath : '__PUBLIC__/kindeditor-4.1.2/plugins/code/prettify.css',
			uploadJson : '__PUBLIC__/kindeditor-4.1.2/php/upload_json.php',
			fileManagerJson : '__PUBLIC__/kindeditor-4.1.2/php/file_manager_json.php',
			allowFileManager : true,
			afterCreate : function() {
				var self = this;
				K.ctrl(document, 13, function() {
					self.sync();
					K('form[name=example]')[0].submit();
				});
				K.ctrl(self.edit.doc, 13, function() {
					self.sync();
					K('form[name=example]')[0].submit();
				});
			}
		});
		prettyPrint();
	});
</script>
<textarea name="content1" style="width:100%;min-height:500px;visibility:hidden;"></textarea>



			<input type="submit" class="btn btn-primary" value="保存">
			<input type="button" class="btn" value="退出" onclick="window.close();">
		</form>
	</div>
</div>
<script style="text/javascript">
	function juge(){
		if($('.write_title').val()==''){
			$('.write_title').focus();
			return false;
		}
	}
</script>
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