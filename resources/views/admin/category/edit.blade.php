@extends('layouts.adminbase')

@section('title', 'Edit Category:'.$data->title)
@section('content')

    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h1 class="pageheader-title">Edit {{$data->title}}</h1>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Edit Category</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Category</h3>
                </div>
            </div>
        </div>

        <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
            @csrf
            <div class="card-body border-top">
                <h4>Category Elements</h4>
                <div class="form-group">
                    <h4>Title </h4>
                    <div class="input-group input-group-sm mb-3">
                        <label for="exampleInputEmail">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                    </div>
                    <h4>Keywords </h4>
                    <div class="input-group input-group-sm mb-3">
                        <label for="exampleInputEmail">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <h4>Description </h4>
                    <div class="input-group input-group-sm mb-3">
                        <label for="exampleInputEmail">Descriptions</label>
                        <input type="text"class="form-control" name="descriptions" value="{{$data->descriptions}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Choose image file</label>
                        <div class="input-group">
                            <div class="cutom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input=group=append">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>


                        </select>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
        </form>























    </div>

    <!-- ============================================================== -->

@endsection
