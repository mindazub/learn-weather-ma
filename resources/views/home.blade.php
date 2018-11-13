<h1>Hello From Home</h1>

<p>
    temp: {{ $weatherData->main->temp }} Celsius
</p>
<p>
    wind speed: {{ $weatherData->wind->speed }} m/s
</p>
<p>
    wind direction: {{ $weatherData->wind->deg }} degrees
</p>
<p>
    wind side: {{ $weatherData->wind->degHuman }}
</p>
