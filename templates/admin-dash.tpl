{include file="header-admin.tpl" title='Admin Dashboard'}

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Benvenuto {$admin.first_name} {$admin.last_name}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Libri nel sistema</p>
                                <p class="fs-30 mb-2">{$read}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Ordini di oggi</p>
                                <p class="fs-30 mb-2">{$order_num}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Numero recensioni</p>
                                <p class="fs-30 mb-2">{$review}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Numero Utenti</p>
                                <p class="fs-30 mb-2">{$user}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recensioni</h4>
                        <div class="list-wrapper pt-2">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li>
                                    <table class="table table-responsive">
                                        <thead>
                                        <tr>
                                            <th>Libro</th>
                                            <th>Utente</th>
                                            <th>Data</th>
                                            <th>Voto</th>
                                            <th>Recensione</th>
                                        </tr>
                                        </thead>
                                        {if (!empty($reviews))}
                                            <tbody>
                                            {foreach from=$reviews item="review"}
                                                <tr>
                                                    <td>{$review.title}</td>
                                                    <td class="font-weight-bold">{$review.email}</td>
                                                    <td>{$review.submission_date}</td>
                                                    <td>{$review.rating}</td>
                                                    <td>{$review.body}</td>
                                                </tr>
                                            {/foreach}

                                            </tbody>
                                        {else}
                                            <div></div>
                                        {/if}
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Ordini</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>N° ordine</th>
                                    <th>Utente</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Dettagli</th>
                                    <th>Spedisci</th>
                                </tr>
                                </thead>
                                {if (!empty($orders))}
                                    <tbody>
                                    {foreach from=$orders item="order"}
                                        <tr>
                                            <td>{$order.id}</td>
                                            <td class="font-weight-bold">{$order.email}</td>
                                            <td>{$order.submission_date}</td>
                                            <td>{$order.status}</td>
                                            <td class="font-weight-medium">
                                                <a onclick="location.href='orders-details.php?id={$order.id}'"
                                                   type="submit" class="badge badge-success">Dettagli ordine</a>
                                            </td>
                                            <td class="font-weight-medium">
                                                <form id="my_form" action="order_mail_shipped.php" method="post">
                                                    <input type="hidden" name="email" value="{$order.email}">
                                                    <a href="#" onclick="location.href='send_order.php?id={$order.id}' "
                                                       class="badge badge-success">Clicca Per
                                                        Spedire</a>
                                                </form>
                                            </td>
                                        </tr>
                                    {/foreach}

                                    </tbody>
                                {else}
                                    <div></div>
                                {/if}
                            </table>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <!-- partial -->
                </div>
            </div>
        </div>
    </div>
</div>



