<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'Kolom :attribute harus memiliki email yang valid.',
    'exists'               => 'Kolom :attribute tida valid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'Kolom :attribute harus berupa gambar.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'Kolom :attribute harus diisi.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        
        'nama_siswa'    => [
            'required'  => 'Kolom NAMA harus diisi.',
            'string'    => 'Kolom NAMA harus berupa format string.',
        ],

        'nisn'          => [
            'required'  => 'Kolom NISN harus diisi.',
            'string'    => 'Kolom NISN harus berupa format string.',
            'unique'    => 'NISN sudah terpakai.',
        ],

        'nik'           => [
            'required'  => 'Kolom NIK harus diisi.',
            'string'    => 'Kolom NIK harus berupa format string.',
            'unique'    => 'NIK sudah terpakai.',
        ],

        'id_kelas'      => [
            'required'  => 'Kolom KELAS harus diisi.',
        ],

        'jenis_kelamin' => [
            'required'  => 'Kolom JENIS KELAMIN harus diisi.',
            'in'        => 'Kolom JENIS KELAMIN harus diisi L atau P.',
        ],

        'tempat_lahir'  => [
            'required'  => 'Kolom TEMPAT LAHIR harus diisi.',
            'string'    => 'Kolom TEMPAT LAHIR harus berupa format string.',
        ],

        'tanggal_lahir' => [
            'required'  => 'Kolom TANGGAL LAHIR harus diisi.',
            'date'      => 'Kolom TEMPAT LAHIR harus berupa format tanggal.',
        ],

        'agama'         => [
            'required'  => 'Kolom AGAMA harus diisi.',
            'string'    => 'Kolom AGAMA harus berupa format string.',
        ],

        'kebutuhan_khusus' => [
            'required'  => 'Kolom KEBUTUHAN KHUSUS harus diisi.',
            'string'    => 'Kolom KEBUTUHAN KHUSUS harus berupa format string.',
        ],


        'alamat'        => [
            'required'  => 'Kolom ALAMAT harus diisi.',
        ],

        'jenis_tinggal' => [
            'required'  => 'Kolom JENIS TINGGAL harus diisi.',
            'string'    => 'Kolom JENIS TINGGAL harus berupa format string.',
        ],

        'alat_transportasi'  => [
            'required'  => 'Kolom ALAT TRANSPORTASI harus diisi.',
            'string'    => 'Kolom ALAT TRANSPORTASI harus berupa format string.',
        ],

        'nomor_telepon' => [
            'required'  => 'Kolom NOMOR TELEPON harus diisi.',
        ],
        
        'email'         => [
            'required'  => 'Kolom EMAIL harus diisi.',
            'email'     => 'Kolom EMAIL harus berupa format email.',
            'max'       => 'Email Maksimum 100 karakter.',
            'unique'    => 'Email sudah terdaftar.',
        ],

        'nomor_kps'     => [
            'required'  => 'Kolom NOMOR KPS harus diisi.',
            'string'    => 'Kolom NOMOR KPS harus berupa format string.',
        ],

        'nama_ayah'     => [
            'required'  => 'Kolom NAMA AYAH harus diisi.',
            'string'    => 'Kolom NAMA AYAH harus berupa format string.',
        ],

        'nama_ibu'      => [
            'required'  => 'Kolom NAMA IBU harus diisi.',
            'string'    => 'Kolom NAMA IBU harus berupa format string.',
        ],

        'pend_ayah'     => [
            'required'  => 'Kolom PENDIDIKAN AYAH harus diisi.',
            'string'    => 'Kolom PENDIDIKAN AYAH harus berupa format string.',
        ],

        'pend_ibu'      => [
            'required'  => 'Kolom PENDIDIKAN IBU harus diisi.',
            'string'    => 'Kolom PENDIDIKAN IBU harus berupa format string.',
        ],

        'penghasilan_ayah' => [
            'required'  => 'Kolom PENGHASILAN AYAH harus diisi.',
        ],

        'penghasilan_ibu' => [
            'required'  => 'Kolom PENGHASILAN IBU  harus diisi.',
        ],
        'foto'          => [
            'image'     => 'Kolom FOTO hanya boleh berisi file gambar.',
            'max'       => 'Kolom FOTO tidak boleh lebih dari 500 KB.',
            'mimes'     => 'Kolom FOTO hanya boleh berisi file *.jpg, *.jpeg, *.bmp, *.png.',
        ],
        'nama_kelas'    => [
            'required'  => 'Nama Kelas harus diisi.',
            'string'    => 'Nama Kelas harus string.',
            'max'       => 'Nama Kelas Maksimum 20 karakter.',
        ],
        'password'      => [
            'confirmed' => 'Password tidak cocok dengan kolom konfirmasi password.',
            'min'       => 'Password minimal 6 karakter',
        ],

        'level' => [
            'required'  => 'Kolom LEVEL harus diisi.',
            'in'        => 'Kolom LEVEL harus diisi Operator atau Guru.',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
