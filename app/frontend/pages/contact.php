
<div class="main-page header-standard--right">
  <?php require_once FRONTEND_INCLUDE . 'header-shop.php' ?>
  <div class="page-outer contact-page">
    <div class="page-title title--standard has-image image--parallax parallax disable-parallax-mobile">
      <div class="m-inner">
        <div class="parallax-img-holder" style="opacity: 1;">
          <div class="parallax-img-wrapper" style="transform: translate3d(0px, 42.42%, 0px);">
            <img width="1920" height="1029" src="<?php echo FRONTEND_ASSET . 'images/contact-background.jpg'?>" class="parallax-img" alt="a"
              style="height: 100%; width: auto; max-width: unset;">
          </div>
        </div>
        <div class="m-content content-grid parallax-content-holder">
          <h1 class="m-title entry-title"> Contact Us </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="content-grid">
    <div class="page-row pagae_row-fluid page_column-gap-30">
      <div class="page_column page_column_container page_col-sm-12 page_col-lg-6">
        <div class="page_column-inner page_custom_form">
          <div class="page_wrapper">
            <div class="shortcode section-title alignment--left ">
              <h3 class="m-title"> Get In Touch </h3>
              <p class="m-subtitle">Quis nostrud exe ullamco</p>
            </div>
            <div class="page_empty_space" style="height: 15px">
              <span class="page_empty_space_inner"></span>
            </div>
            <div role="form" class="form-wrap" lang="en-US" dir="ltr">
              <div class="screen-reader-response"></div>
              <form class="contact-form" novalidate="novalidate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                  <span class="form-control-wrap your-name">
                    <input type="text" name="name" value="" required size="40" class="form-control form-text"
                      aria-invalid="false" placeholder="Type your name here... *">
                  </span>
                </div>
                <div>
                  <span class="form-control-wrap your-email">
                    <input type="text" name="email" value="" required size="40" class="form-control form-text"
                      aria-invalid="false" placeholder="Type your e-mail here... *">
                  </span>
                </div>
                <div>
                  <span class="form-control-wrap your-message">
                    <textarea name="message" cols="40" rows="4" required class="form-control form-textarea"
                      aria-invalid="false" placeholder="Type your message here... *"></textarea>
                  </span>
                </div>
                <div>
                  <button type="submit" class="form-control form-submit form-button size--normal type--filled">
                    <span class="m-text">Send</span>
                  </button>
                  <span class="form-loading"></span>
                </div>
                <div class="response-output display-none"></div>
              </form>
            </div>
            <div class="page_empty_space" style="height: 32px"><span class="page_empty_space_inner"></span></div>
            <?php echo $success; ?>
          </div>
        </div>
      </div>
    </div>
  </div>