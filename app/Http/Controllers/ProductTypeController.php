<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateTaxonomyRequest;
use App\Taxonomy;

class ProductTypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Taxonomy::latest()->type()->get();

        return view('product_type.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateTaxonomyRequest $request)
    {
        $input = $request->all();

        Taxonomy::create($input);

        return redirect('type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = Taxonomy::findOrFail($id);

        return view('product_type.show', compact($data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = Taxonomy::findOrFail($id);

        return view('product_type.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateTaxonomyRequest $request)
    {
        $data = Taxonomy::findOrFail($id);
        $data->update($request->all());

        return redirect('type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $data = Taxonomy::findOrFail($id);
        $data->delete();

        return redirect('type');
    }

}
