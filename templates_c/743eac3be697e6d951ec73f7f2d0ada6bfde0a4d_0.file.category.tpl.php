<?php
/* Smarty version 3.1.39, created on 2021-09-16 17:18:37
  from 'C:\xampp\htdocs\Writer\templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143604da040b9_19116999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '743eac3be697e6d951ec73f7f2d0ada6bfde0a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Writer\\templates\\category.tpl',
      1 => 1631805436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6143604da040b9_19116999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Tutti i Prodotti'), 0, false);
?>

<div class="shopping-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="search-bar">
                    <form class="example" action="search.php" method="post" style="margin:auto;max-width:300px">
                        <input type="text" placeholder="Search.." name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <br><br>
                <div class="shop-widget">
                    <div class="shop-widget-top">
                        <aside class="widget widget-categories">
                            <h2 class="sidebar-title text-center">CATEGORIE</h2>
                            <ul class="sidebar-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <li>
                                        <a href="category.php?id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                                            <i class="fa fa-angle-double-right"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</i>
                                        </a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                        <h2><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h2>
                    </div>
                    <div class="tab-content">
                        <div class="row tab-pane fade in active" id="home">
                            <div class="shop-single-product-area">
                                <?php if ((!empty($_smarty_tpl->tpl_vars['books']->value))) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                                        <div class="col-sm-2">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="Product-item.php?id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
"
                                                       class="single-banner-image-wrapper">
                                                        <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['book']->value['pic'];?>
" width=150px height="170px">
                                                    </a>
                                                </div>
                                                <div class="banner-bottom text-center">
                                                    <div class="banner-bottom-title">
                                                        <a href="Product-item.php?id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</a>
                                                    </div>
                                                    <div class="rating-icon">
                                                        <p><?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <div></div>
                                <?php }?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
