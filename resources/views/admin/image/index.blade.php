@extends('layouts.adminwindow')
@section('title','Product Image List')
@section('content')
    <h2>{{$product->title}}</h2>
    <hr>
    <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/from-data">
        @csrf
        <div class="input-group">
            <label for="exampleInputEmail">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" nmae="image">
                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
            </div>
            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="Upload">Upload</input>
            </div>
        </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
        </form>

        <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Category List</h5>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">image</th>
                                    <th style="text-align: center;">Update</th>
                                    <th style="text-align: center;">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <th scope="row">{{$rs->id}}</th>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.image.destroy', ['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-rounded btn-danger" onclick="return confirm('your are deleting!!')"><i class="bi bi-trash"></i>Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <a href="#" class="btn btn-rounded btn-primary">Primary</a>
@endsection
