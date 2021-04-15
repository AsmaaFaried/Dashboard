<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
//    public function getOffers(){
//        return Offer::select('name','price')->get();
//    }
//    public function store(){
//        return Offer::create([
//            'name'=>'asmaa',
//            'price'=>'500',
//            'details'=>'old client and take offers 5% ',
//
//        ]);
//    }

    public function create()
    {
        return view('offers.create');
    }
//
//
    public function store(Request $request){
//        return $request;

        // validate data before insert to database

        $rules = $this->getRules();
        $messages = $this->getMessages();

        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
//            return $validator->errors()->first();
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        //insert

        Offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,

        ]);

//        return 'Saved Successfully';
        return redirect()->back()->with(['success'=>'تمت اضافه البيانات بنجاح']);

    }
    public function getRules(){
        return  $rules = [
            'name' => 'required | max:100 | unique:offers,name',
            'price' => 'required |numeric',
            'details' => 'required',
        ];

    }
    public function getMessages(){
        return $messages = [
            'name.required' => 'الاسم مطلوب',
            'name.unique' => 'الاسم موجود ادخل اسم اخر',
            'price.required' => 'السعر مطلوب',
            'price.numeric' => 'السعر يجب ان يكون رقم',
            'details.required' => 'التفاصيل مطلوبه',
        ];
    }
}
