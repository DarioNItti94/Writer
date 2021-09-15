<?php
/* Smarty version 3.1.39, created on 2021-09-15 19:13:56
  from 'C:\xampp\htdocs\Writer\templates\admin-user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614229d487bc60_61121670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e226506ca0f64fe16b9057c61e7fad2c1896044e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\admin-user.tpl',
      1 => 1631726035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-admin.tpl' => 1,
  ),
),false)) {
function content_614229d487bc60_61121670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Admin Dashboard'), 0, false);
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Messaggi</h4>
                        <div class="list-wrapper pt-2">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <?php if ((!empty($_smarty_tpl->tpl_vars['msgs']->value))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                <li>
                                    <div class="container">
                                        <div class="row">

                                                    <div class="col">
                                                        <label class="form-check-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['msg']->value['email'];?>

                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-check-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['msg']->value['nome'];?>

                                                        </label>
                                                    </div>
                                                    <div class="col-5">
                                                        <label class="form-check-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['msg']->value['text'];?>

                                                        </label>
                                                    </div>

                                        </div>
                                    </div>

                                </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <div></div>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Utenti iscritti alla newsletter</h4>
                        <div class="list-wrapper pt-2">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li> <?php if ((!empty($_smarty_tpl->tpl_vars['newses']->value))) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newses']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
                                            <label class="form-check-label">
                                                <?php echo $_smarty_tpl->tpl_vars['news']->value['email'];?>

                                            </label>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <div></div>
                                    <?php }?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rispondi agli utenti qui</h4>
                        <form id="my_form" action="Mailer.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Email Utente</label>
                                <input class="form-control" type="text" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome Utente</label>
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Corpo email</label>
                                <textarea type="text" class="form-control" id="message" name="message"></textarea>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mr-2" value="Invia">
                        </form>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
    </div>

</div>
</div>
</div><?php }
}
