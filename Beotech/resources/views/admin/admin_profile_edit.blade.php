@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                            <li><a href="#"> Edit Profile</a></li>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Edit your profile</div>
                                <div class="card-body card-block ">
                                    <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                        <input type="text" name="name" class="form-control" required="" value="{{$editData->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{{$editData->email}}">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-photo"></i></div>
                                                        <input type="file"  name="profile_photo_path" class="form-control" id="images">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img  src="{{ (!empty($editData->profile_photo_path))? url('uploads/admin_images/'.$editData->profile_photo_path):url('uploads/no_image.jpg') }}" style="width: 100px; height: 100px;" id="showImage">
                                            </div>
                                        </div>
                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Update</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>

        </div><!-- .row -->
    </div><!-- .animated -->
</div><!-- .content -->

<script type="text/javascript">
	$(document).ready(function(){
		$('#images').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
			 $('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection

