@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
@endphp


<div class="col-md-2"><br>
    <img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" height="100%" width="100%"><br><br>
    <ul class="list-group list-group-flush">
        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Change Profile</a>
        <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
        <a href="{{ route('user.shipping') }}" class="btn btn-primary btn-sm btn-block ship-list-item">Manage Address</a>
        <a href="{{ route('my.orders') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>
        <a href="{{ route('user.logout') }}" class="btn btn-primary btn-sm btn-block">Logout</a>
    </ul>

</div> <!-- // end col md 2 -->
