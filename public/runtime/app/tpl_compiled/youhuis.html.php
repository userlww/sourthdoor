<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/youhuis.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/filter_row.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/sort_row.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.animateToClass.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/filter_row.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/filter_row.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/sort_row.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/sort_row.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/youhuis.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/youhuis.js";

?>
<?php echo $this->fetch('inc/header.html'); ?>
<div class="blank15"></div>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
<!--筛选行-->	
	<?php echo $this->fetch('inc/filter_row.html'); ?>
<!--end筛选行-->	
<div class="blank"></div>
<!--排序行-->	
	<?php echo $this->fetch('inc/sort_row.html'); ?>
<!--end排序行-->	
</div>
<div class="blank20"></div>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?> clearfix">	
		<div class="f_l width_700">			
		<?php if ($this->_var['youhui_list']): ?>
		<div class="yh_l"><!--优惠券列表右边-->
			<ul>
				<?php $_from = $this->_var['youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui');if (count($_from)):
    foreach ($_from AS $this->_var['youhui']):
?>
				<li>
					<div class="back clearfix">
						<div class="youhui_qrbox">
						<!--qr码扫描区-->
						<div rel="qrcode" class="scan_youhui_list">
						<a class="scan_outter" href="<?php echo $this->_var['youhui']['url']; ?>" title="<?php echo $this->_var['youhui']['name']; ?>">
							<table><tr><td><img src="<?php 
$k = array (
  'name' => 'gen_scan_qrcode',
  'v' => $this->_var['youhui']['url'],
  's' => '3',
);
echo $k['name']($k['v'],$k['s']);
?>" /> </td></tr></table>
							<div></div>
						</a>
						</div>
						<!--end qr码扫描区-->
						</div>
						    <div class="show f_l clearfix"><!--展示部分-->
						    	     <div class="show_img">
						    	     	<a href="<?php echo $this->_var['youhui']['url']; ?>" title="<?php echo $this->_var['youhui']['name']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui']['icon'],
  'w' => '180',
  'h' => '135',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" /></a>
						    	     </div>
									 <div class="show_text f_l">
									 	<h3><a href="<?php echo $this->_var['youhui']['url']; ?>" title="<?php echo $this->_var['youhui']['name']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui']['name'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></h3>
										<p><?php if ($this->_var['youhui']['list_brief']): ?><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui']['list_brief'],
  'b' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?><?php else: ?><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['youhui']['name'],
  'b' => '0',
  'e' => '25',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?><?php endif; ?></p>
										<dl>
											<dd>
												<em class="iconfont">&#xe609;</em>已有<font><?php echo $this->_var['youhui']['user_count']; ?></font>人下载
											</dd>
											<?php if ($this->_var['youhui']['less'] > - 1): ?>
											<dd class="remain">
												<em class="iconfont">&#xe608;</em>还有<font><?php echo $this->_var['youhui']['less']; ?></font>张剩余
											</dd>
											<?php endif; ?>
											<?php if ($this->_var['youhui']['end_time'] > 0): ?>
											<dd class="validity">
												<em class="iconfont">&#xe607;</em>有效期至<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui']['end_time'],
  'f' => 'Y.m.d',
);
echo $k['name']($k['v'],$k['f']);
?>
											</dd>
											<?php endif; ?>
										</dl>
										
									 </div>
						    </div>
							<div class="ticket f_r">
									<a class="go_see" href="<?php echo $this->_var['youhui']['url']; ?>">
										<button class="ui-button f_l" rel="orange">马上领取</button>
									</a>
									<div class="tags">	
											<?php $_from = $this->_var['youhui']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
											<h2 class="tag<?php echo $this->_var['tag']; ?>"></h2>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</div>
									<div class="scissor"></div>
								
							</div>
					</div>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				
			</ul>
			<div class="blank"></div>
			<div class="pages"><?php echo $this->_var['pages']; ?></div>
			<div class="blank"></div>
			
		</div>
		<?php else: ?>
		<div class="layout_box">
			<div class="content">
			<div class="empty_tip">
				没有相关数据
			</div>
			</div>
		</div>
		<div class="blank"></div>
		<?php endif; ?>
	</div>
	
	
	<div class="f_r width_260">
		<?php if ($this->_var['side_youhui_list']): ?>
		<div class="layout_box">
		<div class="get_list content">
			<div class="l_h clearfix">
				<h3>热门优惠券</h3>				
			</div>
			 <ul>
			 	<?php $_from = $this->_var['side_youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui');$this->_foreach['side_youhui_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['side_youhui_list']['total'] > 0):
    foreach ($_from AS $this->_var['youhui']):
        $this->_foreach['side_youhui_list']['iteration']++;
?>
			  	<li>
			  		<div class="h clearfix">
			  			<span><?php echo $this->_foreach['side_youhui_list']['iteration']; ?></span>
			  			<h4><a href="<?php echo $this->_var['youhui']['url']; ?>"><?php echo $this->_var['youhui']['name']; ?></a></h4>
						<i></i>
			  		</div>
					<div class="info clearfix">
						<div class="show_img"><a href="<?php echo $this->_var['youhui']['url']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui']['icon'],
  'w' => '80',
  'h' => '80',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="优惠券"></a></div>
					    <div class="show_text f_l">
					    	  <p>下载量：<?php echo $this->_var['youhui']['user_count']; ?></p>
							  <?php if ($this->_var['youhui']['end_time'] > 0): ?>
							  <p>有效期：<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui']['end_time'],
  'f' => 'Y.m.d',
);
echo $k['name']($k['v'],$k['f']);
?></p>
							  <?php endif; ?>
							  <a href="<?php echo $this->_var['youhui']['url']; ?>">去领</a>
					    </div>
					</div>
			  	</li>	
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
			  </ul>
		</div>
		</div>
		<div class="blank"></div>
		<?php endif; ?>
		
		
		<?php if ($this->_var['history_deal_list']): ?>
		<div class="layout_box">
		<div class="get_list content">
			<div class="l_h clearfix">
				<h3>浏览历史</h3>	
				<a href="javascript:void(0)" class="clear_history" type="youhui">清空</a>			
			</div>
			 <ul>
			 	<?php $_from = $this->_var['history_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui');$this->_foreach['history_deal_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['history_deal_list']['total'] > 0):
    foreach ($_from AS $this->_var['youhui']):
        $this->_foreach['history_deal_list']['iteration']++;
?>
			  	<li>
			  		<div class="h clearfix">
			  			<span><?php echo $this->_foreach['side_youhui_list']['iteration']; ?></span>
			  			<h4><a href="<?php echo $this->_var['youhui']['url']; ?>"><?php echo $this->_var['youhui']['name']; ?></a></h4>
						<i></i>
			  		</div>
					<div class="info clearfix">
						<div class="show_img"><a href="<?php echo $this->_var['youhui']['url']; ?>"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui']['icon'],
  'w' => '80',
  'h' => '80',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="优惠券"></a></div>
					    <div class="show_text f_l">
					    	  <p>下载量：<?php echo $this->_var['youhui']['user_count']; ?></p>
							  <?php if ($this->_var['youhui']['end_time'] > 0): ?>
							  <p>有效期：<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['youhui']['end_time'],
  'f' => 'Y.m.d',
);
echo $k['name']($k['v'],$k['f']);
?></p>
							  <?php endif; ?>
							  <a href="<?php echo $this->_var['youhui']['url']; ?>">去领</a>
					    </div>
					</div>
			  	</li>	
				
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
			  </ul>
		</div>
		</div>
		<div class="blank"></div>
		<?php endif; ?>
	</div>
	
</div><!--end wrap-->

<?php echo $this->fetch('inc/footer.html'); ?>