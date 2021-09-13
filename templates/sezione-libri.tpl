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
                        <form  enctype="multipart/form-data" action="insert_book.php" method="post">
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
                                <input class="form-control" type="number" id="quantita" name="quantita" min="0"
                                       max="20">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prezzo</label>
                                <input type="text" class="form-control" id="prezzo" name="prezzo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <input class="form-control" type="number" id="categoria" name="categoria" min="1"
                                       max="3">
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
                        <h4 class="card-title">Striped Table</h4>
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
                                        Modifica
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {if !empty($books)}
                                    {foreach from=$books item="book"}
                                        <tr>
                                            <td>
                                                <img src="{$book.pic}" width="150" height="170">
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
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->

