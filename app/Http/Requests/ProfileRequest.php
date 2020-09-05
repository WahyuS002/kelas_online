<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'foto' => 'required',
            'name' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'prov_id' => 'required',
            'kota_id' => 'required',
            'kec_id' => 'required',
            'kel_id' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'pendidikan_terakhir' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'prov_id.required' => 'Provinsi harus diisi',
            'kota_id.required' => 'Kota/Kabupaten harus diisi',
            'kec_id.required' => 'Kecamatan harus diisi',
            'kel_id.required' => 'Kelurahan harus diisi',
        ];
    }
}
