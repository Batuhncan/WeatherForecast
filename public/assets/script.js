const form = document.getElementById('location-form');
const cityInput = document.getElementById('city');
const weatherImg = document.getElementById('weather-img');
const weatherStatus = document.getElementById('weather-status');
const temperature = document.getElementById('temperature');
const humidity = document.getElementById('humidity');
const windSpeed = document.getElementById('wind-speed');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const city = cityInput.value;

    // Burada API'den hava durumu verilerini çekme işlemi yapılacak

    // Örnek verileri kullanarak statik bir hava durumu bilgisi gösterelim
    const weatherData = {
        status: 'Açık',
        temperature: '25°C',
        humidity: '65%',
        windSpeed: '10 km/s'
    };

    // Statik verileri kullanarak HTML içeriğini güncelleme
    weatherStatus.textContent = weatherData.status;
    temperature.textContent = 'Sıcaklık: ' + weatherData.temperature;
    humidity.textContent = 'Nem: ' + weatherData.humidity;
    windSpeed.textContent = 'Rüzgar Hızı: ' + weatherData.windSpeed;
});
