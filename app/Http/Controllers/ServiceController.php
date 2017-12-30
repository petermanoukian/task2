<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Services;

class ServiceController extends Controller
{
    
	public function index()
	{
		$services = Services::orderBy('id', 'DESC')->get();
		return view('service.index', compact('services'));
	}
	
	
	public function create()
	{
		return view('service.create');
	}
	
	

	public function store(Request $request)
	{
		$this->validate($request, [
		'service_name' => 'required'
		]);
		$service = Services::create(['service_name' => $request->service_name]);
		$service->save();

		return view('service.show', compact('service'));
	}
	
	
	
	public function edit($id)

	{
		$service = Services::findOrFail($id);

		return view('service.edit', compact('service'));
	}

	public function update(Request $request, $id)
	{
	
		$this->validate($request, [
		'service_name' => 'required'
		]);
		

		$service = Services::findOrFail($id);
		$service->update(['service_name' => $request->service_name]);
		return view('service.show', compact('service'));
	}	

	
	
	

	
	
	public function destroy($id)
	{
		$ser = Services::findOrFail($id);
		$ser->account()->delete();
		Services::destroy($id);

		return Redirect::route('MyHomeService.route');
	}
	
	
	
	
}