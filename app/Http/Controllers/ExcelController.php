<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;
use App\Kelas;
//use Input;
use Excel;
use DB;
use Illuminate\Support\Facades\Input;


class ExcelController extends Controller
{
    public function getImport(){
    	return view('Excel.importSiswa');
    }

    public function getExport(){
    	$siswa = Siswa::all();
    	Excel::create('Siswa Export', function($excel) use($siswa){
    		$excel->sheet('Sheet 1', function($sheet) use($siswa){
    			$sheet->fromArray($siswa);
    		});
    	})->export('xlsx');
    }

    public function postImport(){
    	Excel::load(Input::file('siswa'), function($reader){
    		$reader->each(function($sheet){
    			Siswa::firstOrCreate($sheet->toArray());
    		});
    	});

    	return redirect('siswa');
    }

    public function getTemplate(){
    	Excel::create('Data Siswa SMPN 1 Dramaga', function($excel) {
			// Set the properties
			$excel->setTitle('Template Import Buku')
			->setCreator('Admin SMPN 1 Dramaga')
			->setCompany('SMPN 1 Dramaga')
			->setDescription('Template import data untuk PDS SMPN 1 Dramaga');
			$excel->sheet('Data Siswa', function($sheet) {
				$row = 1;
				$sheet->row($row, [	
					'nama_siswa',
					'nisn',
					'nik',
					'jenis_kelamin',
					'tempat_lahir',
					'tanggal_lahir',
					'agama',
					'kebutuhan_khusus',
					'alamat',
					'jenis_tinggal',
					'alat_transportasi',
					'nomor_telepon',
					'email',
					'nomor_kps',
					'status',
					'nama_ayah',
					'nama_ibu',
					'pend_ayah',
					'pend_ibu',
					'penghasilan_ayah',
					'penghasilan_ibu',
					'id_kelas',
					'foto',
				]);
			});
		})->export('xlsx');
    }
}
