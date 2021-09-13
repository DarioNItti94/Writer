{include file="header.tpl" title='Prodotto'}

<!-- Breadcrumbs Area Start -->
<!-- Single Product Area Start -->
<div class="single-product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="single-product-image-inner">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="one">
                            <img src="{$book.pic}" alt="" width="400" height="600">
                            </a>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="product-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab"
                                                                  data-toggle="tab"><img src="img/single-product/1.jpg"
                                                                                         alt=""></a></li>
                        <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab"><img
                                        src="img/single-product/2.jpg" alt=""></a></li>
                        <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab"><img
                                        src="img/single-product/3.jpg" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <h2><strong>{$book.title}</strong></h2>
                <br><br><br><br>
                <div class="availability">

                    <span>Disponibile</span>
                </div>
                <div class="single-product-price">
                    <h2>Prezzo: {$book.price} €</h2>
                </div>
                <div class="product-attributes clearfix">
                    <form action="Add-Cart.php" method="post">
                        <input type="number" id="quantita" name="quantita" value="1" min="1" max="{$book.quantity}"
                               class="cart-plus-minus-box">
                        <br>
                        <br>
                        <input type="hidden" name="price" value={$book.price}>
                        <input type="hidden" name="id_book" value={$book.id}>
                        <input type="submit" class="cart-btn btn-default" value="Aggiungi al carrello">
                    </form>
                </div>

                <div class="add-to-wishlist">
                    <br><br>
                    <form id="my_form" action="Add-Whislist.php" method="post">
                        <a class="wish-btn" href="#" onclick="document.getElementById('my_form').submit()">
                            <i class="fa fa-heart-o"></i>
                            <input type="hidden" name="id_book" value={$book.id}>
                            Aggiungi alla lista dei desideri
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="p-details-tab-content" style="margin-left:100px ">
                <div class="p-details-tab">
                    <ul class="p-details-nav-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info"
                                                                  role="tab"
                                                                  data-toggle="tab">Descrizione</a></li>
                        <li role="presentation"><a href="#data" aria-controls="data" role="tab"
                                                   data-toggle="tab">Recensioni</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab"
                                                   data-toggle="tab">Scrivi una recensione</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content review">
                    <div role="tabpanel" class="tab-pane active" id="more-info">
                        <table class="table-data-sheet">
                            <tbody>
                            <tr class="odd">
                                <td>Titolo</td>
                                <td>{$book.title}</td>
                            </tr>
                            <tr class="even">
                                <td>ISBN</td>
                                <td>{$book.isbn}</td>
                            </tr>
                            <tr class="odd">
                                <td>Autore</td>
                                <td>{$author.first_name} {$author.last_name}</td>
                            </tr>
                            <tr class="even">
                                <td>Edizione</td>
                                <td>{$book.edition}°</td>
                            </tr>
                            <tr class="odd">
                                <td>Categoria</td>
                                <td>{$category.name}</td>
                            </tr>
                            <tr class="even">
                                <td>Data di pubblicazione</td>
                                <td>{$book.pub_date}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="data">
                        <table class="table-data-sheet">
                            {if (!empty($reviews))}
                                {foreach from=$reviews item=review}
                                    <h4>{$review.first_name} {$review.last_name} </h4>
                                    <strong>{$review.title}</strong>
                                    <p>{$review.body}</p>
                                    <p>Voto: {$review.rating}</p>
                                    <p style="color: gray">{$review.submission_date}</p>
                                    <hr>
                                {/foreach}
                            {else}
                                <div></div>
                            {/if}
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        <div class="edd-reviews-form comment-respond" id="edd-reviews-respond">
                            <h3 id="edd-reviews-review-title" class="comment-reply-title edd-reviews-review-title">Scrivi Qui</h3>
                            <form action="add-review.php" method="post" name="edd-reviews-form" id="edd-reviews-form"
                                  class="comment-form edd-reviews-form">
                                <fieldset>
                                    <div class="edd-reviews-form-inner">
                                        <p class="edd-reviews-review-form-review-title">
                                            <input type="text" id="review" name="titolo-rec" placeholder="Titolo"/>
                                        </p><!-- /.edd-reviews-review-form-review-title -->
                                        <p class="edd-reviews-review-form-rating">

                                            <input type="number" id="review" name="number-rec" min="1" max="5"  placeholder="Voto"
                                            />
                                            </span>
                                        </p><!-- /.edd-reviews-review-form-rating -->
                                        <p class="edd-reviews-review-form-review">

                                            <textarea type="text" id="review" name="testo-rec"
                                                      rows="5" cols="50" placeholder="Recensione"></textarea>
                                        </p><!-- /.edd-reviews-review-form-review -->
                                        <p class="edd-reviews-review-form-submit">
                                            <input type="hidden" name="id_book" value={$book.id}>
                                            <input type="submit" class="cart-btn btn-default">
                                        </p><!-- /.edd-reviews-review-form-submit -->

                                    </div><!-- /.edd-reviews-form-inner -->
                                </fieldset>
                            </form><!-- /#edd-reviews-form -->
                        </div><!-- /.edd-reviews-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{include file="footer.tpl"}
