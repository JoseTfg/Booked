<?php /* Smarty version Smarty-3.1.16, created on 2016-03-02 01:12:41
         compiled from "C:\Program Files (x86)\Ampps\www\booked\tpl\Calendar\mycalendar.common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649356d62ff9633b52-41421931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30f56b7f135f879b8bd610633a929ed75a9e2dd3' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\booked\\tpl\\Calendar\\mycalendar.common.tpl',
      1 => 1456495804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649356d62ff9633b52-41421931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IsSubscriptionAllowed' => 0,
    'IsSubscriptionEnabled' => 0,
    'SubscriptionUrl' => 0,
    'Calendar' => 0,
    'reservation' => 0,
    'view' => 0,
    'DisplayDate' => 0,
    'ScheduleId' => 0,
    'ResourceId' => 0,
    'date' => 0,
    'DayNames' => 0,
    'DayNamesShort' => 0,
    'MonthNames' => 0,
    'MonthNamesShort' => 0,
    'TimeFormat' => 0,
    'DateFormat' => 0,
    'FirstDay' => 0,
    'minTime' => 0,
    'maxTime' => 0,
    'myCal' => 0,
    'ResourceGroupsAsJson' => 0,
    'SelectedGroupNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d62ff96955e2_24666291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d62ff96955e2_24666291')) {function content_56d62ff96955e2_24666291($_smarty_tpl) {?>
<div class="calendar-subscription">
<?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value) {?>
	<a href="#" id="turnOffSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-minus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
	<?php if ($_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
		<a id="subscribeTocalendar" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-share.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscribeToCalendar'),$_smarty_tpl);?>
</a>
		<br/>URL: <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
	<?php } else { ?>
		<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscriptionsAreDisabled'),$_smarty_tpl);?>
</span>
	<?php }?>
<?php } else { ?>
	<a href="#" id="turnOnSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-plus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
<?php }?>
</div>

<div id="calendar"></div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.qtip.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"calendar.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/fullcalendar.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/edit.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>


<script type="text/javascript">
$(document).ready(function() {

	var reservations = [];
	<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Calendar']->value->Reservations(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
		reservations.push({
			id: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
',
			title: '<?php echo strtr($_smarty_tpl->tpl_vars['reservation']->value->DisplayTitle, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
			start: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'key'=>'fullcalendar'),$_smarty_tpl);?>
',
			end: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'key'=>'fullcalendar'),$_smarty_tpl);?>
',
			url: 'reservation.php?rn=<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
',
			allDay: false,
			color: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Color;?>
',
			textColor: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->TextColor;?>
',
			className: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Class;?>
'
		});
	<?php } ?>

	var options = {
					view: '<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
',
					year: <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Year();?>
,
					month: <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Month();?>
,
					date: <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Day();?>
,
					dayClickUrl: '<?php echo Pages::RESERVATION;?>
?sid=<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
&rid=<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
&rd=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl);?>
',
					dayNames: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['DayNames']->value),$_smarty_tpl);?>
,
					dayNamesShort: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['DayNamesShort']->value),$_smarty_tpl);?>
,
					monthNames: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['MonthNames']->value),$_smarty_tpl);?>
,
					monthNamesShort: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['MonthNamesShort']->value),$_smarty_tpl);?>
,
					timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
',
					dayMonth: '<?php echo $_smarty_tpl->tpl_vars['DateFormat']->value;?>
',
					firstDay: <?php echo $_smarty_tpl->tpl_vars['FirstDay']->value;?>
,
					subscriptionEnableUrl: '<?php echo Pages::MY_CALENDAR;?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo PersonalCalendarActions::ActionEnableSubscription;?>
',
					subscriptionDisableUrl: '<?php echo Pages::MY_CALENDAR;?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo PersonalCalendarActions::ActionDisableSubscription;?>
',
					minTime: '<?php echo $_smarty_tpl->tpl_vars['minTime']->value;?>
',
					maxTime: '<?php echo $_smarty_tpl->tpl_vars['maxTime']->value;?>
',
					myCal: '<?php echo $_smarty_tpl->tpl_vars['myCal']->value;?>
'
				};

	var calendar = new Calendar(options, reservations);
	calendar.init();
	calendar.bindResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SelectedGroupNode']->value)===null||$tmp==='' ? 0 : $tmp);?>
);	
});
</script>	
<?php }} ?>
