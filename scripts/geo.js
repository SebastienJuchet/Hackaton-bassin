let coord = []
let successHandler = function(position) {
    coord['lat'] = position.coords.latitude;
    coord['long'] = position.coords.longitude;
};

let errorHandler = function (errorObj) {
    alert(errorObj.code + ": " + errorObj.message);
    alert("something wrong take this lat " + "26.0546106" );
    alert("something wrong take this lng " +-98.3939791);
};

navigator.geolocation.getCurrentPosition(
    successHandler, errorHandler,
    {enableHighAccuracy: true, maximumAge: 10000}
);

console.log(coord)