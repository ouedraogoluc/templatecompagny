@extends('admin.admin_master')
@section('admin')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <aside class="profile-nav alt">
                    <section class="card">
                        <div class="card-header user-header alt bg-dark">
                            <div class="media">
                                <a href="#">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src=" {{(!empty($adminData->profile_photo_path)) ? url('uploads/admin_images/'.$adminData->profile_photo_path):url('uploads/no_image.jpg') }}">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-light display-6">{{$adminData->name}}</h2>
                                    <p>{{$adminData->email}}</p>
                                </div>
                                <a href="{{route('admin.profile.edit')}}" class="btn btn-success pull-right">edit profile</a>
                            </div>
                        </div>


                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
                            </li>
                        </ul>

                    </section>
                </aside>
            </div>




        </div><!-- .row -->
    </div><!-- .animated -->
</div><!-- .content -->

@endsection

