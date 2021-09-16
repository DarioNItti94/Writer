<?php
/* Smarty version 3.1.39, created on 2021-09-16 11:41:33
  from 'C:\xampp\htdocs\Writer\templates\admin-dash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143114deee2b6_83334233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508480e64fab67d92e5b4abd3d5f8552d9fb2387' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\admin-dash.tpl',
      1 => 1631785292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-admin.tpl' => 1,
  ),
),false)) {
function content_6143114deee2b6_83334233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Admin Dashboard'), 0, false);
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Benvenuto <?php echo $_smarty_tpl->tpl_vars['admin']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['admin']->value['last_name'];?>
</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Libri nel sistema</p>
                                <p class="fs-30 mb-2"><?php echo $_smarty_tpl->tpl_vars['read']->value;?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Ordini di oggi</p>
                                <p class="fs-30 mb-2"><?php echo $_smarty_tpl->tpl_vars['order_num']->value;?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Numero recensioni</p>
                                <p class="fs-30 mb-2"><?php echo $_smarty_tpl->tpl_vars['review']->value;?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Numero Utenti</p>
                                <p class="fs-30 mb-2"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recensioni</h4>
                        <div class="list-wrapper pt-2">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li>
                                    <table class="table table-responsive">
                                        <thead>
                                        <tr>
                                            <th>Libro</th>
                                            <th>Utente</th>
                                            <th>Data</th>
                                            <th>Voto</th>
                                            <th>Recensione</th>
                                        </tr>
                                        </thead>
                                        <?php if ((!empty($_smarty_tpl->tpl_vars['reviews']->value))) {?>
                                            <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</td>
                                                    <td class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['review']->value['email'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['review']->value['submission_date'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['review']->value['body'];?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </tbody>
                                        <?php } else { ?>
                                            <div></div>
                                        <?php }?>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Ordini</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>N° ordine</th>
                                    <th>Utente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Dettagli</th>
                                    <th>Spedisci</th>
                                </tr>
                                </thead>
                                <?php if ((!empty($_smarty_tpl->tpl_vars['orders']->value))) {?>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                                            <td class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['submission_date'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</td>
                                            <td class="font-weight-medium">
                                                <a onclick="location.href='orders-details.php?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
'"
                                                   type="submit" class="badge badge-success">Dettagli ordine</a>
                                            </td>
                                            <td class="font-weight-medium">
                                                <form id="my_form" action="order_mail_shipped.php" method="post">
                                                    <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
">
                                                    <a href="#" onclick="location.href='send_order.php?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
' "
                                                       class="badge badge-success">Clicca Per
                                                        Spedire</a>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </tbody>
                                <?php } else { ?>
                                    <div></div>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <!-- partial -->
                </div>
            </div>
        </div>
    </div>
</div>



<?php }
}
