@extends('layouts.main')

@section('links')
<link href="{{url('')}}/admin_template/css/my_style.css" rel='stylesheet' type='text/css' />
@endsection

@section('content')
   <!-- gallery -->
   <section class="gallery pb-5">
        <div class="container">
            <div class="wthree-inner-sec port-bg">
                <div class="sec-head">
                    <h1 class="sec-title-w3 text-capitalize">portfolio</h1>
                    <span class="block"></span>
                </div>
                <!-- portfolio-area -->
                <div class="wthree-row py-3">
                    <ul class="portfolio-categ filter pb-md-5 pb-3 mb-4">
                        <li class="port-filter all {{(Request::url('') === url('projects')) ? 'active' : 'cat-item-1'}}">
                            <a href="{{route('projects')}}">All</a>
                        </li>
                        @foreach($categories as $category)
                            <li class="{{(Request::url('') === url('projects', $category->id_category)) ? 'active' : 'cat-item-1'}}">
                                <a href="{{route('getProjects', [$category->id_category])}}" title="Category 1">{{$category->category}}</a>
                            </li>
                        @endforeach
                    </ul>

                        <!-- <li class="port-filter all active">
                            <a href="#">All</a>
                        </li>
                        <li class="cat-item-1">
                            <a href="#" title="Category 1">Logos</a>
                        </li>
                        <li class="cat-item-2">
                            <a href="#" title="Category 2">Banners</a>
                        </li>
                        <li class="cat-item-3">
                            <a href="#" title="Category 3">Design</a>
                        </li>
                        <li class="cat-item-4">
                            <a href="#" title="Category 4">category 4</a>
                        </li>
                        <li class="cat-item-5">
                            <a href="#" title="Category 4">category 5</a>
                        </li> -->

                  

                    <ul class="portfolio-area clearfix">
                    @foreach($projects as $project)
                        <li class="portfolio-item22">
                            <span class="image-block img-hover slide">
                                <!--<a class="example-image-link image-zoom" href="{{url($project->img_url)}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                    <img src="{{url($project->img_url)}}" class="img-fluid w3layouts agileits" alt="Communal">
                                </a> -->
                                <a href="{{route('singleProject', [$project->id_project])}}">
                                     <img class="example-image img-fluid w3layouts agileits" src="{{url($project->img_url)}}" alt=""/>
                                </a>

                                <a href="{{route('singleProject', [$project->id_project])}}">
                                    <div class="overlay">
                                        <div class="text">See more!</div>
                                    </div>
                                </a>
                            </span>
                        </li>
                    @endforeach

                    </ul>
                    <!--end portfolio-area -->
                </div>
            </div>
        </div>
    </section>
    <!-- //gallery -->
@endsection