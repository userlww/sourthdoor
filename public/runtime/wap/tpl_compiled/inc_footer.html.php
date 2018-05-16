<?php if ($this->_var['is_show_down']): ?>
<div class="Client">
	<div class="Client_bg"></div>
	<div class="Client_de">
		<a href="javascript:void(0);" class="close_but">
			<i class="iconfont">&#xe608;</i>
		</a><!--关闭扭-->
		<div class="f_l transcript">
			<div class="index_footer_logo"></div>
			积分能当钱花<br/>
			仅限手机客户端使用
		</div>
		<a href="<?php echo $this->_var['data']['mobile_btns_download']; ?>" class="f_r go_download">
			立即下载
		</a>
	</div>
</div>
<?php endif; ?>
			<div class="gotop" data-com="gotop">
				<a href="#">
					<i class="iconfont">&#xe609;</i>
				</a>
			</div>
			<div class="footer">
				<div class="footer-t">
					<div class="f_user f_l">
						<?php if ($this->_var['is_login'] == 0): ?>
						<div class="f_login"><a href="<?php
echo parse_url_tag("u:index|user#login|"."".""); 
?>">登录</a></div>
						<div class="f_register"><a href="<?php
echo parse_url_tag("u:index|user#register|"."".""); 
?>">注册</a></div>
						<?php else: ?>
						<span class="my_account"><a href="<?php
echo parse_url_tag("u:index|user_center#index|"."".""); 
?>"><?php echo $this->_var['user_info']['user_name']; ?></a></span>&nbsp;&nbsp;<i style="color: #6E7D8B;">|</i>&nbsp;&nbsp;
						<span class="f_login_out">
							<a href="<?php
echo parse_url_tag("u:index|user#loginout|"."".""); 
?>">退出</a>
						</span>
						<?php endif; ?>
					</div>
					<div class="change_city f_r">
						<span><?php echo $this->_var['data']['city_name']; ?></span>
						<a href="<?php
echo parse_url_tag("u:index|city|"."".""); 
?>"><i class="iconfont">&#xe60a;</i>切换城市</a>
					</div>
				</div>
				<div class="footer-sort">
					<ul>
						<li><a href="<?php
echo parse_url_tag("u:index|index#index|"."".""); 
?>">首页</a></li>
						<!-- <li><a href="<?php
echo parse_url_tag("u:index|stores|"."".""); 
?>">商家</a></li> -->
						<li><a href="<?php echo $this->_var['pc_url']; ?>">电脑版</a></li>
						<li><a href="<?php
echo parse_url_tag("u:biz|index|"."".""); 
?>">商家登陆</a></li>
					</ul>
				</div>
				<?php if ($this->_var['links']): ?>
				<div class="footer_p">
					友情链接：

					<?php $_from = $this->_var['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
					<a target="_blank" href="http://<?php echo $this->_var['link']['url']; ?>"><?php echo $this->_var['link']['name']; ?></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		

				</div>
				<?php endif; ?>
				<div class="footer_num">
					<div class="footer_bor">
						<div class="footer_text"><?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_TITLE',
);
echo $k['name']($k['value']);
?></div>
					</div>
				</div>
			</div>
		
	</body>
<html>