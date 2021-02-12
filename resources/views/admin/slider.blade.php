@extends('layouts.admin')



@section('title') Statistics @endsection






@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">



            <h1>Statistics</h1>


        
                {!! Form::open(['method'=>'POST', 'action' => 'SliderController@update','files'=>true]) !!}


            <input type="hidden" name="id" value="{{isset($slider)?$slider->id:''}}">
            @include('admin.includes.file', ['page' => 'slider', 'item'=>isset($slider)?$slider:false])



            <div class="form-group">

                {!! Form::token() !!}

                {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) !!}

            </div>

            {!! Form::close() !!}



        </div>

    </div>



@endsection







