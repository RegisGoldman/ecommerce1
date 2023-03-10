@extends('layouts.app')

@section('content')

@include('layouts.menubar')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_responsive.css') }}">
<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="blog_posts d-flex flex-row align-items-start justify-content-between">
                    @foreach ($post as $row)
                        
                    
                    <!-- Blog post -->
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset($row->post_image)}})"></div>
                        <div class="blog_text">
                            @if (Session()->get('lang') == 'english')
                            {{ $row->post_title_en }}
                            @else
                            {{ $row->post_title_fr }}
                            @endif
                            
                        </div>
                        <div class="blog_button"><a href="{{ url('blog/single/'.$row->id) }}">

                            @if (Session()->get('lang') == 'english')
                            Continue Reading
                            @else
                            Continuer la lecture
                            @endif

                        </a></div>
                    </div>

                    @endforeach
                    
                </div>
            </div>
                
        </div>
    </div>
</div>
<script src="{{ asset('public/frontend/js/blog_custom.js')}}"></script>

@endsection