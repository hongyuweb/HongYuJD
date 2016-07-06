<?php if ($this->_var['comments']['item_list']): ?>
<?php $_from = $this->_var['comments']['item_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?>
<dl class="clearfix">
  <dt>
    <div><img src="<?php if ($this->_var['value']['headimg'] == ''): ?>themes/68ecshopcom_360buy/images/upgrade_ad/peopleicon_01.gif<?php else: ?><?php echo $this->_var['value']['headimg']; ?><?php endif; ?>" height="80" width="80" /></div>
    <p><?php if ($this->_var['value']['hide_username'] == 1): ?>匿名<?php else: ?><?php echo $this->_var['value']['user_name']; ?><?php endif; ?></p>
    <p><?php echo $this->_var['value']['user_rank']['rank_name']; ?></p>
  </dt>
  <dd>
    <div class="rank68 clearfix"> <?php if ($this->_var['value']['comment_rank']): ?><img src="themes/68ecshopcom_360buy/images/stars<?php echo $this->_var['value']['comment_rank']; ?>.gif" style="float:left"/><?php endif; ?> <span class="add-time" style="float:right"><?php echo $this->_var['value']['add_time_str']; ?></span> </div>
    <div class="blank"></div>
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <?php if ($this->_var['value']['tags']): ?>
      <tr>
        <th width="64">标　　签：</th>
        <td class="tag">
          <?php $_from = $this->_var['value']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'name');if (count($_from)):
    foreach ($_from AS $this->_var['name']):
?> 
          <?php if (! empty ( $this->_var['name'] )): ?>
          <span><?php echo $this->_var['name']; ?></span>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </td>
      </tr>
      <?php endif; ?>
      <tr>
        <th width="64">心　　得：</th>
        <td><?php echo $this->_var['value']['content']; ?></td>
      </tr>
      <?php if ($this->_var['value']['shaidan_imgs']): ?>
      <tr>
        <th>用户晒单：</th>
        <td class="shaidan"><?php $_from = $this->_var['value']['shaidan_imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['img']):
?> 
          <?php if ($this->_var['key'] < 3): ?><a href="goods_shaidan.php?act=view&id=<?php echo $this->_var['value']['shaidan_id']; ?>" target="_blank"><img src="<?php echo $this->_var['img']['thumb']; ?>"></a><?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          共<?php echo $this->_var['value']['shaidan_imgs_num']; ?>张图片 <a href="goods_shaidan.php?act=view&id=<?php echo $this->_var['value']['shaidan_id']; ?>" target="_blank">查看晒单></a></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['value']['comment_reps']): ?>
      <tr>
        <th>客服回复：</th>
        <td> <?php $_from = $this->_var['value']['comment_reps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
          <div style="color:#F00; padding:10px 0 10px 0"><?php echo $this->_var['val']['content']; ?></div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </td>
      </tr>
      <?php endif; ?>
    </table>
    <?php if ($this->_var['value']['hide_gnum'] != 1): ?>
    <ul class="yong clearfix">
      <li style="display:none"><a href="javascript:;" onClick="show_good()">回复(0)</a></li>
      <li><a href="javascript:;" onClick="show_good(<?php echo $this->_var['value']['comment_id']; ?>)">有用(<span id="good_num_<?php echo $this->_var['value']['comment_id']; ?>"><?php echo $this->_var['value']['good_num']; ?></span>)</a></li>
    </ul>
    <?php endif; ?> </dd>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<div id="pager" class="pagebar"> <span class="f_l f6" style="margin-right:10px;"><?php echo $this->_var['lang']['pager_1']; ?><b><?php echo $this->_var['comments']['count']; ?></b> <?php echo $this->_var['lang']['pager_2']; ?></span> 
  <?php if ($this->_var['comments']['page_count'] != 1): ?> 
  <?php $_from = $this->_var['comments']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
  <?php if ($this->_var['comments']['page'] == $this->_var['key']): ?> 
  <span class="page_now"><?php echo $this->_var['key']; ?></span> 
  <?php else: ?> 
  <a href="javascript:;" onClick="<?php echo $this->_var['item']; ?>">[<?php echo $this->_var['key']; ?>]</a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php endif; ?> 
</div>
<?php else: ?>
<div class="no_comment">暂时还没有任何评论！</div>
<?php endif; ?>