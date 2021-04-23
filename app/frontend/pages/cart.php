<div class="main-page header-standard--right">
	<?php require_once FRONTEND_INCLUDE . 'header-shop.php' ?>
	<div class="page-outer products-page-outer">
		<div class="page-title title--standard-with-breadcrumbs has-image">
			<div class="m-inner">
				<div class="m-content content-grid">
					<h1 class="m-title entry-title">Cart</h1>
					<div class="breadcrumbs">
						<a class="breadcrumbs-link" href="#"><span>Home</span></a>
						<span class="breadcrumbs-separator"></span>
						<span class="breadcrumbs-current">Cart</span>
					</div>
				</div>
			</div>
		</div>
		<div id="page-inner" class="content-grid">
			<main
				id="page-content"
				class="page-grid layout--template no-bottom-space gutter--medium"
			>
				<div class="page-grid-inner clear">
					<div class="grid-item page-content-section grid-col--12">
						<?php if (count($fetched_products_in_cart) == 0): ?>
							<?php require_once FRONTEND_INCLUDE . 'empty-cart.php' ?>
						<?php else: ?>
						<div class="cart-content">
							<div id="cart-page" class="cart">
								<div class="cart-notices-wrapper"></div>
								<form
									class="cart-form"
									action="cart-handler.php"
									method="post"
								>
									<table
										class="shop_table shop_table_responsive cart cart-form__contents"
										cellspacing="0"
									>
										<thead>
											<tr>
												<th class="product-remove">&nbsp;</th>
												<th class="product-thumbnail">&nbsp;</th>
												<th class="product-name">Product</th>
												<th class="product-price">Price</th>
												<th class="product-quantity">Quantity</th>
												<th class="product-subtotal">Subtotal</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($fetched_products_in_cart as $item): ?>
											<tr class="cart-form__cart-item cart_item">
												<td class="product-remove">
													<a
														href="#"
														class="remove remove-product-in-cart"
														aria-label="Remove this item"
														data-productId="<?php echo $item->id; ?>"
														>×</a
													>
												</td>

												<td class="product-thumbnail">
													<a
														href="#"
														><img
															width="400"
															height="703"
															src="<?php echo FRONTEND_BASE . explode(',', $item->images)[0]; ?>"
															class="attachment-thumbnail size-thumbnail"
															alt="m"
													/></a>
												</td>

												<td class="product-name" data-title="Product">
													<a href="#" >New Cabernet Sauvignon</a>
												</td>

												<td class="product-price" data-title="Price">
													<span class="price-amount amount">
														<span class="price-currencySymbol"><?php echo $item->currency; ?></span>
														<?php echo $item->price ?>
													</span>
												</td>

												<td class="product-quantity" data-title="Quantity">
													<div class="quantity-buttons quantity">
														<label class="screen-reader-text"><?php echo $products_in_cart[$item->id] ?></label>
														<input
															type="text"
															class="input-text qty text quantity-input"
															value="<?php echo $products_in_cart[$item->id] ?>"
															title="Qty"
															size="4"
															name="quantity-<?php echo $item->id ?>"
															inputmode="numeric"
														/>
													</div>
												</td>

												<td class="product-subtotal" data-title="Subtotal">
													<span class="price-amount amount">
														<span class="price-currencySymbol"><?php echo $item->currency ?></span>
														<?php echo (int)$products_in_cart[$item->id] * $item->price; ?>
													</span>
													<input type="hidden" class="product-subtotal-price" value="<?php echo (int)$products_in_cart[$item->id] * $item->price; ?>" />
												</td>
											</tr>
											<?php endforeach;?>
											<tr>
												<td colspan="6" class="actions">
													<div class="coupon">
														<label for="coupon_code">Coupon:</label>
														<input
															type="text"
															name="coupon_code"
															class="input-text"
															id="coupon_code"
															value=""
															placeholder="Coupon code"
														/>
														<button
															type="submit"
															class="button"
															name="apply_coupon"
															value="Apply coupon"
														>
															Apply coupon
														</button>
													</div>

													<button
														type="submit"
														class="button"
														name="update"
														value="Update cart"
													>
														Update cart
													</button>

													<input
														type="hidden"
														id="cart-nonce"
														name="cart-nonce"
													/>
												</td>
											</tr>
										</tbody>
									</table>
								</form>

								<div class="cart-collaterals">
									<div class="cart_totals calculated_shipping">
										<h2>Cart totals</h2>

										<table
											cellspacing="0"
											class="shop_table shop_table_responsive"
										>
											<tbody>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td data-title="Subtotal">
														<span class="price-amount amount">
															<span class="price-currencySymbol">£</span>
															<span class="product-subtotal-display"><?php echo $subtotal; ?></span>
														</span>
														<input type="hidden" class="subtotal-order" value="<?php echo $subtotal; ?>" />
													</td>
												</tr>

												<tr class="order-total">
													<th>Total</th>
													<td data-title="Total">
														<strong>
															<span class="price-amount amount">
																<span class="price-currencySymbol">£</span>
																<span class="product-subtotal-display"><?php echo $subtotal; ?></span>
															</span>
														</strong>
													</td>
												</tr>
											</tbody>
										</table>

										<div class="proceed-to-checkout">
											<a
												href="checkout.php"
												class="checkout-button button alt wc-forward"
											>
												Proceed to checkout</a
											>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
	</div>
</div>
