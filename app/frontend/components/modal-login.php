<div id="login-modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LOGIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login-form">
          <div class="modal-holder">
            <div class="m-fields">
              <label class="m-user-name-label required">Email</label>
              <input type="text" class="m-user-name" name="email" value="">
              <label class="m-user-password-label required">Password</label>
              <input type="password" class="m-user-password" name="password">
              <input type="hidden" class="m-user-authentication-type" value="login" name="authentication_type">
              <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
            </div>
            <div class="m-links">
              <div class="m-links-remember-me">
                <input type="checkbox" id="m-links-remember" class="m-links-remember" name="remember" value="forever">
                <label for="m-links-remember" class="m-links-remember-label">Remember me</label>
              </div>
              <a href="#" class="m-links-reset-password">
                <p class="m-links-reset-password-text">Forgot your password?</p>
              </a>
            </div>
            <div class="m-action">
              <button type="submit" class="shortcode m-action-button button layout--filled  ">
                <span class="btn-text">Login</span>
              </button>
              <span class="shortcode m-action-spinner fa-spin icon-holder  layout--normal">
                <span class="qodef-icon-font-awesome fa fa-spinner qodef-icon qodef-e" style=""></span>
              </span>
              <p class="m-links-not-a-member-text">Not a member yet?</p>
              <a href="#" class="m-links-register">
                <p class="m-links-not-a-member-text-link">Register Now</p>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>