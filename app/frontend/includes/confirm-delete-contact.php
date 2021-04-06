<div class="modal fade" id="delete-contact-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
        <button type="button" class="btn-close close-confirm-delete-contact" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure that you want to remove this contact?
      </div>
      <div class="modal-footer">
        <form id="form-delete-contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input id="contact_id" type="hidden" name="contact_id" value="" />
          <button type="button" class="btn btn-secondary close-confirm-delete-contact" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>