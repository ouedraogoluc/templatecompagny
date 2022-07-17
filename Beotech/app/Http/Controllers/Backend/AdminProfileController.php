<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function AdminProfile()
    {
        $adminData=Admin::find(1);
        return view('admin.admin_profile_view',compact('adminData'));
    }

    public function AdminProfileEdit()
    {
        $editData=Admin::find(1);
        return view('admin.admin_profile_edit',compact('editData'));
    }
    public function AdminProfileStore(Request $request)
    {
        $data=Admin::find(1);
        $data->name=$request->name;
        $data->email=$request->email;
        if ($request->file('profile_photo_path')) {
            $file=$request->file('profile_photo_path');
            @unlink(public_path('uploads/admin_images/'.$data->profile_photo_path));
            $fileName=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images'),$fileName);
            $data['profile_photo_path']=$fileName;
        }

        $data->save();

        $notification=array(
            'message'=>'Profil de l\'administrateur mis à jour avec succès',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }

    public function AdminChangePassword()
    {
        return view('admin.admin_change_password');
    }

    public function AdminUpdateChangePassword(Request $request)
    {
        $validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',
		]);

        $hashedPassword=Admin::find(1)->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $admins=Admin::find(1);
            $admins->password=Hash::make($request->password);
            $admins->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        }else{
            return redirect()->back();
        }
    }
}
