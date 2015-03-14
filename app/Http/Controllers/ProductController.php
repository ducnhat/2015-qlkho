<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Taxonomy;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data = Product::AllProduct()->get();

		return view('product.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$brands = Taxonomy::brand()->lists('name', 'id');
        $types = Taxonomy::type()->lists('name', 'id');

        return view('product.create', compact(['brands', 'types']));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{
		$input = $request->all();
        Product::create($input);

        return redirect('product');
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
		$data = Product::findOrFail($id);
        $brands = Taxonomy::brand()->lists('name', 'id');
        $types = Taxonomy::type()->lists('name', 'id');

        return view('product.edit', compact(['data', 'brands', 'types']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProductRequest $request)
	{
		$data = Product::findOrFail($id);
        $data->update($request->all());

        return redirect('product');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Product::findOrFail($id);
        $data->delete();

        return redirect('product');
	}

}
