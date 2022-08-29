<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Order Details
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.orders') }}" class="btn btn-success pull-right">All Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Order ID</th>
                                <td>{{ $order->order_id }}</td>
                                <th>Order Date</th>
                                <td>{{ $order->created_at }}</td>
                                <th>Status</th>                              
                                <td>{{ $order->status }}</td>                              
                                @if($order->status == "Delivered")
                                <th>Delivery Date</th>
                                <td>{{ $order->delivered_date}}</td>
                                @elseif($order->status == "Cancelled")
                                <th>Cancellation Date</th>
                                <td>{{ $order->canceled_date}}</td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ordered Items
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                    </div>
                        
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">                                                     
                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">
                                @foreach ($order->orderItems  as $item )
                                                      
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{asset('assets/images/products') }}/{{ $item->product->image }}" alt="{{ $item->product->name  }}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="{{ route('product.details',['slug'=>$item->product->slug]) }}">{{ $item->product->name }}</a>
                                    </div>
                                    <div class="price-field produtc-price"><p class="price">₵ {{ $item->price }}</p></div>
                                    <div class="quantity">
                                        <h5>{{ $item->quantity }}</h5>                                                                              
                                    </div>
                                    <div class="price-field sub-total"><p class="price">₵ {{ $item->price * $item->quantity }}</p></div>
                                    
                                </li>
                                @endforeach												
                            </ul>                           
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Order Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">₵ {{ $order->subtotal }}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">₵ {{ $order->tax }}</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free-Delivery</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">₵ {{ $order->total }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td>{{ $order->firstname }}</td>
                                <th>Last Name</th>
                                <td>{{ $order->lastname }}</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>{{ $order->mobile }}</td>
                                <th>E-mail</th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th>Line-1</th>
                                <td>{{ $order->line1 }}</td>
                                <th>Line-2</th>
                                <td>{{ $order->line2 }}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{ $order->location }}</td>
                                <th>City</th>
                                <td>{{ $order->city }}</td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td>{{ $order->region }}</td>
                                <th></th>
                                <td></td>
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if($order->is_delivery_different)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Shipping Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td>{{ $order->shipping->firstname }}</td>
                                <th>Last Name</th>
                                <td>{{ $order->shipping->lastname }}</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>{{ $order->shipping->mobile }}</td>
                                <th>E-mail</th>
                                <td>{{ $order->shipping->email }}</td>
                            </tr>
                            <tr>
                                <th>Line-1</th>
                                <td>{{ $order->shipping->line1 }}</td>
                                <th>Line-2</th>
                                <td>{{ $order->shipping->line2 }}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{ $order->shipping->location }}</td>
                                <th>City</th>
                                <td>{{ $order->shipping->city }}</td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td>{{ $order->shipping->region }}</td>
                                <th></th>
                                <td></td>
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Transaction
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Transaction Mode</th>
                                <td>{{ $order->transaction->mode ?? "None" }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $order->transaction->status ?? "None" }}</td>
                            </tr>
                            <tr>
                                <th>Transaction Date</th>
                                <td>{{ $order->transaction->created_at ?? "None" }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
