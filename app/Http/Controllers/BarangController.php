<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function get_all_barang()
    {
    	return response()->json(BarangModel::all(), 200);
    }

    public function index()
    {
    	# code...
    }

    public function create()
    {
    	# code...
    }

    public function store(Request $request)
    {
    	// $insert_data = new BarangModel;
    	// $insert_data->kode_barang = $request->kode;
    	// $insert_data->nama_barang = $request->nama;
    	// $insert_data->stock = $request->stock;
    	// $insert_data->stock_in = $request->stock_in;
    	// $insert_data->stock_out = $request->stock_out;
    	// $insert_data->status = $request->status;
    	// $insert_data->save();
    	// return response([
    	// 	'status' => 'Ok',
    	// 	'message' => 'Tersimpan',
    	// 	'data' => $insert_barang
    	// ], 200);
    	
    	// die('lol');

    	// $post = Post::create([
    	// 	'kode_barang' => $request->kode,
    	// 	'nama' => $request->nama,
    	// 	'stock' => $request->stock,
    	// 	'stock_in' => $request->stock_in,
    	// 	'stock_out' => $request->stock_out,
    	// 	'status' => $request->status
    	// ]);
    	// if ($post) {
    	// 	return response()->json([
    	// 		'success' => true,
    	// 		'message' => 'Barang Tersimpan',
    	// 		'data'	  => $post
    	// 	], 201);
    	// }
    	// return response()->json([
     //        'success' => false,
     //        'message' => 'Gagal disimpan',
     //    ], 409);
    	// $request->validate([
     //        'first_name'=>'required',
     //        'last_name'=>'required',
     //        'email'=>'required'
     //    ]);

        $barang = new Barang([
            'kode_barang' => $request->get('kode'),
            'nama_barang' => $request->get('nama'),
            'stock' => $request->get('stock'),
            'stock_in' => $request->get('stock_in'),
            'stock_out' => $request->get('stock_out'),
            'status' => $request->get('status')
        ]);
        $barang->save();
        return response()->json([
	        "message" => "Book record created"
	    ], 201);
        // return redirect('/contacts')->with('success', 'Contact saved!');

    }

    public function show($id)
    {
    	# code...
    }

    public function update(Request $request, $id)
    {
    	# code...
    }

    public function destroy($id)
    {
    	# code...
    }
}
