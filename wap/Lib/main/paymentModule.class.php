<?php
// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云淡风轻(97139915@qq.com)
// +----------------------------------------------------------------------


class paymentModule extends MainBaseModule
{

	
	public function done()
	{
		global_run();
		init_app_page();
		$id = intval($_REQUEST['id']);
		
		$data = request_api("payment","done",array("id"=>$id));
		if(!$data['status'])
		{
			showErr($data['info']);
		}
		
		if($data['pay_status']==1)
		{
			$data['page_title'] = "支付结果";
			$GLOBALS['tmpl']->assign("data",$data);
			$GLOBALS['tmpl']->display("payment_done.html");
		}
		else
		{
			$data['payment_code']['page_title'] = "订单付款";
			$GLOBALS['tmpl']->assign("data",$data['payment_code']);
			$GLOBALS['tmpl']->display("payment_pay.html");
		}
		
	}
		
}
?>