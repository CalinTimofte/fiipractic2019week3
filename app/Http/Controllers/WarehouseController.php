<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::with('products')->get();
        return view('warehouses', ['warehouses' => $warehouses]);
    }

    public function add()
    {
        return view('warehouse-add');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $warehouse = new Warehouse();
        $warehouse->name = $request->name;
        $warehouse->address = $request->address;
        $warehouse->save();
        return redirect('/warehouses');
    }

    public function delete($id)
    {
        $warehouse = Warehouse::find($id);
        if($warehouse){
            $warehouse->delete();
        }
        return redirect('/warehouses');
    }

    public function edit($id)
    {
        $warehouse = Warehouse::find($id);
        if($warehouse){
            return view('warehouse', ['warehouse' => $warehouse]);
        }
        return redirect('/warehouses');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);

        $warehouse = Warehouse::find($request->id);
        if($warehouse)
        {
            $warehouse->name = $request->name;
            $warehouse->address = $request->address;
            $warehouse->save();
        }
        return redirect('/warehouses');
    }
}
