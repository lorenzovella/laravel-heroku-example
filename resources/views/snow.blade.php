<canvas id="sky" data-color="{{ Config::get('app.theme_snow_color') }}" style="position: fixed; top: 0; left: 0; height: 100%; width: 100%; z-index: 1;"></canvas>
{!! HTML::script('vendor/jsnow/jsnow.js') !!}