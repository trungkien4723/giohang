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
                            <td><a href="#" class="delete_cart" style="text-decoration:none; color:#000;" data-id=" {{$id}} ">X</a></td>
                        </tr>
                        @endforeach
                        
                        @endif
                    </table>

                    <div class="totalPrice row mt-5">
                        <h2>Tong cong: {{number_format($total)}} VND</h2>
                    </div>
                </div>
            </div>      
        </div>
    </div>