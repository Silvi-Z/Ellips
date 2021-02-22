@extends('layouts.app')
@section('title') @lang('static.Contact us') @endsection

@section('content')
    <main class="contactPageWrapper">
        <div class="h1Title">@lang('static.Contact us')</div>
        <div class="contactPage">
            <div class="container">
                <div class="row contactInfo">
                    <div class="col-xl-6">
                        <div class="row">
                            @if(!empty($cities) && count($cities))
                                @foreach($cities as $city)
                                    <div class="col-md-6">
                                        <div>
                                            <div class="city">{{ $city->{'title_'.$lang} }}</div>
                                            <div class="showMap">@lang('static.(See on map)')</div>
                                            @if(!empty($city->city_addresses) && count($city->city_addresses))
                                                @foreach($city->city_addresses as $city_address)
                                                    <p class="address">{{ $city_address->{'title_'.$lang} }}</p>
                                                @endforeach
                                            @endif
                                            <p class="numbers">
                                                @if(!empty($city->city_phones) && count($city->city_phones))
                                                    @foreach($city->city_phones as $city_phone)
                                                        {{ $city_phone->phone }} <br>
                                                    @endforeach
                                                @endif
                                            </p>
                                            @if(!empty($city->city_emails) && count($city->city_emails))
                                                @foreach($city->city_emails as $city_email)
                                                    <p class="emailAddress">{{ $city_email->email }}</p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                            @if(!empty($contact_services) && count($contact_services))
                                @foreach($contact_services as $contact_service)
                                    <div class="col-md-12 col-6">
                                        <div>
                                            <div class="serviceContact">{{ $contact_service->{'title_'.$lang} }}</div>
                                            <p class="numbers">{{ $contact_service->phone }}</p>
                                            <p class="emailAddress">{{ $contact_service->email }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col-md-7 col-6">
                                <div class="serviceContact">@lang('static.Follow Us!')</div>
                                <div class="social">
                                    <a href="https://www.facebook.com/www.sec.am">
                                        <div></div>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCFMpy6JYN7D_-Rzjkbp-Crg">
                                        <div></div>
                                    </a>
                                    <a href="https://www.google.com/maps/place/ELLIPS+GA/@40.213124,44.521059,15z/data=!4m5!3m4!1s0x0:0xb57ecc12190ddc0f!8m2!3d40.213124!4d44.521059">
                                        <div></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form">
                        <form method="POST" action="{{route('postContact')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="name">
                                    @if ($errors->has('name'))
                                        <span class="errorMessage">{{ $errors->first('name') }} </span>
                                    @endif
                                    <input id="name" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('static.YOUR NAME')'" placeholder="@lang('static.YOUR NAME')">
                                </label>
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="email">
                                    @if ($errors->has('email'))
                                        <span class="errorMessage">{{ $errors->first('email') }} </span>
                                    @endif
                                    <input id="email" name="email" type="email"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('static.YOUR EMAIL')'" placeholder="@lang('static.YOUR EMAIL')">
                                </label>
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="phone">
                                    @if ($errors->has('phone'))
                                        <span class="errorMessage">{{ $errors->first('phone') }} </span>
                                    @endif
                                    <input id="phone" name="phone" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('static.YOUR PHONE')'" placeholder="@lang('static.YOUR PHONE')">
                                </label>
                            </div>
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="message">
                                    @if ($errors->has('message'))
                                        <span class="errorMessage">{{ $errors->first('message') }} </span>
                                    @endif
                                    <textarea rows="1" id="message" name="message" type="textarea"
                                              onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('static.YOUR MESSAGE')'" placeholder="@lang('static.YOUR MESSAGE')"></textarea>
                                </label>
                            </div>
                            <button type="submit">@lang('static.Send')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>
    </main>
@endsection
