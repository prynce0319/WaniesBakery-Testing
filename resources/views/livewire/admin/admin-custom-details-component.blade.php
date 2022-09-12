<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Custom Personal Details
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.customorder') }}" class="btn btn-success pull-right">All Custom Orders</a>
                                <a href="" class="btn btn-primary">Approve Order</a>
                                <a title="You're declining a custom order" href="" class="btn btn-danger">Decline Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Custom ID</th>
                                <td>{{ $custom_order->custom_id }}</td>
                                <th>Order Date</th>
                                <td>{{ $custom_order->created_at }}</td>
                                <th>Name</th> 
                                <td>{{ $custom_order->name }}</td> 
                                <th>contact</th> 
                                <td>{{ $custom_order->contact }}</td> 
                                <th>E-mail</th> 
                                <td>{{ $custom_order->email }}</td>                                                             
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
                        Custom Order Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Size</th>
                                <td>{{ $custom_order->size }}</td>
                                <th>Flavour</th>
                                <td>{{ $custom_order->flavour }}</td>
                            </tr>
                            <tr>
                                <th>1st Colour</th>
                                <td>{{ $custom_order->color1 }}</td>
                                <th>2nd Colour</th>
                                <td>{{ $custom_order->color2 }}</td>
                            </tr>
                            <tr>
                                <th>Inscription</th>
                                <td>{{ $custom_order->inscription }}</td>
                                <th>Additional Info</th>
                                <td>{{ $custom_order->additional_info }}</td>
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
                        Delivery Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Delivery Type</th>
                                <td>{{ $custom_order->delivery_type }}</td>
                                <th>Delivery Location</th>
                                <td>{{ $custom_order->delivery_location }}</td>
                            </tr>
                            <tr>
                                <th>Delivery Date</th>
                                <td>{{ $custom_order->delivery_date}}</td>
                                <th>Delivery Time</th>
                                <td>{{ $custom_order->delivery_time }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

        
    </div>
</div>
