@extends('layouts.app')
@section('content')

<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Find Nutritionist</h2>
            </div>
            <div class="col-12">
                <a href="{{ url('/') }}">Home</a>
                <a href="">Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Booking Start -->
<div class="booking">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="booking-content">
                    <div class="section-header">
                        <p>Find Nutritionist</p>
                        <h2>Find a Nutritionist & Start Making a Change</h2>
                    </div>
                    <div class="about-text">
                        <p>
                        The nutritionist will help you find the perfect solution to your weight problem, he will make a diet schedule that suits you personally, book an appointment and start the change.
                        </p>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="booking-form">
                    @if (session()->has('success'))
                    <div  style="width: 100%" class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p class="updated">{!! session()->get('success') !!}</p></div>
                        @endif

                    <form  method="post" action="{{route('book.store') }}"
                        >
                        @csrf


                        {{-- <div class="control-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" name="name"  />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="control-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nutritionist Number" required="required" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="control-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mobile"  name="mobile_number"required="required" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="input-group date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Date" name="date" data-target="#date" data-toggle="datetimepicker"/>
                                <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="input-group time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Time" name="time" data-target="#time" data-toggle="datetimepicker"/>
                                <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="input-group">
                                <select  style="
                                background-color: #12cd3d;"class="custom-select form-control" name="guest_number">
                                    <option selected>Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="input-group">
                                <select style="
                                background-color: #12cd3d;" class="custom-select form-control" name="number">
                                    <option selected>Nutritionist number</option>
                                    @foreach($tables as $table)
                                    <option value="{{ $table->id }}">{{ $table->number }} </option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">

                            <textarea  rows="3" class="form-control" id="message" name="note" placeholder="If you any comment, please write it here..."  data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <script> function error(){
                                alert("you must login befor booking")
                            }</script>
                            @if(!Auth::check())
                            <button  onclick="error()" class="btn custom-btn" type="submit">Book Now</button>
                            @else
                            <button class="btn custom-btn" type="submit">Book Now</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->



@endsection
