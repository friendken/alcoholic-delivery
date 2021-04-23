<div class="main-page header-standard--right">
  <?php require_once FRONTEND_INCLUDE . 'header-shop.php' ?>
	<div class="page-outer products-page-outer">
		<div class="page-title title--standard-with-breadcrumbs has-image">
			<div class="m-inner">
				<div class="m-content content-grid">
					<h1 class="m-title entry-title">Confirmation</h1>
					<div class="breadcrumbs">
						<a class="breadcrumbs-link" href="#"><span>Home</span></a>
						<span class="breadcrumbs-separator"></span>
						<span class="breadcrumbs-current">Confirmation</span>
					</div>
				</div>
			</div>
		</div>
    <div id="page-inner" class="content-grid">
      <main
        id="page-content"
        class="page-grid layout--template no-bottom-space gutter--medium"
      >
        <div class="page-grid-inner clear order-received">
          <div class="grid-item page-content-section grid-col--12 order">
            <p class="notice notice--success thankyou-order-received">Thank you. Your order has been received.</p>
						<ul class="order-overview thankyou-order-details order_details">
							<li class="order-overview__order order">
								Order number: <strong><?php echo $order->id; ?></strong>
							</li>
							<li class="order-overview__date date">
								Date: <strong><?php echo $order->created_at; ?></strong>
							</li>
							<li class="order-overview__total total">
								Total:
								<strong>
									<span class="price-amount amount">
										<span class="price-currencySymbol">£</span>
										<?php echo $order->total; ?>
									</span>
								</strong>
							</li>
							<li class="order-overview__payment-method method">
								Payment method: <strong>Cash on delivery</strong>
							</li>
						</ul>
          </div>
        </div>
      </main>
    </div>
	</div>
</div>
