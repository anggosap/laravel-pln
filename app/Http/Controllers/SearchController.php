<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Arsip;
use App\Kategori;

class SearchController extends Controller {

	public function index(){
		$kategoris = Kategori::all();
		$arsip = null;
		return view('search', compact('kategoris', 'arsip'));
	}

	public function arsip($judul){
		$arsip = Arsip::find($judul);
		return view('search', compact('arsip'));
	}

	public function search(Request $request){
		$this->validate($request, [
		    'kategori' => 'required',
		]);
		$kategoris = Kategori::all();
		$search = $request->search;
		$kategori = $request->kategori;
		if ($kategori=="all") {
			$arsip = Arsip::where('judul','like','%'.$search.'%')
		        ->orderBy('judul')
		        ->paginate(20);
		}
		else {
			$arsip = Arsip::where('judul','like','%'.$search.'%')
				->where('kategori','like','%'.$kategori.'%')
		        ->orderBy('judul')
		        ->paginate(20);	
		}
		return view('search', compact('kategoris', 'arsip'));
	}

}