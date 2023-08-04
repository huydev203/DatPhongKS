@extends('home.layouts.layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <img class="card-img-top" src="{{asset('storage/'.$rooms->image)}}" alt="">
                    <div class="card-body">
                        <h1>{{ $rooms->name }}</h1>
                        <p class="card-text">{{ $rooms->description }}</p>
                        <p class="card-text"><strong>Price:</strong> {{ $rooms->price }}</p>
                        <a href="#" class="btn btn-primary">Book now</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Facilities</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_bedroom.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>1 Bedroom</strong></p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_livingroom.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>1 Living Room</strong></p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_bathroom.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>1 Bathroom</strong></p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_diningroom 1.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>1 Dining Room</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_wifi 1.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>10 Mbps</strong></p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_kulkas.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>1 Refrigerator</strong></p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('image/home/ic_tv.png')}}" alt="" class="img-fluid">
                                <p class="mt-2 text-center"><strong>1 TV</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Reviews</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="mb-0">Excellent</h5>
                                <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> (11 reviews)</p>
                            </div>
                            <div class="col-md-8">
                                <div class="well well-sm">
                                    <div class="text-right">
                                        <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
                                    </div>
                                    <div class="row" id="post-review-box" style="display:none;">
                                        <div class="col-md-12">
                                            <form accept-charset="UTF-8" action="#" method="post">
                                                <input id="ratings-hidden" name="rating" type="hidden">
                                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea><br>
                                                <div class="text-right">
                                                    <div class="stars starrr" data-rating="0"></div>
                                                    <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                                        <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="review-block">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{asset('image/user.jpg')}}" class="img-rounded" alt="user-image">
                                            <div class="review-block-name"><a href="#">nktpro</a></div>
                                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="review-block-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="review-block-title">Good Hotel</div>
                                            <div class="review-block-description">This is a good hotel, located in a great location with an awesome sea view. Rooms are clean and tidy with good level of amenities...</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-block">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{asset('image/user.jpg')}}" class="img-rounded" alt="user-image">
                                            <div class="review-block-name"><a href="#">nktpro</a></div>
                                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="review-block-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="review-block-title">Great Food</div>
                                            <div class="review-block-description">Their breakfast is really exceptional, could not forget the variety that they offered. From western to eastern cuisines, everything was very delicious...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Hotel Rules</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li>-No smoking, parties, or events</li>
                            <li>-Check-in time is 8:00 AM</li>
                            <li>-No pets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
