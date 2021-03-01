
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
<div class="container-fluid cart" data-url="{{route('deleteCart')}}">
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
                        <?php $total = 0; ?>
                        @foreach($cart as $id => $cartItems)
                        <?php $total += $cartItems['price']*$cartItems['quantity']?>
                        <tr>
                            <td><img src="{{$cartItems['image']}}" alt="No_pic" style="max-width:40%; object-fit:contain;"></td>
                            <td>{{$cartItems['name']}}</td>
                            <td>{{number_format($cartItems['price'])}} VND</td>
                            <td>
                                {{$cartItems['quantity']}}
                                <button class="btn btn-primary incr_cart" onclick=" {{$cartItems['quantity'] += 1 }} ">+</button>
                                <button class="btn btn-primary decr_cart" onclick=" {{$cartItems['quantity'] -= 1 }} ">-</button>
                            </td>
                            <td>{{number_format($cartItems['price']*$cartItems['quantity'])}} VND</td>
                            <td><a href="#" class="delete_cart" style="text-decoration:none; color:red;" data-id=" {{$id}} ">X</a></td>
                        </tr>
                        @endforeach
                        
                        @endif
                    </table>

                    <div class="totalPrice row mt-5 mb-5">
                        <div class="col-md-8"><h2>Tong cong: {{number_format($total)}} VND</h2></div>
                        <div class="col-md-4"><a href="#" class="pay btn btn-primary" style="max-width:30%; float:right;">Thanh toan</a></div>
                    </div>
                </div>
            </div>      
        </div>
    </div>