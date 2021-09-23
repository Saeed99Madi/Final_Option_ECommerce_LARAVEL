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
                                    <a href="{{route('admin.team_members')}}" class="btn btn-success pull-right">All Team Members</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="StoreTeamMember">
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">First Name</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="First Name" class="form-control input-md" wire:model="first_name"  />
                                        @error('first_name') <p class="text-danger">{{$message}}</p>@enderror

                                    </div>
                                </div>

                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Last Name</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Last Name" class="form-control input-md" wire:model="last_name"  />
                                        @error('last_name') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Position</lable>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Position" class="form-control input-md" wire:model="position"  />
                                        @error('position') <p class="text-danger">{{$message}}</p>@enderror

                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Description</lable>
                                    <div class="col-md-4" wire:ignore>
                                        <textarea class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                        @error('description') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <lable class="col-md-4 control-label">Product Image</lable>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="image"/>

                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                        @endif
                                        @error('image') <p class="text-danger">{{$message}}</p>@enderror
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
@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector: '#description',
                setup:function (editor) {
                    editor.on('Change', function (e) {
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                    @this.set('description', d_data);
                    });
                }
            });
        });
    </script>

@endpush
