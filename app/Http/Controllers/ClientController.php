<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Client;

class ClientController extends Controller
{    
            
    /**
     * all
     * 
     * return all clients by name
     *
     * @param  mixed $search
     * @param  mixed $category
     * @return void
     */
    public function all(Request $request){
        $data = $request->only(['search','category']);
        $client = new Client;
        $validator = $this->validator($data);
        if($validator->fails() == false){
            if($data['category'] == 0){
                return $client->getAll($data['search']);
            }else{
                return $client->getByCategory($data['search'],$data['category']);
            }
       }     
    }    
    /**
     * get
     *
     * return a specified client
     * 
     * @param  mixed $request
     * @return void
     */
    public function get($id){
        $client = new Client;
        return $client->get($id);
    }    
    /**
     * update
     *
     * update a specified client
     * 
     * @param  mixed $request
     * @return void
     */
    public function update(Request $request){
        $data = $request->only(['id','name','phone','id_category']);
        $client = new Client;
        $client->updateClient($data);
        return 'Cliente atualizado com sucesso!';
    }    
    /**
     * delete
     * 
     * delete a specified client
     *
     * @param  mixed $request
     * @return void
     */
    public function delete($id){
        $client = new Client;
        $client->deleteClient($id);
        return 'Cliente excluído com sucesso!';
    }    
    /**
     * create
     *
     * create a client
     * 
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request){
        $data = $request->only(['name','phone','id_category']);
        $client = new Client;
        $client->createClient($data);
        return 'Cliente criado com sucesso!';
    }
    
    protected function validator(array $data){
        return Validator::make($data,[
            'search' => ['string','nullable'],
            'category' => ['numeric','required']
        ]);
    }
}
