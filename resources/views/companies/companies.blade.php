<div class="company">
    <?
    $companies = json_decode(file_get_contents("companies/companies.json"), true);
    foreach ($companies as $key => $value){
        echo '
             <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center align-items-center">
                   <img src='.$value["src"].' alt="">
                </div>
                <p>'.$value["text"].'</p>
             </div>';
    }
    ?>
</div>