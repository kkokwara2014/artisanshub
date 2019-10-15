@extends('admin.layout.app')


@section('content')
{{-- @include('admin.layout.statboard') --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Artisans
            <small>All Artisans</small>
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
                {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    <span class="fa fa-plus"></span> Add Skill
                </button>
                <br><br> --}}

                <div class="row">
                    <div class="col-md-9">

                        @forelse ($skills as $skill)
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4>{{$skill->category->name}}</h4>
                                        <div>
                                            <img class="img-fluid img-circle img-responsive"
                                                src="{{url('user_images',$skill->user->userimage)}}" width="50px"
                                                height="50px">
                                            <strong>
                                                {{$skill->user->lastname.', '.$skill->user->firstname}}</strong>
                                        </div>

                                        <div>
                                            <strong>{{$skill->businessname}}</strong>
                                        </div>
                                        <div>
                                            {{$skill->businessaddress}}
                                        </div>
                                        <div>
                                            {{$skill->city}}
                                        </div>
                                        <div>
                                            {{$skill->user->email}}
                                        </div>
                                        <div>
                                            {{$skill->user->phone}}
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <form id="contactartisan-form-{{$skill->id}}" style="display: none"
                                            action="{{ route('contact.store') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="skill_id" value="{{$skill->id}}">
                                            <input type="hidden" name="user_id" value="{{auth::user()->id}}">
                                        </form>
                                        <a href="" onclick="
                                                            if (confirm('Are you sure you want to contact this Artisan?')) {
                                                                event.preventDefault();
                                                            document.getElementById('contactartisan-form-{{$skill->id}}').submit();
                                                            } else {
                                                                event.preventDefault();
                                                            }
                                                        "><span class="fa fa-envelope text-primary"> Get in
                                                touch</span>
                                        </a>
                                        <br>

                                        <a style="color:green" href="https://paystack.com/pay/pay-artisan" target="_blank"> <span
                                                class="fa fa-money text-success"></span> Make Payment</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                        @empty
                        <p class="alert alert-info">No Artisan has registered!</p>
                        @endforelse
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