{include file="header.tpl" title='Contatti'}

<!-- Mobile Menu End -->
<!-- Map Area Start -->
<!-- Map Area End -->
<!-- Address Information Area Start -->
<div class="address-info-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 hidden-sm">
                <div class="address-single">
                    <div class="all-adress-info">
                        <div class="icon">
                            <span><i class="fa fa-user-plus"></i></span>
                        </div>
                        <div class="info">
                            <h3>TELEFONO</h3>
                            <p> (+39) 346 8051381</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-single">
                    <div class="all-adress-info">
                        <div class="icon">
                            <span><i class="fa fa-map-marker"></i></span>
                        </div>
                        <div class="info">
                            <h3>INDIRIZZO</h3>
                            <p>Piazza Santa Margherita, 2, 67100</p>
                            <p>L'Aquila, AQ</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-single no-margin">
                    <div class="all-adress-info">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h3>E-MAIL</h3>
                            <p>dario.nitti@outlook.it</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Address Information Area End -->
<!-- Contact Form Area Start -->
<div class="contact-form-area">
    <div class="container">
        <div class="about-title">
            <h3>LEAVE A MESSAGE</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <form action="Messages.php" method="post">
                            <div class="contact-form-left">
                                <input type="text" placeholder="Il tuo nome" name="name"/>
                                <input type="email" placeholder="La tue email" name="email"/>
                            </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form-right">
                            <div class="input-message">
                                <textarea name="message" id="message" placeholder="Il tuo messaggio"></textarea>
                                <input class="btn btn-default" type="submit" value="INVIA" name="submit" id="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form Area End -->
<!-- Footer Area Start -->
{include file="footer.tpl"}
