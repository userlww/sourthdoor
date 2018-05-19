<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------

class userxypointModule extends MainBaseModule
{
	public function index()
	{
		global_run();		
		if($GLOBALS['geo']['xpoint']==0&&$GLOBALS['geo']['ypoint']==0)
		{
			request_api("userxypoint","index");
		}		
		ajax_return(array("status"=>true));
	}
	
	
}
?>