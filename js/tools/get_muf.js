$(document).ready(function(){
    $.ajax({
        url: '/includes/tools/get_muf.php',
        dataType: 'json',
        success: function(data){
            var europeHTML = "<p class='m-0'>";
            europeHTML += "<span class='m-right-15 color-" + (data.europe.max_frequency !== "No data" ? "main" : "red") + "'><i class='fa-solid fa-" + (data.europe.max_frequency !== "No data" ? "check" : "xmark") + "'></i></span>";
            europeHTML += "<span class='color-main'>" + (data.europe.max_frequency !== "No data" ? " up to " + data.europe.max_frequency + " MHz " : "") + "</span>";
            europeHTML += "<span class='text-small color-gray'>" + (data.europe.last_log !== "No data" ? data.europe.last_log : "") + "</span></p>";

            var naHTML = "<p class='m-0'>";
            naHTML += "<span class='m-right-15 color-" + (data.north_america.max_frequency !== "No data" ? "main" : "red") + "'><i class='fa-solid fa-" + (data.north_america.max_frequency !== "No data" ? "check" : "xmark") + "'></i></span>";
            naHTML += "<span class='color-main'>" + (data.north_america.max_frequency !== "No data" ? " up to " + data.north_america.max_frequency + " MHz " : "") + "</span>";
            naHTML += "<span class='text-small color-gray'>" + (data.north_america.last_log !== "No data" ? data.north_america.last_log : "") + "</span></p>";

            var ausHTML = "<p class='m-0'>";
            ausHTML += "<span class='m-right-15 color-" + (data.australia.max_frequency !== "No data" ? "main" : "red") + "'><i class='fa-solid fa-" + (data.australia.max_frequency !== "No data" ? "check" : "xmark") + "'></i></span>";
            ausHTML += "<span class='color-main'>" + (data.australia.max_frequency !== "No data" ? " up to " + data.australia.max_frequency + " MHz " : "") + "</span>";
            ausHTML += "<span class='text-small color-gray'>" + (data.australia.last_log !== "No data" ? data.australia.last_log : "") + "</span></p>";

            // Populate specific regions if you have separate containers
            $('#muf-eu').html(europeHTML);
            $('#muf-na').html(naHTML);
            $('#muf-au').html(ausHTML);

            // Combined fallback container
            $('#mufData').html(europeHTML + naHTML + ausHTML);
        },
        error: function(){
            $('#mufData').html("Error: Failed to fetch data.");
        }
    });
});
