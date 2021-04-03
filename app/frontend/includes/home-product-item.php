<?php foreach($product_list as $item): ?>
  <div
  class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
  <div class="w-product-inner">
    <div class="w-product-image">
      <img width="800" height="1406" src="<?php echo FRONTEND_BASE . explode(',', $item->images)[0]; ?>"
        class="attachment-full size-full w-post-image" alt="i"
        sizes="(max-width: 800px) 100vw, 800px">
      <div class="w-product-image-inner">
        <div class="w-product-button-holder">
          <a href="#" data-quantity="1" class="button lnr-cart add_to_cart_button"
            aria-label="Add “Luctuson Chardonnayy” to your cart" rel="nofollow">Add to
            cart</a>
          <div class="w-product-wishlist-holder">
            <div class="add-to-wishlist add-to-wishlist">
              <div class="add-button show" style="display:block">
                <a href="#" rel="nofollow" class="lnr lnr-heart add_to_wishlist">
                  <span>Add to Wishlist</span>
                </a>
              </div>
              <div class="wishlistaddedbrowse hide" style="display:none;">
                <span class="feedback">Product added!</span>
                <a href="#" rel="nofollow">
                  Browse Wishlist </a>
              </div>
              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                <span class="feedback">The product is already in the wishlist!</span>
                <a href="#" rel="nofollow">
                  Browse Wishlist </a>
              </div>
              <div style="clear:both"></div>
              <div class="yith-wcwl-wishlistaddresponse"></div>
            </div>
            <div class="clear"></div>
          </div><a href="#" class="button yith-wcqv-button"></a>
        </div>
      </div>
    </div>
    <div class="w-product-content">
      <!-- <div class="w-product-tags"><a href="#" rel="tag">Brandy</a><span
          class="category-separator"></span><a href="#" rel="tag">Drink</a><span
          class="category-separator"></span><a href="#" rel="tag">Italy</a><span
          class="category-separator"></span><a href="#" rel="tag">New</a>
      </div> -->
      <h6 itemprop="name" class="w-product-title entry-title">
        <a itemprop="url" class="w-product-title-link" href="#" title="New Cabernet Sauvignon">
          <?php echo $item->name; ?>
        </a>
      </h6>
      <div class="w-product-price price">
        <ins>
          <span class="w-Price-amount amount"><?php echo $item->price; ?>
            <span class="w-price-currencySymbol"><?php echo $item->currency; ?></span>
          </span>
        </ins>
      </div>
    </div>
    <a href="#" class="w-LoopProduct-link w-loop-product__link"></a>
  </div>
</div>
<?php endforeach;?>