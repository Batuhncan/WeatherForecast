<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['name'] }} Hava Durumu</title>
</head>
<body>
    <h1>{{ $data['name'] }} Hava Durumu</h1>
    <img src="https://openweathermap.org/img/wn/{{ $data['weather'][0]['icon'] }}@2x.png" alt="Hava Durumu">
    <p>{{ $data['weather'][0]['main'] }}</p>
    <p>{{ $data['weather'][0]['description'] }}</p>
    <p>Şu anki saat: {{ date('H:i', strtotime('+3 hours')) }}</p>
    <p>Son Güncellenme: {{ date('H:i', strtotime('+3 hours', $data['dt'])) }}</p>
    <p>Sıcaklık: {{ $data['main']['temp']-273.15 }} °C</p>
    <p>Nem: {{ $data['main']['humidity'] }}%</p>
    <p>Rüzgar Hızı: {{ $data['wind']['speed'] }} m/s</p>
    <p>Rüzgar Yönü: {{ $data['wind']['deg'] }} - {{ $windDirection }}</p>
    <p>Bulutluluk Oranı: {{ $data['clouds']['all'] }}%</p>
    <p>Görüş Mesafesi: {{ $data['visibility'] }} metre</p>
    <p>Gün Doğumu: {{ date('H:i', strtotime('+3 hours', $data['sys']['sunrise'])) }}</p>
    <p>Gün Batımı: {{ date('H:i', strtotime('+3 hours', $data['sys']['sunset'])) }}</p>    
</body>
</html>