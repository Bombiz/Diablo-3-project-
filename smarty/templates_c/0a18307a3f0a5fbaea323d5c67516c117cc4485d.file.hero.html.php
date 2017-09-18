<?php /* Smarty version Smarty-3.1.14, created on 2017-09-17 21:41:51
         compiled from "smarty\templates\hero.html" */ ?>
<?php /*%%SmartyHeaderCode:2805959beb85d097d65-80071011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a18307a3f0a5fbaea323d5c67516c117cc4485d' => 
    array (
      0 => 'smarty\\templates\\hero.html',
      1 => 1505684509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2805959beb85d097d65-80071011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59beb85d1c4658_52213428',
  'variables' => 
  array (
    'hero' => 0,
    'battleTag' => 0,
    'allskills' => 0,
    'aRow' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59beb85d1c4658_52213428')) {function content_59beb85d1c4658_52213428($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['hero']->value->get_name();?>
</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <style>
  body {
background-image: url(http://images7.alphacoders.com/319/319929.jpg)
}
    h1,h2 {
      color:blue;
      text-align:center;
    }
    
    .selected{
        background: #333;
        background: rgba(0,0,0,.8);
        border-radius: 5px;
        color: #fff;
        left: 5%;
        padding: 5px 15px;
        position: absolute;
        z-index: 98;
        width: 340px;
        display: none;
    }

/*    h3 {
     
height: 40px;
  width: 320px;
  padding: 0 15px;
  padding-top: 0px;
  padding-right: 15px;
  padding-bottom: 0px;
  padding-left: 15px;
  background: url("../images/ui/tooltip-title.jpg") no-repeat;
  background-image: url(http://us.battle.net/d3/static/images/ui/tooltip-title.jpg);
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: no-repeat;
  background-repeat-y: no-repeat;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: initial;
    }*/


}

  
  </style>



  <?php $_smarty_tpl->tpl_vars['allskills'] = new Smarty_variable($_smarty_tpl->tpl_vars['hero']->value->get_skills(), null, 0);?>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
</head>
<body>
 <h1><?php echo $_smarty_tpl->tpl_vars['battleTag']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['hero']->value->get_name();?>
</h1>
 <h2>
   Hero ID: <?php echo $_smarty_tpl->tpl_vars['hero']->value->get_id();?>
<br />
   Class: <?php echo $_smarty_tpl->tpl_vars['hero']->value->get_class();?>
<br />
   Level: <?php echo $_smarty_tpl->tpl_vars['hero']->value->get_level();?>
<br />
   Gender: <?php echo $_smarty_tpl->tpl_vars['hero']->value->get_gender();?>
<br />
   Hardcore: <?php echo $_smarty_tpl->tpl_vars['hero']->value->get_hardcore();?>
<br />
 </h2>
 <div style="border: solid; background: #332; background: rgba(80,45,30,.8); border-radius: 5px; width: 300px;">
 <ul>
  <?php  $_smarty_tpl->tpl_vars['aRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allskills']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aRow']->key => $_smarty_tpl->tpl_vars['aRow']->value){
$_smarty_tpl->tpl_vars['aRow']->_loop = true;
?>
  <li> 

  <span class='list' style="color: white;">
    <img src="http://media.blizzard.com/d3/icons/skills/64/wizard_magicmissile.png">
    
    <span class='selected'><small style="font-family: sans-serif; font-size: 25px; border: 2.5px solid gold;"><?php echo $_smarty_tpl->tpl_vars['aRow']->value['name'];?>
</small> <br/><?php echo $_smarty_tpl->tpl_vars['aRow']->value['description'];?>
 <br/><br/><hr/> <small style="font-family: sans-serif; font-size: 18px; border: 2.5px solid gold;"><?php echo $_smarty_tpl->tpl_vars['allskills']->value[1][$_smarty_tpl->tpl_vars['count']->value]['name'];?>
</small> <br/><?php echo $_smarty_tpl->tpl_vars['allskills']->value[1][$_smarty_tpl->tpl_vars['count']->value]['description'];?>
</span>
    </span>
      <?php echo $_smarty_tpl->tpl_vars['aRow']->value['name'];?>
<br />
  <?php echo $_smarty_tpl->tpl_vars['allskills']->value[1][$_smarty_tpl->tpl_vars['count']->value]['name'];?>

  </li><br />
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
  <?php } ?>
</ul>
</div>
<a href="search.html" id="link">Back to browse</a>  
 <script>
    $( ".list" ).hover(
      function() {
        $(this).children(".selected").show();
      }, function() {
        $(this).children(".selected").hide();
      }
      );
  </script>
</body>
</html>
<?php }} ?>