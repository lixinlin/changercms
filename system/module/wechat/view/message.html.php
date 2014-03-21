<?php
/**
 * The admin view file of wechat of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     wechat
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<div class='panel'>
  <div class="panel-heading">
    <strong><?php echo '<i class="icon-comment-alt"></i> ' . $lang->wechat->message->list;?></strong>
    <?php
    echo '&nbsp; &nbsp; &nbsp;';
    echo html::a(inlink('message', "status=wait"), $lang->wechat->message->statusList['wait'], $status == 'wait' ? "class='active'" : '');
    echo html::a(inlink('message', "status=replied"), $lang->wechat->message->statusList['replied'], $status == 'replied' ? "class='active'" : '');
    ?>
  </div>
  <table class='table table-hover table-striped tablesorter'>
    <thead>
      <tr class='text-center'>
        <th class='w-100px'><?php echo $lang->wechat->message->from;?></th>
        <th><?php echo $lang->wechat->message->content;?></th>
        <th class='w-160px'><?php echo $lang->wechat->message->response;?></th>
        <th class='w-100px'><?php echo $lang->wechat->message->type;?></th>
        <th class='w-100px'><?php echo $lang->wechat->message->status;?></th>
        <th class='w-160px'><?php echo $lang->wechat->message->time;?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($messageList as $message):?>
      <tr class='text-center'>
        <td><?php echo $message->from;?></td>
        <td><?php echo (strpos($message->response, 'm_') !== false ? $lang->wechat->message->menu. $lang->colon : '') . $message->content;?></td>
        <td>
          <?php
          if($message->response == 'default')
          {
              echo $lang->wechat->response->default;
          }
          elseif($message->response == 'subscribe')
          {
              echo $lang->wechat->response->subscribe;
          }
          elseif(strpos($message->response, 'm_') !== false)
          {
              echo $message->content;
          }
          else
          {
              echo $lang->wechat->response->keywords . $lang->colon . $message->response;
          }
          ?>
        </td>
        <td><?php echo $lang->wechat->message->typeList[$message->type];?></td>
        <td><span class="btn-xs <?php echo $message->status == 'wait' ? 'btn btn-xs btn-warning' : '';?>"><?php echo $lang->wechat->message->statusList[$message->status];?></span></td>
        <td><?php echo $message->time;?></td>
      </tr>
      <?php endforeach;?>
    </tbody>
    <tfoot><tr><td colspan='6'><?php $pager->show();?></td></tr></tfoot>
  </table>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
