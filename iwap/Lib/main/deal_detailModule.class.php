<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------

class deal_detailModule extends MainBaseModule
{

	public function index()
	{
		global_run();		
		init_app_page();
		
		$data_id = intval($_REQUEST['data_id']);
		
		$data = request_api("deal","detail",array("data_id"=>$data_id));
        
		$GLOBALS['tmpl']->assign("data",$data);		
		$GLOBALS['tmpl']->display("deal_detail.html");
	}
	
	
}
?>