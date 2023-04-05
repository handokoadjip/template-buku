<?php

namespace App\Http\Requests\Backoffice;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        return [
            'mahasiswa_nama' => ['required', 'string'],
            'mahasiswa_nim' => ['required', 'string', 'numeric'],
            'mahasiswa_alamat' => ['required', 'string'],
            'mahasiswa_email' => ['required', 'string', 'email'],
            'mahasiswa_no_telepon' => ['required', 'string', 'numeric'],
            'mahasiswa_jenis_kelamin' => ['required', 'string'],
            'mahasiswa_umur' => ['required', 'string', 'numeric'],
        ];
    }

    public function messages()
    {
        return [
            'mahasiswa_nama.required' => 'Nama Mahasiswa tidak boleh kosong',
            'mahasiswa_nim.required' => 'NIM tidak boleh kosong',
            'mahasiswa_nim.numeric' => 'NIM Harus Angka',
            'mahasiswa_alamat.required' => 'Alamat tidak boleh kosong',
            'mahasiswa_email.required' => 'Email tidak boleh kosong',
            'mahasiswa_email.email' => 'format email tidak sesuai',
            'mahasiswa_no_telepon.required' => 'No.Telepon tidak boleh kosong',
            'mahasiswa_no_telepon.numeric' => 'No.Telepon harus angka',
            'mahasiswa_jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'mahasiswa_umur.required' => 'Umur tidak boleh kosong',
            'mahasiswa_umur.numeric' => 'Umur Harus Angka',
        ];
    }
}
