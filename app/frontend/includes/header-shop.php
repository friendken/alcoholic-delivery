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
							<a class="cart-opener" href="cart.php" style="color: rgb(0, 0, 0)">
								<span class="opener-icon">
									<span class="lnr lnr-cart"></span>
									<span class="opener-count"><?php echo $num_items_in_cart; ?></span>
									<input type="hidden" id="num_product_in_cart" value="<?php echo $num_items_in_cart; ?>" />
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>