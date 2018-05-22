<?php if ($this->_var['supplier_data_list']): ?>
<div class="data_list">
		<dl>
        	<dt class="clearfix">
        		<span class="dl_img"></span>
				<span class="dl_name dl_youhui_name">名称</span>
				<span class="dl_youhui_end_time">有效期</span>
				<span class="dl_salecount">报名量</span>
        	</dt>   
			<?php $_from = $this->_var['supplier_data_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'data');$this->_foreach['supplier_data_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['supplier_data_list']['total'] > 0):
    foreach ($_from AS $this->_var['data']):
        $this->_foreach['supplier_data_list']['iteration']++;
?>
			<dd class="clearfix">
				<span class="dl_img">
					<a href="<?php echo $this->_var['data']['url']; ?>" title="<?php echo $this->_var['data']['name']; ?>" target="_blank"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['data']['icon'],
  'w' => '100',
  'h' => '75',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" /></a>
				</span>
				<span class="dl_name dl_youhui_name"><a href="<?php echo $this->_var['data']['url']; ?>" title="<?php echo $this->_var['data']['name']; ?>" target="_blank"><h1><?php echo $this->_var['data']['name']; ?></h1></a></span>
				<span class="dl_youhui_end_time">
					<?php if ($this->_var['data']['event_end_time'] > 0): ?>			
						<em class="iconfont">&#xe607;</em>&nbsp;有效期至<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['data']['event_end_time'],
  'f' => 'Y.m.d',
);
echo $k['name']($k['v'],$k['f']);
?>	
					<?php endif; ?>
				</span>
				<span class="dl_salecount"><?php echo $this->_var['data']['submit_count']; ?></span>
			</dd>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </dl>		
</div>
<?php if ($this->_var['total'] > $this->_var['page_size']): ?>
<div class="blank"></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>
<?php endif; ?>
<div class="blank"></div>
<?php endif; ?>