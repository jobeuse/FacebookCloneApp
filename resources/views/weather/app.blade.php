<?php 
$apiKey = "b34f2185a7464df5f24434ed334e21ee";
$cityName =auth()->user()->city;
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityName . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<div class="weather-forecast">
    <div class="row">
        <div class="col-lg-10">
            <?php
             if ($data!=null) {
               
            ?>
            
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <span class="text-muted"><?php echo $data->main->temp_max; ?>&deg;C </span>, 
                <?php echo $cityName .'<br>'?>


                <?php 
                if(date('H') < 12 ){
                    echo "<span class='text-muted'>Good morning</span>";

                }

                if(date('H') > 12){
                    if (date('H') == 13 or date('H') == 14) {
                        
                        echo "<span class='text-muted'>Good afternoon</span>";
                    }
                }

                if(date('H') > 15)
                    echo "<span class='text-muted'>Good evening</span>";
                ?>

                <?php
                
                }
                ?>
            </div>
            <div class="col-lg-2">
                <a href="{{ route('profile',auth()->user()->name) }}#editprofile" class="text-primary"  id="edit" style="cursor: pointer;">Edit</a>
            </div>
    </div>
</div>
