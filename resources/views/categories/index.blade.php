@extends('layouts.app', ['active' => 'home'])

@section('content')
    {{-- Carousel --}}
    <div id="mainCarousel" class="carousel">
        <div class="carousel__item">
            <div class="article--featured">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">The title of the article goes here</a>
                    </h2>

                    <p class="article__sinopsis">
                        This is where the sinopsis of the given article should be displayed, contains the main idea
                    </p>
                </div>
            </div>
        </div>

        <div class="carousel__item">
            <div class="article--featured">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">The title of the article goes here</a>
                    </h2>

                    <p class="article__sinopsis">
                        This is where the sinopsis of the given article should be displayed, contains the main idea
                    </p>
                </div>
            </div>
        </div>

        <div class="carousel__item">
            <div class="article--featured">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">The title of the article goes here</a>
                    </h2>

                    <p class="article__sinopsis">
                        This is where the sinopsis of the given article should be displayed, contains the main idea
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Main content --}}
    <div class="articles">
        <div class="article-group--left">
            <div class="article--big reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here, this one can actually be a bit longer than usual
                    </p>
                </div>
            </div>

            <div class="article--small-1 reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>

            <div class="article--small-2 reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>

            <div class="article--medium reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>
        </div>

        <div class="article-group--center">
            <div class="article--big reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here, this one can actually be a bit longer than usual
                    </p>
                </div>
            </div>

            <div class="article--big reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here, this one can actually be a bit longer than usual
                    </p>
                </div>
            </div>

            <div class="article--big reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here, this one can actually be a bit longer than usual
                    </p>
                </div>
            </div>
        </div>

        <div class="article-group--alt-left">
            <div class="article--big reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here, this one can actually be a bit longer than usual
                    </p>
                </div>
            </div>

            <div class="article--small-1 reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>

            <div class="article--small-2 reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>
        </div>

        <div class="article-group--right">
            <div class="article--big reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here, this one can actually be a bit longer than usual
                    </p>
                </div>
            </div>

            <div class="article--small-1 reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>

            <div class="article--small-2 reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>

            <div class="article--medium reveal">
                <div class="article__background" style="background-image: url('./img/owl.jpg');"></div>

                <div class="article__text">
                    <h5 class="article__category">
                        <a href="{{ url("/category/1") }}">Category</a>
                    </h5>

                    <h2 class="article__title">
                        <a href="{{ url("/article/1") }}">Title here</a>
                    </h2>

                    <p class="article__sinopsis">
                        The main idea here
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection