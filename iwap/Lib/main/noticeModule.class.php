<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------

class noticeModule extends MainBaseModule
{

	public function index()
	{
		global_run();		
		init_app_page();
		
		$id=intval($_REQUEST['data_id']);
		$cache_id  = md5(MODULE_NAME.ACTION_NAME.$id);		
		if (!$GLOBALS['tmpl']->is_cached('notice_detail.html', $cache_id)){
				$param=array();
				$param['id'] = intval($_REQUEST['data_id']);
				$data = request_api("notice","detail",$param);
					
		}
		$GLOBALS['tmpl']->assign("data",$data);		
		$GLOBALS['tmpl']->display("notice_detail.html",$cache_id);	
	}

}
?>