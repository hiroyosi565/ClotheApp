<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Weather extends Model
{
    
    public function weatherData() {
        // $API_KEY = config('services.openweathermap.key');
        // $base_url = config('services.openweathermap.url');
        // $city = 'Tokyo';

        // $url = "$base_url?units=metric&q=$city&APPID=$API_KEY";
        $url="https://www.jma.go.jp/bosai/forecast/data/forecast/440000.json";

        // 接続
        $client = new Client();

        $method = "GET";
        $response = $client->request($method, $url);

        $weather_data = $response->getBody();
        $weather_data = json_decode($weather_data, true);
        // dd($weather_data);
        
        $tomorrow_weather_data = $weather_data[0];
        
        // $tomorrow_date = date("Y-m-d",strtotime("+1 day"));
        // for($i=0;$i<strlen($tomorrow_date);$i++){
        //     $weather_datetime = $weather_data[""][$i]["dt_txt"];
        //     $tomorrow_datetime = $tomorrow_date . " 12:00:00";
        //     if($weather_datetime == $tomorrow_datetime){
        //         $tomorrow_weather_data = $weather_data["list"][$i]["main"];
        //     }
            
        // }
        
        return $tomorrow_weather_data;
    }
    
    public function weatherCode($code){
        if($code == "103" || $code == "106" || $code == "107" || $code == "108" || $code == "120" || $code == "121" || $code == "140"){
            $weather_code = "102.svg";
        }elseif($code == "111"){
            $weather_code = "110.svg";
        }elseif($code == "113" || $code == "114" || $code == "118" || $code == "119" || $code == "122" || $code == "125" || $code == "126" || $code == "127" || $code == "128"){
            $weather_code = "112.svg";
        }elseif($code == "116" || $code == "117"){
            $weather_code = "115.svg";
        }elseif($code == "123" || $code == "124" || $code == "130" || $code == "131"){
            $weather_code = "100.svg";
        }elseif($code == "132"){
            $weather_code = "101.svg";
        }elseif($code == "160" || $code == "170"){
            $weather_code = "104.svg";
        }elseif($code == "181"){
            $weather_code = "115.svg";
        }elseif($code == "203" || $code == "206" || $code == "207" || $code == "208" || $code == "220" || $code == "221" || $code == "240"){
            $weather_code = "202.svg";
        }elseif($code == "205" || $code == "250" || $code == "260" || $code == "270"){
            $weather_code = "204.svg";
        }elseif($code == "209" || $code == "231"){
            $weather_code = "200.svg";
        }elseif($code == "211"){
            $weather_code = "210.svg";
        }elseif($code == "213" || $code == "214" || $code == "218" || $code == "219" || $code == "222" || $code == "224" || $code == "225" || $code == "226"){
            $weather_code = "212.svg";
        }elseif($code == "216" || $code == "217" || $code == "228" || $code == "229" || $code == "230" || $code == "281"){
            $weather_code = "215.svg";
        }elseif($code == "223"){
            $weather_code = "201.svg";
        }elseif($code == "304" || $code == "306" || $code == "328" || $code == "329" || $code == "350"){
            $weather_code = "300.svg";
        }elseif($code == "309" || $code == "322"){
            $weather_code = "303.svg";
        }elseif($code == "315" || $code == "326" || $code == "327"){
            $weather_code = "314.svg";
        }elseif($code == "316" || $code == "320" || $code == "323" || $code == "324" || $code == "325"){
            $weather_code = "311.svg";
        }elseif($code == "317" || $code == "321"){
            $weather_code = "313.svg";
        }elseif($code == "340" || $code == "405" || $code == "425" || $code == "426" || $code == "427" || $code == "450"){
            $weather_code = "400.svg";
        }elseif($code == "361" || $code == "420"){
            $weather_code = "411.svg";
        }elseif($code == "371" || $code == "421"){
            $weather_code = "413.svg";
        }elseif($code == "407"){
            $weather_code = "406.svg";
        }elseif($code == "409"){
            $weather_code = "403.svg";
        }elseif($code == "422" || $code == "423"){
            $weather_code = "414.svg";
        }else{
            $weather_code = $code . ".svg";
        }
        
        return $weather_code;
    }
}
