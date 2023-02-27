@extends('admin.admin_master_new')
@section('admin')


<div class="container-full">

    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Edit Admin User </h4>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="post" action="{{ route('admin.user.update') }}" enctype="multipart/form-data" >
                            @csrf

                            <input type="hidden" name="id" value="{{ $adminuser->id }}">
                            <input type="hidden" name="old_image" value="{{ $adminuser->profile_photo_path }}">

                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Admin User Name  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" value="{{ old('name') ?: $adminuser->name }}" >
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end cold md 6 -->

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Admin Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" value="{{ old('email') ?: $adminuser->email }}" >
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
                                                <h5>Admin User Phone  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') ?: $adminuser->phone }}" >
                                                    @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> <!-- end cold md 6 -->

                                    </div>	<!-- end row 	 -->


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Admin User Image</h5>
                                                <div class="controls">
                                                    <input type="file" name="profile_photo_path" class="form-control" id="image">
                                                    @error('profile_photo_path')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end cold md 6 -->

                                        <div class="col-md-6">
                                            @if ($adminuser->profile_photo_path)
                                            <img id="showImage" src="{{ url($adminuser->profile_photo_path) }}" style="width: 100px; height: 100px;">
                                            @else
                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">
                                            @endif

                                        </div><!-- end cold md 6 -->
                                    </div><!-- end row 	 -->

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Admin User">
                                    </div>

                                </div>
                                <!-- end col-12 -->
                            </div>
                            <!-- end row -->

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
