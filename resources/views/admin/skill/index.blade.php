@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Skill
            <small>All Skills</small>
        </h1>
        {{-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    <span class="fa fa-plus"></span> Add Skill
                </button>
                <br><br>

                <div class="row">
                    <div class="col-md-12">

                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Artisan</th>
                                            <th>Business Name</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Category</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skills as $skill)
                                        <tr>
                                            <td>{{$skill->user->lastname.', '.$skill->user->firstname}}</td>
                                            <td>{{$skill->businessname}}</td>
                                            <td>{{$skill->businessaddress}}</td>
                                            <td>{{$skill->city}}</td>
                                            <td>{{$skill->category->name}}</td>
                                            <td><a href="{{ route('skill.edit',$skill->id) }}"><span
                                                        class="fa fa-edit fa-2x text-primary"></span></a></td>
                                            <td>
                                                <form id="delete-form-{{$skill->id}}" style="display: none"
                                                    action="{{ route('skill.destroy',$skill->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                            if (confirm('Are you sure you want to delete this?')) {
                                                                event.preventDefault();
                                                            document.getElementById('delete-form-{{$skill->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-trash fa-2x text-danger"></span>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Artisan</th>
                                            <th>Business Name</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Category</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>


                {{-- Data input modal area --}}
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">

                        <form action="{{ route('skill.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title"><span class="fa fa-wrench"></span> Add Skill</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="">Business Name <b style="color: red;">*</b></label>
                                        <input type="text" class="form-control" name="businessname"
                                            placeholder="Business Name" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address <b style="color: red;">*</b></label>
                                        <input type="text" class="form-control" name="businessaddress"
                                            placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="">City <b style="color: red;">*</b></label>
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>

                                    <input type="hidden" name="user_id" value="{{auth::user()->id}}">

                                    <div class="form-group">
                                        <label for="">Skill Category</label>
                                        <select name="category_id" class="form-control">
                                            <option selected="disabled">Select Skill Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->

                        </form>
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->


            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            {{-- <section class="col-lg-5 connectedSortable"> --}}


            {{-- </section> --}}
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection