<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SiswaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        // Cek apakah CREATE atau UPDATE

        if ($this -> method() == 'PATCH'){
            $nisn_rules         = 'required|string|unique:siswa,nisn,' . $this ->get('id');
            $nik_rules          = 'required|string|unique:siswa,nik,'  . $this ->get('id');
        }
        else{
            $nisn_rules         = 'required|string|unique:siswa,nisn';
            $nik_rules          = 'required|string|unique:siswa,nik';
        }
        
        return [
            'nama_siswa'        => 'required|string',
            'nisn'              => $nisn_rules,
            'nik'               => $nik_rules,
            'jenis_kelamin'     => 'required|in:L,P',
            'tempat_lahir'      => 'required|string',
            'tanggal_lahir'     => 'required|date',
            'agama'             => 'required|string',
            'kebutuhan_khusus'  => 'required|string',
            'alamat'            => 'required',
            'jenis_tinggal'     => 'required|string',
            'alat_transportasi' => 'required|string',
            'nomor_telepon'     => 'required',
            'email'             => 'required|email',
            'nomor_kps'         => 'required|string',
            'nama_ayah'         => 'required|string',
            'nama_ibu'          => 'required|string',
            'pend_ayah'         => 'required|string',
            'pend_ibu'          => 'required|string',
            'penghasilan_ayah'  => 'required',
            'penghasilan_ibu'   => 'required',
            'id_kelas'          => 'required',
            'foto'              => 'sometimes|image|max:500|mimes:jpeg,jpg,bmp,png',
        ];
    }
}
