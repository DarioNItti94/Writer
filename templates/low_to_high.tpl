{include file="header.tpl" title='Tutti i Prodotti'}

<div class="shopping-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="shop-widget">
                    <div class="shop-widget-top">
                        <aside class="widget widget-categories">
                            <h2 class="sidebar-title text-center">CATEGORIE</h2>
                            <ul class="sidebar-menu">
                                {foreach from=$categories item="category"}
                                    <li>
                                        <a href="category.php?id_category={$category.id}">
                                            <i class="fa fa-angle-double-right">{$category.name}</i>

                                        </a>
                                    </li>
                                {/foreach}

                        </aside>
                        <aside class="widget shop-filter">
                            <h2 class="sidebar-title text-center">PREZZO</h2>
                            <div class="info-widget">
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <form action="low_to_high.php" method="post">
                                            <input type="submit" value="Dal più basso al più alto"/>
                                        </form>
                                        <br>
                                        <form action="high_to_low.php" method="post">
                                            <input type="submit" value="Dal più alto al più basso"/>
                                        </form>
                                        <a class="fa fa-close" href="Products.php"> ELIMINA FILTRO</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="shop-tab-area">
                    <div class="shop-tab-list">
                        <h2>DAL PIÙ ECONOMICO</h2>
                    </div>
                    <div class="tab-content">
                        <div class="row tab-pane fade in active" id="home">
                            <div class="shop-single-product-area">
                                {if (!empty($books))}
                                    {foreach from=$books item="book"}
                                        <div class="col-sm-2">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="Product-item.php?id={$book.id}"
                                                       class="single-banner-image-wrapper">
                                                        <img alt="" src="{$book.pic}" width=150px height="170px">
                                                    </a>
                                                </div>
                                                <div class="banner-bottom text-center">
                                                    <div class="banner-bottom-title">
                                                        <a href="Product-item.php?id={$book.id}">{$book.title}</a>
                                                    </div>
                                                    <div class="rating-icon">
                                                        <p>{$book.price}</p>
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
    </div>
</div>
<!-- Shop Area End -->
<!-- Footer Area Start -->
{include file="footer.tpl"}