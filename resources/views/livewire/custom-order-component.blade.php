<div>
    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Place A Customized Order</span></li>
				</ul>
                <h4 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                color: blue;"><strong>NOTE !!</strong> : A Custom order will be reviewed by Wanies Bakery. 
                <br>After confirmation, your custom order will be uploaded to CUSTOM ORDER CATEGORY with the PRICE accordingly. </h4>
			</div>
			<div>
                <div class="container" style="padding:30px 0;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Custom Order 
                                        </div>
                                    </div>
                               </div>
                            
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        <script>
                                            swal("Great Job!","{!! Session::get('message') !!}","success",{button:"OK",})

                                        </script>
                                    @endif
                                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="sendOrder">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Customer Name<span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="Customer Name" class="form-control input-md" required wire:model="name"/> 
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Customer Contact <span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="Contact Line" class="form-control input-md" required wire:model="contact" /> 
                                                
                                            </div>
                                        </div>
            
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">E-mail <span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="email" placeholder="E-mail Address" class="form-control input-md" required wire:model="email" /> 
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Cake Size</label>
                                            <div class="col-md-4">
                                                <select class="form-control" wire:model="size" >
                                                    <option value="nosize">No Size Selected</option>
                                                    <option value="4inches">4 inches"</option>
                                                    <option value="6inches">6 inches"</option>
                                                    <option value="8inches">8 inches"</option>
                                                    <option value="10inches">10 inches"</option>
                                                    <option value="12inches">12 inches"</option>
                                                    <option value="14inches">14 inches"</option>
                                                    <option value="16inches">16 inches"</option>                                                                                                                       
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Cake Layers <span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="number" min="0" max="10" placeholder="Number of Cake Layers" class="form-control input-md" required wire:model="layers" /> 
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Flavour</label>
                                            <div class="col-md-4">
                                                <input list="flavours" name="flavour" id="flavour" class="form-control input-md" wire:model="flavour">
                                                    <datalist id="flavours">
                                                    <option value="Vanilla">
                                                    <option value="Chocolate">
                                                    <option value="Vanilla/Chocolate">
                                                    <option value="Vanilla/Strawberry">
                                                    <option value="Red Velvet">
                                                    <option value="Blue Velvet">
                                                    
                                                    <option value="Oreo Delight">
                                                    <option value="Baileys">
                                                    </datalist>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Main-Colour</label>
                                            <div class="col-md-4">
                                                <input type="color" class="form-control input-md" id="head" name="head" wire:model="color1" /> 
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Alternate-Colour</label>
                                            <div class="col-md-4">
                                                <input type="color" class="form-control input-md"  id="alternate" name="alternate" wire:model="color2" /> 
                                                
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Inscription</label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="Eg. Happy Birthday, Hetty" class="form-control input-md" wire:model="inscription" /> 
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Mode of collection</label>
                                            <div class="col-md-4">
                                                <select class="form-control" wire:model="delivery_type" >
                                                    <option value="Self Pick-up">Self Pick-up</option>
                                                    <option value="Door Step Delivery">Door Step Delivery</option>                                                                                                                                                                        
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Delivery Location <span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="Location for delivery" class="form-control input-md" required wire:model="delivery_location" /> 
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Select Delivery Date <span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="date" class="form-control input-md" required wire:model="delivery_date" /> 
                                                
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Select Delivery Time <span style="color: rgb(228, 67, 67);"> *</span></label>
                                            <div class="col-md-4">
                                                <input type="time" class="form-control input-md" required wire:model="delivery_time" /> 
                                                
                                            </div>
                                        </div>
            
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Additional Information</label>
                                            <div class="col-md-4">
                                            <textarea class="form-control" placeholder="Extra details for cake design" wire:model="additional_info"></textarea>
                                            
                                            </div>
                                        </div>                                       
            
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-primary">Send for Approval</button
                                            </div>
                                        </div>
            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
		</div><!--end container-->

	</main>
	<!--main area-->
</div>
