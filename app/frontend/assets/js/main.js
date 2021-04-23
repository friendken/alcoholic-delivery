$(document).ready(function(){
  if ($('.gallery-slide').length > 0) {
    $('.gallery-slide').slick({
      autoplay: true,
      arrows: false,
    });
  }

  if ($('.product-orderby').length > 0) {
    $('.product-orderby').select2();
  }

  if ($('.price_slider').length > 0) {
    $('.price_slider').slider({
      range: true,
      min: 30,
      max: 100,
      values: [ 30, 100 ]
    });
  }

  $('.add_to_cart_button').on('click', (event) => {
    event.preventDefault()
    addProductToCart(event);
  })

  $('.remove-product-in-cart').on('click', (event) => {
    event.preventDefault()
    removeProductInCart(event);
  })
});

const convertObjectToStringParams = (data) => {
  const params = [];
  Object.keys(data).forEach((item) => {
    params.push(`${item}=${data[item]}`)
  });
  return params.join('&');
}

const httpRequest = ({ method, url, payload }, callback) => {
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.open(method, url, true);
  xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(this.responseText);
    }
  };
  if (payload) xmlhttp.send(payload);
  else xmlhttp.send();
}

const addProductToCart = (event) => {
  const el = $(event.currentTarget);
  const payload = {
    product_id: parseInt(el.attr('data-productId')),
    quantity: parseInt(el.attr('data-quantity'))
  }
  
  httpRequest({
    method: 'POST',
    url: 'cart-handler.php',
    payload: convertObjectToStringParams(payload)
  }, (response) => {
    const transform = response.split(',');
    if (transform[0] == 'success') {
      const numProductInCart = parseInt($('#num_product_in_cart').val());
      el.removeClass('lnr-cart add_to_cart_button').addClass('lnr-checkmark-circle');

      // update the count of the cart if the product hasn't added before
      if (transform[1] === 'no') {
        $('#num_product_in_cart').val(numProductInCart + 1)
        $('.opener-count').text(numProductInCart + 1)
      }
    }
  })
}

const removeProductInCart = (event) => {
  const el = $(event.currentTarget);
  const payload = {
    remove: parseInt(el.attr('data-productId')),
  }
  
  httpRequest({
    method: 'POST',
    url: 'cart-handler.php',
    payload: convertObjectToStringParams(payload)
  }, (response) => {
    if (response === 'success') {
      const numProductInCart = parseInt($('#num_product_in_cart').val());
      // update the number of product in cart
      $('#num_product_in_cart').val(numProductInCart - 1)
      $('.opener-count').text(numProductInCart - 1)

      // update the subtotal and total
      const productSubTotal = parseInt(el.parents('.cart_item').find('.product-subtotal-price').val());
      const newSubtotal = parseInt($('.subtotal-order').val()) - productSubTotal;
      $('.subtotal-order').val(newSubtotal);
      $('.product-subtotal-display').text(newSubtotal);

      el.parents('.cart_item').remove(); // remove the product from the product list
    }
  })
}