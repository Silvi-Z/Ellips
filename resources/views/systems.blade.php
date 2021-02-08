@extends('layouts.app')

@section('content')
    @php
        $systems = [
            [
                "image" => "../images/camera1.png",
                "title" => "Հրդեհամարման համակարգ",
            ],
            [
                "image" => "../images/camera2.png",
                "title" => "Անվտանգության համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Ցածրավոլտ համակարգեր, տեղեկատվական ցանցեր, հեռախոս,TV",
            ],
            [
                "image" => "../images/camera1.png",
                "title" => "Տեսահսկման համակարգեր",
            ],
            [
                "image" => "../images/camera2.png",
                "title" => "Հերթերի կառավարման համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Սելեկտիվ անցումային համակարգ և աշխ․ժ-ի հաշվարկ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Ավտոմատացված կայանման համակարգ (parking)",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Ձայնի ծանուցման համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Ջերմաստիճանի/խոնավություն վերահսկման համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Ճաշարանի վճարային համակարգ էլեկտրոնային քարտերով",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Կշեռքներ և հաշվարկային ծրագրեր",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Վերելակների քարտային համակարգեր",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Քնությունների ավտոմատացված համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Էլեկտրոնային աբոնենտային համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Պարագծային անվտանգության համակարգ",
            ],
            [
                "image" => "../images/camera3.png",
                "title" => "Հյուրանոցների Էներգախնայողության համակարգ",
            ]
        ]
    @endphp
    <main>
        <h1>Համակարգեր և ապրանքներ</h1>
        @include('selectButtons')
        <div class="wrapper">
            <div class="systemsWrapper d-grid">
                @foreach ($systems as $key => $value)
                    <div class="system">
                        <a href="{{route('system')}}">
                            <div class="d-flex align-items-center justify-content-center flex-column">
                                <img src={{asset($value["image"])}} alt="">
                            </div>
                            <div>
                                <h6>{{$value["title"]}}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
