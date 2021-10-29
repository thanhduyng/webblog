<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlideRequest;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlideManagementController extends Controller
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

    public function ListOfSlide()
    {
        $data = DB::table("slides")
            ->get();
        return view('admin.Slide.ListOfSlide', ["data" => $data]);
    }

    public function CreateSlide(Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = Slide::find($id);
        } else {
            $data = new slide();
        }
        return view('admin.Slide.CreateSlide', ["data" => $data]);
    }

    public function InsertSlide(SlideRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = slide::find($id);
            $data->name = $request->name;
            $data->sort_desc = $request->sort_desc;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/slides/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        } else {
            $data  = new slide();
            $data->name = $request->name;
            $data->sort_desc = $request->sort_desc;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/slides/', $filename);
                $data->image = $filename;
                $data->save();  
            } else {
                echo "chưa có file";
            }
            $data->save();
        }
        return redirect()->route('ListOfSlide')->with('message', 'Lưu thành công');
    }

    public function DeleteSlide($id)
    {
        $data = DB::table('slides')->delete($id);
        return redirect()->route('ListOfSlide')->with('message', 'Xóa thành công');
    }
}
