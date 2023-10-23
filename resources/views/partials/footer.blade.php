<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a class="nav-link" href="/"> <i class="fas fa-chevron-right"></i> Home </a>
            <a class="nav-link" href="/#services"> <i class="fas fa-chevron-right"></i> Services </a>
            <a class="nav-link" href="/#about"> <i class="fas fa-chevron-right"></i> About </a>
            <a class="nav-link" href="/#doctors"> <i class="fas fa-chevron-right"></i> Doctors </a>
            <a class="nav-link" href="/#book"> <i class="fas fa-chevron-right"></i> Book </a>
            <a class="nav-link" href="/#review"> <i class="fas fa-chevron-right"></i> Review </a>
            <a class="nav-link" href="/posts"> <i class="fas fa-chevron-right"></i> Blogs </a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a class="nav-link" href="https://wa.me/{{ $identity->first()->no_telp1 }}"> <i class="fas fa-phone"></i>
                +{{ $identity->first()->nohp }} </a>
            <a class="nav-link" href="javascript:void(0)"> <i class="fas fa-phone"></i>
                {{ $identity->first()->telp }} </a>
            <a class="nav-link" href="mailto:{{ $identity->first()->email }}"> <i class="fas fa-envelope"></i>
                {{ $identity->first()->email }} </a>
            <a class="nav-link" href="javascript:void(0)"> <i class="fas fa-map-marker-alt"></i>
                {{ $identity->first()->address }}</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a class="nav-link" href="{{ $identity->first()->facebook }}"> <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a class="nav-link" href="{{ $identity->first()->twitter }}"> <i class="fab fa-twitter"></i> Twitter </a>
            <a class="nav-link" href="{{ $identity->first()->instagram }}/"> <i class="fab fa-instagram"></i> Instagram
            </a>
            <a class="nav-link" href="{{ $identity->first()->youtube }}"> <i class="fab fa-youtube"></i> Youtube </a>
        </div>

    </div>

    <div class="credit"> created by <span>{{ $identity->name }}</span> | all rights reserved
        @guest
            <a style="margin-left: -6px" href="/bukan-login" class="text-decoration-none text-black-50">.</a>
        @endguest
    </div>

</section>
<!-- footer section ends -->
