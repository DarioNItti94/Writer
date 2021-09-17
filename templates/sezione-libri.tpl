{include file="header-admin.tpl" title='Admin Dashboard'}


<!-- partial -->
<!-- partial:../../partials/_sidebar.html -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Aggiungi un libro</h4>
                        <form enctype="multipart/form-data" id="my_form" action="insert_book.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername1">ISBN</label>
                                <input class="form-control" type="text" id="isbn" name="isbn">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titolo</label>
                                <input class="form-control" type="text" id="title" name="titolo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Edizione</label>
                                <input type="text" class="form-control" id="edizione" name="edizione">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Anno di Pubblicazione</label>
                                <input type="text" class="form-control" id="anno" placeholder="YYYY-MM-DD"
                                       name="pubblicazione">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Editore</label>
                                <input type="text" class="form-control" id="editore" name="editore">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantità</label>
                                <input class="form-control" type="number" id="quantita" name="quantita" min="1"
                                       max="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prezzo</label>
                                <input type="text" class="form-control" id="prezzo" name="prezzo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <select id="categoria" name="categoria" class="form-control" form="my_form">
                                    <option value="1">Avventura</option>
                                    <option value="2">Fantasy</option>
                                    <option value="3">Romanzi</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Autore</label>
                                <input type="text" class="form-control" id="autore" name="autore">
                            </div>
                            <input type="file" name="image">
                            <br><br>
                            <input type="submit" name="submit" class="btn btn-primary mr-2" value="Aggiungi">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tutti i prodotti</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Copertina
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Quantità
                                    </th>
                                    <th>
                                        Prezzo
                                    </th>
                                    <th>
                                        Autore
                                    </th>
                                    <th>
                                        ISBN
                                    </th>
                                    <th>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Modifica
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {if !empty($books)}
                                    {foreach from=$books item="book"}
                                        <tr>
                                            <td>
                                                <img src="{$book.pic}" width="50px" height="70px">
                                            </td>
                                            <td>
                                                {$book.title}
                                            </td>
                                            <td>
                                                {$book.quantity}
                                            </td>
                                            <td>
                                                {$book.price} €
                                            </td>
                                            <td>
                                                {$book.first_name} {$book.last_name}
                                            </td>
                                            <td>
                                                {$book.isbn}
                                            </td>
                                            <td>
                                                <a data-toggle="modal"
                                                   href="#my_modal"
                                                   data-book-id="{$book.id}"
                                                   data-book-title="{$book.title}"
                                                   data-book-isbn="{$book.isbn}"
                                                   data-book-edition="{$book.edition}"
                                                   data-book-date="{$book.pub_date}"
                                                   data-book-pub="{$book.name}"
                                                   data-book-qt="{$book.quantity}"
                                                   data-book-price="{$book.price}"
                                                   data-book-cat="{$book.cat_name}"
                                                   data-book-auth="{$book.first_name} {$book.last_name}"
                                                   class="btn btn-primary">
                                                    Modifica
                                                </a>
                                                <a href="modify.php?id={$book.id}" class="btn btn-primary">
                                                    Elimina
                                                </a>
                                            </td>
                                        </tr>
                                    {/foreach}
                                {else}
                                    <div></div>
                                {/if}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="my_modal" >
        <div class="modal-dialog">
            <div class="modal-content"
                 style="background-color: #e6e6e6">
                <div class="modal-body">
                    <h4 class="card-title">Aggiungi un libro</h4>
                    <form enctype="multipart/form-data" id="my_form" action="Update_book.php" method="post">
                        <input type="hidden" name="bookId" value=""/>
                        <div class="form-group">
                            <label for="exampleInputUsername1">ISBN</label>
                            <input class="form-control" type="text" id="isbn" name="book-isbn">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Titolo</label>
                            <input class="form-control" type="text" id="title" name="book-title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Edizione</label>
                            <input type="text" class="form-control" id="edizione" name="book-edition">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Anno di Pubblicazione</label>
                            <input type="text" class="form-control" id="anno"
                                   name="book-date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Editore</label>
                            <input type="text" class="form-control"  id="editore" name="book-pub">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantità</label>
                            <input class="form-control" type="number" id="quantita" name="book-qt" min="1"
                                   max="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prezzo</label>
                            <input type="text" class="form-control" id="prezzo" name="book-price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Categoria</label>
                            <select id="categoria" name="category" class="form-control" form="my_form">
                                <option value="1">Avventura</option>
                                <option value="2">Fantasy</option>
                                <option value="3">Romanzi</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Autore</label>
                            <input type="text" class="form-control" id="autore" name="book-auth">
                        </div>
                        <input type="file" name="image">
                        <br><br>
                        <input type="submit" name="submit" class="btn btn-primary mr-2" value="Salva modifiche">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
</div>
<script>
    $('#my_modal').on('show.bs.modal', function(e) {
        var bookId = $(e.relatedTarget).data('book-id');
        var book_title = $(e.relatedTarget).data('book-title');
        var book_isbn = $(e.relatedTarget).data('book-isbn');
        var book_edition = $(e.relatedTarget).data('book-edition');
        var book_date = $(e.relatedTarget).data('book-date');
        var book_pub = $(e.relatedTarget).data('book-pub');
        var book_qt = $(e.relatedTarget).data('book-qt');
        var book_price = $(e.relatedTarget).data('book-price');
        var book_cat = $(e.relatedTarget).data('book-cat');
        var book_auth = $(e.relatedTarget).data('book-auth');






        $(e.currentTarget).find('input[name="bookId"]').val(bookId);
        $(e.currentTarget).find('input[name="book-title"]').val(book_title);
        $(e.currentTarget).find('input[name="book-isbn"]').val(book_isbn);
        $(e.currentTarget).find('input[name="book-edition"]').val(book_edition);
        $(e.currentTarget).find('input[name="book-date"]').val(book_date);
        $(e.currentTarget).find('input[name="book-pub"]').val(book_pub);
        $(e.currentTarget).find('input[name="book-qt"]').val(book_qt);
        $(e.currentTarget).find('input[name="book-price"]').val(book_price);
        $(e.currentTarget).find('input[value="book-cat"]').val(book_cat);
        $(e.currentTarget).find('input[name="book-auth"]').val(book_auth);







    });
</script>
<!-- main-panel ends -->

<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->

