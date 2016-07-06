<ul class="allMenu Left">
  <li><a class="index nav" href="/" title="首页">首页</a></li>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_30915700_1446387035');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_30915700_1446387035']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
  <li><a href="<?php echo $this->_var['nav_0_30915700_1446387035']['url']; ?>"  class="nav <?php if ($this->_var['nav_0_30915700_1446387035']['active'] == 1): ?>current<?php endif; ?>" title="<?php echo $this->_var['nav_0_30915700_1446387035']['name']; ?>" <?php if ($this->_var['nav_0_30915700_1446387035']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_30915700_1446387035']['name']; ?></a></li>  
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>