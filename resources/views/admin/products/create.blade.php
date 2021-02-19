@extends('layouts.admin')



@section('title')  @if(!empty($product)) Create @else Edit @endif Product @endsection






@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">


            <h1>@if(empty($product)) Create @else Edit @endif Product</h1>


            @if(empty($product))
                {!! Form::open(['method'=>'POST', 'action' => 'ProductController@store', 'files'=>true]) !!}
            @else
                {!! Form::open(['method'=>'PUT', 'action' => ['ProductController@update', $product->id], 'files'=>true]) !!}
            @endif


            <div class="form-group">

                {!! Form::label('title_hy', 'Title AM *') !!}

                {!! Form::text('title_hy', isset($product)?$product->title_hy:'', ['class' => $errors->has('title_hy') ? 'form-control is-invalid' : 'form-control',]) !!}

                @if ($errors->has('title_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('title_ru', 'Title RU *') !!}

                {!! Form::text('title_ru', isset($product)?$product->title_ru:'', ['class' => $errors->has('title_ru') ? 'form-control is-invalid' : 'form-control' ]) !!}

                @if ($errors->has('title_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_ru') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('title_en', 'Title EN *') !!}

                {!! Form::text('title_en', isset($product)?$product->title_en:'', ['class' => $errors->has('title_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('title_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('categories[]', 'Categories ') !!}

                <select name="categories[]" multiple class="js-example-basic-single form-control @if ($errors->has('brands')) is-invalid @endif">
                    @if(!empty($categories))
                        @foreach($categories as $category)
                            <option @if(isset($product) && in_array($category->id, $product_categories)) selected @endif value="{{$category->id}}">{{$category->title_en}}</option>
                        @endforeach
                    @endif
                </select>
                @if ($errors->has('categories'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('categories') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('brand_id', 'Brands ') !!}

                <select name="brand_id" class="form-control @if ($errors->has('brand_id')) is-invalid @endif">
                    @if(!empty($brands))
                        @foreach($brands as $barnd)
                            <option @if(isset($product) && $product->barnd_id == $barnd->id) selected @endif value="{{$barnd->id}}">{{$barnd->title_en}}</option>
                        @endforeach
                    @endif
                </select>
                @if ($errors->has('brand_id'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('brand_id') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('systems[]', 'Systems ') !!}

                <select name="systems[]" multiple class=" js-example-basic-single form-control @if ($errors->has('brands')) is-invalid @endif">
                    @if(!empty($systems))
                        @foreach($systems as $system)
                            <option @if(isset($product) && in_array($system->id, $product_systems)) selected @endif value="{{$system->id}}">{{$system->title_en}}</option>
                        @endforeach
                    @endif
                </select>
                @if ($errors->has('systems'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('systems') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('text_hy', 'DESCRIPTION AM *') !!}

                {!! Form::textarea('text_hy', isset($product)?$product->text_hy:'', ['class' => $errors->has('text_hy') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_hy'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_hy') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_ru', 'DESCRIPTION RU *') !!}

                {!! Form::textarea('text_ru', isset($product)?$product->text_ru:'', ['class' => $errors->has('text_ru') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_ru') }}</div>

                @endif
            </div>
            <div class="form-group">

                {!! Form::label('text_en', 'DESCRIPTION EN *') !!}

                {!! Form::textarea('text_en', isset($product)?$product->text_en:'', ['class' => $errors->has('text_en') ? 'form-control html-editor is-invalid' : 'form-control html-editor']) !!}

                @if ($errors->has('text_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('text_en') }}</div>

                @endif
            </div>

            <div class="form-group">

                {!! Form::label('price', 'Price *') !!}

                {!! Form::text('price', isset($product)?$product->price:'', ['class' => $errors->has('price') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('price'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>

                @endif

            </div>

            @include('admin.includes.file', ['page' => 'products', 'item'=>isset($product)?$product:false])
            <div class="form-group">

                {!! Form::token() !!}

                {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) !!}

            </div>


            {!! Form::close() !!}


        </div>

    </div>


@endsection







@section('modal')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.html-editor',
            menubar: false,
            height: 200,
            toolbar: "bold italic fontselect | removeformat | undo redo | styleselect | alignleft aligncenter alignright alignjustify | fontsizeselect forecolor",
        });
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
