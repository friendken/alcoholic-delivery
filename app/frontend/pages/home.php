<div class="main-page">
  <div class="header-top">
    <div class="header-top__content content-grid">
      <div class="header-top__item">
        <div class="widget widget_text top-bar-widget">
          <div class="textwidget">
            <p>Follow Us</p>
          </div>
        </div>
        <div class="widget social-icon top-bar-widget">
          <span class="social-icon-wrap" data-hover-color="#f9a170">
            <span class="social-icon social_facebook"></span>
          </span>
        </div>
        <div class="widget social-icon top-bar-widget">
          <span class="social-icon-wrap" data-hover-color="#f9a170" style="margin-left: 0px !important;">
            <span class="social-icon social_twitter"></span>
          </span>
        </div>
        <div class="widget social-icon top-bar-widget">
          <span class="social-icon-wrap" data-hover-color="#f9a170" style="margin-left: 0px !important;">
            <span class="social-icon social_linkedin"></span>
          </span>
        </div>
      </div>
      <div class="header-top__item">
        <div class="widget top-bar-widget">
          <div class="account-widget" style="margin: 0 -6px 0 0">
            <?php if($user->data()): ?>
              <a href="#" class="account-widget--opener" data-bs-toggle="modal" data-bs-target="#register-modal">
                <span class="account-widget--opener-text">Welcome, <?php echo $user->data()->first_name . ' ' . $user->data()->last_name ?></span>
              </a>
            <?php else: ?>
              <a href="#" class="account-widget--opener" data-bs-toggle="modal" data-bs-target="#login-modal">
                <span class="account-widget--opener-text">Login</span>
                <span class="login-icon lnr-user lnr"></span>
              </a>
              <a href="#" class="account-widget--opener" data-bs-toggle="modal" data-bs-target="#register-modal">
                <span class="account-widget--opener-text">Register</span>
                <span class="login-icon lnr-pencil lnr"></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header-page">
    <div id="header-page-inner" class="content-grid">
      <div class="header-page--left">
        <div id="search-box" class="widget header-left-icon icon-hover">
          <a style="margin: -2px 0 0;" class="search-opener" href="javascript:void(0)">
            <span class="qodef-search-opener-inner">
              <span class="lnr lnr-magnifier"></span>
            </span>
          </a>
        </div>
        <div id="wishlist" class="widget header-left-icon icon-hover">
          <a itemprop="url" href="#" target="_self">
            <span class="qodef-search-opener-inner wishlist-icon">
              <span class="lnr lnr-heart"></span>
            </span>
          </a>
        </div>
        <nav class="header-navigation" role="navigation" aria-label="Divided Left Menu">
          <ul id="menu-divided-left-menu" class="menu">
            <li id="home-menu" class="menu-item menu-item-type-custom current-menu-ancestor">
              <a href="#">
                <span class="menu-item-inner">
                  <span class="menu-item-text">Home</span>
                </span>
              </a>
              <span class="menu-arrow"></span>
            </li>
            <li id="pages-menu" class="menu-item menu-item-type-custom">
              <a href="#">
                <span class="menu-item-inner">
                  <span class="menu-item-text">Pages</span>
                </span>
              </a>
              <span class="menu-arrow"></span>
            </li>
            <li id="shop-menu" class="menu-item menu-item-type-custom">
              <a href="#" onclick="JavaScript: return false;">
                <span class="menu-item-inner">
                  <span class="menu-item-text">Shop</span>
                </span>
              </a>
              <span class="menu-arrow"></span>
            </li>
          </ul>
        </nav>
      </div>
      <a itemprop="url" class="header-logo-link" href="#" style="height:78px" rel="home">
        <img width="120" height="120" src="<?php echo FRONTEND_ASSET . 'images/logo-white.png'?>" class="header-logo-image" alt="logo main" />
      </a>
      <div class="header-page--right">
        <nav class="header-navigation" role="navigation" aria-label="Divided Right Menu">
          <ul id="menu-divided-right-menu" class="menu">
            <li class="menu-item menu-item-type-custom">
              <a href="#">
                <span class="menu-item-inner">
                  <span class="menu-item-text">Events</span>
                </span>
              </a>
              <span class="menu-arrow"></span>
            </li>
            <li class="menu-item menu-item-type-custom">
              <a href="#">
                <span class="menu-item-inner">
                  <span class="menu-item-text">Blog</span>
                </span>
              </a>
              <span class="menu-arrow"></span>
            </li>
            <li class="menu-item menu-item-type-custom">
              <a href="#">
                <span class="menu-item-inner">
                  <span class="menu-item-text">Landing</span>
                </span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="widget dropdown_cart icon-hover" data-area="custom-widget">
          <div class="dropdown-cart dropdown-cart--m">
            <div class="dropdown-cart-inner dropdown-cart-inner--m">
              <a itemprop="url" class="cart-opener" href="#">
                <span class="opener-icon">
                  <span class="lnr lnr-cart"></span>
                  <span class="opener-count">0</span>
                </span>
              </a>
              <!-- <div class="qodef-m-dropdown">
                <div class="qodef-m-dropdown-inner">
                  <p class="qodef-m-posts-not-found qodef-grid-item">No products in the cart.</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="page-inner">
      <main class="page-content page-grid layout--template">
        <div class="page-grid-inner">
          <div class="grid-item page-content-section grid-col--12">
            <div class="page-row">
              <div class="gallery-wrap">
                <div class="gallery-slide">
                  <img class="gallery-slide--item" src="<?php echo FRONTEND_ASSET .'/images/h1-slide-1.jpg'?>" />
                  <img class="gallery-slide--item" src="<?php echo FRONTEND_ASSET .'/images/h1-slide-2.jpg'?>" />
                  <img class="gallery-slide--item" src="<?php echo FRONTEND_ASSET .'/images/h1-slide-3.jpg'?>" />
                </div>
                <div class="tabs inner nav-pos-hor-center nav-pos-ver-bottom nav-dir-horizontal">
                  <div class="tab-mask tabs-wrap" style="max-width: 1395px; overflow: hidden; position: relative;">
                    <div class="tabs-inner-wrapper">
                      <div class="tp-tab" style="top: 0px;">
                        <div class="tp-tab-title">Vineyards</div>
                        <div class="tp-tab-desc">Visit &amp; take a tour</div>
                        <div></div>
                      </div>
                      <div class="tp-tab" style="top: 0px;">
                        <div class="tp-tab-title">Products</div>
                        <div class="tp-tab-desc">Old family recipes</div>
                        <div></div>
                      </div>
                      <div class="tp-tab selected" style="top: 0px;">
                        <div class="tp-tab-title">History</div>
                        <div class="tp-tab-desc">Meet a tradition that lasts</div>
                        <div></div>
                      </div>
                      <div class="tp-tab" style="top: 0px;">
                        <div class="tp-tab-title">Cellars</div>
                        <div class="tp-tab-desc">Our storage rooms</div>
                        <div></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="page-row about-us">
              <div class="page_column page_column_container page_col-sm-12">
                <div class="page_column-inner page_custom_about-us">
                  <div class="page_wrapper">
                    <div class="content-grid">
                      <div class="page_row page_inner page_row-fluid">
                        <div class="page_column page_column_container page_col-sm-12 page_col-lg-6">
                          <div class="page_column-inner page_custom_history_left">
                            <div class="wpb_wrapper">
                              <div class="shortcode section-title alignment--left ">
                                <h2 class="m-title">Our History </h2>
                                <p class="m-subtitle" style="color: #c8693a">Ut enim ad minim veniam quis nostrud</p>
                              </div>
                              <div class="page_text_column page_content_element" style="margin-top: -5px !important;">
                                <div class="wpb_wrapper">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lectus arcu ben dum at varius. Ut
                                    porttitor leo a diam. Pe na tibus et magnis dis. Ut enim ad minim veniam, quis no
                                    strud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo con sequat. Duis
                                    aute irure dolor in reprehenderit.</p>
                                </div>
                              </div>
                              <div class="page_text_column page_content_element ">
                                <div class="wpb_wrapper">
                                  <p>Excepteur sint occaecat cupidatat non proident. Elementum nisi quis eleifend quam
                                    adipiscing vitae proin sagittis. Viverra mauris in aliquam sem fringilla ut morbi
                                    tincidunt augue eget dolor.</p>
                                </div>
                              </div>
                              <div class="page_empty_space" style="height: 52px">
                                <span class="page_empty_space_inner"></span>
                              </div>
                              <a class="shortcode qodef-m  btn-button layout--filled html--link" href="#"
                                target="_self">
                                <span class="qodef-m-text">See More</span></a>
                            </div>
                          </div>
                        </div>
                        <div
                          class="custom-image-layout page_column page_column_container page_col-sm-12 page_col-lg-6 page--appear">
                          <div class="page_column-inner page_custom_history_image">
                            <div class="wpb_wrapper">
                              <div class="shortcode image-with-text layout--text-over">
                                <div class="m-image">
                                  <img width="1100" height="743" src="<?php echo FRONTEND_ASSET .'images/h1-img-1.jpg' ?>"
                                    class="attachment-full size-full" alt="d"
                                    sizes="(max-width: 1100px) 100vw, 1100px">
                                </div>
                                <div class="m-title-holder">
                                  <h2 class="m-title" style="color: #2b2824">
                                    1925 </h2>
                                </div>
                                <div class="m-content">
                                  <p class="m-text" style="color: #9d9796">Viverra mauris in aliquam, March
                                    4th 1925</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-grid">
              <div class="page-row page_row-fluid content-alignment-center">
                <div class="page_column page_column_container page_col-sm-12">
                  <div class="page_column-inner page_custom_best_product">
                    <div class="page_wrapper">
                      <div class="shortcode section-title alignment--center ">
                        <h2 class="m-title"> Our Best Spirits </h2>
                        <p class="m-subtitle">Ut enim ad minim veniam quis nostrud</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-grid">
              <div class="page-row page_row-fluid page-content-alignment-center"
                style="padding-bottom: 120px !important;">
                <div class="page_column page_column_container page_col-sm-12">
                  <div class="page_column-inner" style="padding-top: 34px !important;">
                    <div class="page_wrapper">
                      <div
                        class="shortcode w-shortcode w-product-list item-layout--info-below  page-grid layout--columns gutter--medium page-col-num--4 item-layout--info-below item-skin--default no-bottom-space pagination--off responsive--predefined">
                        <div class="page-grid-inner clear">
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <span class="w-product-mark w-onsale">Sale</span> <img width="800" height="1406"
                                  src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-13.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="Luctuson Chardonnayy">
                                    Luctuson Chardonnayy</a>
                                </h6>
                                <div class="w-product-price price"><del><span class="w-price-amount amount">85<span
                                        class="w-price-currencySymbol">$</span></span></del> <ins><span
                                      class="w-price-amount amount">65<span
                                        class="w-price-currencySymbol">$</span></span></ins></div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <img width="800" height="1406" src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-2.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="New Cabernet Sauvignon">
                                    New Cabernet Sauvignon</a>
                                </h6>
                                <div class="w-product-price price">
                                  <ins>
                                    <span class="w-Price-amount amount">67<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </ins>
                                </div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <span class="w-product-mark w-onsale">Sale</span> <img width="800" height="1406"
                                  src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-3.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="Belasco llama cognac">
                                    Belasco llama cognac</a>
                                </h6>
                                <div class="w-product-price price">
                                  <ins>
                                    <span class="w-price-amount amount">74<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </ins>
                                </div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <img width="800" height="1406" src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-4.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="La sauvignon blanc wine">
                                    La sauvignon blanc wine</a>
                                </h6>
                                <div class="w-product-price price">
                                  <ins>
                                    <span class="w-price-amount amount">85<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </ins>
                                </div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <span class="w-product-mark w-onsale">Sale</span> <img width="800" height="1406"
                                  src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-5.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="Heavyweight Cabernet Sauv">
                                    Heavyweight Cabernet Sauv</a>
                                </h6>
                                <div class="w-product-price price"><del><span class="w-price-amount amount">53<span
                                        class="w-price-currencySymbol">$</span></span></del> <ins><span
                                      class="w-price-amount amount">63<span
                                        class="w-price-currencySymbol">$</span></span></ins></div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <span class="w-product-mark w-onsale">Sale</span> <img width="800" height="1406"
                                  src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-6.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="Alias Secret Red Blend">
                                    Alias Secret Red Blend</a>
                                </h6>
                                <div class="w-product-price price">
                                  <ins>
                                    <span class="w-price-amount amount">63<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </ins>
                                </div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <span class="w-product-mark w-onsale">Sale</span> <img width="800" height="1406"
                                  src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-7.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="Luctuson Chardonnayy">
                                    Luctuson Chardonnayy</a>
                                </h6>
                                <div class="w-product-price price">
                                  <del>
                                    <span class="w-price-amount amount">85<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </del>
                                  <ins>
                                    <span class="w-price-amount amount">65<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </ins>
                                </div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                          <div
                            class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                            <div class="w-product-inner">
                              <div class="w-product-image">
                                <span class="w-product-mark w-onsale">Sale</span> <img width="800" height="1406"
                                  src="<?php echo FRONTEND_ASSET . 'images/thumbnail-product-8.jpg'?>"
                                  class="attachment-full size-full w-post-image" alt="i"
                                  sizes="(max-width: 800px) 100vw, 800px">
                                <div class="w-product-image-inner">
                                  <div class="w-product-button-holder">
                                    <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
                                      aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
                                      cart</a>
                                    <div class="w-product-wishlist-holder">
                                      <div class="add-to-wishlist add-to-wishlist">
                                        <div class="add-button show" style="display:block">
                                          <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                                            <span>Add to Wishlist</span>
                                          </a>
                                        </div>
                                        <div class="wishlistaddedbrowse hide" style="display:none;">
                                          <span class="feedback">Product added!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                          <span class="feedback">The product is already in the wishlist!</span>
                                          <a href="#" rel="nofollow">
                                            Browse Wishlist </a>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                      </div>
                                      <div class="clear"></div>
                                    </div><a href="#" class="button yith-wcqv-button"></a>
                                  </div>
                                </div>
                              </div>
                              <div class="w-product-content">
                                <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Drink</a><span
                                    class="category-separator"></span><a href="#" rel="tag">Italy</a><span
                                    class="category-separator"></span><a href="#" rel="tag">New</a>
                                </div>
                                <h6 itemprop="name" class="w-product-title entry-title">
                                  <a itemprop="url" class="w-product-title-link" href="#"
                                    title="New Anthony Pinot Noir">
                                    New Anthony Pinot Noir</a>
                                </h6>
                                <div class="w-product-price price">
                                  <ins>
                                    <span class="w-price-amount amount">85<span
                                        class="w-price-currencySymbol">$</span></span>
                                  </ins>
                                </div>
                              </div>
                              <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>