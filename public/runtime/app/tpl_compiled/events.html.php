<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/filter_row.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/sort_row.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/events.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/side_deal_list.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/events.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/events.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/side_deal_list.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/side_deal_list.js";


?>
<?php echo $this->fetch('inc/header.html'); ?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'BAIDU_MAP_APPKEY',
);
echo $k['name']($k['v']);
?>"></script> 
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
<div class="blank"></div>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?> clearfix">	
	<div class="wrap_m2 f_l event_list">

		<?php if ($this->_var['event_list']): ?>
		<!--商家列表单行-->
		
		<?php $_from = $this->_var['event_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'event_item');if (count($_from)):
    foreach ($_from AS $this->_var['event_item']):
?>
		<div class="event_row clearfix">
			<!--qr码扫描区-->
			<div rel="qrcode" class="scan_event_list">
			<a class="scan_outter" href="<?php echo $this->_var['event_item']['url']; ?>" title="<?php echo $this->_var['event_item']['name']; ?>">
				<table><tr><td><img src="<?php 
$k = array (
  'name' => 'gen_scan_qrcode',
  'v' => $this->_var['event_item']['url'],
  's' => '3',
);
echo $k['name']($k['v'],$k['s']);
?>" /> </td></tr></table>
				<div></div>
			</a>
			</div>
			<!--end qr码扫描区-->
			<div class="event_image f_l">
				<a href="<?php echo $this->_var['event_item']['url']; ?>" title="<?php echo $this->_var['event_item']['name']; ?>">
				<img lazy="true" src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['event_item']['icon'],
  'w' => '200',
  'h' => '150',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
				</a>
			</div>
			<div class="event_info f_l">
				<a href="<?php echo $this->_var['event_item']['url']; ?>" class="event_name" title="<?php echo $this->_var['event_item']['name']; ?>">
					<?php echo $this->_var['event_item']['name']; ?>
				</a>
				<?php if ($this->_var['event_item']['event_begin_time'] || $this->_var['event_item']['event_end_time']): ?>
				<div><span><i class="iconfont">&#xe621;</i>&nbsp;活动时间</span> <?php if ($this->_var['event_item']['event_begin_time']): ?><?php echo $this->_var['event_item']['event_begin_time_format']; ?> 至 <?php endif; ?><?php if ($this->_var['event_item']['event_end_time']): ?><?php echo $this->_var['event_item']['event_end_time_format']; ?><?php else: ?>无限期<?php endif; ?></div>
				<?php endif; ?>
				<?php if ($this->_var['event_item']['submit_begin_time'] || $this->_var['event_item']['submit_end_time']): ?>
				<div><span><i class="iconfont">&#xe607;</i>&nbsp;报名时间</span> <?php if ($this->_var['event_item']['submit_begin_time']): ?><?php echo $this->_var['event_item']['submit_begin_time_format']; ?> 至 <?php endif; ?><?php if ($this->_var['event_item']['submit_end_time']): ?><?php echo $this->_var['event_item']['submit_end_time_format']; ?><?php else: ?>无限期<?php endif; ?></div>
				<?php endif; ?>
				<div><i class="iconfont">&#xe60a;</i>&nbsp;<?php if ($this->_var['event_item']['total_count']): ?><span>活动名额</span> <?php echo $this->_var['event_item']['total_count']; ?>&nbsp;人，&nbsp;&nbsp;<?php endif; ?><span>已有</span> <?php echo $this->_var['event_item']['submit_count']; ?>&nbsp;人&nbsp;<span>报名</span></div>
				<div><span><i class="iconfont">&#xe615;</i>&nbsp;活动地点</span> <?php echo $this->_var['event_item']['address']; ?></div>
			</div>

		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		<!--商家列表单行-->
		<div class="blank"></div>
		<div class="pages"><?php echo $this->_var['pages']; ?></div>
		<?php else: ?>
		
		<div class="layout_box">
			<div class="content">					
				<div class="empty_tip">没有相关数据</div>
			</div>
		</div>
		
		<?php endif; ?>
		
	</div>	
	<div class="wrap_s2 f_r">
		<?php if ($this->_var['side_event_list']): ?>
		<div class="side_deal_box">
		<div class="title_row">报名排行</div>
		<div class="content_row">
			<ul class="side_deal_list">
				<?php $_from = $this->_var['side_event_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'side_event');if (count($_from)):
    foreach ($_from AS $this->_var['side_event']):
?>
				<li>
					<a href="<?php echo $this->_var['side_event']['url']; ?>" class="deal_img"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['side_event']['icon'],
  'w' => '198',
  'h' => '134',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" /></a>
					<a href="<?php echo $this->_var['side_event']['url']; ?>"  class="deal_title"><?php echo $this->_var['side_event']['name']; ?></a>
					<div class="deal_info">
						<span class="deal_price f_l">
							
						</span>
						<span class="sale_count f_r">
							<i class="iconfont">&#xe617;</i>&nbsp;报名量:<?php echo $this->_var['side_event']['submit_count']; ?>
						</span>
					</div>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				
			</ul>
		</div>
		</div>
		<div class="blank"></div>
		<?php endif; ?>
		
		<?php if ($this->_var['history_deal_list']): ?>
		<div class="side_deal_box">
		<div class="title_row">
			<span>浏览历史</span>
			<a href="javascript:void(0);" class="clear_history" type="event">清空</a>
		</div>
		<div class="content_row">
			<ul class="side_deal_list">
				<?php $_from = $this->_var['history_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'side_event');if (count($_from)):
    foreach ($_from AS $this->_var['side_event']):
?>
				<li>
					<a href="<?php echo $this->_var['side_event']['url']; ?>" class="deal_img"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['side_event']['icon'],
  'w' => '198',
  'h' => '134',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" /></a>
					<a href="<?php echo $this->_var['side_event']['url']; ?>"  class="deal_title"><?php echo $this->_var['side_event']['name']; ?></a>
					<div class="deal_info">
						<span class="deal_price f_l">
							
						</span>
						<span class="sale_count f_r">
							<i class="iconfont">&#xe617;</i>&nbsp;报名量:<?php echo $this->_var['side_event']['submit_count']; ?>
						</span>
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
<div class="blank20"></div>
<?php echo $this->fetch('inc/footer.html'); ?>