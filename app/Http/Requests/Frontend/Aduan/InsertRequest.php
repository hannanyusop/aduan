<?php

namespace App\Http\Requests\Frontend\Aduan;

use Illuminate\Foundation\Http\FormRequest;


class InsertRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'ic_no' => 'required|min:12|numeric',
            'phone' => 'required_without:email,min:10',
            'email' => 'email',
            'race' => 'required',
            'nation' => 'required',
            'address' => 'required',
            'subject' => 'required|min:3',
            'message' => 'required|min:10',
            'agree' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Sila masukan nama.',
            'name.min' => 'Sila masukan sekurang-kurangnya 3 huruf.',
            'ic_no.min' => 'Sila masukan  12 digit nombor MyKad anda.',
            'ic_no.required' => 'Sila masukan nombor MyKad.',
            'phone.min' => 'Sila masukan sekurang-kurangnya 10 nombor.',
            'email.email' => 'Format email tidak sah.',
            'phone.required_without' => 'Sila masukan sekurang-kurangnya emel atau nombor telefon.',
            'race.required' => 'Sila pilih kaum.',
            'nation.required' => 'Sila pilih warga negara.',
            'address.required' => 'Sila masukan alamat.',
            'subject.required' => 'Sila masukan tajuk aduan.',
            'subject.min' => 'Sila masukan sekurang-kurangnya 3 huruf.',
            'message.required' => 'Sila masukan aduan.',
            'message.min' => 'Sila masukan sekurang-kurangnya 10 huruf.',
            'agree.required' => 'Sila tandakan ini',

        ];
    }
}
