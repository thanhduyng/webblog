<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Menu;
use App\Models\NewCategory;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use NewCategorys;

use function GuzzleHttp\Promise\all;

class PageHomeController extends Controller
{
    function home()
    {
        $slide = DB::table('slides')
            ->where('status', 1)
            ->where('deleted_at', null)
            ->get();
        $aboutMe = About::all();
        $newCategory = DB::table('new_categorys')
            ->where('status', 1)
            ->where('deleted_at', null)
            ->orderBy('created_at', 'asc')
            ->get()->take(9);
        $new = DB::table('news')
            ->where('status', 1)
            ->where('deleted_at', null)
            ->orderBy('created_at', 'DESC')
            ->get()->take(6);
        return view('home.index', compact('slide', 'aboutMe', 'newCategory', 'new'));
    }

    public function allPostNew()
    {
        $aboutMe = About::all();
        $allNewPost = DB::table('news as n')
            ->where('n.status', 1)
            ->where('n.deleted_at', null)
            ->join('new_categorys as nc', 'nc.id', '=', 'n.id_category_new')
            ->select('n.id','n.id_category_new', 'nc.name as namecategory', 'n.name', 'n.background_image', 'n.created_at','n.status','n.deleted_at')
            ->orderBy('created_at', 'DESC')
            ->get();
        // dd($allNewPost);
        return view('home.allNewPost', compact('aboutMe', 'allNewPost'));
    }

    public function allCategory()
    {
        $aboutMe = About::all();
        $allCategory = NewCategory::all();
        // dd($allCategory);
        return view('home.allCategory', compact('aboutMe', 'allCategory'));
    }

    public function allDetailNew ($id)
    {
        $aboutMe = About::all();
        $allDetailNew = DB::table('news')
            ->join('image_news', 'image_news.id_new', '=', 'news.id')
            ->where('news.id', $id)
            ->select('news.id','news.id_category_new', 'image_news.image', 'image_news.id_new', 'news.name', 'news.background_image', 'news.created_at','news.status')
            ->orderBy('news.created_at', 'DESC')
            ->get();
        // dd($allDetailNew);  
        return view('home.allDetailNew', compact('aboutMe', 'allDetailNew'));
    }

    public function allNewCategory($id)
    {
        $aboutMe = About::all();
        $category = DB::table('news as n')
            ->join('new_categorys as nc', 'nc.id', '=', 'n.id_category_new')
            ->where('n.status', 1)
            ->where('n.deleted_at', null)
            ->where('n.id_category_new', $id)
            ->select('n.id','n.id_category_new', 'nc.name as namecategory', 'n.name', 'n.background_image', 'n.created_at','n.status','n.deleted_at')
            ->orderBy('created_at', 'DESC')
            ->get();
        if (count($category) < 1) {
            return redirect('/');
        } else {
            return view('home.allNewCategory', compact('category', 'aboutMe'));
        }
    }
}
