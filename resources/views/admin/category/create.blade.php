@extends('layouts.adminbase')

@section('title', 'Category List ')
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
                        <h2 class="pageheader-title">Category List </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Pages</a></li>
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

        <form role="form" action="{{route("admin.category.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body border-top">
                <div class="from-group">
                    <label>Parent Categroy</label>
                    <select class="form-control select2" name="parent_id" style="...">
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($data as $rs)
                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                    </select>
                </div>
                <h4>Category Elements</h4>
                <div class="form-group">
                    <h4>Title </h4>
                    <div class="input-group input-group-sm mb-3">
                        <label for="exampleInputEmail">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <h4>Keywords </h4>
                    <div class="input-group input-group-sm mb-3">
                        <label for="exampleInputEmail">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <h4>Description </h4>
                    <div class="input-group input-group-sm mb-3">
                        <label for="exampleInputEmail">Descriptions</label>
                        <input type="text"class="form-control" name="descriptions" placeholder="Descriptions">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Choose image file</label>
                        <div class="input-group">
                            <div class="cutom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
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
