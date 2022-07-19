@extends('userlayout')

@section('content')
    
<div style="font-family:'Courier New', Courier, monospace ; font-weight: bold; font-size: 30px; text-indent: 30px;">KHÁM PHÁ SẢN PHẨM TOURVIET</div>
<div class="home2">
    <div class="l-container">
      <div class="b-game-card">
        <a href="">
          <div class="b-game-card__cover">
              <img src="{{asset('images/7vien.jpg')}}" alt="">
              <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                <h5 class="card-titl" style="color:white">Đón hè tại Đà Nẵng-Hội An-Huế</h5>
                </div>
          </div>
        </a>
      </div>

        <div class="b-game-card">
          <a href="">
            <div class="b-game-card__cover">
                <img src="../pic/dl2.jpg" alt="">
            </div>
          </a>
        </div>

        <div class="b-game-card">
          <a href="">
            <div class="b-game-card__cover">
                <img src="../pic/dl2.jpg" alt="">
            </div>
          </a>
        </div>

        <div class="b-game-card">
          <a href="">
            <div class="b-game-card__cover">
                <img src="../pic/dl2.jpg" alt="">
            </div>
          </a>
        </div>

        <div class="b-game-card">
          <a href="">
            <div class="b-game-card__cover">
                <img src="../pic/dl2.jpg" alt="">
            </div>
          </a>
        </div>

        
    </div>
</div>

<div style="font-family:'Courier New', Courier, monospace ; font-weight: bold; font-size: 30px; text-indent: 30px;">ƯU ĐÃI ĐẶC BIỆT</div>

<div class="team-boxed">
    <div class="container">
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                        <a href=""><img class="card-img-top" src="https://images.pexels.com/photos/12811978/pexels-photo-12811978.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></a>
                        <p class="date">asd</p>
                        <p class="place">asd</p>
                        <a href=""><div class="name">asd</div></a>
                        <div class="old-price">
                            asd
                            <div></div>
                        </div>
                        <div class="price-discount">
                            asd
                            <div></div>
                            <div class="discount">asd</div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <a href=""><img class="card-img-top" src="image.png"></a>
                    <p class="date">15/07/2022 - 5 ngày</p>
                    <p class="place">Nơi khởi hành: TP. Hồ Chí Minh</p>
                    <h3 class="name">Name</h3>
                    <div class="old-price">
                        Giá: <del>8,990,000₫</del>
                    </div>
                    <div class="price-discount">
                      
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <a href=""><img class="card-img-top" src="../pic/dl2.jpg"></a>
                    <p class="date">15/07/2022 - 5 ngày</p>
                    <p class="place">Nơi khởi hành: TP. Hồ Chí Minh</p>
                    <h3 class="name">Name</h3>
                    <div class="old-price">
                        Giá: <del>8,990,000₫</del>
                    </div>
                    <div class="price-discount">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="font-family:'Courier New', Courier, monospace ; font-weight: bold; font-size: 30px; text-indent: 30px;">ĐIỂM ĐẾN YÊU THÍCH</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">



<!-- Item slider-->
<div class="container-fluid">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="carousel carousel-showmanymoveone slide" id="itemslider">
            <div class="carousel-inner">      
                <div class="item active">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <a href="#"><img
                                src="https://images.pexels.com/photos/12811978/pexels-photo-12811978.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="img-responsive center-block"></a>
                        <h1 class="text-center">Hà Nội</h1>
                    </div>
                </div>

                <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <a href="#"><img
                            src="../pic/dl2.jpg"
                            class="img-responsive center-block"></a>
                            <h1 class="text-center">Hà Nội</h1>
                        </div>
                </div>

                <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <a href="#"><img
                            src="../pic/test.jpg"
                            class="img-responsive center-block"></a>
                            <h1 class="text-center">Hà Nội</h1>
                    </div>
                </div>

                <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <a href="#"><img
                            src="../pic/dl2.jpg"
                            class="img-responsive center-block"></a>
                            <h1 class="text-center">Hà Nội</h1>
                    </div>
                </div>

                <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <a href="#"><img
                            src="../pic/dl2.jpg"
                            class="img-responsive center-block"></a>
                            <h1 class="text-center">Hà Nội</h1>
                    </div>
                </div>

                <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <a href="#"><img
                            src="../pic/dl2.jpg"
                            class="img-responsive center-block"></a>
                            <h1 class="text-center">Hà Nội</h1>
                    </div>
                </div>
            </div>

            <div id="slider-control">
                <a class="left carousel-control" href="#itemslider" data-slide="prev"><img
                        src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png"
                        alt="Left" class="img-responsive"></a>
                <a class="right carousel-control" href="#itemslider" data-slide="next"><img
                        src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right"
                        class="img-responsive"></a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('title')
    Home
@endsection

@section('linkcss')
    {{asset('css/user/home.css')}}
@endsection

@section('linkjs')
    {{asset('js/user/home.js')}}
@endsection