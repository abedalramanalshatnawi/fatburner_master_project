<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tables = Table::all();
        return view('layouts.admin.table.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allStatus = ['not reserved', 'reserved'];
        return view('layouts.admin.table.create', compact('allStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'number' => 'required|numeric|unique:tables,number',
        ]);
        Table::create([
            'number' => $request->number,
        ]);
        return redirect()->back()->with(['message' => 'Nutritionist added successfully']);
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
        //
        $table = Table::find($id);
        // $allStatus = ['not reserved', 'reserved'];
        return view('layouts.admin.table.edit', compact('table'));
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
        //
        $request->validate([
            'number' => 'required|numeric|unique:tables,number',
        ]);
        $table = Table::find($id);
        $table->update([
            'number' => $request->number,
        ]);
        return redirect()->back()->with(['message' => 'Table updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $table = Table::find($id);
        $table->deleteOrFail();
        return redirect()->back()->with(['message' => 'delete was successful']);
    }
}
