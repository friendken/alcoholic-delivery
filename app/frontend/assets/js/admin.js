$(document).ready(function() {
  // event handler for delete product modal
  if (document.getElementById('delete-product-modal')) {
    const confirmDeleteModal = new bootstrap.Modal(document.getElementById('delete-product-modal'))
    $('.delete-product').on('click', (e) => {
      $('#form-delete-product #product_id').val($(e.currentTarget).data('id'));
      confirmDeleteModal.show();
    })
  
    $('.close-confirm-delete-product').on('click', () => {
      confirmDeleteModal.hide();
    })
  }

  // event handler for delete contact modal
  if (document.getElementById('delete-contact-modal')) {
    const confirmDeleteModal = new bootstrap.Modal(document.getElementById('delete-contact-modal'))
    $('.delete-contact').on('click', (e) => {
      $('#form-delete-contact #contact_id').val($(e.currentTarget).data('id'));
      confirmDeleteModal.show();
    })
  
    $('.close-confirm-delete-contact').on('click', () => {
      confirmDeleteModal.hide();
    })
  }
});
