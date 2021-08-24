<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="com-md-6">
                                All Coupon
                            </div>
                            <div class="com-md-6">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Coupon Code</th>
                                <th>Coupon Type</th>
                                <th>Coupon Value</th>
                                <th>Cart Value</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->type}}</td>
                                    @if($coupon->type == 'fixed')
                                        <td>$ {{$coupon->value}}</td>
                                    @else
                                        <td>${{$coupon->value}} %</td>
                                    @endif
                                    <td>{{$coupon->cart_value}}</td>
                                    <td>
                                        <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" class="fa fa-edit fa-x">Edit</a>
                                        <a href="#" onclick="confirm('are you sure , You want to delete this Coupon ?' || event.stopImmediatePropagation())" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="margin-left: 10px ;" class="fa fa-times fa-x text-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            {{$coupons->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
