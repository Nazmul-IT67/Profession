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
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">About Table</h4>
                        <h4 class="text-right"><a href="{{ url('about') }}"><i class="icon-target">Add</i></a></h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($alluser as $key=> $user)
                                        <tr class="gradeX">
                                            <td>{{ $key+1}}</td>
                                            <td>{{ $user->title }}</td>
                                            <td>{{ $user->value }}</td>
                                            <td>{{ $user->created_at !=null ? $user->created_at->diffForHumans():'N/A' }}</td>
                                            <td>{{ $user->updated_at !=null ? $user->updated_at->diffForHumans():'N/A' }}</td>
                                            <td>
                                                <a href=""><button class="btn btn-success">Active</button></a>
                                            </td>
                                            <td>
                                                <a href=""><button class="btn btn-primary">Edit</button></a>
                                                <a href=""><button class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-footer">
                <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
            </div>
        </div>
    </div>
@endsection
