@extends('layouts.adminbase')

@section('title', 'Show Category:'.$data->title)
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

                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="breadcrumb-link">Edit Category</a></li>
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
                    <h3 class="text-center">Show Category</h3>
                </div>
            </div>
        </div>

        <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Detail</h5>
                    <div class="card-body">
                        <table class="table table-striped">

                            <tr>
                                <th scope="col">id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th scope="col">image</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="col">Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Update data</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
            <div class="col-sm-3"><a href="{{route('admin.category.edit',['id'=>$data
->id])}}" class="btn btn-rounded btn-primary">Edit</a>

            </div>
            <div class="col-sm-3">
                <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting!Are you Sure?')" class="btn btn-rounded btn-danger">Delete</a>

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
