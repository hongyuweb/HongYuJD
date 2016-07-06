<?php if ($this->_var['pictures']): ?>

<div class="clearfix" class="goods_picture"> <span class="scrleft" onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
  <div class="gallery">
    <div id="demo">
      <div id="demo1" style="float:left;">
        <ul id="goods_gallery">
          <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
          <li>

	    <a  href="<?php echo $this->_var['picture']['img_original']; ?>" rel="zoom-id: zoom;" rev="<?php echo $this->_var['picture']['img_url']; ?>"   title="<?php echo htmlspecialchars($this->_var['picture']['img_desc']); ?>" <?php if ($this->_foreach['pictures']['iteration'] == 1): ?>class="gallery_img_cur"<?php endif; ?>>
	    <img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="B_blue"  />
	    </a>

          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div id="demo2" style="display:inline; overflow:visible;"></div>
    </div>
  </div>
  <span  class="scrright"  onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span>
  <script>
      function $gg(id){  
        return (document.getElementById) ? document.getElementById(id): document.all[id]
      }
      
      var boxwidth=60;//跟图片的实际尺寸相符
      
      var box=$gg("demo");
      var obox=$gg("demo1");
      var dulbox=$gg("demo2");
      obox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      box.style.width=obox.getElementsByTagName("li").length*boxwidth*6+'px';
      var canroll = false;
      if (obox.getElementsByTagName("li").length >= 6) {
        canroll = true;
        dulbox.innerHTML=obox.innerHTML;
      }
      var step=5;temp=1;speed=50;
      var awidth=obox.offsetWidth;
      var mData=0;
      var isStop = 1;
      var dir = 1;
      
      function s(){
        if (!canroll) return;
        if (dir) {
      if((awidth+mData)>=0)
      {
      mData=mData-step;
      }
      else
      {
      mData=-step;
      }
      } else {
        if(mData>=0)
        {
        mData=-awidth;
        }
        else
        {
        mData+=step;
        }
      }
      
      obox.style.marginLeft=mData+"px";
      
      if (isStop) return;
      
      setTimeout(s,speed)
      }
      
      
      function moveLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function moveRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function scrollStop() {
        isStop=1;
      }
      
      function clickLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function clickRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      </script>
</div>
<?php endif; ?>
