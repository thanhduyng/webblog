<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCategoryRequest;
use App\Models\NewCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewCategoryManagementController extends Controller
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

    public function ListOfNewCategory()
    {
        $data = DB::table("new_categorys")
            ->get();
        return view('admin.NewCategory.ListOfNewCategory', ["data" => $data]);
    }

    public function CreateNewCategory(Request $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = NewCategory::find($id);
        } else {
            $data = new NewCategory();
        }
        return view('admin.NewCategory.CreateNewCategory', ["data" => $data]);
    }

    public function InsertNewCategory(NewCategoryRequest $request)
    {
        $id = $request->id;
        if ($id > 0) {
            $data = NewCategory::find($id);
            $data->name = $request->name;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/newCategory/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        } else {
            $data  = new NewCategory();
            $data->name = $request->name;
            $data->status = $request->status;
            $data->image = $request->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('upload/newCategory/', $filename);
                $data->image = $filename;
                $data->save();
            } else {
                echo "chưa có file";
            }
            $data->save();
        }
        return redirect()->route('ListOfNewCategory')->with('message', 'Lưu thành công');
    }

    public function DeleteNewCategory($id)
    {
        $data = DB::table('new_categorys')->delete($id);
        return redirect()->route('ListOfNewCategory')->with('message', 'Xóa thành công');
    }
}
