<?php include $this->loadModel('ui')->getEffectViewFile('default', 'common', 'header');?>
<?php js::set('confirmWarning', $lang->order->confirmWarning);?>
<div class="page-user-control">
  <div class="row">
    <?php include TPL_ROOT . 'user/side.html.php';?>
    <div class="col-md-10">
      <div class='panel'>
        <div class='panel-heading'>
        <strong><i class="icon-shopping-cart"> </i><?php echo $lang->order->admin;?></strong>
        </div>
        <table class='table table-hover tablesorter table-fixed' table-layout='fixed'>
          <thead>
            <tr class='text-center'>
              <td class='w-70px'><?php echo $lang->order->type;?></td>
              <td class='w-260px text-left'><?php echo $lang->order->productInfo;?></td>
              <td class='w-80px text-right'><?php echo $lang->order->amount;?></td>
              <td class='w-220px'><?php echo $lang->order->life;?></td>
              <td class='w-60px'><?php echo $lang->product->status;?></td>
              <td><?php echo $lang->order->note;?></td>
              <td class='w-220px'><?php echo $lang->actions;?></td>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orders as $order):?>
            <?php $goodsInfo = $this->order->printGoods($order);?>
            <tr>
              <td class='text-center text-middle'><?php echo zget($lang->order->types, $order->type);?></td>
              <td class='text-middle' title='<?php echo strip_tags($goodsInfo);?>'><?php echo $goodsInfo;?></td>
              <td class='text-right text-middle'><?php echo $order->amount;?></td>
              <td class='text-center text-middle'>
                <ul class='order-track'>
                <?php echo '<li>' . $lang->order->abbr->createdDate . $lang->colon . formatTime($order->createdDate, 'm-d H:i') . '</li>';?>
                <?php if($order->payment != 'COD' and ($order->paidDate > $order->createdDate)) echo '<li>' . $lang->order->abbr->paidDate . $lang->colon . formatTime($order->paidDate, 'm-d H:i') . '</li>';?>
                <?php if($order->deliveriedDate > $order->createdDate) echo '<li>' . $lang->order->abbr->deliveriedDate . $lang->colon . formatTime($order->deliveriedDate, 'm-d H:i') . '</li>';?>
                <?php if($order->confirmedDate > $order->deliveriedDate) echo '<li>' . $lang->order->abbr->confirmedDate . $lang->colon . formatTime($order->confirmedDate, 'm-d H:i') . '</li>';?>
                <?php if($order->payment == 'COD' and ($order->paidDate > $order->createdDate)) echo '<li>' . $lang->order->abbr->paidDate . $lang->colon .  formatTime($order->paidDate, 'm-d H:i') . '</li>';?>
                </ul>
              </td>
              <td class='text-center text-middle'>
                <?php echo $this->order->processStatus($order);?>
              </td>
              <td class='text-left' title='<?php echo $order->note?>'><?php echo $order->note;?></td>
              <td class='text-left text-middle'><?php $this->order->printActions($order);?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
          <tfoot><tr><td colspan='7'><?php $pager->show();?></td></tr></tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include $this->loadModel('ui')->getEffectViewFile('default', 'common', 'footer');?>
