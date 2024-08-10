$(document).ready(function () {
    var map = L.map("map", {
        center: [20.98585302485291, 105.86256283729534],
        zoom: 17,
        zoomControl: false,
        gestureHandling: true
    });

    L.control
        .zoom({
            position: "bottomright",
        })
        .addTo(map);
    var homeIcon = L.icon({
        iconUrl: "../images/home1.png",
        iconSize: [50, 50], // size of the icon
        iconAnchor: [10, 45],
    });

    var weddingIcon = L.icon({
        iconUrl: "../images/arch4.png",
        iconSize: [50, 50], // size of the icon
        iconAnchor: [20, 40],
    });

    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(map);

    L.marker([20.9841181, 105.8647972], { icon: weddingIcon }).addTo(map).on('click', openMapLocation);
    L.marker([20.98731236240082, 105.86090797975427], { icon: homeIcon }).addTo(map).on('click', openMapLocation);

    function openMapLocation(){
        var lat = this.getLatLng().lat;
        var lng = this.getLatLng().lng;
        var googleMapsUrl = "https://www.google.com/maps?q=" + lat + "," + lng;

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            window.location.href = "geo:" + lat + "," + lng + "?q=" + lat + "," + lng;
        } else {
            window.open(googleMapsUrl, '_blank');
        }
    }

    $(".see-in-map").click(function () {
        let latLong = $(this).data("location");
        let lat = parseFloat(latLong.split(",")[0]);
        let long = parseFloat(latLong.split(",")[1]);
        map.flyTo([lat, long], 17, {
            animate: true,
            duration: 1.5, // duration of the flight in seconds
        });

        $('#map').focus()
    });


    $(".submit_form").click(function () {
        $(".submit_form").prop('disabled', true);
        $("#form-rsvp").submit();
    });

    $("#form-rsvp").on("submit", function (event) {
        event.preventDefault();
        let error = false;
        let url = $(this).attr("action");
        $(this)
            .find(".required")
            .each(function () {
                $(this).removeClass("is-invalid");
                let isValid = true;
                if ($(this).is("input[type=radio]")) {
                    isValid = $("[name=will_come]:checked").length > 0;
                } else if (
                    $(this).is("select") ||
                    $(this).is("input[type=text]")
                ) {
                    isValid = $(this).val() !== "";
                }
                if (!isValid) {
                    error = true;
                    $(this).addClass("is-invalid");
                }
            });

        if (!error) {
            let formData = $(this).serialize();
            let attendWedding = $('input[name="will_come"]:checked').val();
            formData += "&will_come=" + attendWedding;
            $.ajax({
                type: "POST",
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $("#token").val(),
                },
                data: formData,
                success: function (response) {
                    if (response.message === 'success') {
                        // Hide the form
                        $("#form-rsvp").hide();

                        // Create and show a thank you message
                        let thankYouMessage = $('<div class="thank-you-message text-center">' +
                            '<h2 class="pb-4">Thank You!</h2>' +
                            '<p>We have received your RSVP. We appreciate your response and look forward to celebrating with you!</p>' +
                            '</div>');

                        // Insert the thank you message after the form
                        $("#form-rsvp").after(thankYouMessage);

                        // Scroll to the thank you message
                        $('html, body').animate({
                            scrollTop: thankYouMessage.offset().top - 100
                        }, 1000);
                    }
                },
                error: function () {
                    $(".submit_form").prop('disabled', false);
                },
            });
        } else $(".submit_form").prop('disabled', false);
    });
});
