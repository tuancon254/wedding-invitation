$(document).ready(function(){

    var map = L.map('map',{
        doubleClickZoom: false,
        center: [20.98585302485291, 105.86256283729534],
        zoom: 17,
        scrollWheelZoom: false,
        zoomControl: false,
        dragging: true
    });

    L.control.zoom({
        position: 'bottomright'
    }).addTo(map);
    var greenIcon = L.icon({
        iconUrl: '../images/home1.png',
        iconSize: [50, 50], // size of the icon
        iconAnchor:   [10, 45],
    });

    var weddingIcon = L.icon({
        iconUrl: '../images/arch4.png',
        iconSize: [50, 50], // size of the icon
        iconAnchor:   [0, 45],
    });

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    L.marker([20.9841181, 105.8647972], {icon: weddingIcon}).addTo(map);
    L.marker([20.98731236240082, 105.86090797975427], {icon: greenIcon}).addTo(map);


    $('#form-rsvp').on('submit', function(event){
        event.preventDefault();
        let error = false;
        $(this).find('.required').each(function(){
            $(this).removeClass('is-invalid');
            let isValid = true;
            if ($(this).is('input[type=radio]')) {
                isValid = $('[name=will_come]:checked').length > 0;
            } else if ($(this).is('select') || $(this).is('input[type=text]')) {
                isValid = $(this).val() !== "";
            }
            if (!isValid) {
                error = true;
                $(this).addClass('is-invalid');
            }
        });

        if(!error){
            let formData = $(this).serialize();
            let attendWedding = $('input[name="will_come"]:checked').val();
            console.log(attendWedding);
            formData += "&will_come=" + attendWedding;
            $.ajax({
                type: "POST",
                url: "/rsvp",
                headers: {
                    "X-CSRF-TOKEN": $("#token").val()
                },
                data: formData,
                success: function (response) {
                    console.log(response);
                },
                error: function () {
                    console.log("An error occurred while submitting the form.");
                }
            });
        }
    })
})



