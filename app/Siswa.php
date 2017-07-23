<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
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
    ];

    protected $dates = ['tanggal_lahir'];

    public function getNamaSiswaAttribute($nama_siswa){
    	return ucwords($nama_siswa);
    }

    public function getNamaAyahAttribute($nama_ayah){
    	return ucwords($nama_ayah);
    }

	public function getNamaIbuAttribute($nama_ibu){
    	return ucwords($nama_ibu);
    }

    public function kelas(){ 
    	return $this -> belongsTo('App\Kelas', 'id_kelas');
    }
}
