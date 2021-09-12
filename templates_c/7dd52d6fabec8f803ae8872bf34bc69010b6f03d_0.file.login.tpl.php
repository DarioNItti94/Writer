<?php
/* Smarty version 3.1.39, created on 2021-09-12 16:00:14
  from 'C:\xampp\htdocs\Writer\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613e07ee55c3b1_62022515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dd52d6fabec8f803ae8872bf34bc69010b6f03d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\login.tpl',
      1 => 1631455101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_613e07ee55c3b1_62022515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Accedi'), 0, false);
?>


		<!-- Breadcrumbs Area Start --> 
        <!-- Loging Area Start -->
        <div class="login-account section-padding">
           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <form action="RegistrationController.php" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                CREA UN ACCOUNT
                            </h2>
                            <div class="form-row">
                                <input type="text" placeholder="Nome" name="nome">
                                <br><br>
                                <input type="text" placeholder="Cognome" name="cognome" >
                                <br><br>
                                <input type="email" placeholder="Email" name="email-sign">
                                <br><br>
                                <input type="password" placeholder="Password" name="password-sign">
                            </div>
                                <br>
                            <div>
                                <input name="submitcreate"  id="submitcreate" type="submit" class="btn-default"  value="Registrati" >
                                                         </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <form action="Autentication.php" class="create-account-form" method="post">
                            <h2 class="heading-title">
                               SEI GIÀ REGISTRATO?
                            </h2>
                            <p class="form-row">
                                <input type="email" placeholder="Email" name="email-log">
                            </p>
                            <p class="form-row">
                                <input type="password" placeholder="Password" name="password-log">
                            </p>
                            <div class="submit">
                                <input name="login" type="submit"  value="Accedi" class="btn-default">
                            </div>

                       </form>
                    </div>
                </div>               
           </div>
        </div>
        <!-- Loging Area End -->
		<!-- Footer Area Start -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
