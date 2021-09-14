{include file="header.tpl" title='Il tuo profilo'}


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
                        {if !empty($carts)}
                            {foreach from=$carts item=cart }
                                <tr>
                                        <td class="product-remove">
                                            <input type="hidden" name="id_book_cart" value="{$cart.book_id}">
                                            <a href="#" onclick="location.href='del_cart.php?id={$cart.id}'" >
                                                <i class="flaticon-delete"></i>
                                            </a>
                                    </td>
                                    <td class="product-image">
                                        <img src="{$cart.pic}" alt="image" width="100" height="100">
                                    </td>
                                    <td class="t-product-name">
                                        <h3>
                                            <a>{$cart.title}</a>
                                        </h3>
                                    </td>
                                    <td class="product-unit-price">
                                        <p>{$cart.price} €</p>
                                    </td>
                                    <form id="my_form" action="update_cart.php" method="post">
                                        <td class="product-quantity product-cart-details">
                                            <input type="number" name="quantity_item" value="{$cart.item_quantity}"
                                                   min="1" max="{$cart.quantity}">
                                            <input type="hidden" name="id_book_cart" value="{$cart.book_id}">
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
                                        <p>{math equation="x * y" x=$cart.subtotal y=$cart.item_quantity} €</p>
                                    </td>

                                </tr>
                            {/foreach}
                        {else}
                            <div></div>
                        {/if}
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
                        {if !empty($carts)}
                            {foreach from=$carts item=cart name=foo}
                                <p style="margin-left:450px ">
                                    - {math equation="x * y" x=$cart.subtotal y=$cart.item_quantity} €</p>
                            {/foreach}
                        {else}
                            <div></div>
                        {/if}
                        <hr>
                    </div>
                    <div class="subtotal-area">
                        <h2>TOTALE<span>{$total} €</span></h2>
                    </div>
                    <a href="checkout.php">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Discount Area End -->
<!-- Footer Area Start -->
{include file="footer.tpl"}
