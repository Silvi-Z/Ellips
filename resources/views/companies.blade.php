@if(!empty($clients) && count($clients))
    <div class="company">
        @foreach ($clients as $client)
            <div class="companySlideWrapper d-flex flex-column align-items-center justify-content-center">
                <div class="companyCircle d-flex justify-content-center align-items-center">
                    <img src='{{asset('files/'.$client->image)}}' alt="">
                </div>
                <div class="companyName">{{ $client->{'title_'.$lang} }}</div>
            </div>
        @endforeach
    </div>
@endif