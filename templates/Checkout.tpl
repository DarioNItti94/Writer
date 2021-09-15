{include file="header.tpl" title='Checkout'}
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
                                                {if (!empty($addresses))}
                                                    {foreach from=$addresses item=addr}
                                                        <h4 class="collapse-sub-title">
                                                            <strong>{$addr.recipient}</strong>
                                                        </h4>
                                                        <div class="check-register">

                                                            <label>{$addr.street}</label>
                                                        </div>
                                                        <div class="check-register">

                                                            <label>{$addr.town}
                                                                , {$addr.province} {$addr.postcode}</label>
                                                        </div>
                                                        <p>&nbsp;&nbsp;{$addr.optional_info}</p>
                                                        <p>&nbsp;&nbsp;{$addr.state}</p>
                                                    {/foreach}
                                                {else}
                                                    <div></div>
                                                {/if}
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
                                                    {if (!empty($books))}
                                                        {foreach from=$books item=book}
                                                            <tr>
                                                                <td><h3 class="product-name">{$book.title}</h3></td>
                                                                <td><span class="cart-price"><span
                                                                                class="check-price">{$book.price}€</span></span>
                                                                </td>
                                                                <td>{$book.item_quantity}</td>
                                                                <!-- sub total starts here -->
                                                                <td><span class="cart-price"><span
                                                                                class="check-price">{math equation="x * y" x=$book.subtotal y=$book.item_quantity}€</span></span>
                                                                </td>
                                                            </tr>
                                                        {/foreach}
                                                    {/if}
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="3">Subtotal</td>
                                                        <td>
                                                            <span class="check-price">{math equation="x * y" x=$book.subtotal y=$book.item_quantity}€</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Contrassegno</td>
                                                        <td><span class="check-price">8 €</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><strong>Totale</strong></td>
                                                        <td><strong><span class="check-price">{$total}</span></strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div id="checkout-review-submit">
                                                <div class="cart-btn-3" id="review-buttons-container">
                                                    <p class="left">Dimenticato qualcosa? <a href="Cart.php">Torna al
                                                            carrello</a></p>
                                                    <button type="submit" title="Place Order" class="btn btn-default">
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
{include file="footer.tpl"}
