<?php
/* Smarty version 3.1.39, created on 2021-09-14 16:57:04
  from 'C:\xampp\htdocs\Writer\templates\order-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6140b8408afb72_82322077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '076f22d84c71c5f4ce099e85311ff4eb5a0e1e18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\order-details.tpl',
      1 => 1631628079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-admin.tpl' => 1,
  ),
),false)) {
function content_6140b8408afb72_82322077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Admin Dashboard'), 0, false);
?>



<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Copertina
                                </th>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Quantità
                                </th>
                                <th>
                                    Prezzo
                                </th>

                                <th>
                                    ISBN
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ((!empty($_smarty_tpl->tpl_vars['books']->value))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['pic'];?>
" width="300" height="320">
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value['title'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value['quantity'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value['subtotal'];?>
€
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value['isbn'];?>

                                        </td>

                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <div></div>
                            <?php }?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
        <a href="Dashboard.php" class="btn btn-primary" style="margin-left: 30px">
            Torna Indietro
        </a>
    </div>
</div><?php }
}
