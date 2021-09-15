{include file="header-admin.tpl" title='Admin Dashboard'}
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Messaggi</h4>
                        <div class="list-wrapper pt-2">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                {if (!empty($msgs))}
                                {foreach from=$msgs item="msg"}
                                <li>
                                    <div class="container">
                                        <div class="row">

                                                    <div class="col">
                                                        <label class="form-check-label">
                                                            {$msg.email}
                                                        </label>
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-check-label">
                                                            {$msg.nome}
                                                        </label>
                                                    </div>
                                                    <div class="col-5">
                                                        <label class="form-check-label">
                                                            {$msg.text}
                                                        </label>
                                                    </div>

                                        </div>
                                    </div>

                                </li>
                                {/foreach}
                                {else}
                                    <div></div>
                                {/if}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Utenti iscritti alla newsletter</h4>
                        <div class="list-wrapper pt-2">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li> {if (!empty($newses))}
                                        {foreach from=$newses item="news"}
                                            <label class="form-check-label">
                                                {$news.email}
                                            </label>
                                        {/foreach}
                                    {else}
                                        <div></div>
                                    {/if}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rispondi agli utenti qui</h4>
                        <form id="my_form" action="Mailer.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Email Utente</label>
                                <input class="form-control" type="text" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome Utente</label>
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Corpo email</label>
                                <textarea type="text" class="form-control" id="message" name="message"></textarea>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mr-2" value="Invia">
                        </form>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
    </div>

</div>
</div>
</div>