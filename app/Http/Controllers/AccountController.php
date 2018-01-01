<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use DB;
use Redirect;
use App\Services;
use App\Account;


class AccountController extends Controller
{
   
	private $destinationFolder = '/imgs/';
	private $destinationThumbnail = '/imgs/thumb/';
	public function index($service_id='')
	{
		if($service_id!= "")
		{
			$accounts = Account::with('services')->where('services_id', '=', $service_id)->orderBy('id', 'DESC')->paginate(6);
			return view('account.index', compact('accounts','service_id'));
		}
		else
		{
			$accounts = Account::with('services')->orderBy('id', 'DESC')->paginate(6);
			return view('account.index', compact('accounts'));
		}
		
	}
	
	
	public function create($service_id='')
	{
		$services = Services::orderBy('id','desc')->pluck('service_name', 'id');
		if($service_id!= "")
		{
			$serviceid = $service_id;
			return view('account.create',  compact('services', 'serviceid'));
			
		}
		else
		return view('account.create', compact('services'));
	}
	
	

	public function store(Request $request)
	{
		
		$this->validate($request, [
		'name' => 'required'
		]);
		
		//print_r($request);
		//var_dump($request);
	
		$img = $request->file('logo')->getClientOriginalExtension();
		$img2 =$request->name;
		$img3 = $img2.'.'.$img;
			$acs = Account::create([
				'services_id' =>$request->service_id,
			
			'name' => $request->name,
							 'contact_name' =>$request->contact_name,
								'description' =>$request->description , 
			'logo' => $img3]
							  
		);
		$acs->save();
		$file = Input::file('logo');
			$imageName = $acs->name;
			$extension = $request->file('logo')
			->getClientOriginalExtension();
			//create instance of image from temp upload
			$image = Image::make($file->getRealPath());
			//save image with thumbnail
			$image->save(public_path() . $this->destinationFolder
			. $imageName
			. '.'
			. $extension)
			->resize(60, 60)
			// ->greyscale()
			->save(public_path() . $this->destinationThumbnail.$img2
			. '.'
			. $extension);	

		
		
		$id = $acs->id;
		
		return Redirect("account/show/$id");
		return view('account.show', compact('acs'));
	}
	
	
	
	public function edit($id)

	{
		$acc = Account::findOrFail($id);
		$servicesdrop = Services::pluck('service_name', 'id');
		$serviceid = $acc->services->id;
		
		return view('account.edit', compact('acc', 'servicesdrop' ,'serviceid'));
	}

	public function update(Request $request, $id)
	{
	
		$this->validate($request, [
			'name' => 'required'
			]);
			
			//print_r($request);
			//var_dump($request);
		$check = $request->file('logo');
		if($check != "")
		{
			$img = $request->file('logo')->getClientOriginalExtension();
			$img2 =$request->name;
			$img3 = $img2.'.'.$img;
		}
		else{
			
			$img3 = $request->logo1;
		}
		$acs = Account::findOrFail($id);
			$acs->update([
				'services_id' =>$request->service_id,
				
				'name' => $request->name,
								 'contact_name' =>$request->contact_name,
									'description' =>$request->description , 
				'logo' => $img3
								   
									
									
									
									]
								  
								  );
			if($check != "")
			{
				$file = Input::file('logo');
				$imageName = $acs->name;
				$extension = $request->file('logo')
				->getClientOriginalExtension();
				//create instance of image from temp upload
				$image = Image::make($file->getRealPath());
				//save image with thumbnail
				$image->save(public_path() . $this->destinationFolder
				. $imageName
				. '.'
				. $extension)
				->resize(60, 60)
				// ->greyscale()
				->save(public_path() . $this->destinationThumbnail.$img2
				. '.'
				. $extension);
			}			
		


		//return view('account.show', compact('acs'));
		return Redirect("account/show/$id");
	}	

	
	public function show($id)
	{
		$acs = Account::findOrFail($id);

		return view('account.show', compact('acs'));
	}
		

	
	
	public function destroy($id)
	{
		$ser = Account::findOrFail($id);

		Account::destroy($id);

		return Redirect::route('MyHomeAccount.route');
	}
	
	
	
	
	
	
	
}
