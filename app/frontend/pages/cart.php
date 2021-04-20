<div class="main-page header-standard--right">
	<header class="header-page">
		<div id="header-page-inner">
			<a class="header-logo-link" href="#" rel="home">
				<img
					width="80"
					height="80"
					src="<?php echo FRONTEND_ASSET .'/images/logo-color.png' ?>"
					class="header-logo-image"
					alt="logo main"
				/>
			</a>
			<nav class="header-navigation" role="navigation" aria-label="Top Menu">
				<ul id="main-navigation-menu" class="menu">
					<li
						class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-276 hide-link menu-item--narrow"
					>
						<a href="index.php"
							><span class="menu-item-inner"
								><span class="menu-item-text">Home</span></span
							></a
						><span class="menu-arrow"></span>
					</li>
					<li
						class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-277 hide-link menu-item--narrow"
					>
						<a href="#"
							><span class="menu-item-inner"
								><span class="menu-item-text">Shop</span></span
							></a
						><span class="menu-arrow"></span>
					</li>
					<li
						class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-279 hide-link menu-item--narrow"
					>
						<a href="contact.php"
							><span class="menu-item-inner"
								><span class="menu-item-text">Contact</span></span
							></a
						><span class="menu-arrow"></span>
					</li>
				</ul>
			</nav>
			<div class="widget-holder">
				<div id="wishlist" class="widget header-left-icon">
					<a href="#" target="_self">
						<span
							class="qodef-search-opener-inner wishlist-icon"
							style="color: rgb(0, 0, 0)"
						>
							<span class="lnr lnr-heart"></span>
						</span>
					</a>
				</div>
				<div
					class="widget dropdown_cart header-left-icon"
					data-area="custom-widget"
				>
					<div class="dropdown-cart dropdown-cart--m">
						<div class="dropdown-cart-inner dropdown-cart-inner--m">
							<a class="cart-opener" href="#" style="color: rgb(0, 0, 0)">
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
						<div class="cart-content">
							<div id="cart-page" class="cart">
								<div class="cart-notices-wrapper"></div>
								<form
									class="cart-form"
									action="https://aperitif.qodeinteractive.com/cart/"
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
											<tr class="cart-form__cart-item cart_item">
												<td class="product-remove">
													<a
														href="https://aperitif.qodeinteractive.com/cart/?remove_item=68b1fbe7f16e4ae3024973f12f3cb313&amp;_wpnonce=a17a7886b6"
														class="remove"
														aria-label="Remove this item"
														data-product_id="1093"
														data-product_sku="02"
														>×</a
													>
												</td>

												<td class="product-thumbnail">
													<a
														href="https://aperitif.qodeinteractive.com/product/new-cabernet-sauvignon/"
														><img
															width="400"
															height="703"
															src="https://aperitif.qodeinteractive.com/wp-content/uploads/2019/09/h1-product-2-400x703.jpg"
															class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
															alt="m"
													/></a>
												</td>

												<td class="product-name" data-title="Product">
													<a
														href="https://aperitif.qodeinteractive.com/product/new-cabernet-sauvignon/"
														>New Cabernet Sauvignon</a
													>
												</td>

												<td class="product-price" data-title="Price">
													<span class="price-amount amount"
														>67<span class="price-currencySymbol"
															>$</span
														></span
													>
												</td>

												<td class="product-quantity" data-title="Quantity">
													<div class="quantity-buttons quantity">
														<label
															class="screen-reader-text"
															>New Cabernet Sauvignon quantity</label
														>
														<span
															class="quantity-minus icon-arrows-left icon"
														></span>
														<input
															type="text"
															class="input-text qty text quantity-input"
															data-step="1"
															data-min="0"
															data-max=""
															value="1"
															title="Qty"
															size="4"
															inputmode="numeric"
														/>
														<span
															class="quantity-plus icon-arrows-right icon"
														></span>
													</div>
												</td>

												<td class="product-subtotal" data-title="Subtotal">
													<span class="price-amount amount"
														>67<span class="price-currencySymbol"
															>$</span
														></span
													>
												</td>
											</tr>
											<tr class="cart-form__cart-item cart_item">
												<td class="product-remove">
													<a
														href="https://aperitif.qodeinteractive.com/cart/?remove_item=7f975a56c761db6506eca0b37ce6ec87&amp;_wpnonce=a17a7886b6"
														class="remove"
														aria-label="Remove this item"
														data-product_id="1011"
														data-product_sku="01"
														>×</a
													>
												</td>

												<td class="product-thumbnail">
													<a
														href="https://aperitif.qodeinteractive.com/product/luctuson-chardonnayy/"
														><img
															width="400"
															height="703"
															src="https://aperitif.qodeinteractive.com/wp-content/uploads/2019/09/h1-product-13-400x703.jpg"
															class="attachment-thumbnail size-thumbnail"
															alt="i"
													/></a>
												</td>

												<td class="product-name" data-title="Product">
													<a
														href="https://aperitif.qodeinteractive.com/product/luctuson-chardonnayy/"
														>Luctuson Chardonnayy</a
													>
												</td>

												<td class="product-price" data-title="Price">
													<span class="price-amount amount"
														>65<span class="price-currencySymbol"
															>$</span
														></span
													>
												</td>

												<td class="product-quantity" data-title="Quantity">
													<div class="quantity-buttons quantity">
														<label
															class="screen-reader-text"
															>Luctuson Chardonnayy quantity</label
														>
														<span
															class="quantity-minus icon-arrows-left icon"
														></span>
														<input
															type="text"
															class="input-text qty text quantity-input"
															data-step="1"
															data-min="0"
															data-max=""
															name="cart[7f975a56c761db6506eca0b37ce6ec87][qty]"
															value="1"
															title="Qty"
															size="4"
															inputmode="numeric"
														/>
														<span
															class="quantity-plus icon-arrows-right icon"
														></span>
													</div>
												</td>

												<td class="product-subtotal" data-title="Subtotal">
													<span class="price-amount amount"
														>65<span class="price-currencySymbol"
															>$</span
														></span
													>
												</td>
											</tr>

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
														name="update_cart"
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
														<span class="price-amount amount"
															>132<span class="price-currencySymbol"
																>$</span
															></span
														>
													</td>
												</tr>

												<tr class="order-total">
													<th>Total</th>
													<td data-title="Total">
														<strong
															><span class="price-amount amount"
																>132<span
																	class="price-currencySymbol"
																	>$</span
																></span
															></strong
														>
													</td>
												</tr>
											</tbody>
										</table>

										<div class="proceed-to-checkout">
											<a
												href="https://aperitif.qodeinteractive.com/checkout/"
												class="checkout-button button alt wc-forward"
											>
												Proceed to checkout</a
											>
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
</div>
