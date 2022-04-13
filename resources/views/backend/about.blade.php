@extends('Dashboard.extend')
@section('contant')
    <div class="page-inner">
        <div class="page-inner">
            <div class="page-title">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="active"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                    </ol>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix  text-center">
                        <h3 class="panel-title-center">Add About</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('add-about') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control m-t-xxs" id="exampleInputEmail1"
                                    placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Value</label>
                                <input type="text" name="value" class="form-control m-t-xxs" id="exampleInputEmail1"
                                    placeholder="Enter Value 80%..">
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
