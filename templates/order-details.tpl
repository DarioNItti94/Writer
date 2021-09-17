{include file="header-admin.tpl" title='Admin Dashboard'}



<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Dettagli</h4>
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
                                    ISBN
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {if (!empty($books))}
                                {foreach from=$books item="order"}
                                    <tr>
                                        <td>
                                            <img src="{$order.pic}" width="300" height="320">
                                        </td>
                                        <td>
                                            {$order.title}
                                        </td>
                                        <td>
                                            {$order.quantity}
                                        </td>
                                        <td>
                                            {$order.subtotal}€
                                        </td>
                                        <td>
                                            {$order.isbn}
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
        <a href="Dashboard.php" class="btn btn-primary" style="margin-left: 30px">
            Torna Indietro
        </a>
    </div>
</div>