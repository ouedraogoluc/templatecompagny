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
                                <div class="card-header">Changez votre mot de passe
                                </div>
                                <div class="card-body card-block ">
                                    <form method="post" action="{{ route('update.change.password') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="password" id="current_password" name="oldpassword" class="form-control" required="" placeholder="Mot passe actuel">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="password" id="password" name="password" class="form-control" required="" placeholder="Nouveau Mot de passe "> </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="" placeholder="Confirmer le mot passe">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Changer</button></div>
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

