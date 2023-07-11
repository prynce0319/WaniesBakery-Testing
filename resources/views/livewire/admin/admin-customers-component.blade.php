<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                   <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Send Message
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.orders') }}" class="btn btn-success pull-right">All Orders</a>
                            </div>
                        </div>
                   </div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="sendsmsmessage">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Send to All Contacts</label>
                                <div class="col-md-4">
                                    <input type="checkbox" class="form-check-input" wire:model="send_to_all">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="First Name" class="form-control input-md" wire:model="firstname" readonly/>
                                    @error('firstname') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Last Name" class="form-control input-md" wire:model="lastname" readonly/>
                                    @error('lastname') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Mobile Number</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Mobile Number" class="form-control input-md" wire:model="mobile" readonly />
                                    @error('mobile') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Message</label>
                                <div class="col-md-4">
                                <textarea class="form-control" placeholder="Message" wire:model="message"></textarea>
                                @error('message') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Send</button
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
