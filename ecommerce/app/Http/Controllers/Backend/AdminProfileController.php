<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Http\Repositories\AdminRepository;
use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    use PasswordValidationRules;

	public function AdminProfile()
    {
		$id = Auth::guard('admin')->user()->id;
		$adminData = Admin::find($id);
		return view('admin.admin_profile_view',compact('adminData'));
	}


	public function AdminProfileEdit()
    {
		$id = Auth::guard('admin')->user()->id;
		$editData = Admin::find($id);
		return view('admin.admin_profile_edit',compact('editData'));
	}


	public function AdminProfileStore(Request $request, AdminRepository $adminRepository)
    {
        $request->validate([
			'name' => 'required',
			'email' => 'required',
		]);

		$id = Auth::guard('admin')->user()->id;

        if ($adminRepository->ifExitByName($request->name, $id)) {
            $notification = array(
                'message' => 'Admin User Name already exists, cannot update profile',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }

        if ($adminRepository->ifExitByEmail($request->email, $id)) {
            $notification = array(
                'message' => 'Admin User Email already exists, cannot update profile',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }

		$data = Admin::find($id);
		$data->name = $request->name;
		$data->email = $request->email;

		if ($request->file('profile_photo_path')) {
			$file = $request->file('profile_photo_path');
			@unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('upload/admin_images'),$filename);
			$data['profile_photo_path'] = 'upload/admin_images/' . $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'Admin Profile Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('admin.profile')->with($notification);
	} // end method


	public function AdminChangePassword()
    {
		return view('admin.admin_change_password');
	}

	public function AdminUpdateChangePassword(Request $request)
    {
		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => $this->passwordRules(),
		]);

		$hashedPassword = Auth::guard('admin')->user()->password;
		if (Hash::check($request->oldpassword,$hashedPassword)) {
			$admin = Admin::find(Auth::guard('admin')->id());
			$admin->password = Hash::make($request->password);
			$admin->save();
			Auth::guard('admin')->logout();
			return redirect()->route('admin.logout');
		} else {
            $notification = array(
                'message' => 'The old password is incorrect',
                'alert-type' => 'error',
            );
			return redirect()->back()->withInput()->with($notification);
		}
	}// end method

	public function AllUsers()
    {
		$users = User::latest('id')->get();
		return view('backend.user.all_user',compact('users'));
	}

    public function deleteUsers(Request $request, UserRepository $userRepository)
    {
        $user_id = $request->post('user_id');

        $data_user = $userRepository->get($user_id);
        if (!$data_user) {
            $notification = array(
                'message' => 'The user does not exist',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }

        $userRepository->del($user_id);
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
