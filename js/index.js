
console.log("cao");
const mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');

mapboxgl.accessToken = 'pk.eyJ1IjoidmlrdG9yY3ZldGFub3ZpYyIsImEiOiJja2oyNDM2c3A1MHNjMnFsYnZodmx1Mmh6In0.HcWpNazoTdm1XK690ZVErQ';
const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11'
});

