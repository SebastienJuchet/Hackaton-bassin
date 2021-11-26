let coord = [];
let currentSpeed;
let seconde = 0;
let divSpeed = document.getElementById('speed');
let successHandler = function(position) {
    coord['lat'] = position.coords.latitude;
    coord['long'] = position.coords.longitude;
};

let errorHandler = function (errorObj) {
    console.log(errorObj.code + ": " + errorObj.message);
    console.log("something wrong take this lat " + "26.0546106" );
    console.log("something wrong take this lng " +-98.3939791);
};

navigator.geolocation.getCurrentPosition(
    successHandler, errorHandler,
    {enableHighAccuracy: true, maximumAge: 10000}
);

let prevLat = 44.84138865638919;
let prevLong = -0.5609858477163195;
let successHandlerTime = function(position) {
    let lat = position.coords.latitude;
    let long = position.coords.longitude;
    console.log(long, lat)
    let diff = getDistance(
        {lat: prevLat, lon: prevLong},
        {lat: lat, lon: long},
        {unit: 'meters'}
    );
    currentSpeed = diff / 1000 * 360;
    prevLat = lat;
    prevLong = long;
};
setInterval(() => {
    seconde++
    navigator.geolocation.getCurrentPosition(
        successHandlerTime, errorHandler,
        {enableHighAccuracy: true, maximumAge: 10000}
    );
    divSpeed.innerHTML = `Votre vitesse est de ${currentSpeed ?? 0} km/h`
    let averageSpeed = 0;
    if (currentSpeed !== 0 ) {
        averageSpeed += currentSpeed
    }
    if (seconde === 4) {
        //console.log(isNaN(averageSpeed))
        if (averageSpeed < speeds[level.value][0]) {
            while (averageSpeed < speeds[level.value][0]) {
                level.value--;
                valueLevel.innerHTML = vitesse[level.value];
            }
            autoplayer(musics[level.value], speeds[level.value][2]);
        }
        if (averageSpeed > speeds[level.value][1]) {
            while (averageSpeed > speeds[level.value][1]) {
                level.value++;
                valueLevel.innerHTML = vitesse[level.value];
                autoplayer(musics[level.value], speeds[level.value][2]);
            }
        }
    }
}, 10000)
