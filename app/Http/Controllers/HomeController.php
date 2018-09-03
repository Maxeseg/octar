<?php

namespace App\Http\Controllers;

use App\Arm;
use App\Blinding;
use App\Category;
use App\EndPoint;
use App\Keyword;
use App\RelevantFigure;
use App\Result;
use App\StudyType;
use App\SubCategory;
use App\Trails;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trails = Trails::paginate(8);
        return view('home',compact('trails'));
    }

    public function show($id)
    {
        $trail = Trails::find($id);
        return view('show',compact('trail'));
    }

    public function create()
    {
        $nb = Carbon::now()->timestamp;
        $categories = Category::orderBy('name','asc')->get();
        $subcategories = SubCategory::all();
        $endpoints = EndPoint::all();
        $blinding = Blinding::all();
        $study_types = StudyType::all();

        return view('create',compact('nb','categories','subcategories','endpoints','blinding','study_types'));
    }

    public function store(Request $request)
    {


        $trail = new Trails;
        $trail->user_id = auth()->user()->id;
        $trail->name = $request->name;
        $trail->acronym = $request->acronym;
        $trail->authors = $request->authors;
        $trail->publication_year = $request->year;
        $trail->nb = $request->nb;
        $trail->octar_nb = $request->octar_nb;
        $trail->category = Category::find($request->category)->name;
        if($request->sub_category == 'non'){
            $trail->sub_category = '';
        }
        else{
            $trail->sub_category = SubCategory::find($request->sub_category)->name;
        }
        $trail->blinding = $request->blinding;
        $trail->patient_profile = $request->patient_profile;
        $trail->description = $request->description;
        $trail->cross_over = $request->cross_over;
        $trail->Second_randomization = $request->randomization;
        $trail->previous_lines = $request->previous_lines;
        $trail->points_of_criticism = $request->points_of_criticism;
        $trail->link_to_text = $request->link_to_text;
        $trail->save();


        $trail->study_types()->sync($request->study_type,false);

        for ($i=0;$i<sizeof($request->endpoint_type);$i++){
            $arm = new Result;
            $arm->trail_id = $trail->id;
            $arm->endpoint_type = $request->endpoint_type[$i];
            $arm->endpoint_result = $request->endpoint_result[$i];
            $arm->statistical_significance = $request->statistical_significance[$i];
            $arm->save();
        }


        for ($i=0;$i<sizeof($request->arm_nb);$i++){
            $arm = new Arm;
            $arm->trials_id = $trail->id;
            $arm->nb = $request->arm_nb[$i];
            $arm->name = $request->arm_name[$i];
            $arm->description = $request->arm_description[$i];
            $arm->save();
        }

        for ($i=0;$i<sizeof($request->figure_description);$i++){
            $figure = new RelevantFigure;
            $figure->trials_id = $trail->id;
            $figure->link = $request->figure_link[$i];
            $figure->description = $request->figure_description[$i];
            $figure->save();
        }
        
        if($request->keywords){
            for ($i=0;$i<sizeof($request->keywords);$i++){
                $keyword = new Keyword;
                $keyword->trials_id = $trail->id;
                $keyword->name = $request->keywords[$i];
                $keyword->save();
            }    
        }
        
        Session::flash('success','Trial Added Successfully');
        return redirect(route('home'));

    }

    public function edit($id)
    {
        $trail = Trails::find($id);
        $categories = Category::orderBy('name','asc')->get();
        $subcategories = SubCategory::all();
        $endpoints = EndPoint::all();
        $blinding = Blinding::all();
        $study_types = StudyType::all();

        return view('edit',compact('trail','categories','subcategories','endpoints','blinding','study_types'));
    }

    public function update(Request $request,$id)
    {

        $trail = Trails::find($id);
        $trail->user_id = auth()->user()->id;
        $trail->name = $request->name;
        $trail->acronym = $request->acronym;
        $trail->authors = $request->authors;
        $trail->publication_year = $request->year;
        $trail->nb = $request->nb;
        $trail->octar_nb = $request->octar_nb;
        if($request->sub_category == 'non'){
            $trail->sub_category = '';
        }
        else{
            $trail->sub_category = SubCategory::find($request->sub_category)->name;
        }
        $trail->blinding = $request->blinding;
        $trail->patient_profile = $request->patient_profile;
        $trail->description = $request->description;
        $trail->cross_over = $request->cross_over;
        $trail->Second_randomization = $request->randomization;
        $trail->previous_lines = $request->previous_lines;
        $trail->points_of_criticism = $request->points_of_criticism;
        $trail->link_to_text = $request->link_to_text;
        $trail->save();


        for ($i=0;$i<count($trail->arms);$i++){
            Arm::destroy($trail->arms[$i]->id);
        }

        for ($i=0;$i<count($trail->results);$i++){
            Result::destroy($trail->results[$i]->id);
        }

        for ($i=0;$i<count($trail->figures);$i++){
            RelevantFigure::destroy($trail->figures[$i]->id);
        }

        for ($i=0;$i<count($trail->keywords);$i++){
            Keyword::destroy($trail->keywords[$i]->id);
        }


        $trail->study_types()->sync($request->study_type,false);


        for ($i=0;$i<sizeof($request->endpoint_type);$i++){
            $arm = new Result;
            $arm->trail_id = $trail->id;
            $arm->endpoint_type = $request->endpoint_type[$i];
            $arm->endpoint_result = $request->endpoint_result[$i];
            $arm->statistical_significance = $request->statistical_significance[$i];
            $arm->save();
        }

        for ($i=0;$i<sizeof($request->arm_nb);$i++){
            $arm = new Arm;
            $arm->trials_id = $trail->id;
            $arm->nb = $request->arm_nb[$i];
            $arm->name = $request->arm_name[$i];
            $arm->description = $request->arm_description[$i];
            $arm->save();
        }

        for ($i=0;$i<sizeof($request->figure_description);$i++){
            $figure = new RelevantFigure;
            $figure->trials_id = $trail->id;
            $figure->link = $request->figure_link[$i];
            $figure->description = $request->figure_description[$i];
            $figure->save();
        }

        if($request->keywords){
            for ($i=0;$i<sizeof($request->keywords);$i++){
                $keyword = new Keyword;
                $keyword->trials_id = $trail->id;
                $keyword->name = $request->keywords[$i];
                $keyword->save();
            }    
        }
        Session::flash('success','Trial Updated Successfully');
        return redirect(route('home'));
    }

    public function delete($id)
    {
//        dd($id);
        Trails::destroy($id);
        Session::flash('success','Trial Deleted Successfully');
        return redirect()->back();
    }


}
