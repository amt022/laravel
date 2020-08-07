<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Student;
use Illuminate\Http\Request;

class Hellocontroller extends Controller {
  public function index(Request $request){
    echo $request->name;

     echo $request->get('name','Name not entered');
     //dd($request->name);
     dd($request->all());
  }

}

?>