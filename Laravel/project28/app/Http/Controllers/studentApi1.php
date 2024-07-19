<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentApi1 extends Controller
{

    /**
     *  Actions Handled By the Controller
     *   HTTP Verb 	    Path (URL) 	    Action (Method) 	Route Name
     *   GET 	        /sharks 	    index 	            sharks.index
     *   GET 	        /sharks/create 	create 	            sharks.create
     *   POST 	        /sharks 	    store 	            sharks.store
     *   GET 	        /sharks/{id} 	show 	            sharks.show
     *   GET 	        /sharks/{id}/edit 	edit 	        sharks.edit
     *   PUT/PATCH 	    /sharks/{id} 	update 	            sharks.update
     *   DELETE 	    /sharks/{id} 	destroy 	        sharks.destroy
    */ 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // GET
        return "Index Function Called";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // GET/create
        return "Create Function Called";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // POST
        return "Store Function Called";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // GET/ID
        return "Show Function Called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // GET/ID/edit
        return "Edit Function Called";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // PUT/ID and PATCH/ID
        return "Update Function Called";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE/ID
        return "Destroy Function Called";
    }
}
