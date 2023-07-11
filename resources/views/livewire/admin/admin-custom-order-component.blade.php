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
                        All Custom Orders
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>E-mail</th>
                                    <th>Size</th>                                   
                                    <th>Layers</th>
                                    <th>Flavour</th>             
                                    <th>Inscription</th>
                                    <th>Created_Date</th>

                                    <th colspan="2" class="text-center">Action</th>                               
                                </tr>
                            </thead> 
                            <tbody>
                                @foreach ($customorders as $customorder)
                                    <tr>
                                        <td>{{ $customorder->id }}</td>
                                        <td>{{ $customorder->name }}</td>
                                        <td>{{ $customorder->contact }}</td>
                                        <td>{{ $customorder->email }}</td>
                                        <td>{{ $customorder->size }}</td> 
                                        <td>{{ $customorder->layers }}</td>
                                        <td>{{ $customorder->flavour }}</td>
                                        <td>{{ $customorder->inscription }}</td>
                                        <td>{{ $customorder->created_at }}</td>
                                        <td><a href="{{ route('admin.customdetails',['custom_id'=>$customorder->id]) }}" class="btn btn-info btn-sm">More Details</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $customorders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div>
    <div>
        
        
                
                    
                                         
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Size</th>
                                    <th>Layers</th>
                                    <th>Flavour</th>
                                    <th>Color1</th>
                                    <th>Color2</th>
                                    <th>Inscription</th>
                                    <th>Delivery_type</th>
                                    <th>Delivery_location</th>
                                    <th>Delivery_date</th>
                                    <th>Delivery_time</th>
                                    <th>Additional_Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($customorders as $customorder )
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $customorder->name }}</td>
                                        <td>{{ $customorder->contact }}</td>
                                        <td>{{ $customorder->email }}</td>
                                        <td>{{ $customorder->size }}</td>
                                        <td>{{ $customorder->layers }}</td>
                                        <td>{{ $customorder->flavour }}</td>
                                        <td>{{ $customorder->color1 }}</td>
                                        <td>{{ $customorder->color2 }}</td>
                                        <td>{{ $customorder->inscription }}</td>
                                        <td>{{ $customorder->delivery_type }}</td>
                                        <td>{{ $customorder->delivery_location }}</td>
                                        <td>{{ $customorder->delivery_date }}</td>
                                        <td>{{ $customorder->delivery_time }}</td>
                                        <td>{{ $customorder->additional_info }}</td>

                                    </tr>                                  
                                @endforeach
                            </tbody>
                        </table>
                        {{$customorders->links()}}                       
                    
                
        
    </div>
</div> --}}
