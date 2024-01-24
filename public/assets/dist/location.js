window.onload = function () {
    var $ = new City();
    $.showProvinces("#province");
    $.showCities("#city");

    console.log($.getProvinces());
    console.log($.getAllCities());
    console.log($.getCities("Pangasinan"));
}