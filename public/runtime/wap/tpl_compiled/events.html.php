<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/weebox.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/fanweUI.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/color.css";	

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery-1.6.2.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.touchwipe.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/nav_hide_list.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/nav_hide_list.js";

?>
<?php echo $this->fetch('inc/header.html'); ?>


<div class="wrap">
	<div class="hide_list">
		  <div class="abbr">
		  	   <div class="first_list">
		  	   	    <ul>
						<?php $_from = $this->_var['data']['bcate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
						<li class="directory"><a href="<?php echo $this->_var['cate']['url']; ?>"><?php echo $this->_var['cate']['name']; ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  	   	    </ul>
		  	   </div>
		  </div>
		  <div class="abbr">
		  	   <div class="first_list">
		  	   	    <ul>
		  	   	    	
						<?php $_from = $this->_var['data']['quan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'quan');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['quan']):
?>
						<li class="directory"><?php echo $this->_var['quan']['name']; ?></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  	   	    </ul>
		  	   </div>
			   <div class="second_list">
			   	<?php $_from = $this->_var['data']['quan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'quan');if (count($_from)):
    foreach ($_from AS $this->_var['quan']):
?>
			   	    <ul>
						<?php $_from = $this->_var['quan']['quan_sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qlist');if (count($_from)):
    foreach ($_from AS $this->_var['qlist']):
?>
						<li class="two_directory"><a href="<?php echo $this->_var['qlist']['url']; ?>"><?php echo $this->_var['qlist']['name']; ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						
		  	   	    </ul>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			   </div>
		  </div>
		  <div class="abbr">
		  	   <div class="first_list">
		  	   	    <ul>
						<?php $_from = $this->_var['data']['navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'navs');if (count($_from)):
    foreach ($_from AS $this->_var['navs']):
?>
							<li class="directory"><a href="<?php echo $this->_var['navs']['url']; ?>"><?php echo $this->_var['navs']['name']; ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
		  	   </div>
		  </div>
	</div>
		 <div class="main_list">
		 	   <ul class="mall-cate">
		 	   	   <li>
		 	   	   	    <?php if ($this->_var['request']['catename']): ?><?php echo $this->_var['request']['catename']; ?><?php else: ?>全部分类 <?php endif; ?><i class="iconfont fa-sort-desc"></i>
		 	   	   </li>
				   <li>
		 	   	   	<?php if ($this->_var['request']['quanname']): ?><?php echo $this->_var['request']['quanname']; ?><?php else: ?>全城 <?php endif; ?><i class="iconfont fa-sort-desc"></i>
		 	   	   </li>
				   <li>
		 	   	   	   <?php if ($this->_var['request']['ordername']): ?><?php echo $this->_var['request']['ordername']; ?><?php else: ?>默认 <?php endif; ?>
					  <i class="iconfont fa-sort-desc"></i>
		 	   	   </li>
		 	   </ul>
		 </div>
	<?php if ($this->_var['geo']): ?>
	<div class="geo_row"><i class="iconfont">&#xe611;</i><?php echo $this->_var['geo']['address']; ?></div>
	<?php endif; ?>
	<div class="content back-white">
		<div class="list-view bor_none">
			 <ul class="tuan_ul">
			 	<?php $_from = $this->_var['data']['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'eventitem');if (count($_from)):
    foreach ($_from AS $this->_var['eventitem']):
?>
			 	<li class="tuan_li">
			 	     <a href="<?php
echo parse_url_tag("u:index|event#index|"."data_id=".$this->_var['eventitem']['id']."".""); 
?>">
			 	     	<div class="list_item">
			 	     		 <div class="pic">
			 	     		 	<img src="<?php echo $this->_var['eventitem']['icon']; ?>" width="140" height="85"  />								
			 	     		 </div>
							 <div class="info">
							 	<h2><?php echo $this->_var['eventitem']['name']; ?></h2>
								<h3></h3>
								<div class="tuan_price">
			                         <p class="time_row">
			                         	 <?php echo $this->_var['eventitem']['sheng_time_format']; ?>
									 </p>			                         
									 <p class="bought"><i></i>报名量：<?php echo $this->_var['eventitem']['submit_count']; ?></p>
			                     </div>
								 <?php if ($this->_var['eventitem']['distance']): ?>
								 <div class="distance_row">		
								 	<div>         		                         
									 <i class="iconfont">&#xe611;</i><?php echo $this->_var['eventitem']['distance']; ?>
									 </div>	  
			                     </div>
								 <?php endif; ?>
							 </div>
			 	     	</div>
			 	     </a>
			 	</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				
			 </ul>
			 
		</div>
	</div>
<?php if ($this->_var['pages']): ?>
	<div class="fy">
		<?php echo $this->_var['pages']; ?>
	</div>
<?php endif; ?>
<?php echo $this->fetch('inc/footer.html'); ?>	