<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class sellController extends Controller
{
	public function index(){
		return view('keranjang');
	}
 
	public function store(Request $request){
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
 
      	        // nama file
		echo 'File Name: '.$nama->getClientOriginalName();
		echo '<br>';
 
      	        // ekstensi file
		echo 'File Extension: '.$nama->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$nama->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$nama->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$nama->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
 
                // upload file
		$nama->move($tujuan_upload,$nama->getClientOriginalName());
	}
}