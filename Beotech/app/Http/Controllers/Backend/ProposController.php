<?php

namespace App\Http\Controllers\Backend;

use App\Models\Propos;
use Illuminate\Http\Request;
use App\Models\Whychooseuser;
use App\Http\Controllers\Controller;

class ProposController extends Controller
{
    public function AboutOurStartup()
    {
        $about=Propos::find(1);
        return view('backend.about.about_view',compact('about'));
        
    }



    public function AboutOurStartupStore(Request $request){

		$data = Propos::find(1);
		$data->title = $request->title;
		$data->subtile = $request->subtile;
		$data->subtile1 = $request->subtile1;
		$data->years = $request->years;
		$data->description = $request->description;
		if ($request->file('img_propos')) {
			$file = $request->file('img_propos');
			@unlink(public_path('uploads/propos_images/'.$data->img_propos));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('uploads/propos_images'),$filename);
			$data['img_propos'] = $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'propos  Updated Successfully',
			'alert-type' => 'success'
		);

        return redirect()->back();
	} // end method 

    public function WhyChooseUs()
    {
        $whychooseus=Whychooseuser::find(1);
        return view('backend.about.whychooseus_view',compact('whychooseus'));
        
    }
    public function WhyChooseUsStore(Request $request){

		$data = Whychooseuser::find(1);
		$data->title = $request->title;
		$data->subtile = $request->subtile;
		$data->subtile1 = $request->subtile1;
		$data->subtile2= $request->subtile2;
		$data->subtile3 = $request->subtile3;
		$data->description = $request->description;
		if ($request->file('img_propos')) {
			$file = $request->file('img_propos');
			@unlink(public_path('uploads/why_images/'.$data->img_propos));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('uploads/why_images'),$filename);
			$data['img_propos'] = $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'propos  Updated Successfully',
			'alert-type' => 'success'
		);

        return redirect()->back();
	} // end method 


}
