<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
          
            if ($user = auth()->user()) {
                $users = DB::table('users')
                    ->where('id', $user->id)
                    ->get();
            } else {
                exit;
            }
            if ($users[0]->leve != 1) {
                exit;
            }
            return $next($request);
        });
    }

    public function ListOfUser()
    {
        $data = DB::table("users")
            ->get();
        return view('admin.User.ListOfUser', ["data" => $data]);
    }

    public function CreateUser(Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = User::find($id);
        } else {
            $data = new User();
        }
        return view('admin.User.CreateUser', ["data" => $data]);
    }

    public function InsertUser(UserRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->leve = $request->leve;
            $data->save();
        } else {
            $data  = new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->save();
        }
        return redirect()->route('ListOfUser')->with('message', 'Lưu thành công');
    }

    public function DeleteUser($id)
    {
        $data = DB::table('users')->delete($id);
        return redirect()->route('ListOfUser')->with('message', 'Xóa thành công');
    }
}
