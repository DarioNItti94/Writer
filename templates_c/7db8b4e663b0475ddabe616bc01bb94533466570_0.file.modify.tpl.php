<?php
/* Smarty version 3.1.39, created on 2021-09-13 09:52:32
  from 'C:\xampp\htdocs\Writer\templates\modify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f0340b2a5b9_49035207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db8b4e663b0475ddabe616bc01bb94533466570' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\modify.tpl',
      1 => 1631519551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-admin.tpl' => 1,
  ),
),false)) {
function content_613f0340b2a5b9_49035207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Admin Dashboard'), 0, false);
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <br>
                    <div class="new-prod">
                        <h2 style="margin-left: 500px;">Sei sicuro di voler eliminare il prodotto?</h2>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form action="del-book.php" method="post">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
" name="book">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['author']->value['id'];?>
" name="author">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['publisher_id'];?>
" name="pub">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" name="category">
                                        <input class="btn btn-primary" type="submit" value="Sì" name="elimina" style="margin-left: 150px">
                                    </form>
                                </div>
                                <div class="col">
                                    <a href="all-product.php" class="btn btn-primary" type="submit"
                                       style="margin-left: 300px">No<a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
