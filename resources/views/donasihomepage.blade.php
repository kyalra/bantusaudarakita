@extends('layouts.layouthomepage')
@section('contenthomepage')

<!--================ Home Banner Area =================-->
<section class="home_banner_area">
    <div class="overlay"></div>
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="offset-lg-2 col-lg-8">
                    <img class="img-fluid" src="img/banner/text-img.png" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price You may see some
                        for as low as each.</p>
                    <a class="main_btn mr-10" href="#our-major-cause">donate now</a>
                    <a class="white_bg_btn" href="#">view activity</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->


<!--================ Start important-points section =================-->
<section class="donation_details pad_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single_donation_box">
                <img src="img/icons/home1.png" alt="">
                <h4>Total Donation</h4>
                <p>
                    The French Revolutioncons tituted for the conscience of the dominant.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 single_donation_box">
                <img src="img/icons/home2.png" alt="">
                <h4>Fund Raised</h4>
                <p>
                    The French Revolutioncons tituted for the conscience of the dominant.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 single_donation_box">
                <img src="img/icons/home3.png" alt="">
                <h4>Highest Donation</h4>
                <p>
                    The French Revolutioncons tituted for the conscience of the dominant.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 single_donation_box">
                <img src="img/icons/home4.png" alt="">
                <h4>Total Donation</h4>
                <p>
                    The French Revolutioncons tituted for the conscience of the dominant.
                </p>
            </div>
        </div>
    </div>
</section>
<!--================ End important-points section =================-->

<!--================ Start Our Major Cause section =================-->
<section class="our_major_cause section_gap">

    <div class="container">

        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h1>Our Major Causes</h1>
                <p>
                    The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
                    innocence the natural
                    chain of events.
                </p>
            </div>
        </div>

        <div class="row">
            <div id="our-major-cause" class="owl-carousel">
                @foreach($buat_donasi as $get)
                <div class="card">
                    <div class="card-body">
                        <figure>
                            <img class="card-img-top img-fluid" src="/img/donasi/{{ $get->gambar }}"
                                alt="Card image cap">
                        </figure>

                    </div>
                    <div class="card_inner_body">
                        <div class="card-body-top">
                            <span>Terkumpul: Rp.{{$get->jumlah_terkumpul}}</span> /Rp.{{$get->jumlah}}
                        </div>
                        <h4 class="card-title">{{$get->judul}}</h4>
                        <p class="card-text">{{$get->keterangan}}
                        </p>
                        <button value="{{$get->id}}" type="button" class="main_btn2 mr-10 buat_donasi">donate
                            here</button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>

</section>
<!--================ Ens Our Major Cause section =================-->

<!--================ Start Experience Area =================-->
<section class="experience_donation section_gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <h1>Ayo Bantu Saudara KITA!</h1>
                <p>Silakan Login terlebih dahuli jika ingin Membuat Galangan Dana.Ayo Kita Bantu Saudara Kita Semua!</p>
                @if(Auth::check())
                <button href="#" class="main_btn2 mr-10 bikin_donasi">Buat Donasi Disini
                    </button>
                @else

                @endif
            </div>
        </div>
    </div>
</section>
<!--================ End Experience Area =================-->

@include('modaldonasi')
@include('modaldonatur')
<script>
$(document).ready(function(){
    $(document).on('click','.buat_donasi',function(){
        var i = $(this).attr("value");
        $('.modal_donatur').attr("action",'/donasi/'+i);
        $('.example').modal();
    });
    $(document).on('click','.bikin_donasi',function(){
        $('.exampleModal').modal();
    })
});
</script>
@endsection