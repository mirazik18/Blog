<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 16:48:04
  from 'C:\OSPanel\domains\blog.loc\app\Views\admin\blocks\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d95fc144e32d0_91553072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af8ea30fe08eed1bd40780eeaa4ae5bfa1c4310' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\admin\\blocks\\head.tpl',
      1 => 1570110457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:admin/blocks/navbar.tpl' => 1,
  ),
),false)) {
function content_5d95fc144e32d0_91553072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admin/blocks/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value['flashes'], 'flash');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flash']->value) {
?>

        <div class="mb-3 alert alert-<?php echo $_smarty_tpl->tpl_vars['flash']->value['type'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['flash']->value['message'];?>

        </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}
