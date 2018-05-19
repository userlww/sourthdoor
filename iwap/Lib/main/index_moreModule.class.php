<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------

class index_moreModule extends MainBaseModule
{
	public function index()
	{
		global_run();
		
		init_app_page();
		
		$data = request_api("index","more");

		foreach($data['indexs'] as $k=>$v)
		{
			$data['indexs'][$k]['url'] =  getWebAdsUrl($v);
		}
		
		$GLOBALS['tmpl']->assign("data",$data);
		
		$GLOBALS['tmpl']->display("index_more.html");
	}
	
	
}
?>