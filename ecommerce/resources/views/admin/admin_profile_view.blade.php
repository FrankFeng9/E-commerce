@extends('admin.admin_master_new')

@section('admin')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header" >
                    <h3 class="widget-user-username">Admin Name: {{ $adminData->name }} </h3>

                    <a href="{{ route('admin.profile.edit') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Edit Profile</a>

                    <h6 class="widget-user-desc">Admin Email: {{ $adminData->email }} </h6>
                </div>
                <div class="widget-user-image">

                    <img class="rounded-circle" src="{{ (!empty($adminData->profile_photo_path))? url($adminData->profile_photo_path):url('upload/no_image.jpg') }}" alt="User Avatar">


                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
