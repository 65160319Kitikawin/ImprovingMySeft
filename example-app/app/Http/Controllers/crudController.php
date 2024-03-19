<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crudModel;
use Illuminate\Support\Facades\Redirect;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = crudModel::all();
        return view('Final Test.crud', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Final Test.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stu_student_id = $request->input('studentId');
        $stu_name = $request->input('Name');
        $stu_phone = $request->input('Phone');

        $crudModel = new crudModel();

        $crudModel -> stu_student_id = $stu_student_id;
        $crudModel -> stu_name = $stu_name;
        $crudModel -> stu_phone = $stu_phone;

        $crudModel -> save();

        $data['students'] = crudModel::all();
        return view('Final Test.crud', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
