@extends('layouts.admin')@section('title')  @if(!empty($slider)) Create @else Edit @endif category @endsection@section('content')    <div class="row justify-content-center">        <div class="col-lg-6 mt-4">            <h1>@if(empty($slider)) Create @else Edit @endif category</h1>            @if(empty($slider))            {!! Form::open(['method'=>'POST', 'action' => 'SliderImageController@store', 'files'=>true]) !!}            @else                {!! Form::open(['method'=>'PUT', 'action' => ['SliderImageController@update', $slider->id], 'files'=>true]) !!}            @endif            <div class= "form-group" >                {!! Form::label('title', 'Title') !!}                {!! Form::text('title', isset($slider)?$slider->title:'', ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control',]) !!}                @if ($errors->has('title'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>                @endif            </div>            <div class= "form-group" >                {!! Form::label('url', 'Url') !!}                {!! Form::text('url', isset($slider)?$slider->url:'', ['class' => $errors->has('url') ? 'form-control is-invalid' : 'form-control' ]) !!}                @if ($errors->has('url'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>                @endif            </div>            @php($langs = ['hy'=>'AM','ru'=>'RU','en'=>'EN'])            <div class= "form-group" >                {!! Form::label('lang', 'Title EN *') !!}                <select name="lang" class="form-control @if ($errors->has('lang')) is-invalid @endif">                    @if(!empty($langs))                        @foreach($langs as $key=>$lang)                            <option @if(isset($slider) && $slider->lang == $key) selected @endif value="{{$key}}">{{$lang}}</option>                        @endforeach                    @endif                </select>                @if ($errors->has('lang'))                    {{--{{ dd($errors->all()) }}--}}                    <div class="invalid-feedback">{{ $errors->first('lang') }}</div>                @endif            </div>            <div class="form-group">                {!! Form::label('image', 'Image *') !!}                {!! Form::file('image', ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}                @if ($errors->has('image'))                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>                @endif                @if( isset($slider))                    <img width="100px" src="{{asset('files/'.$slider->image)}}" alt="">                @endif            </div>            <div class="form-group">                {!! Form::token() !!}                {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) !!}            </div>            {!! Form::close() !!}        </div>    </div>@endsection