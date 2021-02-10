@extends('layouts.admin')



@section('title') Statistics @endsection






@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">



            <h1>Statistics</h1>


        
                {!! Form::open(['method'=>'POST', 'action' => 'StatisticController@index']) !!}


            <input type="hidden" name="id" value="{{isset($statistic)?$statistic->id:''}}">

            <div class="form-group">

                {!! Form::label('year_exp', 'Years of experience *') !!}

                {!! Form::text('year_exp', isset($statistic)?$statistic->year_exp:'', ['class' => $errors->has('year_exp') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('year_exp'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('year_exp') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('works', 'Implemented initiatives *') !!}

                {!! Form::text('works', isset($statistic)?$statistic->works:'', ['class' => $errors->has('works') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('works'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('works') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('work_brands', 'Specialized brands *') !!}

                {!! Form::text('work_brands', isset($statistic)?$statistic->work_brands:'', ['class' => $errors->has('work_brands') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('work_brands'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('work_brands') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('exp_workers', 'Highly qualified specialists *') !!}

                {!! Form::text('exp_workers', isset($statistic)?$statistic->exp_workers:'', ['class' => $errors->has('exp_workers') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('exp_workers'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('exp_workers') }}</div>

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







