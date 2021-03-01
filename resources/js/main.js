$(document).ready(function(){
    var liked=false;
    $(".heart").click(function(){
        if(liked == false)
        {
            $(this).addClass("bi-heart-fill");
            $(this).removeClass("bi-heart");
            liked = true;
        }
        else
        {
            $(this).addClass("bi-heart");
            $(this).removeClass("bi-heart-fill");
            liked = false;
        }
    });
  });

  $(document).ready(function(){
      //lay url cho nut them vao gio      
    $(".add_to_cart").click(function(event){
        event.preventDefault();     
        let url = $(this).data('url');  
        $.ajax({
            type:'GET',
            url: url,
            dataType: 'json',
            success: function(data)
            {
                if(data.code === 200)
                {
                    alert('Them thanh cong!');
                }
                else{alert('Chua them!');}
                console.log(data);
            },
            error: function(xhr, ajaxOptions, thrownError)
            {
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
            }
        });
    });

    $(".delete_cart").click(function(event){
        event.preventDefault();     
        let url = $('.cart').data('url');  
        let id = $(this).data('id')
        $.ajax({
            type:'GET',
            url: url,
            data: {id: id},
            success: function(data)
            {
                if(data.code === 200)
                {
                    alert('Xoa thanh cong!');
                    $('.cart_wrapper').html(data.cart_component);
                }
                else{alert('Chua Xoa!');}
                console.log(data);
            },
            error: function(xhr, ajaxOptions, thrownError)
            {
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
            }
        });
    });
  });