@extends('layouts.app')

@section('content')
    @php
        $systems = [
            [
                "image" => "front/images/camera1.png",
                "title" => "Հրդեհամարման համակարգ",
            ],
            [
                "image" => "front/images/camera2.png",
                "title" => "Անվտանգության համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Ցածրավոլտ համակարգեր, տեղեկատվական ցանցեր, հեռախոս,TV",
            ],
            [
                "image" => "front/images/camera1.png",
                "title" => "Տեսահսկման համակարգեր",
            ],
            [
                "image" => "front/images/camera2.png",
                "title" => "Հերթերի կառավարման համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Սելեկտիվ անցումային համակարգ և աշխ․ժ-ի հաշվարկ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Ավտոմատացված կայանման համակարգ (parking)",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Ձայնի ծանուցման համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Ջերմաստիճանի/խոնավություն վերահսկման համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Ճաշարանի վճարային համակարգ էլեկտրոնային քարտերով",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Կշեռքներ և հաշվարկային ծրագրեր",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Վերելակների քարտային համակարգեր",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Քնությունների ավտոմատացված համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Էլեկտրոնային աբոնենտային համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Պարագծային անվտանգության համակարգ",
            ],
            [
                "image" => "front/images/camera3.jpg",
                "title" => "Հյուրանոցների Էներգախնայողության համակարգ",
            ]
        ]
    @endphp
    <main>
        <div class="h1Title">Համակարգեր և ապրանքներ</div>
        @include('selectButtons')
        <div class="wrapper">
            <div class="systemsWrapper d-grid">
                @foreach ($systems as $key => $value)
                    <div class="system">
                        <a href="{{route('system')}}">
                            <div class="systemImgContainer d-flex align-items-center justify-content-center flex-column">
                                <img src="{{asset($value["image"])}}" alt="">
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
