@extends('admin.admin_master_new')
@section('admin')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>

<div class="container-full">

    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Profile Edit</h4>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Admin User Name  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required="" value="{{ old('name') ?: $editData->name }}">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end cold md 6 -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Admin Email  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required="" value="{{ old('email') ?: $editData->email }}">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end cold md 6 -->

                                    </div>	<!-- end row 	 -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Profile Image</h5>
                                                <div class="controls">
                                                    <input type="file" name="profile_photo_path" class="form-control" id="image"> </div>
                                                </div>
                                            </div><!-- end cold md 6 -->

                                            <div class="col-md-6">
                                                <img id="showImage" src="{{ (!empty($editData->profile_photo_path))? url($editData->profile_photo_path):url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">

                                            </div><!-- end cold md 6 -->

                                    </div><!-- end row 	 -->

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                                    </div>

                                </div>
                                <!-- /.col-12 -->
                            </div>
                            <!-- /.row -->

                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
