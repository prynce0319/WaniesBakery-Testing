<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Form</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        <div>
                            Lagos Eyo Print Tee Shirt
                            ₦ 2,950
                        </div>
                    </p>
                    <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                    <input type="hidden" name="orderID" value="345">
                    <input type="text" name="amount" value="80000"> 
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="currency" value="GHS">
                    {{-- <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}} --}}
                    {{-- <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}} --}}
                    
                    
                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
        
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
        
                    <p>
                        <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                        </button>
                    </p>
                </div>
            </div>
        </form>  
        
        <form id="paymentForm">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email-address" required />
            </div>
            <div class="form-group">
              <label for="amount">Amount</label>
              <input type="tel" id="amount" required />
            </div>
            <div class="form-group">
              <label for="first-name">First Name</label>
              <input type="text" id="first-name" />
            </div>
            <div class="form-group">
              <label for="last-name">Last Name</label>
              <input type="text" id="last-name" />
            </div>
            <div class="form-submit">
              <button type="submit" onclick="payWithPaystack()"> Pay </button>
            </div>
          </form>
</html>