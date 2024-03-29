{include file="header.tpl" title='Il tuo profilo'}


<!-- Breadcrumbs Area Start -->
<!-- My Account Area Start -->
<div class="my-account-area section-padding">
    <div class="container">
        <div class="section-title2">
            <h2>Il tuo account</h2>
            <div class=""
            <p>Benvenuto<strong> {$user} </strong>nel tuo account. Qui puoi gestire tutte le tue informazioni personali
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
                                                    {if (!empty($orders))}
                                                        {foreach from=$orders item="order"}
                                                            <div class="order card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-4">
                                                                            <img src="{$order.pic}" alt="Order"
                                                                                 width="50" height="100"
                                                                                 style="float: left;">
                                                                        </div>
                                                                        <div class="col-12 col-md-8 option">
                                                                            <h5 class="card-title"
                                                                                style="margin-bottom: -10px">{$order.title}</h5>
                                                                            <br>
                                                                            <p1>Qt: {$order.quantity}</p1>
                                                                            <br>
                                                                            <p1>Stato: {$order.status}</p1>
                                                                            <h3 class="card-text"
                                                                                id="price">{$order.subtotal}€</h3>
                                                                        </div>

                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        {/foreach}
                                                    {else}
                                                        <div></div>
                                                    {/if}
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
                                                {if !empty($addresses)}
                                                    {foreach from=$addresses item="addr"}
                                                        <div class="order card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-6 col-md-5">
                                                                        <h4>{$addr.street}</h4>
                                                                    </div>

                                                                    <div class="col-12 col-md-8 option">
                                                                        <form method="post" action="del_addr.php">
                                                                            <input type="hidden" name="id_addr"
                                                                                   value="{$addr.id}">
                                                                            <input class="btn-input btn" type="submit"
                                                                                   value="Elimina Indirizzo">
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
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

                                            <input type="submit" class="btn button button-small" value="Salva">
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
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Immagine</th>
                                                            <th>Titolo</th>
                                                            <th>Prezzo</th>
                                                            <th>Gestisci</th>
                                                        </tr>
                                                        </thead>
                                                        {if (!empty($books))}
                                                            <tbody>
                                                            {foreach from=$books item="book"}
                                                                <tr>
                                                                    <td><a href="Product-item.php?id={$book.book_id}">
                                                                            <img src="{$book.pic}" alt="product-catalog"
                                                                                 style="width:100px ;height: 120px;border-radius: 100%"></a></td>
                                                                    <td class="font-weight-bold">{$book.title}</td>
                                                                    <td>{$book.price} €</td>
                                                                    <td><a onclick="location.href='del_wish.php?id={$book.book_id}'"
                                                                            type="submit" class="badge badge-success">Elimina</a></td>
                                                                </tr>
                                                            {/foreach}
                                                            </tbody>
                                                        {else}
                                                            <div></div>
                                                        {/if}
                                                    </table>
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
{include file="footer.tpl"}

