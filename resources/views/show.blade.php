@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/')}}/css/bootstrap-select.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/fastselect.css">
@endsection

@section('title','Octar l Trial')
@section('page_container','new2-page-container')
@section('page_content','page-content2')

@section('sidebar')
    <div class="page-sidebar3">
        <div class="">
            <h1>OCTAR</h1>
            <h3>WELCOME <span>{{ Auth::user()->name }}</span></h3>
            <div class="ofc-img">
                <img src="{{asset('assets/')}}/img/triall.png"  class="img-responsive">
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
        <h3 class="trail-h1">{{$trail->name}}</h3>
        <div class="row trials">

            <div class="col-md-11 col-sm-12 col-xs-12">

                <div class="formy frm clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12 lft">

                        <h6>Trial Acronym: </h6>
                        <p class="blu-txt nw-wdth1">{{$trail->acronym}}</p>

                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 lft">
                        <h6>Authors: </h6>
                        <p class="blu-txt nw-wdth1">{{$trail->authors}}</p>
                    </div>

                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12 lft">
                        <label class="wdth3">Year of publication:</label>
                        <p class="blu-txt nw-wdth2">{{$trail->publication_year}}</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 lft">
                        <label class="wdth3">Trial Nb:</label>
                        <p class="blu-txt nw-wdth2">{{$trail->nb}}</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 lft">
                        <div class="form-group">
                            <p>OCTAR Nb: {{$trail->octar_nb}}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group">
                            <label>Trial Category:</label>
                            <span class="blu-txt wdth no-bord">{{$trail->category}}</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group">
                            <label>Sub Category:</label>
                            <span class="blu-txt wdth no-bord">{{$trail->sub_category}}</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group" >
                            <label>Study type:</label>
                            <div class="wdth no-bord">
                                @foreach($trail->study_types as $study_type)
                                    <div class="fstChoiceItem pdd bluu">{{$study_type->name}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group">

                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group">
                            <label>Blinding:</label>
                            <span class="blu-txt wdth no-bord">{{$trail->blind->name}}</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label>Patient profile:</label>
                            <span class="blu-txt wdth no-bord">{{$trail->patient_profile}}</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group">
                            <label>Trial description</label>
                            <span class="blu-txt wdth">{{$trail->description}} </span>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <label>Arms</label>
                            <div class="wdth">
                                @foreach($trail->arms as $arm)
                                <label style="text-align:left; font-weight:normal">Arm Nb:</label>
                                <span class="blu-txt wdth no-bord">{{$arm->nb}}</span>
                                <div class="clearfix"></div>
                                <label style="text-align:left; font-weight:normal">Arm Name:</label>
                                <span class="blu-txt wdth no-bord">{{$arm->name}}</span>
                                <div class="clearfix"></div>
                                <label style="text-align:left; font-weight:normal; width:100%">Description:</label>
                                <span class="blu-txt ">{{$arm->description}}</span>
                                <hr>
                                @endforeach
                            </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft pull-right">
                        <div class="form-group m-t-60">
                            <label id="lbl-wdth">Cross Over</label>
                            <div class="nw-wdth2">
                                <label style="width:85px">
                                    <input type="radio" checked name="randomization" value="Yes" id="randomization_0">
                                    {{$trail->cross_over}}</label>
                            </div>

                            <label id="lbl-wdth"> Second randomization</label>
                            <div class="nw-wdth2">
                                <label style="width:85px">
                                    <input type="radio" name="randomization1" checked value="Yes" id="randomization_0">
                                    {{$trail->second_randomization}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <label>Results:</label>
                        <div class="wdth">
                            <label style="text-align:left; font-weight:normal; width:100%">{{$trail->end_point->name}}</label>


                            <label style="text-align:left; font-weight:normal; width:100%">End Point Result:</label>
                            <span class="blu-txt ">{{$trail->endpoint_result}}</span>

                            <label style="text-align:left; font-weight:normal; width:100%">Statistical Significance:</label>
                            <div class="nw-wdth2">
                                <label style="width:85px">
                                    <input type="radio" name="randomization5" checked value="Yes" id="randomization_0">
                                    {{$trail->statistical_significance}}</label>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                            <label>Relevant figures:</label>
                        <div class="wdth">

                            @foreach($trail->figures as $figure)
                                <label style="text-align:left; font-weight:normal; width:100%">Link:</label>
                                <span class="blu-txt ">{{$figure->link}}</span>

                                <label style="text-align:left; font-weight:normal; width:100%">Description:</label>
                                <span class="blu-txt ">{{$figure->description}}</span>
                                    <hr>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 lft pull-right">
                        <div class="form-group">
                            <p style="text-align:left">Previous lines / after failure of</p>
                            <span class="blu-txt ">{{$trail->previous_lines}}</span>
                            <p style="text-align:left">Points of criticism</p>
                            <span class="blu-txt ">{{$trail->points_of_criticism}}</span>
                            <p style="text-align:left">Link to full text</p>
                            <span class="blu-txt ">{{$trail->link_to_text}}</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 lft">
                        <div class="form-group" >
                            <label>Keywords</label>
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



                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('js')
    <script src="{{asset('assets/')}}/js/bootstrap-select.js"></script>
    <script src="{{asset('assets/')}}/js/fastselect.standalone.js"></script>
    <script src="{{asset('assets/')}}/js/nested-form.js"></script>
    <script>
        $('.multipleSelect').fastselect();
    </script>
@endsection