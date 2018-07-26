<div class="navbar">
    <h1 class="navbar__title">
        <a href="{{ url("/") }}">
            KEVIN AVILA
        </a>
    </h1>

    <div class="navbar__categories">
        <a class="navbar__category{{ $active == 'home' ? ' active' : '' }}" href="{{ url("/") }}">home</a>
        <a class="navbar__category{{ $active == 'coding' ? ' active' : '' }}" href="{{ url("/category/coding") }}">coding</a>
        <a class="navbar__category{{ $active == 'cooking' ? ' active' : '' }}" href="{{ url("/category/cooking") }}">cooking</a>
        <a class="navbar__category{{ $active == '3d-printing' ? ' active' : '' }}" href="{{ url("/category/3d-printing") }}">3d printing</a>
        <a class="navbar__category{{ $active == 'tabletop-games' ? ' active' : '' }}" href="{{ url("/category/tabletop-games") }}">tabletop games</a>
        <a class="navbar__category{{ $active == 'random' ? ' active' : '' }}" href="{{ url("/category/random") }}">random</a>
    </div>

    <div class="navbar__footer">
        <a class="navbar__sn" href="https://www.facebook.com/UvealSnow">
            <i class="fa fa-facebook"></i>
        </a>

        <a class="navbar__sn" href="https://stackoverflow.com/users/6205432/uvealsnow">
            <i class="fa fa-stack-overflow"></i>
        </a>

        <a class="navbar__sn" href="https://github.com/UvealSnow">
            <i class="fa fa-github"></i>
        </a>

        <a class="navbar__sn" href="mailto:kevhah92@gmail.com">
            <i class="fa fa-envelope"></i>
        </a>
    </div>
</div>