<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Http\Repositories\AdminRepository;
use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    use PasswordValidationRules;

    public function AllAdminRole()
    {
        $adminuser = Admin::where('type',2)->latest('id')->get();
        return view('backend.role.admin_role_all',compact('adminuser'));
    } // end method


    public function AddAdminRole()
    {
        return view('backend.role.admin_role_create');
    }

    public function StoreAdminRole(Request $request, AdminRepository $adminRepository)
    {
        $request->validate([
			'name' => 'required',
			'phone' => 'required',
			'email' => 'required',
			'password' => 'required',
			'profile_photo_path' => 'required',
		]);

        $image = $request->file('profile_photo_path');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
        $save_url = 'upload/admin_images/'.$name_gen;

        if ($adminRepository->ifExitByName($request->name)) {
            $notification = array(
                'message' => 'Admin User Name already exists, cannot add Admin User',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }

        if ($adminRepository->ifExitByEmail($request->email)) {
            $notification = array(
                'message' => 'Admin User Email already exists, cannot add Admin User',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'brand' => 1,
            'category' => 1,
            'product' => 1,
            'slider' => 1,
            'coupons' => 1,

            'shipping' => 1,
            'blog' => 1,
            'setting' => 1,
            'returnorder' => 1,
            'review' => 1,

            'orders' => 1,
            'stock' => 1,
            'reports' => 1,
            'alluser' => 1,
            'adminuserrole' => 0,
            'type' => 2,
            'profile_photo_path' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Admin User Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin.user')->with($notification);
    } // end method



    public function EditAdminRole($id)
    {
        $adminuser = Admin::findOrFail($id);
        return view('backend.role.admin_role_edit',compact('adminuser'));
    } // end method

    public function UpdateAdminRole(Request $request, AdminRepository $adminRepository)
    {
        $request->validate([
			'name' => 'required',
			'phone' => 'required',
			'email' => 'required',
		]);

        $admin_id = $request->id;
        $old_img = $request->old_image;

        $data_admin = $adminRepository->get($admin_id);
        if (!$data_admin) {
            $notification = array(
                'message' => 'The admin user does not exist',
                'alert-type' => 'error',
            );
			return redirect()->back()->withInput()->with($notification);
        }

        if ($adminRepository->ifExitByName($request->name, $admin_id)) {
            $notification = array(
                'message' => 'Admin User Name already exists, cannot update Admin User',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }

        if ($adminRepository->ifExitByEmail($request->email, $admin_id)) {
            $notification = array(
                'message' => 'Admin User Email already exists, cannot update Admin User',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }

        if ($request->file('profile_photo_path')) {

            @unlink($old_img);
            $image = $request->file('profile_photo_path');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
            $save_url = 'upload/admin_images/'.$name_gen;

            Admin::findOrFail($admin_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,

                'type' => 2,
                'profile_photo_path' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Admin User Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.admin.user')->with($notification);

        }else{

            Admin::findOrFail($admin_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,

                'type' => 2,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Admin User Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.admin.user')->with($notification);
        } // end else
    } // end method


    public function DeleteAdminRole($id)
    {
        $adminimg = Admin::findOrFail($id);
        $img = $adminimg->profile_photo_path;
        unlink($img);

        Admin::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } // end method

    public function EditAdminPassword($id)
    {
        $adminuser = Admin::findOrFail($id);
        return view('backend.role.admin_password_edit',compact('adminuser'));
    }

    public function UpdateAdminPassword(Request $request, AdminRepository $adminRepository)
    {
        $validateData = $request->validate([
			'password' => $this->passwordRules(),
		]);

        $id = $request->post('id');
        $data_admin = $adminRepository->get($id);
        if (!$data_admin) {
            $notification = array(
                'message' => 'The admin user does not exist',
                'alert-type' => 'error',
            );
			return redirect()->back()->withInput()->with($notification);
        }

        $data_admin->password = Hash::make($request->password);
        $data_admin->save();

        $notification = array(
            'message' => 'Admin Password Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.admin.user')->with($notification);
    }
}
