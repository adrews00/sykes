<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormSearchRequest;

class SearchController extends Controller
{
    public function index(){
        return view('search.index');
    }
    public function show(FormSearchRequest $request){
        $search =  \App\Property::with('bookings','location');
        
        if(request()->location != ''){
            $search->whereHas('location',function($b){
                $b->where('location_name','like','%'.request()->location.'%');
            });
        }
        if(request()->nearbeach != ''){
            $search->where('near_beach','=',request()->nearbeach);
        }
        if(request()->pets != ''){
            $search->where('accepet_pets','=',request()->pets);
        }
        if(request()->beds != ''){
            $search->where('beds','>=',request()->beds);
        }
        if(request()->sleeps != ''){
            $search->where('sleeps','>=',request()->sleeps);
        }
        if(request()->checkin != '' AND request()->checkout != ''){
            $search->where(function($a){
                $a->doesntHave('bookings')->orwhereHas('bookings',function($query){
                    $query->whereNotIn('_fk_property', function($q){
                        $q->select('_fk_property')
                        ->from('bookings')
                        ->whereRaw(' "'.request()->checkin.'" BETWEEN start_date AND end_date OR "'.request()->checkout.'" BETWEEN start_date AND end_date');
                    });
                });
            });
        }
        //$sql = $search->toSql();
        //return $sql;
        $properties = $search->paginate(6);
        //return $properties;
        return view('search.show', compact('properties'));
    }
}
