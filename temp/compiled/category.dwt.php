<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://localhost/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/<?php echo $this->_var['cat_style']; ?>" />
<script>var jdpts = new Object(); jdpts._st = new Date().getTime();</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery_006.js"></script> 
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/search_goods.js"></script> 
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-lazyload.js" ></script> 
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
</head>
<body>
<div role="navigation" id="site-nav"> 
  <script type="text/javascript" src="themes/68ecshopcom_360buy/js/base-2011.js"></script> 
  <?php echo $this->fetch('library/page_header.lbi'); ?>
 
  <div class="blank"></div>
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="w main">
  	  <?php echo $this->fetch('library/best_nei.lbi'); ?> 
       
      
       
       
      <script type="text/javascript">
	
	var begin_hidden=0;
	function init_position_left()
	{
	var kuan1=document.getElementById('xxxccczzz').clientWidth;
	var kuan2=document.getElementById('attr_group_more').clientWidth;
	var kuan =(kuan1-kuan2)/2;
	document.getElementById('attr_group_more').style.left=kuan+"px";
	}
	function getElementsByName(tagName, eName)
	{  
	var tags = document.getElementsByTagName(tagName);  
	var returns = new Array();  
      
	if (tags != null && tags.length > 0) {  
        for (var i = 0; i < tags.length; i++) {  
            if (tags[i].getAttribute("name") == eName) {  
                returns[returns.length] = tags[i];  
            }  
        }  
	}  
	return returns;  
	}
	function Show_More_Attrgroup()
	{
		var attr_list_dl = getElementsByName('dl','attr_group_dl');
		var attr_group_more_text = document.getElementById('attr_group_more_text');
		if(begin_hidden==2)
		{
			for(var i=0;i<attr_list_dl.length;i++)
			{
				attr_list_dl[i].style.display= i >= begin_hidden ? 'none' : 'block';
			}
			attr_group_more_text.innerHTML="更多选项（" + attr_group_more_txt + "）";
			init_position_left();
			begin_hidden=0;
		}
		else
		{
			for(var i=0;i<attr_list_dl.length;i++)
			{
				attr_list_dl[i].style.display='block';				
			}
			attr_group_more_text.innerHTML="收起";
			init_position_left();
			begin_hidden=2;
		}
	}
	// 是否显示“更多”__初始化
	function init_more(boxid, moreid, height)
	{
	     var obj_brand=document.getElementById(boxid);
	     var more_brand = document.getElementById(moreid);
	     if (obj_brand.clientHeight > height)
	     {
		obj_brand.style.height= height+ "px";
		obj_brand.style.overflow="hidden";
		more_brand.innerHTML='<a href="javascript:void(0);"  onclick="slideDiv(this, \''+boxid+'\', \''+height+'\');" class="more_68ecshop_1" >更多</a>';
	     }
	 }
	 function slideDiv(thisobj, divID,Height)
	 {  
	     var obj=document.getElementById(divID).style;  
	     if(obj.height=="")
	     {  
               obj.height= Height+ "px";  
               obj.overflow="hidden";
	       thisobj.innerHTML="更多";
	       thisobj.className="more_68ecshop_1";
	        // 如果是品牌，额外处理
		if(divID=='brand_abox')
		{
		   //obj.width="456px";
		   getBrand_By_Zimu(document.getElementById('brand_zimu_all'),'');
	           document.getElementById('brand_sobox').style.display = "none";
		   document.getElementById('brand_zimu').style.display = "none";
		   document.getElementById('brand_abox_father').className="";
		 }
            }
	    else
	    {  
               obj.height="";  
               obj.overflow="";  
	       thisobj.innerHTML="收起";
	       thisobj.className="more_68ecshop_2";
	        // 如果是品牌，额外处理
		if(divID=='brand_abox')
		{
		   //obj.width="456px";
	           document.getElementById('brand_sobox').style.display = "block";
		   document.getElementById('brand_zimu').style.display = "block";
		   //getBrand_By_Zimu(document.getElementById('brand_zimu_all'),'');
		   document.getElementById('brand_abox_father').className="brand_more_ecshop68";
		 }
	     }  
	  
        }
	function getBrand_By_Name(val)
	{
	    val =val.toLocaleLowerCase();
	    var brand_list = document.getElementById('brand_abox').getElementsByTagName('li');    
	    for(var i=0;i<brand_list.length;i++)
	    {
		//document.getElementById('brand_abox').style.width="auto";
		var name_attr_value= brand_list[i].getAttribute("name").toLocaleLowerCase();
		if(brand_list[i].title.indexOf(val)==0 || name_attr_value.indexOf(val)==0 || val=='')
		{
			brand_list[i].style.display='block';
		}
		else
		{
			brand_list[i].style.display='none';
		}
	    }
	}
	//点击字母切换品牌
	function getBrand_By_Zimu(obj, zimu)
	{
		document.getElementById('brand_sobox_input').value="可搜索拼音、汉字查找品牌";
		obj.focus();
		var brand_zimu=document.getElementById('brand_zimu');
		var zimu_span_list = brand_zimu.getElementsByTagName('span');
		for(var i=0;i<zimu_span_list.length;i++)
		{
			zimu_span_list[i].className='';
		}
		var thisspan=obj.parentNode;
		thisspan.className='span';
		var brand_list = document.getElementById('brand_abox').getElementsByTagName('li');			
		for(var i=0;i<brand_list.length;i++)
		{	
			//document.getElementById('brand_abox').style.width="auto";
			if(brand_list[i].getAttribute('rel') == zimu || zimu=='')
			{
				brand_list[i].style.display='block';
			}
			else
			{
				brand_list[i].style.display='none';
			}
		}
	}
	var duoxuan_a_valid=new Array();
	// 点击多选， 显示多选区
	function showDuoXuan(dx_divid, a_valid_id)
	{	     
	     var dx_dl_68ecshop = document.getElementById('attr_list_ul').getElementsByTagName('dl');
	     for(var i=0;i<dx_dl_68ecshop.length;i++)
	     {
		dx_dl_68ecshop[i].className='';
	     }
	     var dxDiv=document.getElementById(dx_divid);
	     dxDiv.className ="duoxuan";
	     duoxuan_a_valid[a_valid_id]=1;
	     
	}
	function hiddenDuoXuan(dx_divid, a_valid_id)
	{
		var dxDiv=document.getElementById(dx_divid);
		dxDiv.className ="";
		duoxuan_a_valid[a_valid_id]=0;
		if(a_valid_id=='brand')
		{
			var ul_obj_68ecshop = document.getElementById('brand_abox');
			var li_list_68ecshop = ul_obj_68ecshop.getElementsByTagName('li');
			if(li_list_68ecshop)
			{
				for(var j=0;j<li_list_68ecshop.length;j++)
				{
					li_list_68ecshop[j].className="";
				}
			}
		}
		else
		{
			var ul_obj_68ecshop = document.getElementById('attr_abox_'+a_valid_id);
		}
		var input_list = ul_obj_68ecshop.getElementsByTagName('input');
		var span_list = ul_obj_68ecshop.getElementsByTagName('span');
		for(var j=0;j<input_list.length;j++)
		{
			input_list[j].checked=false;
		}
		if(span_list.length)
		{
			for(var j=0;j<span_list.length;j++)
			{
				span_list[j].className="color_ecshop68";
			}
		}
	}
	function duoxuan_Onclick(a_valid_id, idid, thisobj)
	{			
		if (duoxuan_a_valid[a_valid_id])
		{
			if (thisobj)
			{	
				var fatherObj = thisobj.parentNode;
				if (a_valid_id =="brand")
				{
					fatherObj.className = fatherObj.className == "brand_seled" ? "" : "brand_seled";
				}
				else
				{
					fatherObj.className =   fatherObj.className == "color_ecshop68" ? "color_ecshop68_seled" : "color_ecshop68";
					
				}
			}
			document.getElementById('chk_'+a_valid_id+'_'+idid).checked= !document.getElementById('chk_'+a_valid_id+'_'+idid).checked;
			return false;
		}
	}
	
	function duoxuan_Submit(dxid, indexid, attr_count, category, brand_id, price_min, price_max,  filter_attr,filter)
	{		
		var theForm =document.forms['theForm'];
		var chklist=theForm.elements['checkbox_'+ dxid+'[]'];
		var newpara="";
		var mm=0;
		for(var k=0;k<chklist.length;k++)
		{
			if(chklist[k].checked)
			{
				//alert(chklist[k].value);
				newpara += mm>0 ? "_" : "";
				newpara += chklist[k].value;
				mm++;
			}
		}
		if (mm==0) 
		{
			return false;
		}
		if(dxid=='brand')
		{
			brand_id = newpara;
		}
		else
		{
			var attr_array = new Array();
			filter_attr = filter_attr.replace(/\./g,",");
			attr_array=filter_attr.split(',');

			for(var h=0;h<attr_count;h++)
			{
				if(indexid == h){
					attr_array[indexid] = newpara;
				}else{
					if(attr_array[h]){
					}else{
					 attr_array[h] = 0;
					}
				}
			}
			filter_attr = attr_array.toString();
		}
		filter_attr = filter_attr.replace(/,/g,".");
		var url="other.php";
		//var url="category.php";
		url += "?id="+ category;
		url += brand_id ? "&brand="+brand_id : "";
		url += price_min ? "&price_min="+price_min : "&price_min=0";
		url += price_max ? "&price_max="+price_max : "&price_max=0";
		url += filter_attr ? "&filter_attr="+filter_attr : "&filter_attr=0";
		url += filter ? "&filter="+filter : "&filter=0";
		//location.href=url;
		return_url(url,dxid);
	}

	function return_url(url,dxid){
	  $.ajax({    
		    url:url,   
		    type:'get',
		    cache:false,
		    dataType:'text',
		    success:function(data){
		        var obj = document.getElementById('button_'+dxid);
		        obj.href = data;
			obj.click();
			//location.href=data;
		     }
		});
	}
	
	</script> 
      <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
      <form action="" method="post" name="theForm" >
        <div class="box_attr_ecshop68" id="attr_list_ul">
          <h4 id="xxxccczzz"><font color="#E31939"><?php echo $this->_var['cat_name_curr']; ?> - </font> 商品筛选</h4>
          <?php if ($this->_var['condition']): ?>
          <dl style="border-bottom:1px dotted #ccc;border-top:none;">
            <dt>已选条件：</dt>
            <dd class="moredd" style="text-align:right;">&nbsp;<a href="category.php?id=<?php echo $this->_var['category']; ?>">全部撤销</dd>
            <dd >
              <ul class="selected_attr">
                <?php $_from = $this->_var['condition']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cond');if (count($_from)):
    foreach ($_from AS $this->_var['cond']):
?>
                <li ><a href="<?php echo $this->_var['cond']['cond_url']; ?>"><?php echo $this->_var['cond']['cond_type']; ?>：<b ><?php echo $this->_var['cond']['cond_name']; ?>  X</b></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
            </dd>
          </dl>
          <?php endif; ?> 
          
          <?php if ($this->_var['brands']['1']): ?>
          <dl style="border-top:none;" id="attr_group_dl_brand">
            <dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
            <dd class="moredd">
              <label id="brand_more"></label>
              <label> <a href="javascript:void(0)" onclick="showDuoXuan('attr_group_dl_brand', 'brand');" class="duo_68ecshop"><font class="duo_b">+</font>多选</a> </label>
            </dd>
            <dd>
              <div id="brand_sobox" style="display:none;">
                <input type="text" id="brand_sobox_input" value="可搜索拼音、汉字查找品牌" onfocus="if(this.value=='可搜索拼音、汉字查找品牌') {this.value=''}" 
	     onblur="if (this.value=='') {this.value='可搜索拼音、汉字查找品牌'}" onkeyup="getBrand_By_Name(this.value);">
              </div>
              <div id="brand_zimu" style="display:none;"> <span class="span"><a href="javascript:void(0);" onmouseover="getBrand_By_Zimu(this,'')" id="brand_zimu_all">所有品牌</a></span> <?php $_from = $this->_var['brand_zimu_68ecshop']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bzimu');if (count($_from)):
    foreach ($_from AS $this->_var['bzimu']):
?> <span><a href="javascript:void(0);"  onmouseover="getBrand_By_Zimu(this,'<?php echo $this->_var['bzimu']; ?>')" ><?php echo $this->_var['bzimu']; ?></a></span> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
              <div id="brand_abox_father" > <?php if ($this->_var['brand_have_logo']): ?>
                <ul id="brand_abox" class="brand_abox_imgul">
                  <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands_68ecshop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands_68ecshop']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands_68ecshop']['iteration']++;
?> 
                  <?php if (($this->_foreach['brands_68ecshop']['iteration'] - 1) > 0): ?>
                  <li title="<?php echo $this->_var['brand']['brand_name']; ?>" name="<?php echo $this->_var['brand']['pinyin']; ?>" rel="<?php echo $this->_var['brand']['shouzimu']; ?>" <?php if ($this->_foreach['brands_68ecshop']['iteration'] > 8): ?>class="bottom"<?php endif; ?>>
                    <input type="checkbox" style="display:none;" name="checkbox_brand[]" id="chk_brand_<?php echo $this->_foreach['brands_68ecshop']['iteration']; ?>" value="<?php echo $this->_var['brand']['brand_id_68ecshop']; ?>">
                    <a href="<?php echo $this->_var['brand']['url']; ?>" onclick="return duoxuan_Onclick('brand','<?php echo $this->_foreach['brands_68ecshop']['iteration']; ?>', this);"> <?php if ($this->_var['brand']['brand_logo']): ?><img  src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>"><?php else: ?><?php echo $this->_var['brand']['brand_name']; ?><?php endif; ?> </a></li>
                  <?php endif; ?> 
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php else: ?>
                <ul id="brand_abox"  class="brand_abox_ul">
                  <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands_68ecshop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands_68ecshop']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands_68ecshop']['iteration']++;
?> 
                  <?php if (($this->_foreach['brands_68ecshop']['iteration'] - 1) > 0): ?>
                  <li title="<?php echo $this->_var['brand']['brand_name']; ?>" name="<?php echo $this->_var['brand']['pinyin']; ?>" rel="<?php echo $this->_var['brand']['shouzimu']; ?>">
                    <input type="checkbox"  name="checkbox_brand[]" id="chk_brand_<?php echo $this->_foreach['brands_68ecshop']['iteration']; ?>" class="chkbox_68ecshop" value="<?php echo $this->_var['brand']['brand_id_68ecshop']; ?>">
                    <a href="<?php echo $this->_var['brand']['url']; ?>"  onclick="return duoxuan_Onclick('brand','<?php echo $this->_foreach['brands_68ecshop']['iteration']; ?>');"><?php echo $this->_var['brand']['brand_name']; ?></a> </li>
                  <?php endif; ?> 
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php endif; ?> </div>
              <div class="duoxuan_btnbox" >
                <table align=center >
                  <tr>
		  
		  
	      <td><a id="button_brand"></a><a class="button_jd" onclick="duoxuan_Submit('brand',0,'<?php echo $this->_var['filter_attr_count_num']; ?>','<?php echo $this->_var['category']; ?>','<?php echo $this->_var['brand_id']; ?>', '<?php echo $this->_var['price_min']; ?>', '<?php echo $this->_var['price_max']; ?>', '<?php echo $this->_var['filter_attr']; ?>','<?php echo $this->_var['filter']; ?>');" >确定</a><a href="javascript:void(0);" onclick="hiddenDuoXuan('attr_group_dl_brand', 'brand');" class="button_jd" style="margin-left:10px;white-space:nowrap;">取消</a></td>
		  
		  
		  </tr>
                </table>
              </div>
            </dd>
          </dl>
          <script type="text/javascript">
	     duoxuan_a_valid['brand'] = 0;
	     init_more('brand_abox', 'brand_more', '72');	    
	     </script> 
          <?php endif; ?> 
          
          <?php if ($this->_var['price_grade']['1']): ?>
          <dl>
            <dt><?php echo $this->_var['lang']['price']; ?>：</dt>
            <dd class="moredd">&nbsp;</dd>
            <dd>
              <ul>
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['price_grade_68ecshop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['price_grade_68ecshop']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['price_grade_68ecshop']['iteration']++;
?> 
                <?php if (($this->_foreach['price_grade_68ecshop']['iteration'] - 1) > 0): ?>
                <li><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <li>
		 
		 
	     <input type="text" name="price_min" id="price_min" value="<?php echo $this->_var['price_min']; ?>" class="price_68ecshop" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" autocomplete="off">
	     <i></i>
	     <input type="text" name="price_max" id="price_max" value="<?php echo $this->_var['price_max']; ?>" class="price_68ecshop" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" autocomplete="off">
		 
		 
                  <a class="button_jd" href="javascript:void()" onclick="location.href='<?php echo $this->_var['url_no_price']; ?>&price_min='+document.getElementById('price_min').value+'&price_max='+document.getElementById('price_max').value " >确定</a> </li>
              </ul>
            </dd>
          </dl>
          <?php endif; ?> 
          
          <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('kattr', 'filter_attr_0_89931200_1446387064');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['kattr'] => $this->_var['filter_attr_0_89931200_1446387064']):
        $this->_foreach['filter_attr_list']['iteration']++;
?>
          <dl  name="attr_group_dl" id="attr_group_dl_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>" >
            <dt><?php echo htmlspecialchars($this->_var['filter_attr_0_89931200_1446387064']['filter_attr_name']); ?>：</dt>
            <dd class="moredd">
              <label id="attr_more_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>"></label>
              <label><a href="javascript:void(0)" onclick="showDuoXuan('attr_group_dl_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>', '<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>');" class="duo_68ecshop"><font class="duo_b">+</font>多选</a></label>
            </dd>
            <dd>
              <ul id="attr_abox_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>">
                <?php $_from = $this->_var['filter_attr_0_89931200_1446387064']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr_list_68ecshop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr_list_68ecshop']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr_list_68ecshop']['iteration']++;
?> 
                <?php if (($this->_foreach['attr_list_68ecshop']['iteration'] - 1) > 0): ?>
                <li> <?php if ($this->_var['filter_attr_0_89931200_1446387064']['filter_attr_name'] == '颜色'): ?> <span class="color_ecshop68" style="position:relative;">
                  <div class="sanjiao_red" onclick="return duoxuan_Onclick('<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>','<?php echo $this->_foreach['attr_list_68ecshop']['iteration']; ?>', this);">&nbsp;</div>
                  <input type="checkbox" style="display:none;" name="checkbox_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>[]" id="chk_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_<?php echo $this->_foreach['attr_list_68ecshop']['iteration']; ?>" value="<?php echo $this->_var['attr']['goods_id']; ?>">
                  <a href="<?php echo $this->_var['attr']['url']; ?>" title="<?php echo $this->_var['attr']['attr_value']; ?>"  onclick="return duoxuan_Onclick('<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>','<?php echo $this->_foreach['attr_list_68ecshop']['iteration']; ?>', this);"  style="display:block;cursor:pointer;width:15px;height:15px;border:1px solid #fff;background:#<?php echo $this->_var['attr']['color_code']; ?>;">&nbsp;</a> </span>
		  <?php else: ?>
                  <input type="checkbox"  name="checkbox_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>[]" id="chk_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_<?php echo $this->_foreach['attr_list_68ecshop']['iteration']; ?>" class="chkbox_68ecshop" value="<?php echo $this->_var['attr']['goods_id']; ?>" >
                  <a href="<?php echo $this->_var['attr']['url']; ?>" onclick="return duoxuan_Onclick('<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>','<?php echo $this->_foreach['attr_list_68ecshop']['iteration']; ?>');"><?php echo $this->_var['attr']['attr_value']; ?></a> <?php endif; ?> </li>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
              <div class="duoxuan_btnbox" >
                <table align=center >
                  <tr>
		  
		  
	      <td><a id="button_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>"></a><a class="button_jd" onclick="duoxuan_Submit(<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>, '<?php echo $this->_var['kattr']; ?>', '<?php echo $this->_var['filter_attr_count_num']; ?>', '<?php echo $this->_var['category']; ?>','<?php echo $this->_var['brand_id']; ?>', '<?php echo $this->_var['price_min']; ?>', '<?php echo $this->_var['price_max']; ?>', '<?php echo $this->_var['filter_attr_value']; ?>','<?php echo $this->_var['filter']; ?>');" >确定</a><a href="javascript:void(0);" onclick="hiddenDuoXuan('attr_group_dl_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>', '<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>');" class="button_jd" style="margin-left:10px;white-space:nowrap;">取消</a></td>
		  
		  
		  </tr>
                </table>
              </div>
            </dd>
          </dl>
          <script type="text/javascript">
	     duoxuan_a_valid[<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>] = 0;
	     init_more('attr_abox_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>', 'attr_more_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>', '24');	
	     <?php if ($this->_foreach['filter_attr_list']['iteration'] > 2): ?>
	     document.getElementById('attr_group_dl_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').style.display="none";
	     <?php endif; ?>
	     </script> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          
          <?php if ($this->_var['attr_group_more_count'] > 2): ?> 
          <script type="text/javascript">var attr_group_more_txt = "<?php echo $this->_var['attr_group_more_txt']; ?>";</script>
          <div class="attr_group_more" id="attr_group_more"> <a href="javascript:void(0);" onclick="Show_More_Attrgroup();" id="attr_group_more_text">更多选项（<?php echo $this->_var['attr_group_more_txt']; ?>）</a> </div>
          <script type="text/javascript" >init_position_left(); </script> 
          <?php endif; ?> 
          <script type="text/javascript" >init_position_left(); </script> 
        </div>
      </form>
      <div class="blank5"></div>
      <div class="blank40"></div>
      
      <?php endif; ?> 
       
       
      
      
      <div style="height:0px; line-height:0px; clear:both;"></div>
      <div class="right-extra"> 
      	<?php echo $this->fetch('library/goods_list.lbi'); ?> 
	  	<?php echo $this->fetch('library/pages.lbi'); ?> 
      </div>
      <div class="left"> 
	  	<?php echo $this->fetch('library/category_tree2.lbi'); ?> 
        <?php if ($this->_var['new_goods']): ?>
      	<div class="m limitbuy " id="limitbuy537">
        <div class="mt">
          <h2>新品推荐</h2>
        </div>
        <div class="mc">
          <div class="clock" id="clock537">
            <ul>
              <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
              <?php if ($this->_foreach['hot_goods']['iteration'] < 6): ?>
              <li class="fore<?php echo $this->_foreach['hot_goods']['iteration']; ?>" >
                <div class="p-img"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><img width="100" height="100" alt="" data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" /></a> 
                  <?php if ($this->_var['goods']['is_new']): ?>
                  <div class="pi7"></div>
                  <?php elseif ($this->_var['goods']['is_hot']): ?>
                  <div class="pi2"></div>
                  <?php endif; ?> 
                </div>
                <div class="rate"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                <div class="p-price"><strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong><del><?php echo $this->_var['goods']['market_price']; ?></del></div>
              </li>
              <?php if (! ($this->_foreach['hot_goods']['iteration'] == $this->_foreach['hot_goods']['total'])): ?>
              <div class="blank5"></div>
              <?php endif; ?> 
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
            </ul>
          </div>
          <div id="limit537"></div>
        </div>
      </div>
      	<?php endif; ?> 
      
      <div id="ad_left" reco_id="6" class="m m0 hide"></div>
       
      <?php if ($this->_var['hot_goods']): ?>
      <div class="m limitbuy " id="limitbuy537">
        <div class="mt">
          <h2>热卖商品</h2>
        </div>
        <div class="mc">
          <div class="clock" id="clock537">
            <ul>
              <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
              <li class="fore<?php echo $this->_foreach['hot_goods']['iteration']; ?>" >
                <div class="p-img"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><img width="100" height="100" alt="" data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" /></a> 
                  <?php if ($this->_var['goods']['is_hot']): ?>
                  <div class="pi7"></div>
                  <?php elseif ($this->_var['goods']['is_hot']): ?>
                  <div class="pi2"></div>
                  <?php endif; ?> 
                </div>
                <div class="rate"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                <div class="p-price"><strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong><del><?php echo $this->_var['goods']['market_price']; ?></del></div>
              </li>
              <?php if (! ($this->_foreach['hot_goods']['iteration'] == $this->_foreach['hot_goods']['total'])): ?>
              <div class="blank5"></div>
              <?php endif; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
            </ul>
          </div>
          <div id="limit537"></div>
        </div>
      </div>
      <?php endif; ?> <?php echo $this->fetch('library/top10.lbi'); ?> 
      
      <div id="alsobuy" class="hide m m0"></div>
       
       
    </div>
    
    <div style="height:0px; line-height:0px; clear:both;"></div>
  </div>
  <?php echo $this->fetch('library/history.lbi'); ?>
  <div class="blank"></div>
  <?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 			<?php echo $this->fetch('library/site_bar.lbi'); ?> <?php echo $this->fetch('library/arrive_notice_list.lbi'); ?></div>

<script>//收集skuId
var skuIds = [];
$('ul.list-h li[sku]').each(function(i){
    skuIds.push($(this).attr('sku'));
})

/* spu合并 begin */
var imgSize = 'n2';
if ( $('#plist').hasClass('plist-160') ) {
    imgSize = 'n2';
}
if ( $('#plist').hasClass('plist-220') ) {
    if ( $('#plist').hasClass('plist-160') ) {
        imgSize = 'n2';
    } else {
        imgSize = 'n7';
    }
}
if ( $('#plist').hasClass('plist-n7') ) {
    imgSize = 'n7';
}
if ( $('#plist').hasClass('plist-n8') ) {
    imgSize = 'n8';
}


$('.p-scroll').each(function() {
    var scroll = $(this).find('.p-scroll-wrap'),
        btnPrev = $(this).find('.p-scroll-prev'),
        btnNext = $(this).find('.p-scroll-next'),
        len = $(this).find('li').length;
    if ( len > 5 ) {
        btnPrev.css('display', 'inline');
        btnNext.css('display', 'inline');
        scroll.imgScroll({
            visible: 5,
            showControl: false,
            next: btnNext,
            prev: btnPrev
        });
    }
    var colors = scroll.find('img');
    colors.each(function() {
        $(this).mouseover(function() {
            var index = $(this).parent('li').parent('li').attr('index');
            var src = $(this).attr("src"),
                skuid = $(this).attr('data-skuid');
            scroll.find('a').removeClass('curr');
            $(this).parent('a').addClass('curr');
            var targetImg = $(this).parents('li').find('.p-img img').eq(0),
                targetImgLink = $(this).parents('li').find('.p-img a').eq(0),
                targetNameLink = $(this).parents('li').find('.p-name a').eq(0),
                targetFollowLink = $(this).parents('li').find('.product-follow a').eq(0);
            targetImg.attr( 'src', src.replace('\/n5\/', '\/'+imgSize+'\/') );
            targetImgLink.attr( 'href', targetImgLink.attr('href').replace(/\/\d{6,}/, '/'+skuid) );
            targetNameLink.attr( 'href', targetNameLink.attr('href').replace(/\/\d{6,}/, '/'+skuid) );
            targetFollowLink.attr( 'id', targetFollowLink.attr('id').replace(/coll\d{6,}/, 'coll'+skuid) );

        });
    });
});
$('#plist.plist-n7 .list-h>li').hover(function() {
    $(this).addClass('hover').find('.product-follow,.shop-name').show();
    $(this).find('.item-wrap').addClass('item-hover');
}, function() {
    $(this).removeClass('hover').find('.item-wrap').removeClass('item-hover');
    $(this).find('.product-follow,.shop-name').hide();
});


/* spu合并 end */
</script> 
<script type="text/javascript">
$(document).ready(function(){
var headHeight=580;  //这个高度其实有更好的办法的。使用者根据自己的需要可以手工调整。
 
var nav=$("#filter");        //要悬浮的容器的id
$(window).scroll(function(){
 
if($(this).scrollTop()>headHeight){
nav.addClass("cat-nav-fixed");   //悬浮的样式
}
else{
nav.removeClass("cat-nav-fixed");
}
})
})
</script> 
 
<script type="text/javascript">
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
