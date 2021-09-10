<?php
/* Smarty version 3.1.39, created on 2021-09-10 18:15:07
  from 'C:\xampp\htdocs\Writer\templates\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613b848b7e7078_33500329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '076687aaa9c71d922962288afd0d90f80e725ccd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\my-account.tpl',
      1 => 1631288721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_613b848b7e7078_33500329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Il tuo profilo'), 0, false);
?>

<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.tpl">HOME</a></li>
                            <li><a href="shop.html">FEATURED</a></li>
                            <li><a href="shop.html">REVIEW BOOK</a></li>
                            <li><a href="about.html">ABOUT AUTHOR</a></li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.tpl">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area Start -->
<!-- My Account Area Start -->
<div class="my-account-area section-padding">
    <div class="container">
        <div class="section-title2">
            <h2>Il tuo account</h2>
            <div class=""
            <p>Benvenuto<strong> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 </strong>nel tuo account. Qui puoi gestire tutte le tue informazioni personali
                e gli ordini.</p>
        </div>
        <div class="row">
            <div class="addresses-lists">
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-list-ol"></i>
                                        <span>I miei ordini</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Ecco gli ordini che hai effettuato</p>
                                        <div class="order-history">
                                            <div class="alert">
                                                <section>
                                                    <br>
                                                    <?php if ((!empty($_smarty_tpl->tpl_vars['orders']->value))) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                                            <div class="order card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-4">
                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value['pic'];?>
" alt="Order" width="150" height="170" style="float: left;">
                                                                        </div>
                                                                        <div class="col-12 col-md-8 option">
                                                                            <h3 class="card-title" style="margin-bottom: -10px"><?php echo $_smarty_tpl->tpl_vars['order']->value['title'];?>
</h3>
                                                                            <br><br>
                                                                            <p>Stato: <?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</p>
                                                                            <h3 class="card-text" id="price"><?php echo $_smarty_tpl->tpl_vars['order']->value['subtotal'];?>
€</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php } else { ?>
                                                        <div></div>
                                                    <?php }?>
                                                </section>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-file-o"></i>
                                        <span>I miei indirizzi</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="coupon-info">
                                        <p class="coupon-text">I tuoi Indirizzi</p>
                                        <div class="order-history">
                                            <div class="alert">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['addresses']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'addr');
$_smarty_tpl->tpl_vars['addr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addr']->value) {
$_smarty_tpl->tpl_vars['addr']->do_else = false;
?>
                                                        <div class="order card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-6 col-md-4">
                                                                        <h4><?php echo $_smarty_tpl->tpl_vars['addr']->value['street'];?>
</h4>
                                                                    </div>

                                                                    <div class="col-12 col-md-8 option">
                                                                        <form method="post" action="del_addr.php">
                                                                            <input type="hidden" name="id_addr" value="<?php echo $_smarty_tpl->tpl_vars['addr']->value['id'];?>
">
                                                                            <input class="btn-input btn" type="submit" value="Elimina Indirizzo">
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <div></div>
                                                <?php }?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <i class="fa fa-building"></i>
                                        <span>Aggiungi il tuo indirizzo</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Aggiungi un nuovo indirizzo.</p>
                                        <form action="Add-Address.php" method="post">
                                            <p class="form-row">
                                                <input type="text" placeholder="Casa/Ufficio" name="name"/>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" placeholder="Nome e Cognome" name="utente"/>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" placeholder="Info Opzionali" name="info"/>
                                            </p>

                                            <p class="form-row">
                                                <input type="text" placeholder="Via" name="via"/>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" placeholder="Città" name="citta"/>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" placeholder="Provincia" name="prov" maxlength="2"
                                                       size="2"/>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" placeholder="Cap" name="cap"/>
                                            </p>
                                            <div class="form-row">
                                                <input type="text" placeholder="Stato" name="stato"/>
                                            </div>
                                            <br>
                                            <p class="form-row order-notes">
                                                <textarea placeholder="Additional information"></textarea>
                                            </p>
                                            <input type="submit" class="btn button button-small" value="Salva" >
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="fa fa-heart"></i>
                                        <span>Wishlist</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Ecco i tuoi libri preferiti</p>
                                        <div class="order-history">
                                            <div class="alert">
                                                <?php if ((!empty($_smarty_tpl->tpl_vars['books']->value))) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                            </div>
                                            <?php }?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="create-account-button pull-left">
                        <form action="Logout.php" method="post">
                            <input href="index.php" class="btn button button-large" value="Logout" type="submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Area End -->
    <!-- Footer Area Start -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
