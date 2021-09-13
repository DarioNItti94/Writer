<?php
/* Smarty version 3.1.39, created on 2021-09-13 18:22:53
  from 'C:\xampp\htdocs\Writer\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f7add1ccb09_72043936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4868d76bb36bcc2266a3c4edfd17b143f517ab1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\contact.tpl',
      1 => 1631550073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_613f7add1ccb09_72043936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Contatti'), 0, false);
?>

<!-- Mobile Menu End -->
		<!-- Map Area Start -->
		<!-- Map Area End -->	
		<!-- Address Information Area Start -->
		<div class="address-info-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 hidden-sm">
						<div class="address-single">
							<div class="all-adress-info">
								<div class="icon">
									<span><i class="fa fa-user-plus"></i></span>
								</div>
								<div class="info">
									<h3>TELEFONO</h3>
									<p> (+39) 346 8051381</p>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="address-single">
							<div class="all-adress-info">
								<div class="icon">
									<span><i class="fa fa-map-marker"></i></span>
								</div>
								<div class="info">
									<h3>INDIRIZZO</h3>
									<p>Piazza Santa Margherita, 2, 67100</p>
									<p>L'Aquila, AQ</p>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="address-single no-margin">
							<div class="all-adress-info">
								<div class="icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="info">
									<h3>E-MAIL</h3>
									<p>dario.nitti@outlook.it</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- Address Information Area End -->
		<!-- Contact Form Area Start -->
		<div class="contact-form-area">
			<div class="container">
				<div class="about-title">
					<h3>LEAVE A MESSAGE</h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form>
							<div class="row">
								<div class="col-md-5">
									<div class="contact-form-left">
										<input type="text" placeholder="Your Name" />
										<input type="email" placeholder="Your Email" />
									</div>
								</div>
								<div class="col-md-7">
									<div class="contact-form-right">
										<div class="input-message">
											<textarea name="message" id="message" placeholder="Your Message"></textarea>
											<input class="btn btn-default" type="submit" value="SEND" name="submit" id="submit">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Form Area End -->
		<!-- Footer Area Start -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
