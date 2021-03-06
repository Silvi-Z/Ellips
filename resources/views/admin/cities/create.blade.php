@extends('layouts.admin')



@section('title')  @if(!empty($city)) Create @else Edit @endif City @endsection






@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">



            <h1>@if(empty($city)) Create @else Edit @endif City</h1>


            @if(empty($city))
            {!! Form::open(['method'=>'POST', 'action' => 'CityController@store', 'files'=>true]) !!}
            @else
                {!! Form::open(['method'=>'PUT', 'action' => ['CityController@update', $city->id], 'files'=>true]) !!}
            @endif




            <div class= "form-group" >

                {!! Form::label('title_hy', 'Title AM *') !!}

                {!! Form::text('title_hy', isset($city)?$city->title_hy:'', ['class' => $errors->has('title_hy') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('title_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('title_ru', 'Title RU *') !!}

                {!! Form::text('title_ru', isset($city)?$city->title_ru:'', ['class' => $errors->has('title_ru') ? 'form-control is-invalid' : 'form-control' ]) !!}

                @if ($errors->has('title_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_ru') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('title_en', 'Title EN *') !!}

                {!! Form::text('title_en', isset($city)?$city->title_en:'', ['class' => $errors->has('title_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('title_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>

                @endif

            </div>


            <div class="form-group">



                    <label for="title_hy">Addresses  <button style="cursor: pointer" type="button" id="add_adrress">+</button></label>
                <div class="address-group addresses">
                @if(isset($city) && $city->city_addresses)
                    @foreach($city->city_addresses as $city_address)
                        <div class="row addressrow">
                            <div><input class="form-control" name="adresses[0][title_hy]" type="text" value="{{$city_address->title_hy}}" placeholder="AM"></div>
                            <div><input class="form-control" name="adresses[0][title_ru]" type="text" value="{{$city_address->title_ru}}" placeholder="RU"></div>
                            <div><input class="form-control" name="adresses[0][title_en]" type="text" value="{{$city_address->title_en}}" placeholder="EN"></div> <span class="delete_row">X</span>
                        </div>
                    @endforeach
                @else
                    <div class="row addressrow">
                        <div><input class="form-control" name="adresses[0][title_hy]" type="text" value="" placeholder="AM"></div>
                        <div><input class="form-control" name="adresses[0][title_ru]" type="text" value="" placeholder="RU"></div>
                        <div><input class="form-control" name="adresses[0][title_en]" type="text" value="" placeholder="EN"></div>
                    </div>
                @endif



                </div>
                @if ($errors->has('adresses'))

                    <div class="invalid-feedback">{{ $errors->first('adresses') }}</div>

                @endif

            </div>
            <div class="form-group">
                <label for="title_hy">Emails  <button style="cursor: pointer"  type="button" id="add_email">+</button></label>
                <div class="emails-group">
                    @if(isset($city) && $city->city_emails)
                        @foreach($city->city_emails as $city_email)
                            <div class="emailAddress emailInput"><input class="form-control" name="emails[][email]" type="text" value="{{$city_email->email}}" ></div>
                        @endforeach
                    @else
                        <div class="emailAddress emailInput"><input class="form-control" name="emails[][email]" type="text" value="" ></div>
                    @endif
                </div>
                @if ($errors->has('emails'))

                    <div class="invalid-feedback">{{ $errors->first('emails') }}</div>

                @endif

            </div>
            <div class="form-group">
                <label for="title_hy">Phones <button style="cursor: pointer"  type="button" id="add_phone">+</button></label>
                <div class="phone-group">
                    @if(isset($city) && $city->city_phones)
                        @foreach($city->city_phones as $city_phone)
                            <div class="phoneAddress"><input class="form-control" name="phones[][phone]" type="text" value="{{$city_phone->phone}}" ></div>
                        @endforeach
                    @else
                        <div class="phoneAddress"><input class="form-control" name="phones[][phone]" type="text" value="" ></div>
                    @endif

                </div>

                @if ($errors->has('phones'))

                    <div class="invalid-feedback">{{ $errors->first('phones') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::token() !!}

                {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) !!}

            </div>





            {!! Form::close() !!}



        </div>

    </div>



@endsection
@section('modal')
    <script>
        $(document).on('click', '.delete_row', function () {
            $(this).parent().remove();
        })
        $(document).on('click', '#add_email', function () {
            $('.emails-group').append(' <div class="emailAddress emailInput"><input  class="form-control" name="emails[][email]" type="text" value="" ><button class="delete_row">X</button></div>')
        })
        $(document).on('click', '#add_phone', function () {
            $('.phone-group').append(' <div class="phoneAddress"><input  class="form-control" name="phones[][phone]" type="text" value="" ><button class="delete_row">X</button></div>')
        })
        $(document).on('click', '#add_adrress', function () {
            var count = $('.addressrow').length;
            $('.address-group').append(' <div class="row address" >\n' +
                '                        <div><input class="form-control" name="adresses['+count+'][title_hy]" type="text" value="" placeholder="AM"></div>\n' +
                '                        <div><input class="form-control" name="adresses['+count+'][title_ru]" type="text" value="" placeholder="RU"></div>\n' +
                '                        <div><input class="form-control" name="adresses['+count+'][title_en]" type="text" value="" placeholder="EN"></div>\n' +
                '                    <button class="delete_row">X</button></div>')
        })
    </script>
@endsection






