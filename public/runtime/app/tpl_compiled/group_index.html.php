<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/group.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/group.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/group.js";
?>
<?php echo $this->fetch('inc/header.html'); ?> 

<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
	<div class="blank"></div>
	<div class="rec_forum_topic">
		<div class="rec_image_topic" id="rec_topic">
			<div class="img_topic_tab">
			<?php $_from = $this->_var['rec_topic_list']['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
			<div class="rec_image_topic_item" style="display:none;" rel="<?php echo intval($this->_var['key'])+1; ?>" >
				<div>
					<a href="<?php
echo parse_url_tag("u:index|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank">
					<?php if ($this->_var['topic']['daren_page']): ?>
					<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['daren_page'],
  'w' => '340',
  'h' => '185',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
					<?php else: ?>
					<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['images']['0']['o_path'],
  'w' => '340',
  'h' => '185',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
					<?php endif; ?>
					</a>
				</div>
				<div class="topic_title"><a href="<?php
echo parse_url_tag("u:index|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '20',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
				<div class="topic_group_title"><a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank"><?php echo $this->_var['topic']['group_info']['name']; ?></a></div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<div class="blank1"></div>
			<div class="tr rec_img_count">
			<?php $_from = $this->_var['rec_topic_list']['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
			<span class="img_ico" rel="<?php echo intval($this->_var['key'])+1; ?>"><?php echo intval($this->_var['key'])+1; ?></span>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<div class="blank1"></div>
		</div>
		
		<div class="rec_list_topic">
			<?php $_from = $this->_var['rec_topic_list']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
				<div class="rec_list_topic_item  <?php if ($this->_var['key'] > 5): ?>rec_item_bottom<?php endif; ?>" <?php if ($this->_var['key'] % 2 == 1): ?>style="margin-left:10px;"<?php endif; ?>>
					<?php if ($this->_var['key'] < 2): ?>
					<div class="f_l">
							<a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank">
							<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['group_info']['icon'],
  'w' => '80',
  'h' => '80',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" />
							</a>
						</div>
						<div class="f_l" style="padding-left:10px;">
							<div class="list_topic_title"><a href="<?php
echo parse_url_tag("u:index|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '10',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
							<div class="list_topic_group_title"><a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['group_info']['name'],
  'b' => '0',
  'e' => '15',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
							<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['v']);
?>
						</div>
						
					
					<?php else: ?>
						<div class="f_l topic_user_icon">
							<?php 
$k = array (
  'name' => 'show_avatar',
  'v' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['v']);
?>
						</div>
						<div class="f_l topic_info_row">
							<div class="rec_row_topic_title"><a href="<?php
echo parse_url_tag("u:index|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>" target="_blank"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '16',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a></div>
							<div class="rec_row_topic_group_title"><a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['topic']['group_info']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['group_info']['name']; ?>" target="_blank"><?php echo $this->_var['topic']['group_info']['name']; ?></a></div>
						</div>
					<?php endif; ?>
					<div class="blank5"></div>
				</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	</div>
	<div class="blank"></div>
	
	<div class="long f_l">
			<div class="goods_detail_box">
			<ul class="detail_nav">
				<li>活跃小组</li>		
			</ul>
			</div>
			<div class="blank"></div>
			<div class="hot_group">
				<?php $_from = $this->_var['hot_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
				<div class="group_item">
					<div class="group_icon f_l">
					<a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>">
					<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group']['icon'],
  'w' => '90',
  'h' => '90',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['group']['name']; ?>" />
					</a>
					</div>
					<div class="group_info f_l">
						<div class="group_title"><a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>"><?php echo $this->_var['group']['name']; ?></a></div>
						<div class="group_count">
							<span><?php echo $this->_var['group']['user_count']; ?></span> 成员&nbsp;&nbsp;
							<span><?php echo $this->_var['group']['topic_count']; ?></span> 分享 				
						</div>
						<div class="group_memo">
							<?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group']['memo'],
  'b' => '0',
  'e' => '35',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?>
						</div>
					</div>					
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<div class="blank"></div>
			<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<?php if ($this->_var['item']['list']): ?>
				<div class="goods_detail_box" style="padding:0px; margin:0px;">
					<ul class="detail_nav">
						<li><a href="<?php
echo parse_url_tag("u:index|group|"."id=".$this->_var['item']['id']."".""); 
?>"><?php echo $this->_var['item']['name']; ?></a></li>
					</ul>
				</div>
				<div class="blank"></div>
				<div class="hot_group">
				<?php $_from = $this->_var['item']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>				
				<div class="group_item">
					<div class="group_icon f_l">
					<a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['list']['id']."".""); 
?>" title="<?php echo $this->_var['list']['name']; ?>">

					<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['list']['icon'],
  'w' => '90',
  'h' => '90',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" alt="<?php echo $this->_var['list']['name']; ?>" />
					</a>
					</div>
					<div class="group_info f_l">
						<div class="group_title"><a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['list']['id']."".""); 
?>" title="<?php echo $this->_var['list']['name']; ?>"><?php echo $this->_var['list']['name']; ?></a></div>
						<div class="group_count">
							<span><?php echo $this->_var['list']['user_count']; ?></span> 成员&nbsp;&nbsp;
							<span><?php echo $this->_var['list']['topic_count']; ?></span> 分享 				
						</div>
						<div class="group_memo">
							<?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['list']['memo'],
  'b' => '0',
  'e' => '35',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?>
						</div>
					</div>					
				</div>
				
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				<div class="blank"></div>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
	<div class="pages"><?php echo $this->_var['pages']; ?></div>
	</div>	
	
	
	<div class="short f_r">
		<div class="ui-button orange"><div><a href="<?php
echo parse_url_tag("u:index|group#create|"."".""); 
?>" title="申请创建小组">申请创建小组</a></div></div>
		<div class="blank"></div>
		
		<div class="inc">
			<div class="inc_top">优秀小组长</div>
			<div class="inc_main">				
				<?php $_from = $this->_var['group_adm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');if (count($_from)):
    foreach ($_from AS $this->_var['group']):
?>
				<div class="group_adm">
					<div class="avatar">
						<?php 
$k = array (
  'name' => 'show_avatar',
  'v' => $this->_var['group']['user_id'],
);
echo $k['name']($k['v']);
?>
					</div>
					<div class="info">
						<a href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['group']['id']."".""); 
?>" title="<?php echo $this->_var['group']['name']; ?>" class="group_name"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['group']['name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>
						<div class="blank1"></div>
						<span class="user_count"><?php echo $this->_var['group']['user_count']; ?>个成员</span>
						<div class="blank1"></div>
						<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['group']['user_id'],
);
echo $k['name']($k['v']);
?>						
					</div>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>			
				<div class="inc_foot"></div>
			</div>		
		</div>
		<div class="blank"></div>		

	</div>
	


	<div class="blank"></div>
</div>
<?php echo $this->fetch('inc/footer.html'); ?>