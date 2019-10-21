<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-02 18:02:01
  from 'C:\OSPanel\domains\blog.loc\app\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d94bbe972a373_25820913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5201421574625817ca6d3b107708ef796c2d0f78' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\admin\\dashboard.tpl',
      1 => 1570028515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d94bbe972a373_25820913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="mb-3 text-right">
        <a href="/admin/posts/create" class="btn btn-success">Создать пост</a>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>

        <div class="card card-body mb-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                <span class="badge badge-secondary">
                    <?php echo $_smarty_tpl->tpl_vars['post']->value['category']['name'];?>

                </span>

                    <strong><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</strong>

                </div>

                <small class="text-muted">
                    <a href="/admin/users/<?php echo $_smarty_tpl->tpl_vars['post']->value['author']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['author']['name'];?>
</a>, <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>

                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <a href="/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-primary" target="_blank">
                    Просмотреть
                </a>
                <a href="/admin/posts/update/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-secondary">
                    Изменить
                </a>
                <a href="/admin/posts/delete/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-danger">
                    Удалить
                </a>

            </div>

        </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
