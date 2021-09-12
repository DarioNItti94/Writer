{include file="header.tpl" title='Accedi'}


		<!-- Breadcrumbs Area Start --> 
        <!-- Loging Area Start -->
        <div class="login-account section-padding">
           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <form action="RegistrationController.php" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                CREA UN ACCOUNT
                            </h2>
                            <div class="form-row">
                                <input type="text" placeholder="Nome" name="nome">
                                <br><br>
                                <input type="text" placeholder="Cognome" name="cognome" >
                                <br><br>
                                <input type="email" placeholder="Email" name="email-sign">
                                <br><br>
                                <input type="password" placeholder="Password" name="password-sign">
                            </div>
                                <br>
                            <div>
                                <input name="submitcreate"  id="submitcreate" type="submit" class="btn-default"  value="Registrati" >
                                                         </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <form action="Autentication.php" class="create-account-form" method="post">
                            <h2 class="heading-title">
                               SEI GIÀ REGISTRATO?
                            </h2>
                            <p class="form-row">
                                <input type="email" placeholder="Email" name="email-log">
                            </p>
                            <p class="form-row">
                                <input type="password" placeholder="Password" name="password-log">
                            </p>
                            <div class="submit">
                                <input name="login" type="submit"  value="Accedi" class="btn-default">
                            </div>

                       </form>
                    </div>
                </div>               
           </div>
        </div>
        <!-- Loging Area End -->
		<!-- Footer Area Start -->
{include file="footer.tpl"}
