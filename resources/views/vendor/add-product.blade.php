@extends('layouts.master-layout')
@section('current-page')
    Add Product
@endsection
@section('extra-styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('breadcrumb-action-btn')

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

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('vendor-add-product')}}" method="post" autocomplete="off" id="addPropertyForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="card-header bg-custom mb-2">Add New Property
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 lg-6">
                                <div class="form-group">
                                    <label for="">Product Name <sup class="text-danger">*</sup></label>
                                    <input type="text" placeholder="Product Name" name="productName" id="propertyName" value="{{old('productName')}}" class="form-control">
                                    <br> @error('productName')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 lg-6">
                                <div class="form-group">
                                    <label for="">Quantity <sup class="text-danger">*</sup></label>
                                    <input type="text" placeholder="Quantity" name="quantity" id="quantity" value="{{old('quantity')}}" class="form-control">
                                    <br> @error('quantity')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-6 lg-6">
                                <div class="form-group">
                                    <label for="">Category<sup class="text-danger">*</sup></label>
                                    <select class="form-control select2" name="category" id="categoryHandler">
                                        <option disabled selected>--Select Category--</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    <br> @error('category')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 lg-6 mt-2">
                                <div class="form-group">
                                    <label for="">SKU<sup class="text-danger">*</sup></label>
                                    <input type="text"  placeholder="SKU" name="sku" id="sku" value="{{old('sku')}}" class="form-control">
                                    <br> @error('sku')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-6 lg-6">
                                <div class="form-group">
                                    <label for="">Brand<sup class="text-danger">*</sup></label>
                                    <div id="brandWrapper">

                                    </div>
                                    <br> @error('brand')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 lg-6">
                                <div class="form-group">
                                    <label for="">Price<sup class="text-danger">*</sup></label>
                                    <input type="number" placeholder="Price" name="price" id="price" value="{{old('price')}}" class="form-control">
                                    <br> @error('price')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 lg-6">
                                <div class="form-group">
                                    <label for="">Gallery <sup class="text-danger">*</sup></label> <br>
                                    <input type="file" multiple name="gallery[]" id="gallery"  class="form-control-file">
                                    <br> @error('gallery')<i class="text-danger">{{$message}}</i>@enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <div id="editor" style="height: 250px;"></div>
                                        <textarea name="productDescription" id="hiddenContent" style="display: none">{{old('hiddenContent')}}</textarea>
                                        @error('description') <i class="text-danger">{{$message}}</i> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex justify-content-center mb-3 mt-2">
                                    <button type="submit" class="btn btn-custom btn-lg waves-effect waves-light"> Add New Product <i class="bx bx-plus ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-scripts')
    <script src="/assets/libs/select2/js/select2.min.js"></script>
    <script src="/assets/js/pages/form-advanced.init.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="/assets/js/axios.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#categoryHandler').on('change',function(){
                let catId = $(this).val();
                if(catId !== null || catId !== ""){
                    axios.post("{{route('get-brands-id')}}",{
                        catId
                    })
                    .then((res)=>{
                        $('#brandWrapper').html(res.data);
                    })
                    .catch(error=>{
                        console.log(error)
                    });
                }
            });

            let options = {
                placeholder: 'Enter product description here...',
                theme: 'snow'
            };
            let quill = new Quill('#editor', options);
            $('#addPropertyForm').on('submit',function(){
                $('#hiddenContent').val(quill.root.innerHTML);
            })
        });
    </script>
@endsection
