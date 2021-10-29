<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutManagementController extends Controller
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

    public function ListOfAbout()
    {
        $data = DB::table("abouts")
            ->get();
        return view('admin.About.ListOfAbout', ["data" => $data]);
    }

    public function CreateAbout(Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = About::find($id);
        } else {
            $data = new About();
        }
        return view('admin.About.CreateAbout', ["data" => $data]);
    }

    public function InsertAbout(AboutRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = About::find($id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->facebook_link = $request->facebook_link;
            $data->instagram_link = $request->instagram_link;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/abouts/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        } else {
            $data  = new About();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->facebook_link = $request->facebook_link;
            $data->instagram_link = $request->instagram_link;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/abouts/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        }
        return redirect()->route('ListOfAbout')->with('message', 'Lưu thành công');
    }

    public function DeleteAbout($id)
    {
        $data = DB::table('abouts')->delete($id);
        return redirect()->route('ListOfAbout')->with('message', 'Xóa thành công');
    }
}
