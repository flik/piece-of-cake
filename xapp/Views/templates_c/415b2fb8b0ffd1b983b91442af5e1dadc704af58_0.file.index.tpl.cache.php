<?php
/* Smarty version 3.1.31, created on 2017-01-29 13:38:27
  from "D:\xampp\htdocs\seek\s\xapp\Views\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588df053a8a912_63561824',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '415b2fb8b0ffd1b983b91442af5e1dadc704af58' => 
    array (
      0 => 'D:\\xampp\\htdocs\\seek\\s\\xapp\\Views\\templates\\index.tpl',
      1 => 1485453464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_588df053a8a912_63561824 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\seek\\s\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_select_date')) require_once 'D:\\xampp\\htdocs\\seek\\s\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) require_once 'D:\\xampp\\htdocs\\seek\\s\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_time.php';
echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'D:\\\\xampp\\\\htdocs\\\\seek\\\\s\\\\vendor\\\\smarty\\\\smarty\\\\libs\\\\plugins\\\\function.html_options.php\';
?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';
$_smarty_tpl->compiled->nocache_hash = '8504588df0530284a1_94633610';
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<h1>Pages</h1>
<p>----</p>
<PRE>
 
    The current date and time is <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>


    The value of global assigned variable $SCRIPT_NAME is <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>


    Example of accessing server environment variable SERVER_NAME: <?php echo $_SERVER['SERVER_NAME'];?>


    The value of {$Name} is <b><?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
</b>

variable modifier example of {$Name|upper}

<b><?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'Name\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
</b>


An example of a section loop:

    <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php
$__section_outer_0_saved = isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\'] : false;
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars[\'SureName\']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars[\'__smarty_section_outer\'] = new Smarty_Variable(array());
if ($__section_outer_0_total != 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']++){
$_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\'] = $__section_outer_0_iteration;
?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php if ((1 & (isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null) / 2)) {?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

            <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo (isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\'] : null);?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
 . <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'SureName\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null)];?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
  
        <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php } else { ?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

            <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo (isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\'] : null);?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
 * <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'SureName\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null)];?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
 
        <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php }?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php }} else {
 ?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        none
    <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php
}
if ($__section_outer_0_saved) {
$_smarty_tpl->tpl_vars[\'__smarty_section_outer\'] = $__section_outer_0_saved;
}
?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>


    An example of section looped key values:

    <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars[\'contacts\']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars[\'__smarty_section_sec1\'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']++){
?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        phone: <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'contacts\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] : null)][\'phone\'];?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        <br>

            fax: <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'contacts\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] : null)][\'fax\'];?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        <br>

            cell: <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'contacts\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] : null)][\'cell\'];?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

        <br>
    <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars[\'__smarty_section_sec1\'] = $__section_sec1_1_saved;
}
?>/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

    <p>

        testing strip tags
        <table border=0><tr><td><A HREF="<?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo $_smarty_tpl->tpl_vars[\'link\']->value;?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>
"><font color="red">This is a test </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
    <?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

</form>

This is an example of the html_select_time function:

<form>
    <?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

</form>

This is an example of the html_options function:

<form>
    <select name=states>
        <?php echo '/*%%SmartyNocache:8504588df0530284a1_94633610%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'option_values\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'option_selected\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'option_output\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:8504588df0530284a1_94633610%%*/';?>

    </select>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
