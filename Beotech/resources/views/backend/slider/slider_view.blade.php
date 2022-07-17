@extends('admin.admin_master')
@section('admin')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Listes des slider</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset($item->slider_img) }}" style="width: 70px; height: 40px;"> </td>
                                    <td>
                                        @if($item->title == NULL)
                                        <span class="badge badge-pill badge-danger"> No Title </span>
                                        @else
                                        {{ $item->title }}
                                        @endif
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @if($item->status == 1)
                                        <span class="badge badge-pill badge-success"> Active </span>
                                        @else
                                        <span class="badge badge-pill badge-danger"> InActive </span>
                                        @endif

                                    </td>
                                    <td width="30%">
                                        <a href="{{ route('slider.edit',$item->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                        <a href="{{ route('slider.delete',$item->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                            <i class="fa fa-trash"></i></a>
                                        @if($item->status == 1)
                                        <a href="{{ route('slider.inactive',$item->id) }}" class="btn btn-danger btn-sm" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
                                        @else
                                        <a href="{{ route('slider.active',$item->id) }}" class="btn btn-success btn-sm" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!----------------------add brand------------------>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Ajouter des sliders</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="" name="title" class="form-control" placeholder="Titre">
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="" name="description" class="form-control" placeholder="Description "> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="file" id="" name="slider_img" class="form-control">
                                                @error('slider_img')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Valider</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection

