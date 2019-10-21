<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-03 17:25:05
  from 'C:\OSPanel\domains\blog.loc\app\Views\admin\blocks\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d9604c1bbdeb6_44205966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c40954369098dd25ec20a2506f7fb47c9593fc6e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\blog.loc\\app\\Views\\admin\\blocks\\navbar.tpl',
      1 => 1570112698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9604c1bbdeb6_44205966 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="/admin"><?php echo $_smarty_tpl->tpl_vars['g']->value['site_name'];?>
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/categories">Категории</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Выход</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
