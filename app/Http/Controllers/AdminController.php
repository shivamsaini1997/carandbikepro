<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class AdminController extends Controller
{
    public function login(){
        return view('Admin.login');
    }

    public function adminLogin(Request $request): RedirectResponse{
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($credentials)) {
                return redirect()->intended('/admin/dashboard')->with('success', 'You have successfully logged in.');
        }
        return redirect("/admin")->with('error', 'Oops! You have entered invalid credentials.');
    }


    public function register(){
        return view('Admin.register');
    }

    public function adminRegister(Request $request): RedirectResponse{
        $request->validate([
            'full_name' => 'required|string|max:250',
            'email' => 'required|string|email:rfc,dns|max:250|unique:users,email',
            'password' => 'required|min:8',
            'password-confir' => 'required|same:password',
        ]);
        // Creating a new user
        $user = Admin::create([
            'name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Encrypt the password

        ]);
        return redirect()->route('register')->with('success', 'You have successfully registered');
    }

    public function dashboard(){
        return view('Admin.Dashboard.dashboard');
    }
    public function category(){
        $category = Category::get();
        $data = compact('category');
        // dd($data);
        return view('Admin.Category.category')->with($data);
    }
    public function storeCategory(Request $request){
        $category = new Category();
        $request->validate([
            'category' => 'required|string|unique:category',
            'slug' => 'required|unique:category,slug',
        ],[
            'category.required' => 'Please enter a category name.',
            'category.string' => 'The category name must be a string.',
            'category.unique' => 'This category already exists.',
            'slug.required' => 'Please enter a slug for the category.',
            'slug.unique' => 'The slug must be unique, please choose another one.',
        ]);
        $category->category = $request->input('category');
        $category->slug = $request->input('slug');

        $category->save();
        return redirect()->back()->with('success', 'Category Added Successfully');
    }

   public function storeSubCategory(Request $request){
    // Validation rules
    $request->validate([
        'parent_id' => 'required|exists:category,id',
        'scategory' => 'required|string|max:255',
        'sub_category_slug' => 'required|string|max:255|unique:category,slug',
    ],[
        'parent_id.required' => 'Please select a category.',
        'parent_id.exists' => 'The selected category is invalid.',
        'scategory.required' => 'Please enter a sub category name.',
        'scategory.string' => 'The sub category name must be a string.',
        'sub_category_slug.required' => 'Please enter a slug for the sub-category.',
        'sub_category_slug.unique' => 'The slug must be unique, please choose another one.',
    ]);

    // Creating a new sub-category
    $category = new Category();
    $category->parent_id = $request->input('parent_id');
    $category->category = $request->input('scategory');
    $category->slug = $request->input('sub_category_slug');
    $category->save();
    // Redirect with success message
    return redirect()->back()->with('success', 'Sub Category Added Successfully');
}

}
