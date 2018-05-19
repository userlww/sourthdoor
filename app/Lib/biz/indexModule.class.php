<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------
require APP_ROOT_PATH.'app/Lib/page.php';
class indexModule extends BizBaseModule
{
    
	public function index()
	{	
	    //获取权限
	    $biz_account_auth = get_biz_account_auth();

        if(empty($biz_account_auth)){
		    app_redirect(url("biz","user#login"));
		}else{
		    $jump_url = url("biz",$biz_account_auth[0]);
		    app_redirect($jump_url);
		}
	}
	
	
}
?>