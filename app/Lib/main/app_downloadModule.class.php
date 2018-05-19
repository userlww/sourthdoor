<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | BAT大佬交流群 群员参与开发
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------


class app_downloadModule extends MainBaseModule
{
	public function index()
	{	
		//用户app下载地址连接
		if (isios()){
			//$down_url = app_conf("APPLE_PATH");
			$down_url = $GLOBALS['db']->getOne("select val from ".DB_PREFIX."m_config where code = 'ios_down_url'");
		}else{
			//$down_url = app_conf("ANDROID_PATH");
			$down_url = $GLOBALS['db']->getOne("select val from ".DB_PREFIX."m_config where code = 'android_filename'");
		}	
		app_redirect($down_url);		
	}	
	
}
?>