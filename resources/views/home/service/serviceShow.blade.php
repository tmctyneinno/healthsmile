@extends('layouts.app')

@section('content')
   <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
                <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                    <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span class="mr-2"><a href="{{ route('home.services') }}">Services</a></span> <span>{{ $item->title }}</span></p>
                    <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">{{ $item->title }}</h1>
                </div>
            </div>
        </div>
        </div>
    </section>
      
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 ftco-animate">
                    <p>
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="img-fluid mb-4" style="width: 300px">
                    </p>
                    <div>{!! $item->content !!}</div>
                </div>
                <div class="col-md-1"></div>
      
            </div>
        </div>
    </section>


@endsection