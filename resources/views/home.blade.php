@extends('layouts.app')

@section('title','Octar l Home')
@section('page_container','')
@section('page_content','page-content')
@section('sidebar')
    <div class="page-sidebar page-sidebar">
        <h1>OCTAR</h1>
        <h3>WELCOME <span>{{ Auth::user()->name }}</span></h3>
        <div class="ofc-img">
            <img src="{{asset('assets/')}}/img/ofc.png"  class="img-responsive">
        </div>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <h4><a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="lg-out"><i class="out"></i> Sign out</a></h4>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection


@section('content')
    <div class="container-fluid p-0">
        <div class="row trials">
            <div class="col-md-10 col-sm-12 col-xs-12">
                <h3><a href="{{route('home.create')}}" class="btn btn-custom-3"><span>+</span> Add new trial</a></h3>
                <div class="clearfix"></div>
                <div class="all-trials">
                    @foreach($trails  as $trail)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="trial">
                            <a href="{{url('/home/'.$trail->id)}}">
                                <h4>{{$trail->name}}</h4>
                                <p>By: {{auth()->user()->name}}</p>
                                <p>{{$trail->created_at->format('d/m/Y')}}</p>
                            </a>
                            <div class="links">
                                <a href="{{route('home.edit',$trail->id)}}" class="edit"><img src="{{asset("assets/")}}/img/edit.png"></a>
                                <form action="{{route('home.delete',$trail->id)}}" method="POST" id="Form.{{$trail->id}}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a href="#squarespaceModal-8"  data-toggle="modal" class="delet"><img src="{{asset("assets/")}}/img/delt.png" ></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                {{$trails->links()}}


            </div>
        </div>
    </div>
@endsection

@if(count(auth()->user()->trails) > 0)
<div class="modal fade" id="squarespaceModal-8" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">

                <div class="col-md-12 col-xs-12">
                    <h3 class="log-title">Are your sure that you want to delete this trial?</h3>

                    <form>

                        <div class="col-md-12 col-sm-12 text-center ">
                            <a href="javascript:{}" onclick='document.getElementById("Form.{{$trail->id}}" ).submit();' type="submit" class="btn btn-custom-3 " >Yes</a>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endif
