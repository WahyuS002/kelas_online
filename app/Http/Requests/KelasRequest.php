<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelasRequest extends FormRequest
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
            'nama_kelas' => 'required',
            'jenjang' => 'required',
            'level' => 'required',
            'harga' => 'required',
            'durasi_kelas' => 'required|min:1|max:12',
            'kapasitas_kelas' => 'required',
            'kategori_id' => 'required',
            'video_preview' => 'required',
            'thumbnail' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'durasi_kelas.required' => 'Durasi harus diisi',
            'kapasitas_kelas.required' => 'Kapasitas harus diisi atau 0',
            'kategori_id.required' => 'Kategori harus diisi',
            'video_preview.required' => 'Video harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ];
    }
}
