<?php namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Customer::all();

        return view('customer.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('customer.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CustomerRequest $request)
	{
        $input = $request->all();
        //dd($input);
		Customer::create($input);

        return redirect('customer');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = Customer::findOrFail($id);

        return view('customer.edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CustomerRequest $request)
	{
		$data = Customer::findOrFail($id);
        $data->update($request->all());

        return redirect('customer');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Customer::findOrFail($id);
        $data->delete();

        return redirect('customer');
	}

}
