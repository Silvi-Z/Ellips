@extends('layouts.admin')



@section('title')  @if(!empty($portfolio)) Create @else Edit @endif portfolio @endsection






@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">


            <h1>@if(empty($portfolio)) Create @else Edit @endif portfolio</h1>


            @if(empty($portfolio))
                {!! Form::open(['method'=>'POST', 'action' => 'PortfolioController@store', 'files'=>true]) !!}
            @else
                {!! Form::open(['method'=>'PUT', 'action' => ['PortfolioController@update', $portfolio->id], 'files'=>true]) !!}
            @endif


            <div class="form-group">

                {!! Form::label('title_hy', 'Title AM *') !!}

                {!! Form::text('title_hy', isset($portfolio)?$portfolio->title_hy:'', ['class' => $errors->has('title_hy') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('title_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('title_ru', 'Title RU *') !!}

                {!! Form::text('title_ru', isset($portfolio)?$portfolio->title_ru:'', ['class' => $errors->has('title_ru') ? 'form-control is-invalid' : 'form-control' ]) !!}

                @if ($errors->has('title_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_ru') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('title_en', 'Title EN *') !!}

                {!! Form::text('title_en', isset($portfolio)?$portfolio->title_en:'', ['class' => $errors->has('title_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('title_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('client_hy', 'client AM *') !!}

                {!! Form::text('client_hy', isset($portfolio)?$portfolio->client_hy:'', ['class' => $errors->has('client_hy') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('client_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('client_hy') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('client_ru', 'client RU *') !!}

                {!! Form::text('client_ru', isset($portfolio)?$portfolio->client_ru:'', ['class' => $errors->has('client_ru') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('client_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('client_hy') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('client_en', 'client EN *') !!}

                {!! Form::text('client_en', isset($portfolio)?$portfolio->client_en:'', ['class' => $errors->has('client_en') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('client_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('client_en') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('work_hy', 'Work AM *') !!}

                {!! Form::text('work_hy', isset($portfolio)?$portfolio->work_hy:'', ['class' => $errors->has('work_hy') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('work_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('work_hy') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('work_ru', 'Work RU *') !!}

                {!! Form::text('work_ru', isset($portfolio)?$portfolio->work_ru:'', ['class' => $errors->has('work_ru') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('work_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('work_hy') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('work_en', 'Work EN *') !!}

                {!! Form::text('work_en', isset($portfolio)?$portfolio->work_en:'', ['class' => $errors->has('work_en') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('work_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('work_en') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('text_hy', 'DESCRIPTION AM *') !!}

                {!! Form::textarea('text_hy', isset($portfolio)?$portfolio->text_hy:'', ['class' => $errors->has('text_hy') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_ru', 'DESCRIPTION RU *') !!}

                {!! Form::textarea('text_ru', isset($portfolio)?$portfolio->text_ru:'', ['class' => $errors->has('text_ru') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_en', 'DESCRIPTION EN *') !!}

                {!! Form::textarea('text_en', isset($portfolio)?$portfolio->text_en:'', ['class' => $errors->has('text_en') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_en') }}</div>

                @endif
            </div>


            <div class="form-group">

                {!! Form::label('small_text_hy', 'SMALL DESCRIPTION AM *') !!}

                {!! Form::textarea('small_text_hy', isset($portfolio)?$portfolio->small_text_hy:'', ['class' => $errors->has('small_text_hy') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('small_text_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('small_text_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('small_text_ru', 'SMALL DESCRIPTION RU *') !!}

                {!! Form::textarea('small_text_ru', isset($portfolio)?$portfolio->small_text_ru:'', ['class' => $errors->has('small_text_ru') ? 'form-control is-invalid' : 'form-control ']) !!}

                @if ($errors->has('small_text_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('small_text_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('small_text_en', 'SMALL DESCRIPTION EN *') !!}

                {!! Form::textarea('small_text_en', isset($portfolio)?$portfolio->small_text_en:'', ['class' => $errors->has('small_text_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('small_text_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('small_text_en') }}</div>

                @endif
            </div>

            <div class="form-group">

                {!! Form::label('top', 'Top ') !!}
                {!!  Form::checkbox('top', 1,  (isset($portfolio) && $portfolio->top)?true:false, ['class' => $errors->has('top') ? ' is-invalid' : '']); !!}

                @if ($errors->has('top'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('top') }}</div>

                @endif
            </div>


            @include('admin.includes.file', ['page' => 'products', 'item'=>isset($portfolio)?$portfolio:false])
            <div class="form-group">

                {!! Form::token() !!}

                {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) !!}

            </div>


            {!! Form::close() !!}


        </div>

    </div>


@endsection







@section('modal')
    <script type="text/javascript">
        tinymce.init({
            selector: '.html-editor',
            menubar: false,
            height: 200,
            toolbar: "bold | removeformat | undo redo | styleselect | alignleft aligncenter alignright alignjustify | fontsizeselect forecolor",
            valid_elements : ""
                +"a[href|target],"
                +"b,"
                +"br,"
                +"font[color|face|size],"
                +"img[src|id|width|height|align|hspace|vspace],"
                +"i,"
                +"li,"
                +"p[align|class],"
                +"h1,"
                +"h2,"
                +"h3,"
                +"h4,"
                +"h5,"
                +"h6,"
                +"span[class],"
                +"textformat[blockindent|indent|leading|leftmargin|rightmargin|tabstops],"
                +"u"
        });
    </script>
@endsection
