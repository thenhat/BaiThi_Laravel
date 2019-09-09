@extends('student.layout.index')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <small>Add</small> Student

                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{url("student/student-table/add")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{old("name")}}" placeholder="Name Student" required>
                            @if($errors->has("name"))
                                <p class="error" style="color:red">{{$errors->first("name")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input class="form-control" type="number" name="age" value="{{old("age")}}" placeholder="Age Student" required>
                            @if($errors->has("age"))
                                <p class="error" style="color:red">{{$errors->first("age")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" name="address" value="{{old("address")}}" placeholder="Address" required>
                            @if($errors->has("address"))
                                <p class="error" style="color:red">{{$errors->first("address")}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input class="form-control" type="text" name="phone" value="{{old("telephone")}}" placeholder="Telephone" required>
                            @if($errors->has("telephone"))
                                <p class="error" style="color:red">{{$errors->first("telephone")}}</p>
                            @endif
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-danger">Add Student</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection;