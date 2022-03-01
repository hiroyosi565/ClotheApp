<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherAPIController extends Controller
{
    public function weatherData() {
        $API_KEY = config('services.openweathermap.key');
        $base_url = config('services.openweathermap.url');
        $city = 'Tokyo';

        $url = "$base_url?units=metric&q=$city&APPID=$API_KEY";

        // 接続
        $client = new Client();

        $method = "GET";
        $response = $client->request($method, $url);

        $weather_data = $response->getBody();
        $weather_data = json_decode($weather_data, true);
        // dd($weather_data["cod"]);
        
        $tomorrow_date = date("Y-m-d",strtotime("+1 day"));
        for($i=0;$i<30;$i++){
            $weather_datetime = $weather_data["list"][$i]["dt_txt"];
            $tomorrow_datetime = $tomorrow_date . " 12:00:00";
            if($weather_datetime == $tomorrow_datetime){
                $tomorrow_weather_data = $weather_data["list"][$i]["main"];
            }
            
        }
        
        return response()->json($tomorrow_weather_data);
    }
}
// {"temp":12.76,"feels_like":11.16,"temp_min":12.76,"temp_max":12.76,"pressure":1008,"sea_level":1008,"grnd_level":1003,"humidity":41,"temp_kf":0}
//{"temp":11.25,"feels_like":9.79,"temp_min":11.25,"temp_max":11.25,"pressure":1007,"sea_level":1007,"grnd_level":1001,"humidity":52,"temp_kf":0}