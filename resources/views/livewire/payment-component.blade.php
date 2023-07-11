<div>
    <div class="container" style="padding 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                               Mobile Money Payment
                            </div>
                        
                    </div>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-4">
                                <input type="text" name="first_name" class="form-control input-md" required  />
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-4">
                                <input type="text" name="last_name" class="form-control input-md" required />
                                
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-mail</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control input-md" />                              
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Amount</label>
                            <div class="col-md-4">
                                <input type="text" name="amount" value="{{ Session::get('checkout')['total'] }}" class="form-control input-md" readonly/>                              
                            </div>
                        </div>

                       {{--  <div class="form-group">
                            <label class="col-md-4 control-label">User ID</label>
                            <div class="col-md-4">
                                <input type="text" name="id" value="{{ Auth::user()->id }}" class="form-control input-md" readonly />                              
                            </div>

                        </div> --}}

                        <div class="form-group">
                            {{-- <label class="col-md-4 control-label">Currency</label> --}}
                            <div class="col-md-4">
                                <input type="hidden" name="currency" value="GHS" class="form-control input-md" readonly />                              
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success" value="Pay Now!">Pay Now</button>
                            </div>

                        </div>
                    </form>    
                </div>
            </div>
        </div>

    </div>
</div>
        
        
      