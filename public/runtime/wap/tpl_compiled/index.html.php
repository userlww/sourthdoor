<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/weebox.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/fanweUI.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/color.css";	
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/index.css";	



$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery-1.6.2.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.touchwipe.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/onload.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/swipe.js";


$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/index.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/index.js";
?>
<?php echo $this->fetch('inc/header_index.html'); ?>
<script type="text/javascript">
	var has_location = <?php echo $this->_var['has_location']; ?>;
	var geo_url = '<?php
echo parse_url_tag("u:index|userxypoint|"."".""); 
?>';
</script>

<div class="wrap">			
				
		<?php if ($this->_var['data']['advs']): ?>
        <div class="top">
            <div class="flash" id=containerFlashAnimation>
                <section>
                    <div id="banner_box" class="box_swipe" style="visibility: visible;">
                        <ul style="list-style: none; transition: 500ms; -webkit-transition: 500ms;">
                            <?php $_from = $this->_var['data']['advs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'adv');if (count($_from)):
    foreach ($_from AS $this->_var['adv']):
?>
                            <li style="vertical-align: top; width: 640px; display: table-cell;">
                                <a href="<?php echo $this->_var['adv']['url']; ?>"><img src="<?php echo $this->_var['adv']['img']; ?>" alt="" border="0" style="width:100%;"></a>
                            </li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <ol>
                            <?php $_from = $this->_var['data']['advs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'adv');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['adv']):
?>
                            <li <?php if ($this->_var['key'] == 0): ?>class="on"<?php endif; ?>>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ol>
                    </div>
                </section>
            </div>
        </div>
		<?php endif; ?>
		
		
		<?php if ($this->_var['data']['indexs']): ?>
		<div class="sort_nav">
			  <div class="sort_list">
			  	    <ul>
						<?php $_from = $this->_var['data']['indexs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'indexs');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['indexs']):
?>
						<li class="sort_li" >
								<a href="<?php echo $this->_var['indexs']['url']; ?>">
			  	    			<span class="yuan" style="background-color:<?php echo $this->_var['indexs']['color']; ?>" ><i class="diyfont"><?php echo $this->_var['indexs']['icon_name']; ?></i></span>
								<span class="txt"><?php echo $this->_var['indexs']['name']; ?></span>
								</a>							
			  	    	</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						

						<li class="sort_li" >
							<a href="<?php
echo parse_url_tag("u:index|index_more|"."".""); 
?>">
								<span class="yuan" style="background-color:#45d3bf;" ><i class="iconfont">&#xe607;</i></span>
								<span class="txt">更多</span>
							</a>
						</li>
			  	    </ul>
			  </div>
		</div>
		<?php endif; ?>
			
		<?php if ($this->_var['data']['zt_html']): ?>
		<div class="blank8"></div>
		<?php echo $this->_var['data']['zt_html']; ?>
		<?php endif; ?>	
				
				<?php if ($this->_var['data']['supplier_list']): ?>
				<div class="content">
					<div class="blank8"></div>
					<div class="list-view">
						 <div class="list_title"><i class="iconfont">&#xe602;</i>推荐商家 <a href="<?php
echo parse_url_tag("u:index|stores|"."".""); 
?>" class="show_more">更多<i class="iconfont">&#xe607;</i></a></div>
						 <ul class="sp_ul">
						 	<?php $_from = $this->_var['data']['supplier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'supplier_item');$this->_foreach['supplier_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['supplier_item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['supplier_item']):
        $this->_foreach['supplier_item']['iteration']++;
?>
							<?php if ($this->_foreach['supplier_item']['iteration'] < 4): ?>
						 	<li class="sp_li">
						 	    <a href="<?php
echo parse_url_tag("u:index|store|"."data_id=".$this->_var['supplier_item']['id']."".""); 
?>">
						 	    	<img src="<?php echo $this->_var['supplier_item']['preview']; ?>" style="width:100%" lazy="true" />
									<div class="h"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['supplier_item']['name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
						 	    </a>
						 	</li>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						 </ul>
					</div>
					<?php endif; ?>
					
			
					
					<div class="blank8"></div>
					<?php if ($this->_var['data']['event_list']): ?>
					<div class="list-view">
						 <div class="list_title"><i class="iconfont">&#xe606;</i>推荐活动<a href="<?php
echo parse_url_tag("u:index|events|"."".""); 
?>"  class="show_more">更多<i class="iconfont">&#xe607;</i></a></div>
						 <div class="blank"></div>
						 <ul class="activity_ul">
						 	<?php $_from = $this->_var['data']['event_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'event_item');$this->_foreach['event_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['event_item']['total'] > 0):
    foreach ($_from AS $this->_var['event_item']):
        $this->_foreach['event_item']['iteration']++;
?>
						 	<li class="activity_li">
						 	    <a href="<?php
echo parse_url_tag("u:index|event|"."data_id=".$this->_var['event_item']['id']."".""); 
?>" class="li_box">
						 	    	<img src="<?php echo $this->_var['event_item']['icon']; ?>" width="100%" lazy="true" />
									<div class="lucency">剩余时间：<?php echo $this->_var['event_item']['sheng_time_format']; ?></div>
						 	    </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						 </ul>
					</div>
					<?php endif; ?>
					
					
					<div class="blank8"></div>
					<?php if ($this->_var['data']['deal_list']): ?>
					<div class="list-view">
						 <div class="list_title"><i class="iconfont">&#xe605;</i>推荐团购</div>
						 <ul class="tuan_ul">
						 	 <?php $_from = $this->_var['data']['deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'deal_item');$this->_foreach['deal_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['deal_item']):
        $this->_foreach['deal_item']['iteration']++;
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_url_tag("u:index|deal|"."data_id=".$this->_var['deal_item']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['deal_item']['icon']; ?>" width="140" height="85" lazy="true" />
											<?php if ($this->_var['deal_item']['buyin_app'] == 1): ?>
											<i class="tuan_ico order">手机单</i>
											<?php else: ?>
											<?php if ($this->_var['deal_item']['is_lottery'] == 1): ?><i class="tuan_ico order">抽奖</i><?php else: ?>
											<?php if ($this->_var['deal_item']['auto_order'] == 1): ?><i class="tuan_ico order">免预约</i><?php endif; ?>
											<?php endif; ?>
											<?php endif; ?>											
						 	     		 </div>
										 <div class="info">
										 	<h2><?php if ($this->_var['deal_item']['sub_name']): ?><?php echo $this->_var['deal_item']['sub_name']; ?><?php else: ?><?php echo $this->_var['deal_item']['name']; ?><?php endif; ?></h2>
											<h3><?php echo $this->_var['deal_item']['brief']; ?></h3>
											<div class="tuan_price">
						                         <p class="price">
						                         	 <em><?php echo $this->_var['deal_item']['current_price']; ?><i>元</i></em>
													 <del><?php echo $this->_var['deal_item']['origin_price']; ?>元</del>
												 </p>
						                         <p class="bought"><i></i>已售<?php echo $this->_var['deal_item']['buy_count']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
						 </ul>
						 <div class="see_more">
						 	<a href="<?php
echo parse_url_tag("u:index|tuan|"."".""); 
?>">查看全部团购</a>
						 </div>
					</div>
					<?php endif; ?>
					<div class="blank8"></div>
					<?php if ($this->_var['data']['supplier_deal_list']): ?>
					<div class="list-view">
						 <div class="list_title"><i class="iconfont">&#xe604;</i>推荐商品</div>
						 <ul class="tuan_ul">
						 	 <?php $_from = $this->_var['data']['supplier_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'supplier_deal_item');$this->_foreach['supplier_deal_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['supplier_deal_item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['supplier_deal_item']):
        $this->_foreach['supplier_deal_item']['iteration']++;
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_url_tag("u:index|deal|"."data_id=".$this->_var['supplier_deal_item']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['supplier_deal_item']['icon']; ?>" width="140" height="85" lazy="true" />
											<?php if ($this->_var['supplier_deal_item']['buyin_app'] == 1): ?>
											<i class="tuan_ico order">手机单</i>
											<?php else: ?>
											<?php if ($this->_var['supplier_deal_item']['is_lottery'] == 1): ?><i class="tuan_ico order">抽奖</i><?php else: ?>
											<?php if ($this->_var['supplier_deal_item']['is_refund'] == 1): ?><i class="tuan_ico order">随时退</i><?php endif; ?>
											<?php endif; ?>
											<?php endif; ?>
						 	     		 </div>
										 <div class="info">
										 	<h2><?php if ($this->_var['supplier_deal_item']['sub_name']): ?><?php echo $this->_var['supplier_deal_item']['sub_name']; ?><?php else: ?><?php echo $this->_var['supplier_deal_item']['name']; ?><?php endif; ?></h2>
											<h3><?php echo $this->_var['supplier_deal_item']['brief']; ?></h3>
											<div class="tuan_price">
						                         <p class="price">
						                         	 <em><?php echo $this->_var['supplier_deal_item']['current_price']; ?><i>元</i></em>
													 <del><?php echo $this->_var['supplier_deal_item']['origin_price']; ?>元</del>
												 </p>
						                         <p class="bought"><i></i>已售<?php echo $this->_var['supplier_deal_item']['buy_count']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
						 </ul>
						 <div class="see_more">
						 	<a href="<?php
echo parse_url_tag("u:index|goods|"."".""); 
?>">查看全部商品</a>
						 </div>
					</div>
					<?php endif; ?>
      				<div class="blank8"></div>
	                   
					<?php if ($this->_var['data']['youhui_list']): ?>   
					<div class="list-view">
						 <div class="list_title"><i class="iconfont">&#xe603;</i>推荐优惠券</div>
						 <ul class="youhui_ul">
						 	<?php $_from = $this->_var['data']['youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui_item');$this->_foreach['youhui_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['youhui_item']['total'] > 0):
    foreach ($_from AS $this->_var['youhui_item']):
        $this->_foreach['youhui_item']['iteration']++;
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_url_tag("u:index|youhui|"."data_id=".$this->_var['youhui_item']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['youhui_item']['icon']; ?>" width="140" height="85" lazy="true">
										</div>
										 <div class="info">
										 	<h2><?php echo $this->_var['youhui_item']['name']; ?></h2>
											<h3><?php echo $this->_var['youhui_item']['list_brief']; ?></h3>
											<div class="tuan_price">
												 <p>时间：<?php echo $this->_var['youhui_item']['begin_time']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
						 <div class="see_more">
						 	<a href="<?php
echo parse_url_tag("u:index|youhuis|"."".""); 
?>">查看全部优惠券</a>
						 </div>
					</div>
					<?php endif; ?>
  					<div class="blank8"></div>   					
				 
				</div>
</div>	
<?php echo $this->fetch('inc/footer.html'); ?>	