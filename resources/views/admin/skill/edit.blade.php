@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
@include('admin.layout.statboardcontainer')
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <a href="{{ route('skill.index') }}" class="btn btn-success">
            <span class="fa fa-eye"></span> All Skills
        </a>
        <br><br>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('skill.update',$skills->id) }}" method="post">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="">Business Name <b style="color: red;">*</b></label>
                                <input type="text" class="form-control" name="businessname" placeholder="Business Name"
                            autofocus value="{{$skills->businessname}}">
                            </div>
                            <div class="form-group">
                                <label for="">Address <b style="color: red;">*</b></label>
                                <input type="text" class="form-control" name="businessaddress" placeholder="Address" value="{{$skills->businessaddress}}">
                            </div>
                            <div class="form-group">
                                <label for="">City <b style="color: red;">*</b></label>
                                <input type="text" class="form-control" name="city" placeholder="City" value="{{$skills->city}}">
                            </div>

                            <input type="hidden" name="user_id" value="{{auth::user()->id}}">

                            <div class="form-group">
                                <label for="">Skill Category <b style="color: red;">*</b></label>
                                <select name="category_id" class="form-control">
                                    {{-- <option selected="disabled">Select Skill Category</option> --}}
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}"
                                        @if ($category->id==$skills->category_id)
                                           selected 
                                        @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('skill.index') }}" class="btn btn-default">Cancel</a>

                    </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
</div>
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