@extends('admin.admin_master')
@section('admin')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <!----------------------edit brand------------------>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Modifier  slider</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $slider->id }}">
                            <input type="hidden" name="old_image" value="{{ $slider->slider_img }}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="" name="title" class="form-control" placeholder="Titre"  value="{{$slider->title}}">
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="" name="description" class="form-control"  value="{{$slider->description}}"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="file" id="" name="slider_img" class="form-control">
                                                @error('brand_image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Modifier</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection

