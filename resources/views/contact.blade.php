@extends('layouts.app')
@section('title') @lang('static.Contact us') @endsection
@section('css')
{{--    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .fa {
            margin-left: -12px;
            margin-right: 8px;
        }
    </style>
@endsection

@section('content')
    <main class="contactPageWrapper">
        <h1>@lang('static.Contact us')</h1>
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
                                    <div class="col-md-4 col-6">
                                        <div>
                                            <div class="serviceContact">{{ $contact_service->{'title_'.$lang} }}</div>
                                            <p class="numbers">{{ $contact_service->phone }}</p>
                                            <p class="emailAddress">{{ $contact_service->email }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col-md-12 col-6">
                                <div class="serviceContact">@lang('static.Follow Us!')</div>
                                <div class="social">
                                    <a target="_blank" href="https://www.facebook.com/www.sec.am">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="hoverIcon" d="M40 20C40 8.95312 31.0469 0 20 0C8.95312 0 0 8.95312 0 20C0 31.0469 8.95312 40 20 40C20.1172 40 20.2344 40 20.3516 39.9922V24.4297H16.0547V19.4219H20.3516V15.7344C20.3516 11.4609 22.9609 9.13281 26.7734 9.13281C28.6016 9.13281 30.1719 9.26562 30.625 9.32812V13.7969H28C25.9297 13.7969 25.5234 14.7812 25.5234 16.2266V19.4141H30.4844L29.8359 24.4219H25.5234V39.2266C33.8828 36.8281 40 29.1328 40 20Z" fill="black"/>
                                        </svg>
                                    </a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCFMpy6JYN7D_-Rzjkbp-Crg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path class="hoverIcon" d="M10.5078 21.4764H12.0935V30.0587H13.5936V21.4764H15.2088V20.0708H10.5078V21.4764Z" fill="black"/>
                                            <path class="hoverIcon" d="M23.1913 22.5251C22.6954 22.5251 22.2325 22.796 21.7976 23.332V20.0698H20.4492V30.0582H21.7976V29.3371C22.2489 29.8941 22.7113 30.1609 23.1913 30.1609C23.7278 30.1609 24.0887 29.8785 24.2688 29.3245C24.3592 29.009 24.4054 28.5134 24.4054 27.8247V24.8612C24.4054 24.1566 24.3592 23.6647 24.2688 23.3656C24.0891 22.8074 23.7274 22.5251 23.1913 22.5251ZM23.0563 27.9303C23.0563 28.603 22.859 28.9345 22.4695 28.9345C22.2481 28.9345 22.0226 28.8285 21.7971 28.6026V24.067C22.0226 23.8439 22.2481 23.7384 22.4695 23.7384C22.8586 23.7384 23.0563 24.0829 23.0563 24.754V27.9303Z" fill="black"/>
                                            <path class="hoverIcon" d="M17.9336 28.3033C17.6345 28.726 17.3517 28.9343 17.0808 28.9343C16.9008 28.9343 16.7981 28.8283 16.7653 28.6188C16.753 28.5754 16.753 28.4109 16.753 28.095V22.6157H15.4043V28.4997C15.4043 29.0255 15.4497 29.3807 15.5234 29.6066C15.6588 29.9839 15.9584 30.1607 16.3921 30.1607C16.8885 30.1607 17.3975 29.8611 17.9336 29.2465V30.0584H19.2832V22.6157H17.9336V28.3033Z" fill="black"/>
                                            <path class="hoverIcon" d="M19.0901 15.7409C19.5292 15.7409 19.7399 15.3926 19.7399 14.697V11.5334C19.7399 10.8373 19.5292 10.4907 19.0901 10.4907C18.6506 10.4907 18.4395 10.8377 18.4395 11.5334V14.697C18.4395 15.393 18.6506 15.7409 19.0901 15.7409Z" fill="black"/>
                                            <path class="hoverIcon" d="M20 0C8.95427 0 0 8.95427 0 20C0 31.0457 8.95427 40 20 40C31.0457 40 40 31.0457 40 20C40 8.95427 31.0457 0 20 0ZM22.2245 9.35448H23.5834V14.8919C23.5834 15.2115 23.5834 15.3772 23.5998 15.4218C23.6297 15.6329 23.7369 15.741 23.9194 15.741C24.1919 15.741 24.478 15.5298 24.7804 15.103V9.35448H26.143V16.8753H24.7804V16.0552C24.2377 16.6772 23.7205 16.9788 23.2233 16.9788C22.7847 16.9788 22.4818 16.8008 22.3452 16.4203C22.2699 16.1923 22.2245 15.8326 22.2245 15.3019V9.35448ZM17.0774 11.8069C17.0774 11.0028 17.2141 10.4151 17.5038 10.035C17.8807 9.52061 18.4115 9.26363 19.0907 9.26363C19.7733 9.26363 20.3036 9.52061 20.6805 10.035C20.9661 10.4147 21.1028 11.0028 21.1028 11.8069V14.4405C21.1028 15.2401 20.9661 15.833 20.6805 16.2091C20.3036 16.7222 19.7733 16.9788 19.0907 16.9788C18.4115 16.9788 17.8807 16.7222 17.5038 16.2091C17.2141 15.833 17.0774 15.2397 17.0774 14.4405V11.8069ZM13.433 6.78302L14.506 10.7462L15.5368 6.78302H17.0652L15.2471 12.7881V16.8757H13.7363V12.7881C13.5992 12.0638 13.2968 11.0028 12.8119 9.59509C12.4935 8.65841 12.1616 7.71887 11.8433 6.78302H13.433ZM30.7666 30.7155C30.4933 31.9018 29.5231 32.7775 28.3548 32.908C25.5873 33.217 22.7879 33.2186 19.9988 33.217C17.2108 33.2186 14.4098 33.217 11.6432 32.908C10.4749 32.7775 9.50425 31.9022 9.23171 30.7155C8.84256 29.0259 8.84256 27.1808 8.84256 25.4408C8.84256 23.7009 8.84747 21.8562 9.23621 20.1661C9.50916 18.9794 10.479 18.1037 11.6473 17.9736C14.4143 17.6647 17.2149 17.663 20.0037 17.6647C22.7916 17.663 25.5922 17.6647 28.3593 17.9736C29.5276 18.1041 30.4982 18.9794 30.772 20.1661C31.1599 21.8562 31.1574 23.7009 31.1574 25.4408C31.1574 27.1808 31.1558 29.0259 30.7666 30.7155Z" fill="black"/>
                                            <path class="hoverIcon" d="M27.4868 22.5249C26.7969 22.5249 26.2612 22.7782 25.8717 23.2877C25.5856 23.6641 25.4551 24.246 25.4551 25.0411V27.6482C25.4551 28.4392 25.6012 29.0252 25.8884 29.3979C26.2776 29.9062 26.8149 30.1603 27.5203 30.1603C28.2246 30.1603 28.7774 29.8939 29.1506 29.3533C29.3143 29.1144 29.4207 28.8439 29.4657 28.5452C29.4784 28.4101 29.4944 28.111 29.4944 27.676V27.48H28.119C28.119 28.0201 28.1014 28.3201 28.0896 28.3933C28.0126 28.7539 27.8187 28.9339 27.4868 28.9339C27.0236 28.9339 26.7969 28.5902 26.7969 27.9019V26.5818H29.4944V25.0403C29.4944 24.2452 29.3597 23.6633 29.077 23.2868C28.7001 22.7786 28.1636 22.5249 27.4868 22.5249ZM28.1464 25.4597H26.7977V24.771C26.7977 24.0828 27.024 23.7386 27.4745 23.7386C27.9206 23.7386 28.1464 24.0832 28.1464 24.771V25.4597Z" fill="black"/>
                                        </svg>
                                    </a>
                                    <a target="_blank" href="https://www.google.com/maps/place/ELLIPS+GA/@40.213124,44.521059,15z/data=!4m5!3m4!1s0x0:0xb57ecc12190ddc0f!8m2!3d40.213124!4d44.521059">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="hoverIcon" d="M20.7592 13.7776C20.7592 11.0053 19.1064 6.69385 15.9199 6.69385C14.9182 6.69385 13.8448 7.1939 13.2286 7.96444C12.5746 8.77426 12.3848 9.81037 12.3848 10.8146C12.3848 13.3926 13.8816 17.6651 17.1872 17.6651C18.1468 17.6651 19.1809 17.2056 19.7988 16.5889C20.6823 15.7005 20.7592 14.4712 20.7592 13.7776Z" fill="black"/>
                                            <path class="hoverIcon" d="M18.6842 23.9032C18.3781 23.8647 18.1858 23.8647 17.8019 23.8647C17.4553 23.8647 15.3802 23.9405 13.7676 24.4831C12.923 24.7891 10.4648 25.714 10.4648 28.447C10.4648 31.1814 13.1157 33.1468 17.2258 33.1468C20.9148 33.1468 22.8745 31.3717 22.8745 28.988C22.8741 27.0185 21.6063 25.9828 18.6842 23.9032Z" fill="black"/>
                                            <path class="hoverIcon" d="M20 0C8.95427 0 0 8.95427 0 20C0 31.0457 8.95427 40 20 40C31.0457 40 40 31.0457 40 20C40 8.95427 31.0457 0 20 0ZM15.3408 34.7601C9.769 34.7601 7.08133 32.1052 7.08133 29.2542C7.08133 27.8691 7.77166 25.9069 10.0387 24.5586C12.4194 23.0952 15.6485 22.9041 17.3782 22.7851C16.8385 22.0927 16.2259 21.3614 16.2259 20.1682C16.2259 19.5147 16.4182 19.1292 16.6081 18.6668C16.185 18.7061 15.7643 18.7437 15.3796 18.7437C11.3088 18.7437 9.00379 15.7001 9.00379 12.6977C9.00379 10.9291 9.80951 8.96409 11.4611 7.53964C13.652 5.73013 16.6457 5.23908 18.722 5.23908H26.2916L23.7934 6.8088H21.4134C22.2965 7.53964 24.1379 9.07949 24.1379 12.007C24.1379 14.8538 22.5264 16.205 20.9138 17.474C20.4133 17.9736 19.8367 18.5125 19.8367 19.3608C19.8367 20.2058 20.4137 20.6674 20.8352 21.0169L22.2195 22.0923C23.9104 23.5159 25.4474 24.8254 25.4465 27.4844C25.4461 31.1047 21.9478 34.7601 15.3408 34.7601ZM31.9202 19.5294V23.4021H30.019V19.5294H26.1753V17.6074H30.019V13.7584H31.9202V17.6074H35.7823V19.5294H31.9202Z" fill="black"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form">
                        <form method="POST" id="contactForm" action="{{route('postContact')}}">
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
                            <button id="submit" type="submit">@lang('static.Send')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>
    </main>
@endsection
@section('script')
    <script>
        $("#submit").click(function (e) {
            e.preventDefault()
            let self =  $(this);
            let email = $("#email");
            let message = $("#message");
            let phone = $("#phone");
            let name = $("#name");
            let error = false;
            if(!checkfield(name) && error == false){
                error = true;
            }
            console.log(phone)
            if(!checkfield(email)){
                error = true;
            }


            if(!checkfield(phone)){
                error = true;
            }
            if(!checkfield(message)){
                error = true;
            }
            if(!validateEmail(email.val())){
                email.closest('.justify-content-end').css('border-color','red');
                error = true
            }
            if(error){
                return false;
            }

            self.html('<i class="fa fa-spinner fa-spin"></i>{{trans('static.Sending')}}')

            let formData = $("#contactForm").serialize();

            let page = Number($(this).attr('data-page'));
            $.ajax({
                url: '{{route('postContact')}}',method:'POST', data: formData, success: function (result) {
                    self.html('{{trans('static.Sent')}}')
                    setTimeout(function () {
                        self.html('{{trans('static.Sent')}}')
                    },2000);
                    setTimeout(function () {
                        self.html('{{trans('static.Send')}}')
                        email.val('')
                        message.val('')
                        phone.val('')
                        name.val('')
                    },5000)

                },
                error:function (data)
                {
                    console.log(data.responseJSON)
                }
            });
        });

        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        function checkfield(input){
            if(!input.val()){
                input.closest('.justify-content-end').css('border-color','red');
                return false;
            }
            input.closest('.justify-content-end').css('border-color','#CFD9E2');
            return true
        }
    </script>
@endsection
