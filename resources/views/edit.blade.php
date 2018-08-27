@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/')}}/css/bootstrap-select.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/fastselect.css">
@endsection

@section('title','Octar l New Trial')
@section('page_container','new1-page-container')
@section('page_content','page-content2')



@section('sidebar')
    <div class="page-sidebar2">
        <div class="new-bg">
            <h1>OCTAR</h1>
            <h3>WELCOME <span>{{ Auth::user()->name }}</span></h3>
            <div class="ofc-img">
                <img src="{{asset('assets/')}}/img/trial.png"  class="img-responsive">
            </div>
        </div>

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <h4><a href="#" class="lg-out"><i class="out"></i> Sign out</a></h4>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection



@section('content')
    <div class="container-fluid p-0">
        <a href="{{route('home')}}">
            <p class="trial-p"><i class="fa fa-home"></i> Back to Home</p>
        </a>
        <h3 class="trail-h">Update Your TRIAL</h3>
        <div class="row trials">

            <div class="col-md-11 col-sm-12 col-xs-12">

                <div class="formy clearfix">
                    <form class="card p-2" action="{{route('home.update',$trail->id)}}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Trial Name</label>
                                <input name="name" value="{{$trail->name}}" required class="form-control wdth" type="text" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Trial Acronym</label>
                                <input name="acronym" value="{{$trail->acronym}}" required class="form-control wdth" type="text" >
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 col-xs-12 rght">
                            <div class="form-group">
                                <label class="wdth1">Authors</label>
                                <input name="authors" value="{{$trail->authors}}" required class="form-control wdth2" type="text" >
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12 lft">
                            <div class="form-group">
                                <label class="wdth3">Year of publication</label>
                                <select required name="year" class="form-control slct wdth4">
                                    <option @if($trail->publication_year == 2015) selected @endif value="2015">2015</option>
                                    <option @if($trail->publication_year == 2016) selected @endif value="2016">2016</option>
                                    <option @if($trail->publication_year == 2017) selected @endif value="2017">2017</option>
                                    <option @if($trail->publication_year == 2018) selected @endif value="2018">2018</option>
                                    <option @if($trail->publication_year == 2019) selected @endif value="2019">2019</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 lft">
                            <div class="form-group">
                                <label>Trial Nb</label>
                                <input name="nb" value="{{$trail->nb}}" required class="form-control wdth" type="text" >
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 lft">
                            <div class="form-group">
                                <p>OCTAR Nb: {{$trail->octar_nb}}</p>
                                <input type="hidden" value="{{$trail->octar_nb}}" name="octar_nb" id="octar_nb">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Trial Category</label>
                                <select required name="category" class="form-control slct wdth">
                                    @foreach($categories as $category)
                                        <optgroup label="{{$category->name}}">
                                            @foreach($category->sub_categories as $sub_category)
                                                <option @if($trail->sub_category == $sub_category->name) selected @endif value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select required name="sub_category" class="form-control slct wdth">
                                    @foreach($subcategories as $subcategory)
                                        <option  value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Study type </label>
                                <select required name="study_type[]" id="maxOption2" class="selectpicker slct wdth form-control" multiple data-max-options="10">
                                    @foreach($study_types as $study_type)
                                        @php $count=0;@endphp
                                        @foreach($trail->study_types as $item)
                                            @if($item->id == $study_type->id)
                                                <option  selected  value="{{$study_type->id}}">{{$study_type->name}}</option>
                                                @php $count++ @endphp
                                                @break
                                            @endif
                                        @endforeach
                                        @if($count == 0)
                                            <option  value="{{$study_type->id}}">{{$study_type->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <h5>you can choose more than one</h5>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Blinding</label>
                                <select name="blinding" class="form-control slct wdth">
                                    @foreach($blinding as $item)
                                        <option @if($trail->blinding == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label>Patient profile</label>
                                <input name="patient_profile"  value="{{$trail->patient_profile}}" required class="form-control wdth" type="text" >
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group">
                                <label>Trial description</label>
                                <textarea name="description" required class="form-control wdth">{{$trail->description}}</textarea>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <label>Arms</label>
                                <div class="wdth">
                                <div data-role="dynamic-fields">
                                    @foreach($trail->arms as $arm)
                                        <div class="form-inline clearfix">
                                            <div class="rltv" >
                                                <input name="arm_nb[]" value="{{$arm->nb}}" required class="form-control wd100" type="text" placeholder="Arm Nb" >
                                                <input name="arm_name[]" value="{{$arm->name}}" required class="form-control wd100" type="text" placeholder="Arm Name" >
                                                <textarea name="arm_description[]"  required class="form-control wd100" placeholder="Description">{{$arm->description}}</textarea>
                                            </div>
                                            <div class="add">
                                                <button class="btn cancl" data-role="remove"><img src="{{asset('assets/')}}/img/minus.png"></button>
                                                <button class="btn adme" data-role="add"><img src="{{asset('assets/')}}/img/pluss.png"></button>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft pull-right">
                            <div class="form-group m-t-60">
                                <label id="lbl-wdth">Cross Over</label>
                                <div class="nw-wdth2">
                                    <label style="width:85px">
                                        @if($trail->cross_over == 'Yes')
                                            <input type="radio" checked name="cross_over" required value="Yes" id="randomization_0">
                                            Yes</label>
                                            <label style="width:85px">
                                                <input type="radio" name="cross_over"required value="No" id="randomization_1">
                                                No</label>
                                        @else
                                            <input type="radio" name="cross_over" required value="Yes" id="randomization_0">
                                            Yes</label>
                                            <label style="width:85px">
                                                <input type="radio" checked name="cross_over"required value="No" id="randomization_1">
                                                No</label>
                                        @endif
                                </div>

                                <label id="lbl-wdth"> Second randomization</label>
                                <div class="nw-wdth2">
                                    @if($trail->second_randomization == 'Yes')
                                        <label style="width:85px">
                                            <input type="radio" checked name="randomization" required value="Yes" id="randomization_0">
                                            Yes</label>
                                        <label style="width:85px">
                                            <input type="radio" name="randomization" required value="No" id="randomization_1">
                                            No</label>
                                    @else
                                        <label style="width:85px">
                                            <input type="radio" name="randomization" required value="Yes" id="randomization_0">
                                            Yes</label>
                                        <label style="width:85px">
                                            <input type="radio" checked name="randomization" required value="No" id="randomization_1">
                                            No</label>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <label>Results</label>
                            <div class="wdth">
                                <select name="endpoint_type" required class="form-control slct" style="width:100%; margin-bottom:5px">
                                    @foreach($endpoints as $endpoint)
                                        <option @if($trail->endpoint_type == $endpoint->id) selected @endif value="{{$endpoint->id}}">{{$endpoint->name}}</option>
                                    @endforeach
                                </select>

                                <input name="endpoint_result" value="{{$trail->endpoint_result}}" required class="form-control wd100" type="text" placeholder="Endpoint result" >
                                <div  class="form-group">
                                    <p>Statistical Significance</p>
                                </div>
                                <p class="text-center">
                                    @if($trail->statistical_significance == 'Significant')
                                        <label style="text-align:center; width:48%">
                                            <input type="radio" checked name="statistical_significance" value="Significant" id="randomization_0">
                                            Significant</label>
                                        <label style="text-align:center; width:48%">
                                            <input type="radio" name="statistical_significance" value="Non" id="randomization_1">
                                            Non</label>
                                    @else
                                        <label style="text-align:center; width:48%">
                                            <input type="radio" name="statistical_significance" value="Significant" id="randomization_0">
                                            Significant</label>
                                        <label style="text-align:center; width:48%">
                                            <input type="radio" checked name="statistical_significance" value="Non" id="randomization_1">
                                            Non</label>
                                    @endif

                                    <br>
                                </p>
                            </div>

                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 lft pull-right">
                            <div class="form-group">
                                <p style="text-align:left">Previous lines / after failure of</p>
                                <input value="{{$trail->previous_lines}}" name="previous_lines" required class="form-control " type="text" >
                                <p style="text-align:left">Points of criticism</p>
                                <input value="{{$trail->points_of_criticism}}" name="points_of_criticism" required class="form-control " type="text" >
                                <p style="text-align:left">Link to full text</p>
                                <input name="link_to_text" value="{{$trail->link_to_text}}" required class="form-control " type="text" >
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <label>Relevant figures</label>
                            <div class="wdth">
                                <div data-role="dynamic-fields1">
                                    @foreach($trail->figures as $figure)
                                        <div class="form-inline clearfix">
                                            <div class="rltv" >
                                                <input value="{{$figure->link}}" name="figure_link[]" required class="form-control wd100" type="text" placeholder="Link" >
                                                <textarea name="figure_description[]" required class="form-control wd100" placeholder="Description">{{$figure->description}}</textarea>
                                            </div>
                                            <div class="add">
                                                <button class="btn cancl" data-role="remove"><img src="{{asset('assets/')}}/img/minus.png"></button>
                                                <button class="btn adme" data-role="add"><img src="{{asset('assets/')}}/img/pluss.png"></button>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group" >
                                <label>Old Keywords</label>
                                <div class="wdth no-bord">
                                    @foreach($trail->keywords as $keyword)
                                        <div class="fstChoiceItem pdd bluu">{{$keyword->name}}</div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                            <div class="form-group" >
                                <label>New Keywords</label>
                                <select class="multipleSelect form-control slct wdth" multiple name="keywords[]" required >
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua & Deps">Antigua &amp; Deps</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        </div>
                        <div class="clearfix"></div>
                        <button style="width:100%"  class="btn btn-custom-3 m-t-25 m-b-20" type="submit">Update</button>
                    </form>
                </div>
                <div class="clearfix"></div>



            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
@endsection

@section('js')
    <script src="{{asset('assets/')}}/js/bootstrap-select.js"></script>
    <script src="{{asset('assets/')}}/js/fastselect.standalone.js"></script>
    <script src="{{asset('assets/')}}/js/nested-form.js"></script>
    <script>
        $('.multipleSelect').fastselect();
    </script>
@endsection
