<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | BAT大佬交流群 群员参与开发
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------


class urlModule extends MainBaseModule
{
	public function index()
	{
		$r = strim($_REQUEST['r']);
		$r = base64_decode($r);
		$url = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."urls where id = ".intval($r));
		if($url)
		{
			$GLOBALS['db']->query("update ".DB_PREFIX."urls set count = count + 1 where id = ".intval($r));
			app_redirect($url['url']);
		}
		else
		{
			app_redirect(url("index"));
		}
		
	}
}
?>