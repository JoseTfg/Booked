<?php /* Smarty version Smarty-3.1.16, created on 2016-01-27 18:50:24
         compiled from "C:\Program Files (x86)\Ampps\www\booked\tpl\Dashboard\announcements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031956a91170eee958-97744327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6e5e01c897cace88720a71429e703e51474dd6' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\booked\\tpl\\Dashboard\\announcements.tpl',
      1 => 1450328288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031956a91170eee958-97744327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Announcements' => 0,
    'each' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a91170f06258_18939386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a91170f06258_18939386')) {function content_56a91170f06258_18939386($_smarty_tpl) {?>
<div class="dashboard" id="announcementsDashboard">
	<div id="announcementsHeader" class="dashboardHeader">
		<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Announcements"),$_smarty_tpl);?>
</a>
	</div>
	<div class="dashboardContents">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['each']->key => $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
?>
			    <li><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['each']->value)));?>
</li>
			<?php }
if (!$_smarty_tpl->tpl_vars['each']->_loop) {
?>
				<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoAnnouncements"),$_smarty_tpl);?>
</div>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>
