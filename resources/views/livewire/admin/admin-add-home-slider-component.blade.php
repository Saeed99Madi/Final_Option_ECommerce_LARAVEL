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
                                    Add New Home-Slider
                                </div>
                                <div class="com-md-6">
                                    <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All Home-Sliders</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addSlide">
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Title</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" />

                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Subtitle</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle"/>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Price</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Price" class="form-control input-md" wire:model="price"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Link</lable>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md" placeholder="Link" wire:model="link"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Status</lable>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="status">
                                            <option value="0">Inavtive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Image</lable>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="image"/>
                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                        @endif
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
