<?php
namespace App\Repository;
use App\Models\Admin;
use App\Repository\Interfaces\AdminRepositoryInterfaces;

class AdminRepository implements AdminRepositoryInterfaces{

    public function all($request){
        return Admin::where('email', '=', $request['AdminEmail'])->first();
    }

}
