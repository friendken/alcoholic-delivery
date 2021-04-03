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
              <div class="dropdown dropdown-account">
                <a class="btn btn-secondary dropdown-toggle account-widget--opener" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="account-widget--opener-text">Welcome, <?php echo $user->data()->first_name . ' ' . $user->data()->last_name ?></span>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>
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
                          <?php require_once FRONTEND_INCLUDE . 'home-product-item.php' ?>
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