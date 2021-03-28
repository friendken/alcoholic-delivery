<div id="register-modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">REGISTER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="register-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="modal-holder">
            <div class="m-fields">
              <label class="m-user-name-label required">Email</label>
              <input type="text" class="m-user-name" name="email" value="">
              <label class="m-user-first-name-label required">First Name</label>
              <input type="text" class="m-user-first-name" name="first_name" value="">
              <label class="m-user-last-name-label required">Last Name</label>
              <input type="text" class="m-user-last-name" name="last_name" value="">
              <label class="m-user-password-label required">Password</label>
              <input type="password" class="m-user-password" name="password">
              <label class="m-user-confirm-password-label required">Confirm Password</label>
              <input type="password" class="m-user-confirm-password" name="password_again">
              <input type="hidden" class="m-user-authentication-type" value="register" name="authentication_type">
              <input type="hidden" name="csrf_token" value="<?php echo Token::generate(true); ?>">
            </div>
            <div class="m-action">
              <button type="submit" class="shortcode m-action-button button layout--filled  ">
                <span class="btn-text">Resister</span>
              </button>
              <span class="shortcode m-action-spinner fa-spin icon-holder  layout--normal">
                <span class="qodef-icon-font-awesome fa fa-spinner qodef-icon qodef-e" style=""></span>
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>