@extends('Dashboard.extend')
@section('contant')
    <div class="page-inner">
        <div class="page-inner">
            <div class="page-title">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="active"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('all-testimunial') }}">Testimunial</a></li>
                    </ol>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix  text-center">
                        <h3 class="panel-title-center">Add Testimunial</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('submitdata') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control m-t-xxs" id="exampleInputEmail1"
                                    placeholder="Enter Heading">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" name="description" class="form-control m-t-xxs" id="exampleInputEmail1"
                                    placeholder="Enter Heading">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="date" name="date" class="form-control m-t-xxs" id="exampleInputEmail1"
                                    placeholder="Enter Heading">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" name="image" class="m-t-xxs" id="exampleInputEmail1">
                            </div>

                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="page-footer">
                <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
            </div>
        </div>
    </div>
@endsection
