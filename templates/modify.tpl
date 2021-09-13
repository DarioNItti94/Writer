{include file="header-admin.tpl" title='Admin Dashboard'}

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <br>
                    <div class="new-prod">
                        <h2 style="margin-left: 500px;">Sei sicuro di voler eliminare il prodotto?</h2>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form action="del-book.php" method="post">
                                        <input type="hidden" value="{$book.id}" name="book">
                                        <input type="hidden" value="{$author.id}" name="author">
                                        <input type="hidden" value="{$book.publisher_id}" name="pub">
                                        <input type="hidden" value="{$category.category_id}" name="category">
                                        <input class="btn btn-primary" type="submit" value="Sì" name="elimina" style="margin-left: 150px">
                                    </form>
                                </div>
                                <div class="col">
                                    <a href="all-product.php" class="btn btn-primary" type="submit"
                                       style="margin-left: 300px">No<a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>