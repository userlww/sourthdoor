<?php
// +----------------------------------------------------------------------
// |小南门订餐网  。
// +----------------------------------------------------------------------
// | BAT大佬交流群 群员参与开发
// +----------------------------------------------------------------------
// | 技术交流请发邮件至15162181051@163.com
// +----------------------------------------------------------------------

class PaymentNoticeAction extends CommonAction{
	public function index()
	{
		if(strim($_REQUEST['order_sn'])!='')
		{
			$condition['order_id'] = M("DealOrder")->where("order_sn='".strim($_REQUEST['order_sn'])."'")->getField("id");
		}
		if(strim($_REQUEST['notice_sn'])!='')
		{
			$condition['notice_sn'] = $_REQUEST['notice_sn'];
		}	
	   if(strim($_REQUEST['user_name'])!='')
		{
			$condition['user_id'] = M("User")->where("user_name='".strim($_REQUEST['user_name'])."'")->getField("id");
		}	
		
		if(intval($_REQUEST['payment_id'])==0)unset($_REQUEST['payment_id']);
		$this->assign("default_map",$condition);
		$this->assign("payment_list",M("Payment")->findAll());
		parent::index();
	}
}
?>