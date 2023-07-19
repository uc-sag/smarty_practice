<?php
/* Smarty version 4.3.1, created on 2023-07-19 09:20:33
  from 'C:\wamp64\www\smarty_practice\templates\example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b7aae19cc686_49275534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e83ad79a7d8d11c8441ceb09e7f25c730fee66f' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty_practice\\templates\\example.tpl',
      1 => 1689758429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64b7aae19cc686_49275534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),1=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),3=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),4=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'foo.conf', null, 0);
?>


<html>
<head>

<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
</head>

<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'bodyBgColor');?>
">


<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>




<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>

<?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>



<?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>

 <br>

<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
  Welcome, Sagar
<?php } else { ?>
  Please login 
<?php }?>

<?php echo smarty_function_mailto(array('address'=>"sagar@example.com"),$_smarty_tpl);?>



<?php echo $_smarty_tpl->tpl_vars['value']->value*2;?>

<?php echo ($_smarty_tpl->tpl_vars['value']->value+5)/2;?>


<?php echo '<script'; ?>
>
   // the following braces are ignored by Smarty
   // since they are surrounded by whitespace
   function foobar { 
    alert('foobar!');
   }
  
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>

<br>
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>





<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>



<?php echo (defined('MY_CONST_VAL') ? constant('MY_CONST_VAL') : null);?>


<br>
{}
<br>
<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);?>


<br>
<?php echo ($_smarty_tpl->tpl_vars['articleTitle']->value).('yesterday');?>

 <br>

<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['articleTitle']->value, $tmp);?>


<br>
<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['para']->value, $tmp)+1);?>


<br>
<?php echo smarty_modifier_date_format(time());?>
 
<br>
<?php echo smarty_modifier_date_format(time(),"%D");?>

<br>
<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>

<br>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value);?>

<br>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%A, %B %e, %Y");?>

<br>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,$_smarty_tpl->tpl_vars['config']->value['time']);?>

<br>
<?php echo $_smarty_tpl->tpl_vars['articleTitle2']->value;?>

<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['articleTitle2']->value,"/[\r\t\n]/"," ");?>



<br>
<br>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle']->value,'delayed','Vineyard');?>

<br>
<?php echo $_smarty_tpl->tpl_vars['number']->value;?>

<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['number']->value);?>

<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['number']->value);?>




</body>
</html><?php }
}
