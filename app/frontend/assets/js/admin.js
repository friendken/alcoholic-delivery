$(document).ready(function() {
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
});
