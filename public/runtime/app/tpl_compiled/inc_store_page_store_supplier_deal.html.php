<?php if ($this->_var['supplier_data_list']): ?>
<div class="data_list">
		<dl>
        	<dt class="clearfix">
        		<span class="dl_img"></span>
				<span class="dl_name">名称</span>
				<span class="dl_price">价格</span>
				<span class="dl_salecount">销量</span>
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
				<span class="dl_name"><a href="<?php echo $this->_var['data']['url']; ?>" title="<?php echo $this->_var['data']['name']; ?>" target="_blank"><h1><?php echo $this->_var['data']['sub_name']; ?></h1><h2><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['data']['name'],
  'b' => '0',
  'e' => '50',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></h2></a></span>
				<span class="dl_price">
					<i class="origin"><font>&yen;</font><?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['data']['origin_price'],
  'l' => '2',
);
echo $k['name']($k['v'],$k['l']);
?></i>
					<i class="current"><font>&yen;</font><?php 
$k = array (
  'name' => 'round',
  'v' => $this->_var['data']['current_price'],
  'l' => '2',
);
echo $k['name']($k['v'],$k['l']);
?></i>
				</span>
				<span class="dl_salecount"><?php echo $this->_var['data']['buy_count']; ?></span>
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