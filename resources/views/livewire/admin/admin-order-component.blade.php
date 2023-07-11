<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>


    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders
                    </div>
                    <div class="panel-body">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{ session::get('order_message') }}</div>
                        @endif
                        <div class="form-group col-md-3">
                            <label for="year">Year</label>
                            <select class="form-control" wire:model="year">
                                <option value="">Select Year</option>
                                @for($i = date('Y'); $i >= 2010; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="month">Month</label>
                            <select class="form-control" wire:model="month">
                                <option value="">Select Month</option>
                                @foreach($months as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>E-mail</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Status</th>

                                    <th>Order_Date</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order )
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->firstname }}</td>
                                        <td>{{ $order->lastname }}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>₵ {{ $order->subtotal }}</td>
                                        <td>₵ {{ $order->discount }}</td>
                                        <td>₵ {{ $order->tax }}</td>
                                        <td>₵ {{ $order->total }}</td>
                                        @if($order->status == "Delivered")
                                        <td style="color: green;"><b>{{ $order->status }}</b></td>.
                                        @elseif ($order->status == "Ordered")
                                        <td style="color: rgb(17, 0, 255);"><b>{{ $order->status }}</b></td>
                                        @else
                                        <td style="color: red;"><b>{{ $order->status }}</b></td>
                                        @endif
                                        <td>{{ $order->created_at }}</td>
                                        <td><a href="{{ route('admin.orderdetails',['order_id'=>$order->id]) }}" class="btn btn-info btn-sm">Details</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status</button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{ $order->id}},'Delivered' )">Delivered</a></li>
                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{ $order->id}},'Cancelled')">Cancelled</a></li>
                                                        <li><a href="{{route('admin.customermessage',['order_id'=>$order->id])}}">Message</a></li>
                                                    </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
