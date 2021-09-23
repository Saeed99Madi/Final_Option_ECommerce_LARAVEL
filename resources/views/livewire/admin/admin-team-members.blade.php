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
                               All Team Members
                            </div>
                            <div class="com-md-6">
                                <a href="{{route('admin.addTeam_members')}}" class="btn btn-success pull-right">Add New</a>
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
                                <th>Image</th>
                                <th>First Name</th>
                                <th>last Name</th>
                                <th>description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tmembers as $member)
                                <tr>
                                    <td>{{$member->id}}</td>
                                    <td><img src="{{asset('assets/images/members')}}/{{$member->image}}" width="60"/> </td>
                                    <td>{{$member->first_name}}</td>
                                    <td>{{$member->last_name}}</td>
                                    <td>{{$member->description}}</td>
                                    <td>
                                        <a href="{{route('admin.editTeam_members',['member_id'=>$member->id])}}" class="fa fa-edit fa-2x">Edit</a>
                                        <a href="#" onclick="confirm('are you sure , You want to delete this product ?' || event.stopImmediatePropagation())" wire:click.prevent="destroyMember({{$member->id}})" style="margin-left: 10px ;" class="fa fa-times fa-2x text-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$tmembers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
