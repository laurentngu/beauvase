<?php /* Smarty version Smarty-3.1.19, created on 2018-06-05 21:49:41
         compiled from "C:\wamp64\www\admin357xfcm9i\themes\default\template\controllers\themes_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169995b1767e599deb1-10621690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '856da9c2f755207783505fe64fbe5d0c54fbac65' => 
    array (
      0 => 'C:\\wamp64\\www\\admin357xfcm9i\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1528179153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169995b1767e599deb1-10621690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b1767e59eede5_39278683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1767e59eede5_39278683')) {function content_5b1767e59eede5_39278683($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
