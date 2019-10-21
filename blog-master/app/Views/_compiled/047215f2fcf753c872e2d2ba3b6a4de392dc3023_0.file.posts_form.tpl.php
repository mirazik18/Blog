<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-02 18:31:57
  from 'C:\OSPanel\domains\blog.loc\app\Views\admin\forms\posts_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d94c2ed5c0639_63086863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '047215f2fcf753c872e2d2ba3b6a4de392dc3023' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\admin\\forms\\posts_form.tpl',
      1 => 1570029340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5d94c2ed5c0639_63086863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="/admin/posts/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">

        <div class="form-group">
            <input
                    type="text"
                    class="form-control"
                    name="title"
                    placeholder="Заголовок"
                    value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
"
                    required
            >
        </div>

        <div class="form-group">
            <select name="category_id" class="form-control" required>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>

                    <option
                            value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['id'] == $_smarty_tpl->tpl_vars['category']->value['id']) {?>
                                selected
                            <?php }?>
                    >
                        <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                    </option>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </select>
        </div>

        <div class="form-group">
            <textarea name="content" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
        </div>

        <input type="text" hidden name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <input type="text" hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">

        <button class="btn btn-primary" type="submit">Отправить</button>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
