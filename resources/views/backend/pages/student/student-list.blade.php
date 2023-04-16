@extends('backend.layouts.app')
@section('content')

    <div class="container-fluid px-4 ">
        <div class="card  mt-4">
            <div class="card-header bg-dark">

                <h4 class="mt-2 text-light">
                    <span><img src="{{asset('backend/assets/img/List-PNG-Transparent-Image.png')}}" alt=""
                               style="width: 3%">
                    Student list
                    </span>
                    <span class="float-end">
                   <a href="{{url('students-create')}}" class="btn btn-light btn-sm">Create</a>
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
                        <th>Father Name</th>
                        <th>Phone Num</th>
                        <th>Department</th>
                        <th>Session</th>
                        <th>Course</th>
                        <th>Inter Grade</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $key=> $student)
                    <tr class="text-nowrap">
                        <td>{{$key+1}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->fname}}</td>
                        <td>{{$student->phone_num}}</td>
                        <td>{{$student->department}}</td>
                        <td>{{$student->session}}</td>
                        <td>{{$student->course_get->name}}</td>
                        <td>{{$student->intermediate_grade}}</td>
                        <td>{{$student->created_at}}</td>
                        <td>{{$student->updated_at}}</td>
                        <td>
                            <a href="{{url('student-edit',$student->id)}}"><i class="fa fa-edit text-primary "></i></a> |
                            <a href="{{url('student-destroy',$student->id)}}"> <i class="fa fa-trash text-danger  pl-2"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
