@extends('layouts.master-layout')
@section('current-page')
    Product Categories
@endsection
@section('extra-styles')
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('breadcrumb-action-btn')
    Product Categories
@endsection

@section('main-content')
    @if(session()->has('success'))
        <div class="row" role="alert">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-check-all me-2"></i>

                            {!! session()->get('success') !!}

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-4 col-lg-4 col-4">
            <div class="card">
                <div class="card-header">Add New Category</div>
                <div class="card-body">
                    <form action="{{route('categories')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Category Name<sup class="text-danger">*</sup></label>
                            <input type="text" placeholder="Category Name" value="{{old('categoryName')}}" name="categoryName" class="form-control">
                            @error('categoryName') <i class="text-danger">{{$message}}</i> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Featured Image<sup class="text-danger">*</sup></label> <br>
                            <input type="file" name="featuredImage" value="{{old('featuredImage')}}" class="form-control">
                            @error('featuredImage') <i class="text-danger">{{$message}}</i> @enderror
                        </div>
                        <div class="form-group d-flex justify-content-center mt-4">
                            <button class="btn btn-primary">Submit <i class="bx bx-right-arrow"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-lg-8 col-8">
            <div class="card">
                <div class="card-header">Product Categories</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th class="">#</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $serial = 1; @endphp
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{$serial++}}</td>
                                    <td><img style="width: 32px; height: 32px;" src="/storage/{{$cat->image ?? ''}}" alt=""> {{$cat->name ?? '' }}</td>
                                    <td>Action</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra-scripts')
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/js/pages/datatables.init.js"></script>



@endsection
