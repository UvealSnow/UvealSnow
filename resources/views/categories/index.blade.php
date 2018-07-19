@extends('layouts.app')

@section('content')
    <div class="full-page">
        {{-- Burger menu --}}
        <button id="hamburger-menu" class="hamburger hamburger--emphatic" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        {{-- Carousel --}}
        <div id="mainPageCarousel" class="carousel slide" data-ride="carousel">
            {{-- Carousel indicators --}}
            <ol class="carousel-indicators">
                <li data-target="#mainPageCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainPageCarousel" data-slide-to="1"></li>
                <li data-target="#mainPageCarousel" data-slide-to="2"></li>
            </ol>

            {{-- Wrapper for slides --}}
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./img/mountain.jpg">
                </div>

                <div class="item">
                    <img src="./img/geiser.jpg">
                </div>

                <div class="item">
                    <img src="./img/landscape.jpg">
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <div class="articles">
            <div class="row">
                {{-- Big left, mosaic right --}}
                <div class="col-md-6">
                    {{-- article --}}
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- article --}}
                        </div>
                        <div class="col-md-6">
                            {{-- article --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{-- article --}}
                        </div>
                    </div>
                </div>

                {{-- 3 equal articles --}}
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>

                {{-- Big right, mosaic left --}}
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- article --}}
                        </div>
                        <div class="col-md-6">
                            {{-- article --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{-- article --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {{-- article --}}
                </div>
            </div>
        </div>
    </div>
@endsection