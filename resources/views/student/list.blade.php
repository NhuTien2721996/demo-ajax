@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Thêm mới
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin sinh viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age">
                            </div>
                            <div class="form-group">
                                <label>Group</label>
                                <input type="text" class="form-control" name="group">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
{{--        end modal--}}
        <input type="search" id="search-user">
        <tr>
            <td scope="col">STT</td>
            <td scope="col">Name</td>
            <td scope="col">Age</td>
            <td scope="col">Group</td>
            <td scope="col">Delete</td>
            <td scope="col">Edit</td>
        </tr>
        </thead>
        <tbody id="list-students">
        @foreach($students as $key =>$student)
            <tr class="student-{{$student->id}}">
                <td scope="row">{{++$key}}</td>
                <td scope="row">{{$student->name}}</td>
                <td scope="row">{{$student->age}}</td>
                <td scope="row">{{$student->group}}</td>
                <td scope="row"><button  type="button" class="btn btn-danger delete-student" data-id="{{$student->id}}">Delete</button></td>
                <td scope="row"><a href=""><button type="button" class="btn btn-dark">Edit</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
