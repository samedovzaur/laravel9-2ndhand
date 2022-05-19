@extends('layouts.adminbase')

@section('title', 'Add Category')
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
                        <a href="{{route('admin.category.create')}}" class="btn btn-rounded btn-primary">Add Category</a>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">category list</a></li>
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
                    <div class="card">
                        <h5 class="card-header">Category List</h5>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">image</th>
                                    <th scope="col">image Gallery</th>
                                    <th scope="col">Status</th>
                                    <th style="text-align: center;">Edit</th>
                                    <th style="text-align: center;">Delete</th>
                                    <th style="text-align: center;">Show</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <th scope="row">{{$rs->id}}</th>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.image.edit', ['id'=>$rs->id])}}"
                                            onclick="return !window.open(this.href,'','top=50 left=100 width=100,height=700')">
                                            <img src="{{asset('Assets')}}/admin/assets/images/gallery.png" alt="" style="height: 40px" ></td>
                                    </a>
                                    </tr>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->price}}</td>
                                        <td>{{$rs->quantity}}</td>
                                        <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" class="btn btn-rounded btn-primary">Edit</a></td>
                                        <td><a href="{{route('admin.category.destroy', ['id'=>$rs->id])}}" class="btn btn-rounded btn-danger" onclick="return confirm('your are deleting!!')"><i class="bi bi-trash"></i>Delete</a></td>
                                        <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}}" class="btn btn-rounded btn-dark">Show</a></td>
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

