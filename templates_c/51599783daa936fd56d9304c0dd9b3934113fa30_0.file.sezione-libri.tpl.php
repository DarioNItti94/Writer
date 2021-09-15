<?php
/* Smarty version 3.1.39, created on 2021-09-15 19:15:56
  from 'C:\xampp\htdocs\Writer\templates\sezione-libri.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61422a4cc6ab05_75429219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51599783daa936fd56d9304c0dd9b3934113fa30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\sezione-libri.tpl',
      1 => 1631723805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-admin.tpl' => 1,
  ),
),false)) {
function content_61422a4cc6ab05_75429219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header-admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Admin Dashboard'), 0, false);
?>


<!-- partial -->
<!-- partial:../../partials/_sidebar.html -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Aggiungi un libro</h4>
                        <form enctype="multipart/form-data" id="my_form" action="insert_book.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername1">ISBN</label>
                                <input class="form-control" type="text" id="isbn" name="isbn">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titolo</label>
                                <input class="form-control" type="text" id="title" name="titolo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Edizione</label>
                                <input type="text" class="form-control" id="edizione" name="edizione">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Anno di Pubblicazione</label>
                                <input type="text" class="form-control" id="anno" placeholder="YYYY-MM-DD"
                                       name="pubblicazione">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Editore</label>
                                <input type="text" class="form-control" id="editore" name="editore">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantità</label>
                                <input class="form-control" type="number" id="quantita" name="quantita" min="1"
                                       max="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prezzo</label>
                                <input type="text" class="form-control" id="prezzo" name="prezzo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <select id="categoria" name="categoria" class="form-control" form="my_form">
                                    <option value="1">Avventura</option>
                                    <option value="2">Fantasy</option>
                                    <option value="3">Romanzi</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Autore</label>
                                <input type="text" class="form-control" id="autore" name="autore">
                            </div>
                            <input type="file" name="image">
                            <br><br>
                            <input type="submit" name="submit" class="btn btn-primary mr-2" value="Aggiungi">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tutti i prodotti</h4>
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
                                        Autore
                                    </th>
                                    <th>
                                        ISBN
                                    </th>
                                    <th>
                                        Modifica
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($_smarty_tpl->tpl_vars['books']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value['pic'];?>
" width="50px" height="70px">
                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['book']->value['quantity'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
 €
                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['book']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['book']->value['last_name'];?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['book']->value['isbn'];?>

                                            </td>
                                            <td>
                                                <a href="modify.php?id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
" class="btn btn-primary">
                                                    Elimina
                                                </a>
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
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->

<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->

<?php }
}
