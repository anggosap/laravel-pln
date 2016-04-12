<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Arsip;
use App\Kategori;
//use Request;

class InputController extends Controller {

	public function input(){
		$arsips = Arsip::all();
		$kategoris = Kategori::all();
		return view('input', compact('arsips','kategoris'));
	}

	public function storebuku(Request $request){
		$this->validate($request, [
		    'kode' => 'required',
			'judul' => 'required',
			'tahun' => 'required',
			'kategori' => 'required',
			'rakbuku' => 'required',
			'deskripsi' => 'required',
		]);
		$data = new Arsip;
		$data->kode = $request->kode;
		$data->judul = $request->judul; 
	    $data->tahun = $request->tahun;
	    $data->kategori = $request->kategori;
	    $data->rakbuku = $request->rakbuku;
	    $data->deskripsi = $request->deskripsi;
	    $data->save();
	    return redirect()->back();
	}

	public function storekategori(Request $request){
		$this->validate($request, [
		    'nama_kategori' => 'required',
		]);
		$data = new Kategori;
		$data->nama_kategori = $request->nama_kategori;
		$data->save();

		return redirect()->back();
	}

	public function updatebuku(Request $request){
		$this->validate($request, [
		    'kode' => 'required',
			'judul' => 'required',
			'tahun' => 'required',
			'kategori' => 'required',
			'rakbuku' => 'required',
			'deskripsi' => 'required',
		]);
		//$data = new Arsip;
		$data->kode = $request->kode;
		$data->judul = $request->judul; 
	    $data->tahun = $request->tahun;
	    $data->kategori = $request->kategori;
	    $data->rakbuku = $request->rakbuku;
	    $data->deskripsi = $request->deskripsi;
	    $data->save();
	    return redirect()->back();
	}

	public function deletebuku(Request $request){
	    $arsip = Arsip::where('kode' , $request->kode);	    
		$arsip->delete();
		return redirect()->back();
	}

	public function deletekategori(Request $request){
	    $arsip = Kategori::where('nama_kategori' , $request->nama_kategori);	    
		$arsip->delete();
		return redirect()->back();
	}
}
