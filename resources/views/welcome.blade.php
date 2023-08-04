@extends('home.layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/home/home.css')}}" >
<div class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{asset('image/home/ks.png')}}" alt="" />
            <div class="text">
                <h5>Welcome to</h5>
                <h1>HS</h1>
                <p>Chúng tôi rất vinh dự khi được phục vụ quý khách</p>
                <a href="loaiphong.html"><button>Đặt phòng</button></a>
            </div>
        </div>


    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
</div>

<div class="content1">
    <form action="index.php?ctr=room-search" method="POST">

        <div class="checkout">
            <label for=""><i class="fa-solid fa-calendar-days"></i>Ngày đặt phòng</label>
            <input type="date" id="check_out_date" placeholder="Checkout" name="ngay_vao" data-min-date=today>
        </div>
        <div class="checkout">
            <label for=""><i class="fa-solid fa-calendar-days"></i>Ngày trả phòng</label>
            <input type="date" id="check_out_date" placeholder="Checkout" name="ngay_tra" data-min-date=today>
        </div>
        <div style="width: 200px" >
            <label>Loại Phòng</label>
            <select  name="room_type" id="">

                @foreach($type as $types)
                    <option value="{{$types->id}}" >{{$types->name}}</option>
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" name="search" value="Check">
    </form>

    <div class="most-rooms">
        <h1>Phòng được quan tâm nhiều</h1>
        <div class="box-rooms">
               @foreach($rooms as $room)
                <div class="item-rooms">

                    <a href="{{route('detail',['id'=>$room->id])}}">
                        <img style="text-align: center;  display: inline-block;
  margin: 5px;" src="{{asset('storage/'.$room->image)}}" alt="">
                    </a>
                    <div class="desc">
                        <div class="top-desc">
                            <h3>{{$room->name}}</h3>
                            <p class="text-secondary">   Trạng thái : {{$room->status==0 ? "Trống" : "Đã Đặt"}}</p>
                            </p>
                        </div>

                        <p style=" letter-spacing: 1px;" class="main-desc">
                            Loại phòng :{{$typer[$room->room_type]}}
                        <p class="text-danger" >Giá :{{$room->price}}/Ngày</p>

                        <div class="buttom-desc">
                            <a href="#">Đặt phòng<i class="fa-solid fa-caret-right"></i></a>
                            <a href="{{route('detail',['id'=>$room->id])}}">Xem thêm<i class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
               @endforeach

        </div>
    </div>

    <div class="block">
        <h1>Dịch vụ của chúng tôi</h1>
        <div class="about-service">
            <div class="item">
                <i class="fas fa-user-shield"></i>
                <h3>AN TOÀN</h3>
                <p>An ninh được đảm bảo an toàn cho quý khách.</p>
            </div>
            <div class="item">
                <i class="fas fa-coffee"></i>
                <h3>CÀ PHÊ</h3>
                <p>Cà phê được phục vụ cho mỗi sớm mai thức dậy.</p>
            </div>
            <div class="item">
                <i class="fa-solid fa-bell"></i>
                <h3>BÁO THỨC</h3>
                <p>Dịch vụ báo thức mỗi buổi sáng, đúng giờ.</p>
            </div>
            <div class="item">
                <i class="fa-solid fa-wifi"></i>
                <h3>WIFI</h3>
                <p>Tốc độ mạng chất lượng, đường truyền ổn định.</p>
            </div>
        </div>
    </div>

</div>
@endsection
