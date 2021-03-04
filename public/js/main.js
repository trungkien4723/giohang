/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
$(document).ready(function () {
  var liked = false;
  $(".heart").click(function () {
    if (liked == false) {
      $(this).addClass("bi-heart-fill");
      $(this).removeClass("bi-heart");
      liked = true;
    } else {
      $(this).addClass("bi-heart");
      $(this).removeClass("bi-heart-fill");
      liked = false;
    }
  });
});
$(document).ready(function () {
  $(document).on("click", ".add_to_cart", function (event) {
    event.preventDefault();
    var url = $(this).data('url');
    $.ajax({
      type: 'GET',
      url: url,
      dataType: 'json',
      success: function success(data) {
        if (data.code === 200) {
          alert('Them thanh cong!');
          $('.cart_wrapper').html(data.product_component);
        } else {
          alert('Chua them!');
        }

        console.log(data);
      },
      error: function error(xhr, ajaxOptions, thrownError) {
        console.log(xhr);
        console.log(ajaxOptions);
        console.log(thrownError);
      }
    });
  });
  $(document).on("click", ".delete_cart", function (event) {
    event.preventDefault();
    var url = $('.cart').data('url');
    var id = $(this).data('id');
    $.ajax({
      type: 'GET',
      url: url,
      data: {
        id: id
      },
      success: function success(data) {
        if (data.code === 200) {
          alert('Xoa thanh cong!');
          $('.cart_wrapper').html(data.cart_component);
        } else {
          alert('Chua Xoa!');
        }

        console.log(data);
      },
      error: function error(xhr, ajaxOptions, thrownError) {
        console.log(xhr);
        console.log(ajaxOptions);
        console.log(thrownError);
      }
    });
  });
  $(document).on("click", ".incr_cart", function (event) {
    event.preventDefault();
    var url = $('.cart-table').data('url');
    var id = $(this).data('id');
    var quantity = parseInt($(this).parents('tr').find('input.quantity').val()) + 1;
    $.ajax({
      type: 'GET',
      url: url,
      data: {
        id: id,
        quantity: quantity
      },
      success: function success(data) {
        if (data.code === 200) {
          $('.cart_wrapper').html(data.cart_component);
        } else {
          alert('chua cong!');
        }

        console.log(data);
      },
      error: function error(xhr, ajaxOptions, thrownError) {
        console.log(xhr);
        console.log(ajaxOptions);
        console.log(thrownError);
      }
    });
  });
  $(document).on("click", ".decr_cart", function (event) {
    event.preventDefault();
    var url = $('.cart-table').data('url');
    var id = $(this).data('id');
    var quantity = parseInt($(this).parents('tr').find('input.quantity').val()) - 1;
    $.ajax({
      type: 'GET',
      url: url,
      data: {
        id: id,
        quantity: quantity
      },
      success: function success(data) {
        if (data.code === 200) {
          $('.cart_wrapper').html(data.cart_component);
        } else {
          alert('chua tru!');
        }

        console.log(data);
      },
      error: function error(xhr, ajaxOptions, thrownError) {
        console.log(xhr);
        console.log(ajaxOptions);
        console.log(thrownError);
      }
    });
  });
});
/******/ })()
;