<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Aduan\InsertRequest;
use App\Models\Auth\Report;


class AduanController extends Controller{

    public function index(){

        $nationals = array(
            'Afghan',
            'Albanian',
            'Algerian',
            'American',
            'Andorran',
            'Angolan',
            'Antiguans',
            'Argentinean',
            'Armenian',
            'Australian',
            'Austrian',
            'Azerbaijani',
            'Bahamian',
            'Bahraini',
            'Bangladeshi',
            'Barbadian',
            'Barbudans',
            'Batswana',
            'Belarusian',
            'Belgian',
            'Belizean',
            'Beninese',
            'Bhutanese',
            'Bolivian',
            'Bosnian',
            'Brazilian',
            'British',
            'Bruneian',
            'Bulgarian',
            'Burkinabe',
            'Burmese',
            'Burundian',
            'Cambodian',
            'Cameroonian',
            'Canadian',
            'Cape Verdean',
            'Central African',
            'Chadian',
            'Chilean',
            'Chinese',
            'Colombian',
            'Comoran',
            'Congolese',
            'Costa Rican',
            'Croatian',
            'Cuban',
            'Cypriot',
            'Czech',
            'Danish',
            'Djibouti',
            'Dominican',
            'Dutch',
            'East Timorese',
            'Ecuadorean',
            'Egyptian',
            'Emirian',
            'Equatorial Guinean',
            'Eritrean',
            'Estonian',
            'Ethiopian',
            'Fijian',
            'Filipino',
            'Finnish',
            'French',
            'Gabonese',
            'Gambian',
            'Georgian',
            'German',
            'Ghanaian',
            'Greek',
            'Grenadian',
            'Guatemalan',
            'Guinea-Bissauan',
            'Guinean',
            'Guyanese',
            'Haitian',
            'Herzegovinian',
            'Honduran',
            'Hungarian',
            'I-Kiribati',
            'Icelander',
            'Indian',
            'Indonesian',
            'Iranian',
            'Iraqi',
            'Irish',
            'Israeli',
            'Italian',
            'Ivorian',
            'Jamaican',
            'Japanese',
            'Jordanian',
            'Kazakhstani',
            'Kenyan',
            'Kittian and Nevisian',
            'Kuwaiti',
            'Kyrgyz',
            'Laotian',
            'Latvian',
            'Lebanese',
            'Liberian',
            'Libyan',
            'Liechtensteiner',
            'Lithuanian',
            'Luxembourger',
            'Macedonian',
            'Malagasy',
            'Malawian',
            'Malaysian',
            'Maldivan',
            'Malian',
            'Maltese',
            'Marshallese',
            'Mauritanian',
            'Mauritian',
            'Mexican',
            'Micronesian',
            'Moldovan',
            'Monacan',
            'Mongolian',
            'Moroccan',
            'Mosotho',
            'Motswana',
            'Mozambican',
            'Namibian',
            'Nauruan',
            'Nepalese',
            'New Zealander',
            'Nicaraguan',
            'Nigerian',
            'Nigerien',
            'North Korean',
            'Northern Irish',
            'Norwegian',
            'Omani',
            'Pakistani',
            'Palauan',
            'Panamanian',
            'Papua New Guinean',
            'Paraguayan',
            'Peruvian',
            'Polish',
            'Portuguese',
            'Qatari',
            'Romanian',
            'Russian',
            'Rwandan',
            'Saint Lucian',
            'Salvadoran',
            'Samoan',
            'San Marinese',
            'Sao Tomean',
            'Saudi',
            'Scottish',
            'Senegalese',
            'Serbian',
            'Seychellois',
            'Sierra Leonean',
            'Singaporean',
            'Slovakian',
            'Slovenian',
            'Solomon Islander',
            'Somali',
            'South African',
            'South Korean',
            'Spanish',
            'Sri Lankan',
            'Sudanese',
            'Surinamer',
            'Swazi',
            'Swedish',
            'Swiss',
            'Syrian',
            'Taiwanese',
            'Tajik',
            'Tanzanian',
            'Thai',
            'Togolese',
            'Tongan',
            'Trinidadian/Tobagonian',
            'Tunisian',
            'Turkish',
            'Tuvaluan',
            'Ugandan',
            'Ukrainian',
            'Uruguayan',
            'Uzbekistani',
            'Venezuelan',
            'Vietnamese',
            'Welsh',
            'Yemenite',
            'Zambian',
            'Zimbabwean'
        );


        $races = array('Melayu', 'Cina', 'India', 'Bumiputra', 'Lain-lain');

        return view('frontend.aduan.index', compact('nationals', 'races'));
    }

    public function insert(InsertRequest $request){

        $report = new Report();

        $report->email = $request->email;
        $report->name = $request->name;
        $report->ic_no = $request->ic_no;
        $report->phone = $request->phone;
        $report->race = $request->race;
        $report->nation = $request->nation;
        $report->subject = $request->subject;
        $report->message = $request->message;
        $report->address = $request->address;
        
        if($report->save()){
            return redirect()->back()->withFlashSuccess('Aduan berjaya dihantar.');
        }else{
            return redirect()->back()->withFlashDanger('Aduan gagal dihantar!');
        }


    }
}

?>