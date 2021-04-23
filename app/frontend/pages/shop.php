
<div class="main-page header-standard--right">
  <?php require_once FRONTEND_INCLUDE . 'header-shop.php' ?>
  <div class="page-outer products-page-outer">
    <div class="page-title title--standard-with-breadcrumbs has-image">
      <div class="m-inner">
        <div class="m-content content-grid ">
          <h1 class="m-title entry-title">
            Alcoholic Shop </h1>
          <div class="breadcrumbs">
            <a class="breadcrumbs-link" href="#"><span>Home</span></a>
            <span class="breadcrumbs-separator"></span>
            <span class="breadcrumbs-current">Alcoholic Shop</span>
          </div>
        </div>
      </div>
    </div>
    <div id="page-inner" class="content-grid">
      <main id="page-content" class="page-grid layout--template no-bottom-space gutter--medium">
        <div class="page-grid-inner clear">
          <div id="products-page" class="grid-item page-content-section page-col--9 page--list">
            <header class="products-header"></header>
            <div class="products-results">
              <div class="w-notices-wrapper"></div>
              <p class="w-result-count">Showing <?php echo ($page_limit * $page) - $page_limit + 1; ?>–<?php echo ($page_limit * $page) - $page_limit + count($product_list); ?> of <?php echo count($products->list()) ?> results</p>
              <form class="w-ordering" method="get">
                <select name="orderby" class="product-orderby select2-hidden-accessible" aria-label="Shop order"
                  tabindex="-1">
                  <option value="menu_order" selected="selected">Default sorting</option>
                  <option value="popularity">Sort by popularity</option>
                  <option value="rating">Sort by average rating</option>
                  <option value="date">Sort by latest</option>
                  <option value="price">Sort by price: low to high</option>
                  <option value="price-desc">Sort by price: high to low</option>
                </select>
              </form>
            </div>
            <div class="w-product-list">
              <ul class="products columns-3">
                <?php require_once FRONTEND_INCLUDE . 'shop-product-item.php' ?>
              </ul>
            </div>
            <nav class="w-pagination">
              <?php foreach($pagination_array as $item):?>
                <?php if ($item == $page) :?>
                  <span class="page-numbers current"><?php echo $item; ?></span>
                <?php else: ?>
                  <a class="page-numbers" href="<?php echo "shop.php?page=".$item?>"><?php echo $item; ?></a>
                <?php endif; ?>
              <?php endforeach;?>
            </nav>
          </div>
          <div class="grid-item page-sidebar-section page-col--3">
            <aside id="page-sidebar">
              <div class="widget widget_product_search" data-area="shop-sidebar">
                <form role="search" method="get" class="w-product-search" action="#">
                  <label class="screen-reader-text">Search for:</label>
                  <div class="search-form-inner clear">
                    <input type="search" id="w-product-search-field" class="search-form-field"
                      placeholder="Type your search here..." value="" name="s">
                    <button type="submit" class="search-form-button">
                      <span class="lnr lnr-magnifier"></span>
                    </button>
                  </div>
                  <input type="hidden" name="post_type" value="product">
                </form>
              </div>
              <div class="widget woocommerce widget_price_filter">
                <h5 class="widget-title">Filter by price</h5>
                <form method="get" action="#">
                  <div class="price_slider_wrapper">
                    <div class="price_slider"></div>
                    <div class="price_slider_amount" data-step="10">
                      <input type="text" id="min_price" name="min_price" value="30" data-min="30"
                        placeholder="Min price" style="display: none;">
                      <input type="text" id="max_price" name="max_price" value="100" data-max="100"
                        placeholder="Max price" style="display: none;">
                      <button type="submit" class="button">Filter</button>
                      <div class="price_label" style="">
                        Price: <span class="from">30$</span> — <span class="to">100$</span>
                      </div>
                      <input type="hidden" name="orderby" value="popularity">
                      <div class="clear"></div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="widget widget_product_categories" data-area="shop-sidebar">
                <h5 class="widget-title">Drink Types</h5>
                <ul class="product-categories">
                  <li class="cat-item cat-item-60">
                    <a href="#">Extraordinary</a>
                    <span class="count">(3)</span>
                  </li>
                  <li class="cat-item cat-item-71">
                    <a href="#">France</a>
                    <span class="count">(5)</span>
                  </li>
                  <li class="cat-item cat-item-41">
                    <a href="#">Gin</a>
                    <span class="count">(9)</span>
                  </li>
                  <li class="cat-item cat-item-67">
                    <a href="#">Gold</a>
                    <span class="count">(1)</span>
                  </li>
                  <li class="cat-item cat-item-49">
                    <a href="#">Portugal</a>
                    <span class="count">(6)</span>
                  </li>
                  <li class="cat-item cat-item-37">
                    <a href="#">Rose</a>
                    <span class="count">(12)</span>
                  </li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </main>
    </div>
  </div>