<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Brand Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Company Name" wire:model="company_name" />
                                    @error('company_name') <p class="text-danger">{{ $message }}</p>  @enderror
                                        
                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="companyemail@gmail.com" wire:model="email" />
                                    @error('email') <p class="text-danger">{{ $message }}</p>  @enderror
                                        
                                   
                                </div>
                            </div>

                           {{--  <div class="form-group">
                                <label class="col-md-4 control-label">Brand Logo:</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="logo"  /> 
                                    @if ($logo)
                                    <img src="{{ $logo->temporaryUrl() }}" width="120" />              
                                    @endif
                                    @error('logo') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Phone" wire:model="phone" />
                                    @error('phone') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone 2:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Phone 2" wire:model="phone2" />
                                    @error('phone2') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Address:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Address" wire:model="address" />
                                    @error('address') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Map:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Map" wire:model="map" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Twitter:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Twitter" wire:model="twitter" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Facebook:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Facebook" wire:model="facebook" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Pinterest:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Pinterest" wire:model="pinterest" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Instagram:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Instagram" wire:model="instagram" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">YouTube:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="YouTube" wire:model="youtube" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
