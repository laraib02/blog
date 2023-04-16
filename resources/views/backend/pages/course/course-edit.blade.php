@extends('backend.layouts.app')
@section('content')

    <div class="container-fluid px-4 ">
        <div class="card  mt-4">
            <div class="card-header bg-dark">

                <h4 class="mt-2 text-light">
                    <span><img src="{{asset('backend/assets/img/Form-Icon.png')}}" alt=""
                               style="width: 3%">
                     Course Create
                    </span>
                    <span class="float-end">
                   <a href="{{url('course-list', $data->id)}}" class="btn btn-light btn-sm">List</a>
                   </span>
                </h4>

            </div>
            <form action="{{url('course-update', $data->id)}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
                            <lable> Name</lable>
                            <input type="text" class="form-control mt-2   @error('name') is-invalid @enderror" name="name" value="{{$data->name}}" >
                            <span class="text-danger">
                                @error('name')
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
