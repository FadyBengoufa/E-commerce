<?php

namespace App\Http\Controllers;

use App\Categorie;

use Illuminate\Http\Request;

class AdminCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $categories = Categorie::paginate(5);

        return view('admin.categorie.show_categorie',compact('categories'))->with('i','1');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorie.add_categorie') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $categorie = new Categorie;

        $categorie->name_categorie = $request->name_categorie;

        $categorie->save();

        return redirect('/admin/categorie/create')->with('categorie_created','Categorie Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);

        return view('admin.categorie.edit_categorie',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);

        $categorie->name_categorie = $request->name_categorie;
        $categorie->save();
        return redirect('/admin/categorie')->with('catgorie_edited','Categorie Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);

        $categorie->delete();

        return redirect('/admin/categorie')->with('catgorie_deleted','Categorie Deleted');
    }
}
