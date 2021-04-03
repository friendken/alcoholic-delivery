<div class="modal fade" id="delete-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
        <button type="button" class="btn-close close-confirm-delete-product" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure that you want to remove this product?
      </div>
      <div class="modal-footer">
        <form id="form-delete-product" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input id="product_id" type="hidden" name="product_id" value="" />
          <button type="button" class="btn btn-secondary close-confirm-delete-product" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>