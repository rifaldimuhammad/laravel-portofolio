@extends('index')
@section('content')
    @if (session()->has('success'))
        <div class="alert" style="width: 100%">
            <div class="alert-success">
                <p>
                    <ion-icon name="happy-outline"></ion-icon>
                </p>
                <p>Success! </p>
                <p>{{ session('success') }}</p>
                <p id="btn-hide-alert">
                    <ion-icon name="close-outline"></ion-icon>
                </p>
            </div>
        </div>
    @endif

    <div class="home">
        <div class="home__hero">
            <div class="home__hero--title">
                <p class="home__hero--title-text">I'm Rifaldi <span>|</span> Frontend</p>
                <p class="home__hero--title-text">Web <br> Developer</p>
            </div>
            <div class="home__hero--desc">
                <p class="home__hero--desc-text">
                    This is a template Figma file, turned into code <br> using Anima. Learn more at AnimaApp.com
            </div>
            <div class="home__hero--btn">
                <button class="home__hero--btn-1" onclick="document.location='{{ route('contact') }}'">HIRE ME</button>
                <button class="home__hero--btn-2" onclick="document.location='{{ route('gallery') }}'">SEE MY
                    PROJECTS</button>
            </div>
        </div>
        <div class="home__right">
            <img src="{{ asset('img/rifal.svg') }}" alt="" class="home__right--img">
        </div>
    </div>
    @include('layout/footer')
@endsection
