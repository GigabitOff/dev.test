<?php

namespace App\Http\Controllers;


use DB;
use App\Employee;
use App\Http\Requests;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class ProjectsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
public function index(){

    $projects = DB::table('projects')->get();
    return view('projects.index',compact('projects'));
}

public function create(){


    return view('projects.create');
}

    public function store(){



$sql = 'INSERT INTO projects (id,title) VALUES (?,?)';
$data1 = array('1','2');
        DB::insert($sql,$data1);
return request('title');
    }

}
