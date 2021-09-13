<?php
/* Smarty version 3.1.39, created on 2021-09-13 17:31:30
  from 'C:\xampp\htdocs\Writer\templates\Cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f6ed29bb4f8_13298532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833b33bee7d791e20e0b510bb3ae8ef7b34a9177' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\Cart.tpl',
      1 => 1631547089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_613f6ed29bb4f8_13298532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Writer\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Il tuo profilo'), 0, false);
?>


<div class="shopping-cart-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wishlist-table-area table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th class="product-remove">Elimina</th>
                            <th class="product-image">Copertina</th>
                            <th class="t-product-name">Titolo</th>
                            <th class="product-unit-price">Prezzo</th>
                            <th class="product-quantity">Quantità</th>
                            <th class="product-subtotal">Subtotale</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($_smarty_tpl->tpl_vars['carts']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts']->value, 'cart');
$_smarty_tpl->tpl_vars['cart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->do_else = false;
?>
                                <tr>
                                    <form id="del_form" action="del_cart.php" method="post">
                                        <td class="product-remove">
                                            <input type="hidden" name="id_book_cart" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['book_id'];?>
">
                                            <a href="#" onclick="document.getElementById('del_form').submit()">
                                                <i class="flaticon-delete"></i>
                                            </a>
                                    </form>
                                    </td>
                                    <td class="product-image">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['pic'];?>
" alt="image" width="100" height="100">
                                    </td>
                                    <td class="t-product-name">
                                        <h3>
                                            <a><?php echo $_smarty_tpl->tpl_vars['cart']->value['title'];?>
</a>
                                        </h3>
                                    </td>
                                    <td class="product-unit-price">
                                        <p><?php echo $_smarty_tpl->tpl_vars['cart']->value['price'];?>
 €</p>
                                    </td>
                                    <form id="my_form" action="update_cart.php" method="post">
                                        <td class="product-quantity product-cart-details">
                                            <input type="number" name="quantity_item" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['item_quantity'];?>
"
                                                   min="1" max="<?php echo $_smarty_tpl->tpl_vars['cart']->value['quantity'];?>
">
                                            <input type="hidden" name="id_book_cart" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['book_id'];?>
">
                                            <a href="#" onclick="document.getElementById('my_form').submit()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-arrow-clockwise"
                                                     viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                </svg>
                                            </a>

                                    </td>
                                    </form>
                                    <td class="product-quantity">
                                        <p><?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['item_quantity']),$_smarty_tpl);?>
 €</p>
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
                <div class="shopingcart-bottom-area">
                    <a class="left-shoping-cart" href="index.php">CONTINUA LO SHOPPING</a>
                    <div class="shopingcart-bottom-area pull-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
<!-- Discount Area Start -->
<div class="discount-area">
    <div class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div>
                        <div class="">
                        </div>
                        <div class="discount-middle">
                            <input type="hidden" placeholder="">
                        </div>
                    </div>
                </div>
            <div class="col-md-6 col-sm-6">
                <div class="subtotal-main-area">
                    <h4 style="margin-left: 210px; margin-top: 20px">SUBTOTALE</h4>
                    <div class="subtotal-area">
                        <?php if (!empty($_smarty_tpl->tpl_vars['carts']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts']->value, 'cart', false, NULL, 'foo', array (
));
$_smarty_tpl->tpl_vars['cart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->do_else = false;
?>
                                <p style="margin-left:450px ">
                                    - <?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['subtotal'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['item_quantity']),$_smarty_tpl);?>
 €</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <div></div>
                        <?php }?>
                        <hr>
                    </div>
                    <div class="subtotal-area">
                        <h2>TOTALE<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 €</span></h2>
                    </div>
                    <a href="checkout.php">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Discount Area End -->
<!-- Footer Area Start -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
