<?php
/* Smarty version 3.1.39, created on 2021-09-15 09:51:19
  from 'C:\xampp\htdocs\Writer\templates\Success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6141a5f7119416_79856979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7121cca6562b86888bb9f397d5328df91acc0d22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\Success.tpl',
      1 => 1631692277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6141a5f7119416_79856979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Thank you!!'), 0, false);
?>

<div class="jumbotron text-center">
    <h1 class="display-3">Thank You!</h1>
    <p class="lead"> Il tuo ordine è stato preso in carico. <strong>Controlla la tua email!</strong></p>
    <hr>
    <p>
        Hai problemi? <a href="Contact.php">Contattaci</a>
    </p>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="index.php" role="button">Vai alla Homepage</a>
    </p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
