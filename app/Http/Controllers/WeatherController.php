<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather(Request $request, $city) {

        $apiKey ='d3aac015da3c23279538b21f80bb2432';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");
        $data = json_decode($response->getBody()->getContents(), true);

        // Rüzgar yönünü belirleme
        $windDegree = $data['wind']['deg'];
        $windDirection = $this->getWindDirection($windDegree);

        return view('data', compact('data','windDirection'));
    }

    // Rüzgar yönünü belirleme fonksiyonu
    private function getWindDirection($degrees) {
        $directions = [
            'Kuzey', 'Kuzeydoğu', 'Doğu', 'Güneydoğu',
            'Güney', 'Güneybatı', 'Batı', 'Kuzeybatı', 'Kuzey'
        ];

        $index = round($degrees / 45) % 8;

        return $directions[$index];
    }
}
