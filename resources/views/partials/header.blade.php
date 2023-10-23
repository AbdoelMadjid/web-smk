<div id="slider-home" class="carousel slide" data-ride="carousel" style="margin-top: 10rem; max-width: 100vw;"
    data-pause="false">
    <ul class="carousel-indicators">
        <li data-target="#slider-home" data-slide-to="0" class="active"></li>
        <li data-target="#slider-home" data-slide-to="1"></li>
        <li data-target="#slider-home" data-slide-to="2"></li>
        <li data-target="#slider-home" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner w-100">
        <div class="carousel-item active">
            <div class="img"
                style="width: 100vw; height: 50rem; background: url({{ asset('storage/' . $header->image_1) }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="img"
                style="width: 100vw; height: 50rem; background: url({{ asset('storage/' . $header->image_2) }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="img"
                style="width: 100vw; height: 50rem; background: url({{ asset('storage/' . $header->image_3) }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>
        </div>
        <div class="carousel-item">
            <div class="img"
                style="width: 100vw; height: 50rem; background: url({{ asset('storage/' . $header->image_4) }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            </div>
        </div>
        <div class="carousel-caption" style="bottom: 15rem">
            <h3 class="fw-bold">{{ $identity->alias }}</h3>
            <p>{{ $identity->quotes }}</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#slider-home" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#slider-home" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
