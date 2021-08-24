<div>
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
                            <div class="row">
                                <div class="com-md-6">
                                    Edit Coupon
                                </div>
                                <div class="com-md-6">
                                    <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">All Coupon</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form class="form-horizontal" wire:submit.prevent="updateCoupon">
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Coupon Code</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Coupon Code" class="form-control input-md" wire:model="code" />
                                        @error('code') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Coupon Type</lable>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="type">
                                            <option value="">Select</option>
                                            <option value="fixed">Fixed</option>
                                            <option value="percent">Percent</option>
                                        </select>
                                        @error('type') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Coupon Value</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Coupon Value" class="form-control input-md" wire:model="value" />
                                        @error('value') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Cart Value</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Cart Value" class="form-control input-md" wire:model="cart_value" />
                                        @error('cart_value') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label"></lable>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
