@extends('layouts.app')

@section('content')
<div class="about d-flex w-100 justify-content-center">
    <div class="d-flex flex-column">
        <span>ՄԵՐ ՓՈՐՁԸ</span>
        <div class="circles">
            <!--            <img src="./images/rings.png" alt="">-->
            <img class="redCircle" src="../../public/front/images/redCircle.png" alt="">
            <img class="transparentCircle" src="../../public/front/images/transparentCircle.png" alt="">
            <img class="blueCircle" src="../../public/front/images/blueCircle.png" alt="">
        </div>
    </div>
    <div>
        <p>«Էլլիպս ՋիԷյ» ՍՊԸ-ն Հայաստանում անվտանգության համակարգերի ոլորտում գործող առաջին ձեռնարկությունն է:
            Այն ստեղծվել է 1989թ-ին՝ որպես նեղ մասնագիտական կազմակերպություն՝ անվտանգության տեխնիկական միջոցների
            նախագծման,
            արտադրության, ներմուծման, տեղադրման և սպասարկման ոլորտում։</p>
        <div class="row">
            <div class="col text-light">
                <h2 data-number="30"></h2>
                <p>Տարվա փորձ</p>
            </div>
            <div class="col text-light">
                <h2 data-number="250"></h2>
                <p>Իրականացված նախագծեր</p>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <h2 data-number="40"></h2>
                <p>Մասնագիտացված բրենդեր</p>
            </div>
            <div class="col">
                <h2 data-number="100"></h2>
                <p>Բարձրակարգ մասնագետներ</p>
            </div>
        </div>
    </div>
</div>
@endsection
