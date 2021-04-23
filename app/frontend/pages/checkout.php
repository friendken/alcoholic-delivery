<div class="main-page header-standard--right">
  <?php require_once FRONTEND_INCLUDE . 'header-shop.php' ?>
	<div class="page-outer products-page-outer">
		<div class="page-title title--standard-with-breadcrumbs has-image">
			<div class="m-inner">
				<div class="m-content content-grid">
					<h1 class="m-title entry-title">Checkout</h1>
					<div class="breadcrumbs">
						<a class="breadcrumbs-link" href="#"><span>Home</span></a>
						<span class="breadcrumbs-separator"></span>
						<span class="breadcrumbs-current">Checkout</span>
					</div>
				</div>
			</div>
		</div>
    <form id="form-customer_details" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div id="page-inner" class="content-grid">
        <main
          id="page-content"
          class="page-grid layout--template no-bottom-space gutter--medium"
        >
          <div id="customer_details" class="page-grid-inner clear">
            <div class="grid-item page-content-section grid-col--6 checkout-page">
              <div class="filling-fields-fields">
                <h3>Billing details</h3>
                <div class="billing-fields__field-wrapper">
                  <p class="form-row validate-required" id="first_name_field">
                    <label for="first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                    <span class="input-wrapper">
                      <input required type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="<?php if ($userLogged) echo $userLogged->first_name; else echo ''; ?>">
                    </span>
                  </p>
                  <p class="form-row validate-required" id="last_name_field">
                    <label for="last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                    <span class="input-wrapper">
                      <input required type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="<?php if ($userLogged) echo $userLogged->last_name; else echo ''; ?>">
                    </span>
                  </p>
                  <p class="form-row validate-required" id="email_field">
                    <label for="email" class="">Email&nbsp;<abbr class="required" title="required">*</abbr></label>
                    <span class="input-wrapper">
                      <input required type="text" class="input-text " name="email" id="email" placeholder="" value="<?php if ($userLogged) echo $userLogged->email; else echo ''; ?>">
                    </span>
                  </p>
                  <p class="form-row validate-required" id="address_field">
                    <label for="address" class="">Address&nbsp;<abbr class="required" title="required">*</abbr></label>
                    <span class="input-wrapper">
                      <input required type="text" class="input-text " name="address" id="address" placeholder="House number and street name" value="">
                    </span>
                  </p>
                  <p class="form-row validate-required" id="city_field">
                    <label for="city" class="">City&nbsp;<abbr class="required" title="required">*</abbr></label>
                    <span class="input-wrapper">
                      <input required type="text" class="input-text " name="city" id="city" placeholder="" value="">
                    </span>
                  </p>
                  <p class="form-row validate-required" id="country_field">
                    <label for="country" class="">Country&nbsp;(optional)</label>
                    <span class="input-wrapper">
                      <input type="text" class="input-text " name="country" id="country" placeholder="" value="">
                    </span>
                  </p>
                  <p class="form-row validate-required" id="phone_field">
                    <label for="phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label>
                    <span class="input-wrapper">
                      <input required type="text" class="input-text " name="phone" id="phone" placeholder="" value="">
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="grid-item page-content-section grid-col--12 checkout-page">
              <h3 id="order_review_heading">Your order</h3>
              <div id="order_review" class="checkout-review-order">
                <table class="shop_table checkout-review-order-table">
                  <thead>
                    <tr>
                      <th class="product-name">Product</th>
                      <th class="product-total">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($fetched_products_in_cart as $item): ?>
                    <tr class="cart_item">
                      <td class="product-name">
                        <?php echo $item->name ?>&nbsp;
                        <strong class="product-quantity">
                          ×&nbsp;<?php echo $products_in_cart[$item->id] ?>
                        </strong>
                      </td>
                      <td class="product-total">
                        <span class="price-amount amount">
                          <span class="price-currencySymbol">£</span>
                          <?php echo $item->price * $products_in_cart[$item->id] ?>
                        </span>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                  <tfoot>
                    <tr class="cart-subtotal">
                      <th>Subtotal</th>
                      <td>
                        <span class="price-amount amount">
                          <span class="price-currencySymbol">£</span>
                          <?php echo $subtotal; ?>
                        </span>
                      </td>
                    </tr>
                    <tr class="order-total">
                      <th>Total</th>
                      <td>
                        <strong>
                          <span class="price-amount amount">
                            <span class="price-currencySymbol">£</span>
                            <?php echo $subtotal; ?>
                          </span>
                        </strong>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div id="payment" class="checkout-payment">
                <ul class="payment_methods payment_methods methods">
                  <li class="payment_method payment_method_cod">
                    <label for="payment_method_cod">Cash on delivery</label>
                    <div class="payment_box payment_method_cod">
                      <p>Pay with cash upon delivery.</p>
                    </div>
                  </li>
                </ul>
                <div class="form-row place-order">
                <button type="submit" class="button alt" name="checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
              </div>
            </div>
          </div>
        </main>
      </div>
    </form>
	</div>
</div>
