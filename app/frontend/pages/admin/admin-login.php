<div class="container">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col col-lg-5 wrapper-admin-login-form">
        <form id="admin-login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <h3 class="admin-login-title">Login</h3>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" value="on">
            <label class="form-check-label" for="exampleCheck1">Remember</label>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</div>