@extends('home.layouts.layout')
@section('content')


<div class="container">


    <div class="box-image">
        <div>
            <img style="width: 400px" id="mainImage" src="{{asset('storage/'.$rooms->image)}}" alt="">
        </div>
    </div>


    <br />

    <div class="room-detail">
        <div class="description">
            <h1>Mô tả chi tiết phòng</h1>
            <p>{{$rooms->name}}</p>
            <div class="facilities">
                <h3>Tiện ích</h3>
                <div class="box-facilities">
                    <p>
                        <img src="{{asset('image/home/ic_bedroom.png')}}" alt="" />

                        1 phòng ngủ
                    </p>
                    <p>
                        <img src="{{asset('image/home/ic_livingroom.png')}}" alt="" />

                        1 phòng khách
                    </p>
                    <p>
                        <img src="{{asset('image/home/ic_bathroom.png')}}" alt="" />

                        1 phòng tắm
                    </p>
                    <p>
                        <img src="{{asset('image/home/ic_diningroom 1.png')}}" alt="" />

                        1 phòng ăn
                    </p>
                    <p>
                        <img src="{{asset('image/home/ic_wifi 1.png')}}" alt="" />

                        10 mbp/s
                    </p>
                    <p>
                        <img src="{{asset('image/home/ic_kulkas.png')}}" alt="" />

                        1 tủ lạnh
                    </p>
                    <p>
                        <img src="{{asset('image/home/ic_tv.png')}}" alt="" />

                        1 tivi
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="hotel-rules">
        <h3>Nội quy chung</h3>
        <ul>
            <li>-Không hút thuốc, tiệc tùng, hoặc sự kiện</li>
            <li>-Giờ nhận phòng từ 8:00</li>
            <li>-Không nuôi động vật</li>
        </ul>
    </div>




    <h3>Bình luận</h3>
{{--    @if($comment->count() > 0)--}}
{{--    @foreach($comment as $comments)--}}
{{--    <div class="comment">--}}
{{--        <p><strong>{{ $comments->user->name }}:</strong> {{ $comments->comment }}</p>--}}
{{--        <span class="timestamp">{{ $comments->created_at->format('d/m/Y H:i') }}</span>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--    @else--}}
{{--    <p>Chưa có bình luận nào cho phòng này</p>--}}
{{--    @endif--}}
</div>
<h3 style="margin-top: 12px;">Phản hồi</h3>

<form method="POST" action="{{ route('add_cmt') }}">
    @csrf
    <input type="hidden" name="room_id" value="{{ $rooms->id }}">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <textarea name="comment" placeholder="Viết bình luận của bạn"></textarea>
    <button type="submit">Gửi</button>
</form>
</div>
</main>
@endsection
