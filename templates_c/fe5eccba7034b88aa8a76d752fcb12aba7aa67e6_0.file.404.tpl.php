<?php
/* Smarty version 3.1.39, created on 2021-09-16 11:12:02
  from 'C:\xampp\htdocs\Writer\templates\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61430a623935a6_12040380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5eccba7034b88aa8a76d752fcb12aba7aa67e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\404.tpl',
      1 => 1631783521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61430a623935a6_12040380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'404'), 0, false);
?>

<!-- Breadcrumbs Area Start -->
        <!-- 404 Error Page Start -->
        <div class="error-text-area section-padding">
			<img alt="" src="img/404-page.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="error-text text-center">
							<h1>OPPS! PAGE NOT FOUND</h1><br>
							<h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3><br>
							<a href="index.php">BACK TO HOME PAGE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
       <!-- 404 Error Page End -->
		<!-- Footer Area Start -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
