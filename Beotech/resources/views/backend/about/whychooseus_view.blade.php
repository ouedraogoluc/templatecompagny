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
                            <li><a href="#"> Changez votre mot de passe
                                </a></li>
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
                                <div class="card-header">Renseignement sur le startup
                                </div>
                                <div class="card-body card-block ">
                                    <form method="post" action="{{ route('why.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="current_text" name="title" class="form-control" required="" placeholder="Titre" value="{{$whychooseus->title}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="text" name="subtile" class="form-control" required="" placeholder="Sous Titre" value="{{$whychooseus->subtile}}"> </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="text_confirmation" name="subtile1" class="form-control"  placeholder="Sous Titre 1" value="{{$whychooseus->subtile1}}">
                                                    </div>
                                                </div>
                                            </div>
                                           

                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="text_confirmation" name="subtile2" class="form-control"  placeholder="Sous Titre 2" value="{{$whychooseus->subtile2}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" id="text_confirmation" name="subtile3" class="form-control"  placeholder="Sous Titre 3" value="{{$whychooseus->subtile3}}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea name="description" id="textarea" class="form-control" required placeholder="Textarea text">{{$whychooseus->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-photo"></i></div>
                                                        <input type="file"  name="img_propos" class="form-control" id="images">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img  src="{{ (!empty($whychooseus->img_propos))? url('uploads/img_propos/'.$whychooseus->img_propos):url('uploads/no_image.jpg') }}" style="width: 100px; height: 100px;" id="showImage">
                                            </div>
                                        </div>

                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">valider</button></div>
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
    $(document).ready(function() {
        $('#images').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection

