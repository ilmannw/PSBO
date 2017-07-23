<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SiswaRequest;
use App\Siswa;
use App\Kelas;
use storage;
use Session;


class SiswaController extends Controller
{

    public function index(){
		$siswa_list = Siswa::orderBy('id_kelas','asc')->orderBy('nama_siswa', 'asc')->Paginate(10);
		$jumlah_siswa = Siswa::count();
		return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }
    public function create(){

    	return view('siswa.create');

    }
    public function store(SiswaRequest $request){
		
		$input = $request-> all();

		if ($request->hasFile('foto')){
			$foto = $request->file('foto');
			$ext  = $foto	->getClientOriginalExtension();

			if($request->file('foto')->isValid()){
				$foto_name		= date('YmdHis'). ".$ext";
				$upload_path	= 'fotoupload';
				$request->file('foto')->move($upload_path, $foto_name);
				$input['foto']	= $foto_name;
			}
		}

		Siswa::create($input);

		Session::flash('flash_message', 'Data siswa berhasil disimpan.');


		return redirect('siswa');
	}
	public function show(Siswa $siswa){
		return view('siswa.show', compact('siswa'));
	}

	public function edit(Siswa $siswa){
		return view('siswa.edit', compact('siswa'));
	}

	public function update(Siswa $siswa, SiswaRequest $request){
		
		$input = $request-> all();

		if ($request -> hasFile('foto')){
			$foto = $request->file('foto');
			$ext  = $foto	->getClientOriginalExtension();

			if($request->file('foto')->isValid()){
				$foto_name		= date('YmdHis'). ".$ext";
				$upload_path	= 'fotoupload';
				$request->file('foto')->move($upload_path, $foto_name);
				$input['foto']	= $foto_name;
			}
		}


		$siswa->update($input);
		Session::flash('flash_message', 'Data siswa berhasil diupdate.');
		Session::flash('update', true);
		return redirect('siswa');
	}

	public function destroy(Siswa $siswa){

		$siswa->delete();
		Session::flash('flash_message', 'Data siswa berhasil dihapus.');
		Session::flash('penting', true);
		return redirect('siswa');
	}

	public function dateMutator(){
		$siswa = Siswa::findOrFail(1);
		return 'Umur siswa ini adalah:' . $siswa->tanggal_lahir->age . 'tahun.' ;
	}

	public function cari(Request $request){
		$kata_kunci		= trim($request->input('kata_kunci'));
		$id_kelas		= trim($request->input('id_kelas'));

		if (! empty($kata_kunci)){
			$id_kelas	= $request->input('id_kelas');		
			
			
			//query

			$query         = Siswa::where('nama_siswa', 'LIKE', '%' . $kata_kunci . '%');

			(! empty($id_kelas)) ? $query -> where('id_kelas', $id_kelas) : '';
			$siswa_list = $query->paginate(10);

			//url link pagination

			$pagination		= (! empty($id_kelas)) ? $pagination = $siswa_list-> appends(['id_kelas' => $id_kelas]) : '';
			$pagination		= $siswa_list->appends(['kata_kunci' => $kata_kunci]);
			
			$jumlah_siswa	= $siswa_list->total();
			return view('siswa.index', compact('siswa_list', 'kata_kunci', 'pagination', 'jumlah_siswa', 'id_kelas'));
		
		} elseif (empty($kata_kunci) && !empty($id_kelas)){
			$id_kelas 		= $request->input('id_kelas');
			$query			= Siswa::where('id_kelas', 'LIKE', '%' . $id_kelas . '%');
			$siswa_list 	= $query->paginate(10);
			$pagination 	= $siswa_list->appends(['id_kelas' => $id_kelas]);

			$jumlah_siswa 	= $siswa_list->total();
			return view('siswa.index', compact('siswa_list', 'id_kelas', 'pagination', 'jumlah_siswa')); 
		}

		
		return redirect('siswa');
		
	}

	public function __construct(){
		
		$this	-> middleware('auth'); 
	}

}
