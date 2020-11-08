<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Clientcategorie;

class HomeController extends Controller
{
    public function index(){
        $categories = new Clientcategorie;
        $categories = $categories->getAll();
        return view('home',['categories'=>$categories]);
    }    
    /**
     * search
     *
     * get clients informations using api
     * 
     * @param  mixed $request
     * @return void
     */
    public function search(Request $request){        
        $data = $request->only(['search','category']);
        $params = ['search'=>$data['search'],'category'=>$data['category']];
        $url = route('api.clients');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS , $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        $response = curl_exec ($ch);
        curl_close ($ch);
        return response()->json($response);        
    }
}
