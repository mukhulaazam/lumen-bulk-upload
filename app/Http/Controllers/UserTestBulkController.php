<?php

namespace App\Http\Controllers;

use App\Models\UserTestBulk;
use Illuminate\Http\Request;
use App\Imports\bulkUploadImport;
use Maatwebsite\Excel\Facades\Excel;

class UserTestBulkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testing = 11;

        if ($request->hasFile('file')) {
            $path = $request->file('file');
            Excel::import(new bulkUploadImport($testing), request()->file('file'));

            // $data = Excel::import(new bulkUploadImport($request->program_id), $path);
        }
        // return response()->json(['success' => 'You have successfully upload file.', 'data' => $request->all()]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTestBulk  $userTestBulk
     * @return \Illuminate\Http\Response
     */
    public function show(UserTestBulk $userTestBulk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTestBulk  $userTestBulk
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTestBulk $userTestBulk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserTestBulk  $userTestBulk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTestBulk $userTestBulk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTestBulk  $userTestBulk
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTestBulk $userTestBulk)
    {
        //
    }
}
