@extends('layouts.admin')@section('title')  @if(!empty($contact_service)) Create @else Edit @endif Contact Service @endsection@section('content')    <div class="row justify-content-center">        <div class="col-lg-6 mt-4">            <h1>@if(empty($contact_service)) Create @else Edit @endif Contact Service</h1>            @if(empty($contact_service))            {!! Form::open(['method'=>'POST', 'action' => 'ContactServiceController@store', 'files'=>true]) !!}            @else                {!! Form::open(['method'=>'PUT', 'action' => ['ContactServiceController@update', $contact_service->id], 'files'=>true]) !!}            @endif            <div class= "form-group" >                {!! Form::label('title_hy', 'Title AM *') !!}                {!! Form::text('title_hy', isset($contact_service)?$contact_service->title_hy:'', ['class' => $errors->has('title_hy') ? 'form-control is-invalid' : 'form-control',]) !!}                @if ($errors->has('title_hy'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>                @endif            </div>            <div class= "form-group" >                {!! Form::label('title_ru', 'Title RU *') !!}                {!! Form::text('title_ru', isset($contact_service)?$contact_service->title_ru:'', ['class' => $errors->has('title_ru') ? 'form-control is-invalid' : 'form-control' ]) !!}                @if ($errors->has('title_ru'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('title_ru') }}</div>                @endif            </div>            <div class= "form-group" >                {!! Form::label('title_en', 'Title EN *') !!}                {!! Form::text('title_en', isset($contact_service)?$contact_service->title_en:'', ['class' => $errors->has('title_en') ? 'form-control is-invalid' : 'form-control']) !!}                @if ($errors->has('title_en'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>                @endif            </div>            <div class= "form-group" >                {!! Form::label('email', 'Email ') !!}                {!! Form::text('email', isset($contact_service)?$contact_service->email:'', ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}                @if ($errors->has('email'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>                @endif            </div>            <div class= "form-group" >                {!! Form::label('phone', 'Phone ') !!}                {!! Form::text('phone', isset($contact_service)?$contact_service->phone:'', ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control']) !!}                @if ($errors->has('phone'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>                @endif            </div>            <div class="form-group">                {!! Form::token() !!}                {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) !!}            </div>            {!! Form::close() !!}        </div>    </div>@endsection