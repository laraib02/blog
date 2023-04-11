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
                <table id="" class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>
                            <a href=""><i class="fa fa-edit text-primary p-2"></i></a>
                            <a href=""> <i class="fa fa-trash text-danger  p-2"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
