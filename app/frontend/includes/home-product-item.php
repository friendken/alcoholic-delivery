<?php foreach($product_list as $item): ?>
  <div
  class="grid-item item--full product type-product status-publish first instock product_cat-rose product_tag-brandy product_tag-drink product_tag-italy product_tag-new has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
  <div class="w-product-inner">
    <div class="w-product-image">
      <img width="800" height="1406" src="<?php echo FRONTEND_BASE . explode(',', $item->images)[0]; ?>"
        class="attachment-full size-full w-post-image" alt="i" >
      <div class="w-product-image-inner">
        <div class="w-product-button-holder">
          <a
            href="#"
            data-quantity="1"
            data-productId="<?php echo $item->id; ?>"
            class="button lnr-cart add_to_cart_button"
            aria-label="Add “Luctuson Chardonnayy” to your cart"
            rel="nofollow"
          >
              Add to cart
          </a>
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
              <div style="clear:both"></div>
              <div class="yith-wcwl-wishlistaddresponse"></div>
            </div>
            <div class="clear"></div>
          </div><a href="#" class="button yith-wcqv-button"></a>
        </div>
      </div>
    </div>
    <div class="w-product-content">
      <h6 class="w-product-title entry-title">
        <a class="w-product-title-link" href="#" title="<?php echo $item->name; ?>">
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