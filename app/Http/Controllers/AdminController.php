<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminRequest;
use App\Repository\Interfaces\AdminRepositoryInterfaces;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth/admin-login');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function loginrequest(AdminRequest $request, AdminRepositoryInterfaces $interfaces)
    {


        $Admin = $interfaces->all($request->all());
        if ($Admin) {

            if (Hash::check($request->AdminPassword, $Admin->password)) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }

    }
    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
