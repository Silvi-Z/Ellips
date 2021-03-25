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

                {!! Form::textarea('company_hy', isset($about)?$about->company_hy:'', ['rows'=>5, 'class' => $errors->has('company_hy') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('company_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('company_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('company_ru', 'Company RU *') !!}

                {!! Form::textarea('company_ru', isset($about)?$about->company_ru:'', ['rows'=>5, 'class' => $errors->has('company_ru') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('company_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('company_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('company_en', 'Company EN *') !!}

                {!! Form::textarea('company_en', isset($about)?$about->company_en:'', ['rows'=>5, 'class' => $errors->has('company_en') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('company_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('company_en') }}</div>

                @endif
            </div>

            <div class="form-group">

                {!! Form::label('text_hy', 'DESCRIPTION 1 AM *') !!}

                {!! Form::textarea('text_hy', isset($about)?$about->text_hy:'', ['class' => $errors->has('text_hy') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('text_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_ru', 'DESCRIPTION 1 RU *') !!}

                {!! Form::textarea('text_ru', isset($about)?$about->text_ru:'', ['class' => $errors->has('text_ru') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('text_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_en', 'DESCRIPTION 1 EN *') !!}

                {!! Form::textarea('text_en', isset($about)?$about->text_en:'', ['class' => $errors->has('text_en') ? 'form-control  is-invalid' : 'form-control ']) !!}

                @if ($errors->has('text_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_en') }}</div>

                @endif
            </div>

            <div class="form-group">

                {!! Form::label('text_2_hy', 'DESCRIPTION 2 AM *') !!}

                {!! Form::textarea('text_2_hy', isset($about)?$about->text_2_hy:'', ['class' => $errors->has('text_2_hy') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_2_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_2_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_2_ru', 'DESCRIPTION 2 RU *') !!}

                {!! Form::textarea('text_2_ru', isset($about)?$about->text_2_ru:'', ['class' => $errors->has('text_2_ru') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_2_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_2_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_2_en', 'DESCRIPTION 2 EN *') !!}

                {!! Form::textarea('text_2_en', isset($about)?$about->text_2_en:'', ['class' => $errors->has('text_2_en') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_2_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_2_en') }}</div>

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



