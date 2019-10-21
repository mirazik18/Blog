<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 18:40:22
  from 'C:\OSPanel\domains\blog.loc\app\Views\posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d961666b61e33_42082141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79de9921fce49dc77f36718914be5d460ecd2f45' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\posts.tpl',
      1 => 1570117171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d961666b61e33_42082141 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
    <div class="card mb-3">

        <div class="card-header">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>

        </div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

        </div>

    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>

    <div class="d-flex align-items-center justify-content-center">

        <nav>
            <ul class="pagination">

                <li class="page-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value-1 < 1) {?>disabled<?php }?>">
                    <a class="page-link" href="/page/<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">Назад</a>
                </li>

                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['pages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['pages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>disabled<?php }?>">
                        <a class="page-link" href="/page/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                    </li>
                <?php }
}
?>

                <li class="page-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value+1 > $_smarty_tpl->tpl_vars['pages']->value) {?>disabled<?php }?>">
                    <a class="page-link" href="/page/<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">Вперед</a>
                </li>

            </ul>
        </nav>

    </div>

<?php }
}
}
