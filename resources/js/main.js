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
  });