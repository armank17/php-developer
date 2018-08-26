<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WebServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $per_page = $request->input('per_page'); 
       $salary_start = $request->input('salary_start');
       $salary_end = $request->input('salary_end');
       
       $per_page = isset($per_page) ? ($per_page) : (10);
       $salary_start = isset($salary_start) ? ($salary_start) : (0);
       $salary_end  = isset($salary_end) ? ($salary_end) : (0);
       
       $users = User::where('salary', '>=', $salary_start)->where('salary', '<=', $salary_end)->paginate($per_page);
       
        foreach ($users as $user) {
            $user->skills = unserialize($user->skills);
        }
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
