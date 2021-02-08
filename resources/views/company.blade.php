@extends('layouts.app')

@section('content')
{{--    $licenses = json_decode(file_get_contents("licenses.json"),true);--}}
<main>

    <h1>ԸՆԿԵՐՈՒԹՅՈՒՆ</h1>
    <div class="wrapper">
        <div class="aboutCompany">
            <p>
                <span>ԸՆԿԵՐՈՒԹՅՈՒՆ</span> «Էլլիպս Ջիէյ»-ի առաքելությունն է ուսումնասիրել, նախագծել, արտադրել և սպասարկել անվտանգության այնպիսի
                ժամանակակից համակարգեր, որոնք կհամապատասխանեն ցանկացած հաճախորդի պահանջներին
            </p>
            <div>
                <span>ՈՎ ԵՆՔ ՄԵՆՔ</span>
                <p>«Էլլիպս ՋիԷյ» ՍՊԸ-ն Հայաստանում անվտանգության համակարգերի ոլորտում գործող առաջին ձեռնարկությունն է: Այն ստեղծվել է 1989թ-ին՝
                    որպես նեղ մասնագիտական կազմակերպություն՝ անվտանգության տեխնիկական միջոցների նախագծման, արտադրության, ներմուծման, տեղադրման և
                    սպասարկման ոլորտում։Ներկա դրությամբ ձեռնարկությունը զբաղեցնում է մոտ 5500 քառ մետր ադմինիստրատիվ և 4.000 քառ.մետր արտադրական
                    տարածք, որտեղ աշխատում են 100-ից ավելի բարձրակարգ մասնագետներ։ «Էլլիպս ՋիԷյ» ՍՊԸ-ն Հայաստանում անվտանգության համակարգերի
                    ոլորտում գործող միակ ընկերությունն է, որն ունի ծրագրային անվտանգության միջազգային ստանդարտի սերտիֆիկատ՝ ISO 27001:
                    Ձեռնարկությունն ունի նաև որակի կառավարման սերտիֆիկատ ISO 9001:2008 /92Q10758/ և հետևյալ լիցենզիաները՝
                </p>
            </div>
        </div>
    </div>
    <div class="licenses">
<!--        --><?php
//        foreach ($licenses as $key => $value){
//            echo '<div>
//            <h5>'.$value["number"].'</h5>
//            <p>'.$value["text"].'</p>
//        </div>';
//        }
//        ?>
    </div>
    <div class="ourExperience">
        <div class="wrapper">
<!--            --><?php //include 'ourExperience.php'; ?>
        </div>
        <div class="companies">
            <span>ՄԵՐ ԳՈՐԾԸՆԿԵՐՆԵՐԸ</span>
<!--            --><?php //include 'companies/companies.php'; ?>
        </div>
    </div>
    <div class="darkSection">
        <h3>ՊԱՏՄՈՒԹՅՈՒՆ</h3>
        <div class="wrapper">
            <div class="history firstHistory">
                <div>
                    <img src="../../public/front/images/historyImg1.jpg" alt="">
                </div>
                <div>
                    <p>1976 թ.-ին Պոլիտեխնիկական ինստիտուտի ուսանող 22-ամյա Գուրգենը ձեռք է բերում Phakard H8 մակնիշի ավտոմեքենա և
                        10 տարի շարունակ սեփական ուժերով վերանորոգելուց հետո այն վաճառում է գերմանացի մի գնորդի: 1989թ. Էր, Սովետական
                        Միության մութ ու ցուրտ տարիները, երբ Գուրգենի փոքր եղբայրը՝ Ալեքսանը, Ռուսաստանի դաշնությունում պաշտպանում է
                        գիտական ատենախոսությունը, վերադառնում հայրենիք և եղբոր հետ որոշում հիմնել ավտոմատ դարպասների արտադրություն:
                        Մեքենայի վաճառքից վաստակած ամբողջ հասույթով բազմազավակ ընտանիքի տղաները վարձակալում են 216 ք/մ մակերեսով ծածկ,
                        կառուցում պատերը, գնում տարբեր հաստատություններից դուրս գրված հաստոցները, վերանորոգում դրանք և սկսում արտադրությունը:
                    </p>
                </div>
            </div>
            <div class="history">
                <div>
                    <p>1976 թ.-ին Պոլիտեխնիկական ինստիտուտի ուսանող 22-ամյա Գուրգենը ձեռք է բերում Phakard H8 մակնիշի ավտոմեքենա և
                        10 տարի շարունակ սեփական ուժերով վերանորոգելուց հետո այն վաճառում է գերմանացի մի գնորդի: 1989թ. Էր, Սովետական
                        Միության մութ ու ցուրտ տարիները, երբ Գուրգենի փոքր եղբայրը՝ Ալեքսանը, Ռուսաստանի դաշնությունում պաշտպանում է
                        գիտական ատենախոսությունը, վերադառնում հայրենիք և եղբոր հետ որոշում հիմնել ավտոմատ դարպասների արտադրություն:
                        Մեքենայի վաճառքից վաստակած ամբողջ հասույթով բազմազավակ ընտանիքի տղաները վարձակալում են 216 ք/մ մակերեսով ծածկ,
                        կառուցում պատերը, գնում տարբեր հաստատություններից դուրս գրված հաստոցները, վերանորոգում դրանք և սկսում արտադրությունը:
                    </p>
                </div>
                <div>
                    <img src="../../public/front/images/historyImg1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection