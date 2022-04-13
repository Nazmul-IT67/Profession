@extends('Dashboard.extend')
@section('contant')
    <div class="page-inner">
        <div class="page-inner">
            <div class="page-title">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="active"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('all-estimunial') }}">Testimonial</a></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Testimonial Table</h4>
                        <h4 class="text-right"><a href="{{ url('add-testimunial') }}"><i class="icon-target">Add</i></a></h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($testimunial as $key=> $user)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                <img style="width: 75px" src="Testimunial/{{ $user->image }}">
                                            </td>
                                            <td>{{ $user->date }}</td>
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
