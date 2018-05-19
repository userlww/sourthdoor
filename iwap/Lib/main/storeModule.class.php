<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------

class storeModule extends MainBaseModule
{

	public function index()
	{
		global_run();		
		init_app_page();		

		$param['data_id'] = intval($_REQUEST['data_id']); //分类ID
        
		$request = $param;
		//获取品牌
		$data = request_api("store","index",$param);

		if(intval($data['id'])==0)
		{
		    app_redirect(wap_url("index"));
		}
		$GLOBALS['tmpl']->assign("request",$request);

		$GLOBALS['tmpl']->assign("store_info",$data['store_info']);
		$GLOBALS['tmpl']->assign("data",$data);		
		$GLOBALS['tmpl']->display("store.html");
	}
	
	
}
?>