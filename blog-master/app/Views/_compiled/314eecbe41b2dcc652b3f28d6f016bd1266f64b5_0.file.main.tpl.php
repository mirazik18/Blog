<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 18:11:30
  from 'C:\OSPanel\domains\blog.loc\app\Views\layout\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d960fa27fc6d1_33885908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '314eecbe41b2dcc652b3f28d6f016bd1266f64b5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\layout\\main.tpl',
      1 => 1570115324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/navbar.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d960fa27fc6d1_33885908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:global/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
