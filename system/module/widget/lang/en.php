<?php
/**
 * The en file of widget module of RanZhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     widget 
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
$lang->widget->common = 'Block';
$lang->widget->title  = 'Name';
$lang->widget->style  = 'Style';
$lang->widget->type   = 'Type';
$lang->widget->grid   = 'Grid';
$lang->widget->color  = 'Color';
$lang->widget->status = 'Status';

$lang->widget->message = 'Message';
$lang->widget->comment = 'Comment';
$lang->widget->reply   = 'Reply';

$lang->widget->create    = 'Add a widget';
$lang->widget->hidden    = 'Hide';
$lang->widget->lblWidget = 'Block';
$lang->widget->lblRss    = 'RSS';
$lang->widget->lblNum    = 'Number';
$lang->widget->content   = 'Content';

$lang->widget->params = new stdclass();
$lang->widget->params->name  = 'Parameter';
$lang->widget->params->value = 'Value';

$lang->widget->createWidget        = 'Add a Widget';
$lang->widget->editWidget          = 'Edit a Widget';
$lang->widget->ordersSaved         = 'Sorting Saved!';
$lang->widget->confirmRemoveWidget = 'Do you want to remove【{0}】?';

$lang->widget->dynamic     = 'Latest News';
$lang->widget->dynamicInfo = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>。";

$lang->widget->default = array();
$lang->widget->default['1']['title'] = 'Latest Order';
$lang->widget->default['1']['type']  = 'latestOrder';
$lang->widget->default['1']['grid']  = 4;

$lang->widget->default['2']['title'] = 'Latest Thread';
$lang->widget->default['2']['type']  = 'latestThread';
$lang->widget->default['2']['grid']  = 4;

$lang->widget->default['3']['title'] = 'Feedback';
$lang->widget->default['3']['type']  = 'message';
$lang->widget->default['3']['grid']  = 4;

$lang->widget->default['4']['title'] = 'Latest Contribution';
$lang->widget->default['4']['type']  = 'submittion';
$lang->widget->default['4']['grid']  = 4;

$lang->widget->default['5']['title'] = 'Quick Entry';
$lang->widget->default['5']['type']  = 'commonMenu';
$lang->widget->default['5']['grid']  = 4;

$lang->widget->default['6']['title'] = 'Changer Feed';
$lang->widget->default['6']['type']  = 'chanzhiDynamic';
$lang->widget->default['6']['grid']  = 4;

$lang->widget->typeList = new stdclass();
$lang->widget->typeList->latestOrder    = 'Latest Order';
$lang->widget->typeList->latestThread   = 'Latest Thread';
$lang->widget->typeList->message        = 'Feedback';
$lang->widget->typeList->wechatMessage  = 'Wechat Message';
$lang->widget->typeList->submittion     = 'Latest Contribution';
$lang->widget->typeList->chanzhiDynamic = 'Changer Feed';
$lang->widget->typeList->html           = 'Custom';
$lang->widget->typeList->commonMenu     = 'Quick Entry';
