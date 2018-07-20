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
        <div id="mainCarousel" class="carousel">
            <div class="carousel__item">
                <div class="article--featured">
                    <div class="article__background" style="background-image: url('./img/black-tea.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>
            </div>

            <div class="carousel__item">
                <div class="article--featured">
                    <div class="article__background" style="background-image: url('./img/tea.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>
            </div>

            <div class="carousel__item">
                <div class="article--featured">
                    <div class="article__background" style="background-image: url('./img/cars.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <div class="articles">
            <div class="article-group--left">
                <div class="article--big">
                    <div class="article__background" style="background-image: url('./img/blossom.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>

                <div class="article--small-1">
                    <div class="article__background" style="background-image: url('./img/geiser.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>

                <div class="article--small-2">
                    <div class="article__background" style="background-image: url('./img/landscape.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>

                <div class="article--medium">
                    <div class="article__background" style="background-image: url('./img/tea.jpg');"></div>

                    <div class="article__text">
                        <h5 class="article__category">
                            <a href="#">Category</a>
                        </h5>

                        <h2 class="article__title">
                            <a href="#">The title of the article goes here</a>
                        </h2>

                        <p class="article__sinopsis">
                            This is where the sinopsis of the given artile should be displayed, contains the main idea
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection