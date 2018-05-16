<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
<!-- Mobile Devices Support @begin -->
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="false" name="twcClient" id="twcClient">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<!--允许全屏模式-->
<meta content="yes" name="apple-mobile-web-app-capable" />
<!--指定sari的样式-->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta content="telephone=no" name="format-detection" />
<!-- Mobile Devices Support @end -->
<title><?php echo $this->_var['data']['page_title']; ?></title>	
<script type="text/javascript">
	var APP_ROOT = '<?php echo $this->_var['APP_ROOT']; ?>';
	var LOADER_IMG = '<?php echo $this->_var['TMPL']; ?>/images/loader_img.gif';
	var AJAX_URL = '<?php
echo parse_url_tag("u:index|ajax|"."".""); 
?>';
</script>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['pagecss'],
);
echo $k['name']($k['v']);
?>" />
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['pagejs'],
  'c' => $this->_var['cpagejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
</head> 
<body>
<div class="header">
	<div class="c-hd">
        <section class="cut_city">
              <a onclick="window.history.go(-1);"><i class="iconfont">&#xe60b;</i></a>
	    </section>
        <section class="logo_img"><?php echo $this->_var['data']['page_title']; ?></section>
        <section class="h_search"><!--这里是头部的隐藏列表，点击可操作-->
			 <a href="javascript:void(0);"><i class="iconfont">&#xe60c;</i></a>
	    </section>
     </div>
	 <div class="pull_down">
	       <ul>
	       	    <li>
	       	    	<a href="<?php
echo parse_url_tag("u:index|index|"."".""); 
?>">
	       	    		<div class="menu">
	       	    			<i class="iconfont">&#xe60d;</i>
							<span>首页</span>
	       	    		</div>
	       	    	</a>
	       	    </li>
				 <li>
	       	    	<a href="<?php
echo parse_url_tag("u:index|user_center|"."".""); 
?>">
	       	    		<div class="menu">
	       	    			<i class="iconfont">&#xe60e;</i>
							<span>我的</span>
	       	    		</div>
	       	    	</a>
	       	    </li>
				<li>
	       	    	<a href="<?php
echo parse_url_tag("u:index|search|"."".""); 
?>">
	       	    		<div class="menu">
	       	    			<i class="iconfont">&#xe600;</i>
							<span>搜索</span>
	       	    		</div>
	       	    	</a>
	       	    </li>
	       </ul>
	 </div>
</div>	
