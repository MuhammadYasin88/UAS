<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\keranjang;
class keranjangcontroller extends Controller
{
    public function upload(){
		$keranjang = keranjang::all();
        return view('keranjang',['keranjang' => $keranjang]);
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
			'nama' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'kodepos' => 'required',
            'kodebarang' => 'required',
			'jumlah' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$nama = $request->file('nama');
 
		// $nama_file = time()."_".$file->getClientOriginalName();
 
      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'data_file';
		// $file->move($tujuan_upload,$nama_file);
 
		keranjang::create([
			'nama' => $request->nama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'kodepos' => $request->kodepos,
            'kodebarang' => $request->kodebarang,
			'jumlah' => $request->jumlah,
		]);
 
		return redirect()->back();
	}
}
