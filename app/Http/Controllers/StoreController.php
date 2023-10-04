<?php

namespace App\Http\Controllers;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores=Store::get();
        return view('store.index',compact('stores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $store=new store();
       $store -> name = $request->name;
       $store -> category = $request->category;
       $store -> address = $request->address;
       if($request->file('image')){
        $fileName=time().'.'.$request->file('image')->getClientOriginalName();

        $path=$request->file('image')->storeAs('public/image',$fileName);
        $store -> image=$fileName;
       }
       $store->save();
        return redirect()->route('store.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $store=Store::findOrfail($id);
        return view('store.update',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $store =Store::findOrfail($id);
        $store -> name = $request->name;
        $store -> category = $request->category;
        $store -> address = $request->address;
        if($store ->image){
            storage::delete('public/image/'.$store->image);
        }
        $store -> name = $request->name;
        $store -> category = $request->category;
        $store -> address = $request->address;
        if($request->file('image')){
         $fileName=time().'.'.$request->file('image')->getClientOriginalName();

         $path=$request->file('image')->storeAs('public/image',$fileName);
         $store -> image=$fileName;
        }

        $store ->save();

            return redirect()->route('store.index');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $store = Store::findOrfail($id);
        if($store ->image){
            storage::delete('public/image/'.$store->image);
        }
        $store->delete();
        return redirect()->route('store.index');
    }
}
