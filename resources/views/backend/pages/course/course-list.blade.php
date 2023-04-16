@extends('backend.layouts.app')
@section('content')

    <div class="container-fluid px-4 ">
        <div class="card  mt-4">
            <div class="card-header bg-dark">

                <h4 class="mt-2 text-light">
                    <span><img src="{{asset('backend/assets/img/List-PNG-Transparent-Image.png')}}" alt=""
                               style="width: 3%">
                    Course list
                    </span>
                    <span class="float-end">
                   <a href="{{url('course-create')}}" class="btn btn-light btn-sm">Create</a>
                   </span>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-striped text-center">
                        <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Name</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $key=> $course)
                            <tr class="text-nowrap">
                                <td>{{$key+1}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{$course->created_at}}</td>
                                <td>{{$course->updated_at}}</td>
                                <td>
                                    <a href="{{url('course-edit',$course->id)}}"><i class="fa fa-edit text-primary "></i></a> |
                                    <a href="{{url('course-destroy',$course->id)}}"> <i class="fa fa-trash text-danger  pl-2"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
