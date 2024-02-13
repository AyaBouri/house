<?php
namespace App\Http\Controllers;
use App\Http\Requests\SearchOptionRequest;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class OptionController extends Controller
{
    public function index(SearchOptionRequest $request){
        //$query=Option::paginate(16);
        /*if($nom=$request->validated('nom')){
            $query=$query->where('nom','like',"%{$nom}%");
        }
        return view('property.index',[
            'options'=>$query->paginate(16),
            'input'=>$request->validated()
        ]);*/
        /*$schools_lists = SchoolsList::where('user_id', Auth::user()->id)->latest()->paginate(25);
        return view('Admin.submit-information.all', compact('schools_lists '));*/
    }
    public function show(string $slug,Option $options){
        $expetedSlug=$options.getSlug();
        if($slug!=$expetedSlug){
            return to_route('option.show',['slug'=>$expetedSlug,'options'=>$options]);
        }
        return view('option.show',[
            'options'=>$options
        ]);
    }
}
