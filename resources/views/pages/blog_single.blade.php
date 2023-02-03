@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_single_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_single_responsive.css') }}">

@foreach ($posts as $row)

<div class="single_post">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="single_post_title">
                    @if (Session()->get('lang') == 'english')
                            {{ $row->post_title_en }}
                            @else
                            {{ $row->post_title_fr }}
                            @endif
                </div>
                <div class="single_post_text">
                    <p> 
                        @if (Session()->get('lang') == 'english')
                            {!! $row->details_en !!}
                            @else
                            {!! $row->details_fr !!}
                            @endif
                    </p>

                
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<script src="{{ asset('public/frontend/js/blog_single_custom.js')}}"></script>

@endsection