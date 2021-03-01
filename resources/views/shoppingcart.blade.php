
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</head>
<body>
<!--header-->    
    <div class="container-fluid mt-5">
        <div class="row menu">            
                <nav class="navbar navbar-expand-lg sticky-top">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">TRANG CHU</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">GIOI THIEU</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SAN PHAM
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">TRANG 1</a></li>
                                        <li><a class="dropdown-item" href="#">TRANG 2</a></li>
                                        <!--<li><hr class="dropdown-divider"></li>-->
                                        <li><a class="dropdown-item" href="#">TRANG 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">TIN TUC</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">LIEN HE</a></li>
                        </ul>                                                
                    </div>
                    <form class="d-flex">
                            <button type="button" class="bi bi-search nav-item"></button>
                            <button type="button" class="bi bi-cart nav-item"></button>  
                    </form>  
                </nav>                  
        </div>           
    </div>
    
<!--body-->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="showproducts">  
                <div class="row">
                    <h2>Shopping cart</h2>
                </div>
                <div class="row">
                    <table class="cart-table">
                        <tr>
                            <th colspan = "2">San pham</th>
                            <th>Gia san pham</th>
                            <th>So luong</th>
                            <th>Tong tien</th>
                        </tr>
                        @if (is_array($cart) || is_object($cart))
                        
                        @foreach($cart as $cartItems)
                        <tr>
                            <td><img src="{{$cartItems['image']}}" alt="No_pic"></td>
                            <td>{{$cartItems['name']}}</td>
                            <td>{{$cartItems['price']}}</td>
                            <td>{{$cartItems['quantity']}}</td>
                        </tr>
                        @endforeach
                        
                        @endif
                    </table>
                </div>
            </div>      
        </div>
    </div>

</body>
</html>