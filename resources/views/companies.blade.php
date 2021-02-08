@php
    $companies =   [
        [
          "src"=> "/front/icons/araratBank.svg",
         "text"=> "Արարատ բանկ"
        ],
        [
          "src"=> "/front/icons/toolsTown.svg",
         "text"=> "Թուլս Թաուն"
        ],
        [
          "src"=> "/front/icons/globing.svg",
         "text"=> "Գլոբբինգ"
        ],
        [
          "src"=> "/front/icons/araratBank.svg",
         "text"=> "Արարատ բանկ"
        ],
        [
          "src"=> "/front/icons/elwood.svg",
         "text"=> "Էլվուդ կահույք"
        ],
        [
          "src"=> "/front/icons/grandTobako.svg",
         "text"=> "Գրանդ Տոբակո"
        ],
        [
          "src"=> "/front/icons/araratBank.svg",
         "text"=> "Արարատ բանկ"
        ],
        [
          "src"=> "/front/icons/toolsTown.svg",
         "text"=> "Թուլս Թաուն"
        ],
        [
          "src"=> "/front/icons/globing.svg",
         "text"=> "Գլոբբինգ"
        ],
        [
          "src"=> "/front/icons/araratBank.svg",
         "text"=> "Արարատ բանկ"
        ],
        [
          "src"=> "/front/icons/toolsTown.svg",
          "text"=> "Թուլս Թաուն"
        ],
        [
          "src"=> "/front/icons/globing.svg",
         "text"=> "Գլոբբինգ"
        ]
      ]

@endphp

<div class="newCompany">
    @foreach ($companies as $key => $value)
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center">
            <img src='{{asset($value["src"])}}' alt="">
        </div>
        <p>{{$value["text"]}}</p>
    </div>
    @endforeach
</div>
