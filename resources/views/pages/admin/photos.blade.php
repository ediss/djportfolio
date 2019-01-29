@extends('layouts.admin')

@section('links')
<link href="{{url('')}}/admin_template/css/my_style.css" rel='stylesheet' type='text/css' />
@endsection

@section('content')
<section class="gallery pb-5">
        <div class="container">
            <div class="wthree-inner-sec port-bg">
                <div class="sec-head">
                    <h1 class="sec-title-w3 text-capitalize">portfolio</h1>
                    <span class="block"></span>
                </div>
                <!-- portfolio-area -->
                <div class="wthree-row py-3">

                    <ul class="portfolio-area clearfix" id="sortable">
                    @foreach($projects as $project)
                        <li class="portfolio-item22 positions" data-position = "{{$project->id_project}}">
                            <span class="image-block img-hover">
                                <img class="example-image img-fluid w3layouts agileits" src="{{url($project->img_url)}}" alt=""/>
                            </span>
                        </li>
                    @endforeach

                    </ul>
                    <input type = "submit" id = "test" name = "btnSaveOrder" class = "form-control btn btn-primary" value = "Sačuvaj">

                    <!--end portfolio-area -->
                </div>
            </div>
        </div>
    </section>

@endsection