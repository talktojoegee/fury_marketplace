@extends('layouts.master-layout')
@section('current-page')
    Add Product
@endsection
@section('extra-styles')

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
                    <form action="{{route('preview-message')}}" method="get">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5 class="">Add more Products</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Product Name<sup class="text-danger">*</sup>
                                            </label>
                                            <select name="senderId" id="senderId" class="form-control select2">
                                                <option value="SMS Channel" selected>SMS Channel</option>
                                                @foreach(Auth::user()->getUserSenderIds->where('status',1) as $id)
                                                    <option value="{{$id->sender_id}}">{{$id->sender_id}}</option>
                                                @endforeach
                                            </select>
                                            @error('senderId') <i class="text-danger">{{$message}}</i>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label d-flex justify-content-between">Sender ID
                                                <small><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#newSenderIdModal">Add New Sender ID</a></small>
                                            </label>
                                            <select name="senderId" id="senderId" class="form-control select2">
                                                <option value="SMS Channel" selected>SMS Channel</option>
                                                @foreach(Auth::user()->getUserSenderIds->where('status',1) as $id)
                                                    <option value="{{$id->sender_id}}">{{$id->sender_id}}</option>
                                                @endforeach
                                            </select>
                                            @error('senderId') <i class="text-danger">{{$message}}</i>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="from-phone-group">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label d-flex justify-content-between">Phone Group
                                                <small><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#newPhoneGroupModal">Create New Phone Group</a></small>
                                            </label>
                                            <select name="phonegroup[]" id="phonegroup" class="select2 form-control select2-multiple" multiple="multiple">
                                                <option disabled selected>--Select Phone Group--</option>
                                                @foreach(Auth::user()->getUserPhoneGroups as $group)
                                                    <option value="{{$group->id}}">{{$group->group_name ?? '' }} ({{$group->getNumberOfContacts($group->id)}})</option>
                                                @endforeach
                                            </select>
                                            @error('phonegroup') <i class="text-danger">{{$message}}</i>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="from-phone-numbers">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Numbers</label>
                                            <textarea name="phone_numbers" id="phone_numbers" style="resize: none" placeholder="Enter phone numbers separated by comma"
                                                      class="form-control">{{old('phone_numbers')}}</textarea>
                                            @error('phone_numbers') <i class="text-danger">{{$message}}</i>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="from-message">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Compose message</label>
                                            <textarea name="message" rows="5" id="message" style="resize: none" placeholder="Compose message here..."
                                                      class="form-control">{{old('message')}}</textarea>
                                            @error('message') <i class="text-danger">{{$message}}</i>@enderror
                                            <p class="text-right text-danger" id="character-counter">0</p>
                                            <span><strong class="text-danger">Note: </strong> One page of message consists of <code>160</code> characters.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right d-flex justify-content-center">
                                <button type="submit" class="btn btn-custom w-50">Preview Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-scripts')

@endsection
