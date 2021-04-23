
<div class="main-page header-standard--right">
  <?php require_once FRONTEND_INCLUDE . 'header-shop.php' ?>
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