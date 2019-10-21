<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:07:31
  from 'C:\OSPanel\domains\blog.loc\app\Views\admin\forms\categories_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d9600a32faaa6_30266762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a24d483b65e90c3c171b5e875732f147f0a414' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\admin\\forms\\categories_form.tpl',
      1 => 1570111649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d9600a32faaa6_30266762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="/admin/categories/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">

        <div class="form-group">
            <input
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Название"
                    value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"
                    required
            >
        </div>

        <input type="text" hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">

        <button class="btn btn-primary" type="submit">Отправить</button>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
