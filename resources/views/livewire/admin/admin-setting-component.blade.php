<div>
    <div>
        <div class="container" style="  padding:30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Settings
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="saveSetting">
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Email</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Email" class="form-control input-md" name="email" wire:model="email"/>
                                        @error('email')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Phone</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Phone" class="form-control input-md" name="phone" wire:model="phone"/>
                                        @error('phone')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Phone2</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Phone2" class="form-control input-md" name="phone2" wire:model="phone2"/>
                                        @error('phone2')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Address</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Address" class="form-control input-md" name="phone" wire:model="address"/>
                                        @error('address')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Map</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Map" class="form-control input-md" name="map" wire:model="map"/>
                                        @error('map')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Twiter</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Twiter" class="form-control input-md" name="twiter" wire:model="twiter"/>
                                        @error('twiter')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Facebook</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Facebook" class="form-control input-md" name="facebook" wire:model="facebook"/>
                                        @error('facebook')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Pinterest</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Pinterest" class="form-control input-md" name="pinterest" wire:model="pinterest"/>
                                        @error('pinterest')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Instagram</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Instagram" class="form-control input-md" name="instagram" wire:model="instagram"/>
                                        @error('instagram')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Youtube</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Youtube" class="form-control input-md" name="youtube" wire:model="youtube"/>
                                        @error('youtube')<p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <lable class="col-md-4 control-label"></lable>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
