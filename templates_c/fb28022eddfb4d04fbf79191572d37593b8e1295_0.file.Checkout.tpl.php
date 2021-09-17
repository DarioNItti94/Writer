<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:32:03
  from 'C:\xampp\htdocs\Writer\templates\Checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61446ea3a62365_65682230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb28022eddfb4d04fbf79191572d37593b8e1295' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\Checkout.tpl',
      1 => 1631867334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61446ea3a62365_65682230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Writer\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Checkout'), 0, false);
?>
<form action="add_orders.php" method="post">


    <div class="check-out-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="false" aria-controls="collapseOne">
                                        <span>1</span>
                                        Indirizzo di spedizione
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="checkout-collapse-inner">
                                                <?php if ((!empty($_smarty_tpl->tpl_vars['addresses']->value))) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'addr');
$_smarty_tpl->tpl_vars['addr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addr']->value) {
$_smarty_tpl->tpl_vars['addr']->do_else = false;
?>
                                                        <h4 class="collapse-sub-title">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['addr']->value['recipient'];?>
</strong>
                                                        </h4>
                                                        <div class="check-register">

                                                            <label><?php echo $_smarty_tpl->tpl_vars['addr']->value['street'];?>
</label>
                                                        </div>
                                                        <div class="check-register">

                                                            <label><?php echo $_smarty_tpl->tpl_vars['addr']->value['town'];?>

                                                                , <?php echo $_smarty_tpl->tpl_vars['addr']->value['province'];?>
 <?php echo $_smarty_tpl->tpl_vars['addr']->value['postcode'];?>
</label>
                                                        </div>
                                                        <p>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['addr']->value['optional_info'];?>
</p>
                                                        <p>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['addr']->value['state'];?>
</p>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <div><p>Non hai un indirizzo?</p>
                                                        <button type="button" class="btn btn-link" data-toggle="modal"
                                                                data-target="#address-add"
                                                                style="margin-left:-15px; margin-top: -10px ">Aggiungi
                                                            il
                                                            tuo indirizzo
                                                    </div>
                                                    <br>

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
                                       href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span>2</span>
                                        Pagamento
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="panel-body no-padding">
                                    <div class="payment-met">
                                        <form action="" id="payment-form">
                                            <ul class="form-list">
                                                <li class="control">
                                                    <input type="radio" class="radio" checked
                                                           id="p_method_ccsave">
                                                    <label for="p_method_ccsave">Contrassegno(+8€) </label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <span>3</span>
                                            Articoli
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingFive">
                                    <div class="panel-body no-padding">
                                        <div class="order-review" id="checkout-review">
                                            <div class="table-responsive" id="checkout-review-table-wrapper">
                                                <table class="data-table" id="checkout-review-table">
                                                    <thead>
                                                    <tr>
                                                        <th rowspan="1">Titolo</th>
                                                        <th colspan="1">Prezzo</th>
                                                        <th rowspan="1">Qt</th>
                                                        <th colspan="1">Subtotale</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if ((!empty($_smarty_tpl->tpl_vars['books']->value))) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                                                            <tr>
                                                                <td><h3 class="product-name"><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</h3></td>
                                                                <td><span class="cart-price"><span
                                                                                class="check-price"><?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
€</span></span>
                                                                </td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['book']->value['item_quantity'];?>
</td>
                                                                <!-- sub total starts here -->
                                                                <td><span class="cart-price"><span
                                                                                class="check-price"><?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['book']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['book']->value['item_quantity']),$_smarty_tpl);?>
€</span></span>
                                                                </td>
                                                            </tr>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="3">Subtotal</td>
                                                        <td>
                                                            <span class="check-price"><?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['book']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['book']->value['item_quantity']),$_smarty_tpl);?>
€</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Contrassegno</td>
                                                        <td><span class="check-price">8 €</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><strong>Totale</strong></td>
                                                        <td><strong><span class="check-price"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div id="checkout-review-submit">
                                                <div class="cart-btn-3" id="review-buttons-container">
                                                    <p class="left">Dimenticato qualcosa? <a href="Cart.php">Torna al
                                                            carrello</a></p>
                                                    <button type="submit" title="Place Order"
                                                            class="btn btn-default">
                                                        <span>Acquista</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<div class="modal fade" id="address-add" role="document">
    <div class="modal-dialog">
        <div class="modal-content"
             style="background-color: #e6e6e6">
            <h3 class="modal-title">&nbsp;&nbsp;&nbsp;INSERISCI IL
                TUO
                INDIRIZZO</h3>
            <div class="modal-body">
                <div class="coupon-info">
                    <br>
                    <p class="coupon-text">Aggiungi un nuovo
                        indirizzo.</p>
                    <form method="post"
                          action="add_address_cart.php"
                          id="add_address">
                        <p class="form-row">
                            <input type="text"
                                   placeholder="Casa/Ufficio"
                                   name="name"/>
                        </p>
                        <p class="form-row">
                            <input type="text"
                                   placeholder="Nome e Cognome"
                                   name="utente"/>
                        </p>
                        <p class="form-row">
                            <input type="text"
                                   placeholder="Info Opzionali"
                                   name="info"/>
                        </p>

                        <p class="form-row">
                            <input type="text" placeholder="Via"
                                   name="via"/>
                        </p>
                        <p class="form-row">
                            <input type="text" placeholder="Città"
                                   name="citta"/>
                        </p>
                        <p class="form-row">
                            <input type="text"
                                   placeholder="Provincia"
                                   name="prov" maxlength="2"
                                   size="2"/>
                        </p>
                        <p class="form-row">
                            <input type="text" placeholder="Cap"
                                   name="cap"/>
                        </p>
                        <div class="form-row">
                            &nbsp;&nbsp;&nbsp;&nbsp; <input
                                    type="text"
                                    placeholder="Stato"
                                    name="stato"/>
                        </div>
                        <br>

                        <input type="submit"
                               class="btn button button-small"
                               value="Salva" form="add_address">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
