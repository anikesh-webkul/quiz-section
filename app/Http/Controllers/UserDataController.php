<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\UserModel;
use App\Models\createForm;

class UserDataController extends Controller
{
    protected $usermodel;
    protected $createform;
    public function __construct(UserModel $usermodel, createForm $createform)
    {
          $this->usermodel= $usermodel;
          $this->createform= $createform;
         
 
       
    }
    public function userdataentry(Request $req)
    {
        $req->validate([
            'form_id' => 'required',
            'name' => 'required'
            
        ]);

        //print_r($req->all());
        UserModel::create($req->all());
     
        
    }

    public function createForm()
    {
        $data=   $this->createform::all(); 
    
        return view('createFormView',['data'=>$data]);  
    }
}
