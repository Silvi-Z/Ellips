@extends('layouts.admin')



@section('title') About us @endsection






@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">



            <h1> About us </h1>



            {!! Form::open(['method'=>'POST', 'action' => 'AboutController@index']) !!}


            <input type="hidden" name="id" value="{{isset($about)?$about->id:''}}">

            <div class="form-group">

                {!! Form::label('company_hy', 'Company AM *') !!}

                {!! Form::textarea('company_hy', isset($about)?$about->company_hy:'', ['class' => $errors->has('company_hy') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('company_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('company_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('company_ru', 'Company RU *') !!}

                {!! Form::textarea('company_ru', isset($about)?$about->company_ru:'', ['class' => $errors->has('company_ru') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('company_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('company_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('company_en', 'Company EN *') !!}

                {!! Form::textarea('company_en', isset($about)?$about->company_en:'', ['class' => $errors->has('company_en') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('company_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('company_en') }}</div>

                @endif
            </div>

            <div class="form-group">

                {!! Form::label('text_hy', 'DESCRIPTION AM *') !!}

                {!! Form::textarea('text_hy', isset($about)?$about->text_hy:'', ['class' => $errors->has('text_hy') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_ru', 'DESCRIPTION RU *') !!}

                {!! Form::textarea('text_ru', isset($about)?$about->text_ru:'', ['class' => $errors->has('text_ru') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_en', 'DESCRIPTION EN *') !!}

                {!! Form::textarea('text_en', isset($about)?$about->text_en:'', ['class' => $errors->has('text_en') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_en') }}</div>

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







