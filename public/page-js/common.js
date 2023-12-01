$(document).ready(function () {

    $("#movie-list,#movie-list-header").hide();

    $(".navi-button").click(function(){

        var functionName = $(this).attr('targetFunction');

        $.ajax({
            method: "GET",
            url: 'api/'+functionName+'/',
        }).done(function (response) {

            if (response.success == true) {
                $("#movie-list-body").html('');
                $("#movie-list").show();
                $("#movie-list-header").html(response.message).show();

                if (response.type == 'error') {
                    $("#movie-list").hide();
                    Swal.fire({
                        icon: response.type,
                        title: response.message,
                        showConfirmButton: true,
                    });
                }
                for (delegation in response.data) {
                    $("#movie-list-body").append(
                        "<tr>" +
                        "<th scope='row'>" + (1 * delegation + 1) + "</th>" +
                        "<td>" + response.data[delegation].title + "</td>" +
                        "</tr>"
                    );
                }
            }
        }).fail(function (response) {
            Swal.fire({
                icon: "error",
                title: "Internal error !\n",
                showConfirmButton: true,
                timer: 5000
            });
        });
    });
});