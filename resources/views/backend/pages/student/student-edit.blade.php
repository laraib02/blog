@extends('backend.layouts.app')
@section('content')

    <div class="container-fluid px-4 ">
        <div class="card  mt-4">
            <div class="card-header bg-dark">

                <h4 class="mt-2 text-light">
                    <span><img src="{{asset('backend/assets/img/Form-Icon.png')}}" alt=""
                               style="width: 3%">
                     Student Create
                    </span>
                    <span class="float-end">
                   <a href="{{url('students-list')}}" class="btn btn-light btn-sm">List</a>
                   </span>
                </h4>

            </div>
            <form action="{{url('student-update',$data->id)}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                            <lable> Name</lable>
                            <input type="text" class="form-control mt-2   @error('name') is-invalid @enderror" value="{{$data->name}}" name="name"  >
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>


                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                            <lable>Father Name</lable>
                            <input type="text" class="form-control  mt-2  @error('fname') is-invalid @enderror" value="{{$data->fname}}" name="fname">
                            <span class="text-danger">
                                @error('fname')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                            <lable> Phone Number</lable>
                            <input type="number" class="form-control mt-2 @error('phone') is-invalid @enderror" value="{{$data->phone_num}}" name="phone">
                            <span class="text-danger">
                                @error('phone')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                            <lable>Department</lable>
                            <input type="text" class="form-control  mt-2 @error('department') is-invalid @enderror" value="{{$data->department}}" name="department">
                            <span class="text-danger">
                                @error('department')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                            <lable> Session</lable>
                            <input type="text" class="form-control mt-2 @error('class_session') is-invalid @enderror" value="{{$data->session}}" name="class_session">
                            <span class="text-danger">
                                @error('class_session')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                            <lable>Select course</lable>
                            <select id="" class="form-control mt-2 " {{ $data->course_id == true ? 'selected' : '' }} name="course_id"  value="{{$data->course_id}}" >
                                @foreach($courses as  $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 mt-4">
                            <lable>Intermediate Grade</lable>
                            <input type="text" class="form-control  mt-2 @error('grade') is-invalid @enderror" value="{{$data->intermediate_grade}}" name="grade">
                            <span class="text-danger">
                                @error('grade')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <button class="bg-dark text-light w-100 btn" type="submit"> SUBMIT</button>
                </div>
            </form>
        </div>


    </div>
@endsection
