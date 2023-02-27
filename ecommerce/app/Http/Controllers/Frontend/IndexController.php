<?php

namespace App\Http\Controllers\Frontend;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Http\Repositories\BillingRepository;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\ProvinceRepository;
use App\Http\Repositories\ShippingRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\MultiImg;
use Illuminate\Support\Facades\Hash;
use App\Rules\PhoneRule;
use App\Rules\PostalCodeRule;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    use PasswordValidationRules;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var BillingRepository
     */
    private $billingRepository;

    /**
     * @var ProvinceRepository
     */
    private $provinceRepository;

    /**
     * @var ShippingRepository
     */
    private $shippingRepository;

    public function __construct(
        Request $request,
        BillingRepository $billingRepository,
        ProvinceRepository $provinceRepository,
        ShippingRepository $shippingRepository
    ) {
        $this->request = $request;
        $this->billingRepository = $billingRepository;
        $this->provinceRepository = $provinceRepository;
        $this->shippingRepository = $shippingRepository;
    }

    public function index(CategoryRepository $categoryRepository)
    {
        $products = Product::where('status',1)->orderBy('id','DESC')->limit(6)->get();
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(3)->get();

        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $osRel = Product::osRel();
        $usageRel = Product::usageRelShopPage();

        $categories = $categoryRepository->rejectAccessories($categories);

        $vars = [
            'categories' => $categories,
            'sliders' => $sliders,
            'products' => $products,
            'osRel' => $osRel,
            'usageRel' => $usageRel,
            'brands' => $brands,
        ];
        return view('frontend.index', $vars);
    }


    public function UserLogout()
    {
        $notification = array(
			'message' => 'Log Out Successfully!',
			'alert-type' => 'success',
		);
        Auth::logout();
        return Redirect()->route('login')->with($notification);
    }


    public function UserProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile',compact('user'));
    }

    public function UserProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

    } // end method


    public function UserChangePassword()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.change_password',compact('user'));
    }


    public function UserPasswordUpdate(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => $this->passwordRules(),
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            // return redirect()->route('user.logout');

            $notification = array(
                'message' => 'You have changed your password, please log in again',
                'alert-type' => 'info',
            );
            return redirect('login')->with($notification);
        } else {
            $notification = array(
                'message' => 'The current password is incorrect',
                'alert-type' => 'error',
            );

            return redirect()->back()->withInput()->with($notification);
        }
    }// end method

    public function ProductDetails($id)
    {
        $product = Product::findOrFail($id);

        $color_en = $product->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_hin = $product->product_color_hin;
        $product_color_hin = explode(',', $color_hin);

        $size_en = $product->product_size_en;
        $product_size_en = explode(',', $size_en);

        $size_hin = $product->product_size_hin;
        $product_size_hin = explode(',', $size_hin);

        $multiImag = MultiImg::where('product_id',$id)->get();

        $cat_id = $product->category_id;
        $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();
        return view('frontend.product.product_details',compact('product','multiImag','product_color_en','product_color_hin','product_size_en','product_size_hin','relatedProduct'));
    }

    /// Product View With Ajax
    public function ProductViewAjax($id)
    {
        $product = Product::with('category','brand')->findOrFail($id);
        return response()->json(array(
            'product' => $product,
        ));
    } // end method

    public function UserBilling()
    {
        $user_id = Auth::id();
        $list = $this->billingRepository->list($user_id);
        $list_province = $this->provinceRepository->listAll()->keyBy('id');

        $vars = [
            'list' => $list,
            'list_province' => $list_province,
        ];
        return view('frontend.profile.billing', $vars);
    }

    public function UserShipping()
    {
        $user_id = Auth::id();
        $list = $this->shippingRepository->list($user_id);
        $list_province = $this->provinceRepository->listAll()->keyBy('id');

        $vars = [
            'list' => $list,
            'list_province' => $list_province,
        ];
        return view('frontend.profile.shipping', $vars);
    }

    public function UserBillingAdd()
    {
        $list_province = $this->provinceRepository->listAll();
        $vars = [
            'list_province' => $list_province,
        ];
        return view('frontend.profile.billing_add', $vars);
    }

    public function UserBillingEdit($id)
    {
        $data = $this->billingRepository->get($id);
        if (!$data) {
            $notification = array(
                'message' => 'Parameter Error',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $user_id = Auth::id();
        if ($data->user_id != $user_id) {
            $notification = array(
                'message' => 'Parameter Error2',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $list_province = $this->provinceRepository->listAll();
        $vars = [
            'list_province' => $list_province,
            'data' => $data,
        ];
        return view('frontend.profile.billing_edit', $vars);
    }

    public function UserShippingAdd()
    {
        $list_province = $this->provinceRepository->listAll();
        $vars = [
            'list_province' => $list_province,
        ];
        return view('frontend.profile.shipping_add', $vars);
    }

    public function UserShippingEdit($id)
    {
        $data = $this->shippingRepository->get($id);
        if (!$data) {
            $notification = array(
                'message' => 'Parameter Error',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $user_id = Auth::id();
        if ($data->user_id != $user_id) {
            $notification = array(
                'message' => 'Parameter Error2',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $list_province = $this->provinceRepository->listAll();
        $vars = [
            'list_province' => $list_province,
            'data' => $data,
        ];
        return view('frontend.profile.shipping_edit', $vars);
    }

    public function UserBillingStore()
    {
        $this->request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', new PhoneRule],
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => ['required', new PostalCodeRule],
        ]);
        $user_id = Auth::id();

        $this->billingRepository->store($this->request->post(), $user_id);

        $notification = array(
            'message' => 'User Billing Address Store Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.billing')->with($notification);
    }

    public function UserBillingUpdate()
    {
        $this->request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', new PhoneRule],
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => ['required', new PostalCodeRule],
        ]);

        $id = $this->request->post('id');
        $data = $this->billingRepository->get($id);
        if (!$data) {
            $notification = array(
                'message' => 'Parameter Error',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $user_id = Auth::id();
        if ($data->user_id != $user_id) {
            $notification = array(
                'message' => 'Parameter Error2',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $this->billingRepository->update($this->request->post(), $id);

        $notification = array(
            'message' => 'User Billing Address Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.billing')->with($notification);
    }

    public function UserBillingDelete($id)
    {
        $data = $this->billingRepository->get($id);
        if (!$data) {
            $notification = array(
                'message' => 'Parameter Error',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $user_id = Auth::id();
        if ($data->user_id != $user_id) {
            $notification = array(
                'message' => 'Parameter Error2',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $this->billingRepository->delete($id);

        $notification = array(
            'message' => 'User Billing Address Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function UserShippingStore()
    {
        $this->request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', new PhoneRule],
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => ['required', new PostalCodeRule],
        ]);
        $user_id = Auth::id();

        $this->shippingRepository->store($this->request->post(), $user_id);

        $notification = array(
            'message' => 'User Shipping/Billing Address Store Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.shipping')->with($notification);
    }

    public function UserShippingUpdate()
    {
        $this->request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', new PhoneRule],
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => ['required', new PostalCodeRule],
        ]);

        $id = $this->request->post('id');
        $data = $this->shippingRepository->get($id);
        if (!$data) {
            $notification = array(
                'message' => 'Parameter Error',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $user_id = Auth::id();
        if ($data->user_id != $user_id) {
            $notification = array(
                'message' => 'Parameter Error2',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $this->shippingRepository->update($this->request->post(), $id);

        $notification = array(
            'message' => 'User Shipping/Billing Address Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.shipping')->with($notification);
    }

    public function UserShippingDelete($id)
    {
        $data = $this->shippingRepository->get($id);
        if (!$data) {
            $notification = array(
                'message' => 'Parameter Error',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $user_id = Auth::id();
        if ($data->user_id != $user_id) {
            $notification = array(
                'message' => 'Parameter Error2',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $this->shippingRepository->delete($id);

        $notification = array(
            'message' => 'User Shipping/Billing Address Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function chat_test()
    {
        return view('frontend.chat_test');
    }
}
