<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name','phone','id_category'];    
    /**
     * getAll
     *
     * return all clients
     * 
     * @return void
     */
    public function getAll($search){
        return $this::join('clientcategories','clientcategories.id','=','clients.id_category')->where('name','LIKE',"%{$search}%")->select('clients.id','clients.name','clients.phone','clientcategories.category')->orderBy('clients.name')->get();
    }
    public function getByCategory($search,$category){
        return $this::join('clientcategories','clientcategories.id','=','clients.id_category')->where('clients.name','LIKE',"%{$search}%")->where('clients.id_category',$category)->select('clients.id','clients.name','clients.phone','clientcategories.category')->orderBy('clients.name')->get();
    }
    /**
     * get
     * 
     * return a specified client
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id){
        return $this::join('clientcategories','clientcategories.id','=','clients.id_category')->where('clients.id',$id)->select('clients.id','clients.name','clients.phone','clientcategories.category')->first();
    }    
    /**
     * updateClient
     *
     * update a specified client
     * 
     * @param  mixed $data
     * @return void
     */
    public function updateClient(array $data){
        $this::where('id',$data['id'])->update(['name'=>$data['name'],'phone'=>$data['phone'],'id_category'=>$data['id_category']]);
    }    
    /**
     * deleteClient
     * 
     * delete a specified cleint
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteClient($id){
        $this::where('id',$id)->delete();
    }
    public function createClient($data){
        $this::create(['name'=>$data['name'],'phone'=>$data['phone'],'id_category'=>$data['id_category']]);
    }
}
