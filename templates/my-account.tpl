{include file="header.tpl" title='Il tuo profilo'}

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
                            <li><a href="contact.html">CONTACT</a></li>
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
                                                {if (!empty($books))}
                                                {foreach from=$books item="book"}

                                                {/foreach}
                                                {else}
                                            </div>
                                            {/if}

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
                                            <div class="alert">   {if (!empty($books))}
                                                {foreach from=$books item="book"}

                                                {/foreach}
                                                {else}
                                            </div>
                                            {/if}
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
                                        <p class="coupon-text">To add a new address, please fill out the form below.</p>
                                        <form action="#">
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
                                            <a title="Save" class="btn button button-small" href="index.tpl">
														<span>
															  Save
															<i class="fa fa-chevron-right"></i>
														</span>
                                            </a>
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
                                        <i class="fa fa-list-ol"></i>
                                        <span>I miei ordini</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Ecco gli ordini che hai effettuato</p>
                                        <div class="order-history">
                                            <div class="alert">
                                                {if (!empty($books))}
                                                {foreach from=$books item="book"}

                                                {/foreach}
                                                {else}
                                            </div>
                                            {/if}

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

