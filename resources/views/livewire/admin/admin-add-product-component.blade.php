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
                                    Add New Product
                                </div>
                                <div class="com-md-6">
                                    <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Product Name</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug" />

                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Product Slug</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Short Description</lable>
                                    <div class="col-md-4">
                                        <textarea class="form-control" placeholder="Short Description" wire:model="short_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Description</lable>
                                    <div class="col-md-4">
                                        <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Regular Price</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Sale Price</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">SKU</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Stock</lable>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="stock_status">
                                            <option value="instick">InStock</option>
                                            <option value="outofstick">Out Of Stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Featured</lable>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="featured">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Quantity</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Product Image</lable>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="image"/>
                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Category</lable>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
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
