<?php
/* Smarty version 4.3.1, created on 2024-10-13 15:01:49
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670b705dea8eb1_49840859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1678713494,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_670b705dea8eb1_49840859 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
                      <figure>
              <img src="http://localhost/DesipulosVapeHub/modules/ps_imageslider/images/ab2c977759a2086a8fc04b9472bd30d7257a6c5e_1-240P11056390-L.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="http://localhost/DesipulosVapeHub/modules/ps_imageslider/images/185d41c45d1e5c59f6f252e20432b50301cfd63b_1-240PQ030430-L.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="http://localhost/DesipulosVapeHub/modules/ps_imageslider/images/3de9f9d51476e6d2c85947e1044ebeccf6af4662_1-240R01502370-L.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
                  </li>
          </ul>
    <div class="direction" aria-label="Carousel buttons">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Previous">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
