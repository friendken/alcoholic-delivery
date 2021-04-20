
<div class="main-page header-standard--right">
  <header class="header-page">
    <div id="header-page-inner">
      <a class="header-logo-link" href="#" rel="home">
        <img width="80" height="80" src="<?php echo FRONTEND_ASSET . 'images/logo-color.png'?>" class="header-logo-image" alt="logo main">
      </a>
      <nav class="header-navigation" role="navigation" aria-label="Top Menu">
        <ul id="main-navigation-menu" class="menu">
          <li
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-276 hide-link menu-item--narrow">
            <a href="index.php"><span class="menu-item-inner"><span
                  class="menu-item-text">Home</span></span></a><span class="menu-arrow"></span>
          </li>
          <li
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-277 hide-link menu-item--narrow">
            <a href="shop.php?page=1" ><span class="menu-item-inner"><span
                  class="menu-item-text">Shop</span></span></a><span class="menu-arrow"></span>
          </li>
          <li
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-279 hide-link menu-item--narrow">
            <a href="contact.php" ><span class="menu-item-inner"><span
                  class="menu-item-text">Contact</span></span></a><span class="menu-arrow"></span>
          </li>
        </ul>
      </nav>
      <div class="widget-holder">
        <div id="wishlist" class="widget header-left-icon">
          <a href="#" target="_self">
            <span class="qodef-search-opener-inner wishlist-icon" style="color: rgb(0, 0, 0);">
              <span class="lnr lnr-heart"></span>
            </span>
          </a>
        </div>
        <div class="widget dropdown_cart header-left-icon" data-area="custom-widget">
          <div class="dropdown-cart dropdown-cart--m">
            <div class="dropdown-cart-inner dropdown-cart-inner--m">
              <a class="cart-opener" href="#" style="color: rgb(0, 0, 0);">
                <span class="opener-icon">
                  <span class="lnr lnr-cart"></span>
                  <span class="opener-count"><?php echo $num_items_in_cart; ?></span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="content-grid">
    <div class="page-row pagae_row-fluid page_column-gap-30">
      <div class="page_column page_column_container page_col-sm-12 page_col-lg-6">
        <div class="page_column-inner page_custom_form">
          <div class="page_wrapper">
            <div class="shortcode section-title alignment--left ">
              <h3 class="m-title"> User Information </h3>
            </div>
            <div class="page_empty_space" style="height: 15px">
              <span class="page_empty_space_inner"></span>
            </div>
            <div role="form" class="form-wrap" lang="en-US" dir="ltr">
              <div class="screen-reader-response"></div>
              <form class="contact-form" novalidate="novalidate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                  <span class="form-control-wrap your-name">
                    <label>Email</label>
                    <input type="email" name="email" disabled value="<?php echo $data->email; ?>" size="40" class="form-control form-text"
                      aria-invalid="false" placeholder="Type your email here... *">
                  </span>
                </div>
                <div>
                  <span class="form-control-wrap your-email">
                    <label>First Name</label>
                    <input type="text" name="first_name" value="<?php echo $data->first_name; ?>" size="40" class="form-control form-text"
                      aria-invalid="false" placeholder="Type your first name here... *">
                  </span>
                </div>
                <div>
                  <span class="form-control-wrap your-email">
                    <label>Last Name</label>
                    <input type="text" name="last_name" value="<?php echo $data->last_name; ?>" size="40" class="form-control form-text"
                      aria-invalid="false" placeholder="Type your last name here... *">
                  </span>
                </div>
                <div style="padding-bottom: 10px;">you registered on <?php echo $data->created_at; ?> </div>
                <div>
                  <button type="submit" class="form-control form-submit form-button size--normal type--filled">
                    <span class="m-text">Update</span>
                  </button>
                  <span class="form-loading"></span>
                </div>
              </form>
            </div>
            <div class="page_empty_space" style="height: 32px"><span class="page_empty_space_inner"></span></div>
            <?php if(!$user->isAdmin()): ?>
            <a id="deactivate-user" href="delete-user.php">Deactivate your account</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>