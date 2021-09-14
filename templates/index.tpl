{include file="header.tpl" title='Home'}

<!--Header Area End-->
<!-- Mobile Menu Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.tpl">HOME</a></li>
                            <li><a href="products.tpl">FEATURED</a></li>
                            <li><a href="products.tpl">REVIEW BOOK</a></li>
                            <li><a href="about.html">ABOUT AUTHOR</a></li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="Cart.tpl">Cart Page</a></li>
                                    <li><a href="Checkout.tpl">Check Out</a></li>
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
<!-- Mobile Menu End -->
<!-- slider Area Start -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">

            <img class="d-block w-100" src="./templates/img/carousel.jpg" width="1300" height="800" alt="First slide"
                 style="margin-left: 250px">

            <div class="banner-title text-center carousel-caption "
                 style="position: relative;top: -450px;margin-left: -650px; ">
                <h5 style="color: #0c1923;"><br><br>The Writer is the biggest big store and the biggest books library in
                    the world
                </h5>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- slider Area End-->
<!-- Online Banner Area Start -->
<!-- Carousel controls -->
<div class="container prod-carousel">
    <div class="row">
        <div class="col-md-12">
            <h2 class="prodotti"> Nuovi <b>Prodotti</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            {if (!empty($books))}
                                {foreach from=$books item="book"}
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">

                                            <div class="img-box">
                                                <a href="Product-item.php?id={$book.id}">
                                                <img src="{$book.pic}" class="img-responsive"
                                                     alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>{$book.title}</h4>
                                                <div class="star-rating">
                                                </div>
                                                <p class="item-price"><b>{$book.price}€</b></p>
                                            </div>
                                        </div>
                                    </a>

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

</div>

<!-- Online Banner Area End -->
<!-- Shop Info Area Start -->

<!-- Shop Info Area End -->
<!-- Featured Product Area Start -->

<!-- Testimonial Area End -->
<!-- Counter Area Start -->
<div class="counter-area section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">{$read}</span>
								</span>
                        <h3>OUR BOOKS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">{$user}</span>
								</span>
                        <h3>ONLINE USERS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">{$read}</span>
								</span>
                        <h3>BEST AUTHORS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">10</span>
								</span>
                        <h3>AWARDS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>
<!-- Counter Area End -->
<!-- Blog Area Start -->
<!-- Blog Area End -->
<!-- News Letter Area Start -->
<div class="newsletter-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter-title">
                    <h2>SUBSCRIBE OUR NEWSLETTER</h2>
                    <p>Subscribe here with your email us and get up to date.</p>
                </div>
                <div class="letter-box">
                    <form action="#" method="post" class="search-box">
                        <div>
                            <input type="text" placeholder="Subscribe us">
                            <button type="submit" class="btn btn-search">SUBSCRIBE<span><i
                                            class="flaticon-school-1"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Letter Area End -->
<!-- Footer Area Start -->
{include file="footer.tpl"}
