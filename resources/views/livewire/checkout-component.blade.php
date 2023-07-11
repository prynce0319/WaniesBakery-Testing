
<main id="main" class="main-site">

    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Billing Address</h3>
                        <div class="billing-address">
                            <p class="row-in-form">
                                <label for="fname">First Name<span>*</span></label>
                                <input type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                                @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    
                                
                            </p>
                            <p class="row-in-form">
                                <label for="lname">Last Name<span>*</span></label>
                                <input type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                                @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="email">Email Addreess:</label>
                                <input type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="phone">Phone Number<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
                                @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="phone">Line 1:<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="line1">
                                @error('line1') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="phone">Line 2:<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="line2">
                            </p>
                            <p class="row-in-form">
                                <label for="location">Location:<span> *</span></label>
                                <input type="text" name="location" value="" placeholder="Delivery point for order" wire:model="location">
                                @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">Town / City:<span>*</span></label>
                                <input type="text" name="city" value="" placeholder="Example: Kumasi" wire:model="city">
                                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            
                            <p class="row-in-form">
                                <label for="region">Region :<span>*</span></label>
                                <input type="text" name="region" value="" placeholder="Region" wire:model="region">
                                @error('region') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="row-in-form fill-wife">                     
                                <label class="checkbox-field">
                                    <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="deliver_to_different">
                                    <span>Ship to a different address?</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
                @if ($deliver_to_different)                                 
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Delivery Address</h3>
                            <div class="billing-address">
                                <p class="row-in-form">
                                    <label for="fname">First name<span>*</span></label>
                                    <input type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
                                    @error('s_firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="lname">Last name<span>*</span></label>
                                    <input type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
                                    @error('s_lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email Address:</label>
                                    <input type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
                                    @error('s_email') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Phone Number:<span>*</span></label>
                                    <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
                                    @error('s_mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Line 1:<span>*</span></label>
                                    <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_line1">
                                    @error('s_line1') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Line 2:<span>*</span></label>
                                    <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_line2">
                                </p>
                                <p class="row-in-form">
                                    <label for="location">Location:<span> *</span></label>
                                    <input type="text" name="location" value="" placeholder="Delivery point for order" wire:model="s_location">
                                    @error('s_location') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="city">Town / City:<span>*</span></label>
                                    <input type="text" name="city" value="" placeholder="Example: Kumasi" wire:model="s_city">
                                    @error('s_city') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>
                                
                                <p class="row-in-form">
                                    <label for="region">Region :<span>*</span></label>
                                    <input type="text" name="region" value="" placeholder="Region" wire:model="s_region">
                                    @error('s_region') <span class="text-danger">{{ $message }}</span> @enderror
                                </p>                            
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Payment Method</h4>
                    @if ($paymentmode == 'momo')                   
                    <div class="wrap-address-billing">
                        <h5><strong>1.</strong> When paying via mobile money, 
                            kindly add your <strong> NAME & ORDER ID </strong> in the reference section.</h5>
                        <p></p>
                        <h5><strong>2.</strong> To confirm that your payment was received, please <strong> CALL or SEND A MESSAGE.</strong></h5>
                        <p></p>
                        <h5><strong>3.</strong> If payment is via <strong>MoMo Vendor or Merchant</strong>, kindly let us know the <strong>AMOUNT PAID</strong>
                        and <strong>NAME OF VENDOR/MERCHANT.</strong> </h5>
                        <p></p>
                        <h4 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                        color: red;"><strong>NOTE !!</strong> : Failure to make payment after selecting mobile money option may lead to cancellation of your order.</h4>
    
                        
                        
                    </div> 
                    @endif                 
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="CashOnDelivery" type="radio" wire:model="paymentmode">
                            <span>Payment on Pickup</span> 
                            <span class="payment-desc">Place your order now and pick up at our location.</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-visa" value="momo" type="radio" wire:model="paymentmode">
                            <span>Mobile Money</span>
                            <span class="payment-desc">Make order payment via Mobile Money Service.</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
                            <span>Paypal</span>
                            <span class="payment-desc">You can pay with your credit</span>
                            <span class="payment-desc">card if you don't have a paypal account</span>
                        </label>
                        @error('paymentmode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    @if (Session::has('checkout'))                   
                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">₵{{ Session::get('checkout')['total'] }}</span></p>                    
                    @endif

                    @if ($errors->isEmpty())
                        <div wire:ignore id="processing" style="font-size: 22px; margin-bottom: 20px;padding-left: 37px;color:green;display:none;">
                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                            <span>Processing...</span>
                        </div>                                           
                    @endif

                    <button type="submit" class="btn btn-medium">Place order now</button>
                    
                
                {{-- <div class="summary-item shipping-method">
                    <h4 class="title-box f-title">Shipping method</h4>
                    <p class="summary-info"><span class="title">Flat Rate</span></p>
                    <p class="summary-info"><span class="title">Fixed $0</span></p>
                   
                </div> --}}
            </div>
        </form>
        </div><!--end main content area-->
    </div><!--end container-->

</main>
