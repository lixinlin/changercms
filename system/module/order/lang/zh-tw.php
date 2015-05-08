<?php
$lang->order->common  = '訂單';

$lang->order->id             = 'ID';
$lang->order->productInfo    = '商品信息';
$lang->order->account        = '賬號';
$lang->order->address        = '收貨地址';
$lang->order->price          = '價格';
$lang->order->count          = '數量';
$lang->order->amount         = '金額';
$lang->order->sn             = '交易號';
$lang->order->payStatus      = '付款狀態';
$lang->order->paidDate       = '付款時間';
$lang->order->deliveryStatus = '發貨狀態';
$lang->order->deliveriedDate = '發貨時間';
$lang->order->confirmedDate  = '收貨時間';
$lang->order->payment        = '交易方式';
$lang->order->createdDate    = '下單時間';
$lang->order->express        = '快遞';
$lang->order->waybill        = '快遞單';
$lang->order->status         = '狀態';

$lang->order->admin          = '訂單管理';
$lang->order->setting        = '系統設置';
$lang->order->browse         = '我的訂單';
$lang->order->bought         = '查看已買到的商品';
$lang->order->paidSuccess    = '訂單支付成功！';
$lang->order->submit         = '提交訂單';
$lang->order->cancel         = '取消';
$lang->order->pay            = '支付';
$lang->order->return         = '收款';
$lang->order->delivery       = '發貨';
$lang->order->finish         = '完成';
$lang->order->confirm        = '確認訂單信息';
$lang->order->selectProducts = "選擇了<strong class='text-danger'>%s</strong>件商品，";
$lang->order->totalToPay     = "共計：<strong id='amount' class='text-danger'>%s</strong>";
$lang->order->payInfo        = "%s %s 商品訂單";
$lang->order->goToBank       = "請到網上銀行完成支付。";
$lang->order->track          = '查看物流';
$lang->order->life           = '訂單跟踪';
$lang->order->days           = '天';

$lang->order->confirmLimit         = '確認收貨週期';
$lang->order->confirmReceived      = '確認收貨';
$lang->order->deliveryConfirmed    = '您的訂單已經收貨成功。！';
$lang->order->confirmWarning       = "<span class='text-danger'>請收到貨後，再確認收貨！否則您可能前貨兩空！</span>";
$lang->order->cancelWarning        = "確認取消訂單？";
$lang->order->cancelSuccess        = "訂單已取消";
$lang->order->paymentRequired      = '需要至少一種交易方式';
$lang->order->confirmLimitRequired = '需要設定確認收貨週期';
$lang->order->finishWarning        = "确认完成";

$lang->order->alipayPid = '合作者ID';
$lang->order->alipayKey = '合作者KEY';

$lang->order->placeholder = new stdclass();
$lang->order->placeholder->pid = '合作身份者id，以2088开头的16位纯数字';
$lang->order->placeholder->key = '安全检验码，以数字和字母组成的32位字符';

$lang->order->paymentList = array();
$lang->order->paymentList['alipay'] = '支付寶支付';
$lang->order->paymentList['COD']    = '貨到付款';

$lang->order->statusList = array();
$lang->order->statusList['not_paid']  = '待付款';
$lang->order->statusList['paid']      = '已付款';
$lang->order->statusList['not_send']  = '待發貨';
$lang->order->statusList['send']      = '已發貨';
$lang->order->statusList['confirmed'] = '已收貨';
$lang->order->statusList['normal']    = '進行中';
$lang->order->statusList['finished']  = '已完成';
$lang->order->statusList['canceled']  = '已取消';