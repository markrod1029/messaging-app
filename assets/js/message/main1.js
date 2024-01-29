$(document).ready(function() {


//  desktop
function barInDesktop() {
    $('#details_of_user').css({
        'width': '20%',
    });
    $('#chatbox').css({
        'width': '100%'
    }
        );
    $('#details_of_user').children().show();
    console.log("barInDesktop function executed.");
}

function barInMobile() {
    $('#details_of_user').css({
        'right': 0,
        'display': 'inline'
    }).addClass('mobile-transition'); // Add a class for transition
    $('#details_of_user').children().show().fadeIn('slow');

    console.log("barInMobile function executed.");
}
    function barOut() {
        $('#details_of_user').children().hide();
        $('#details_of_user').css('width', '0');

        $('#chatbox').css('width', '100%');
    }

    
    $('#details_btn').click(function () {
        event.stopPropagation(); // Prevent the event from reaching the body click event
		var bar = document.getElementById('details_of_user').style;
        if ($(window).width() > 778) {

		if (bar.width == "20%") {
			barOut();
		} else {
			barInDesktop();
		}

		}
        else{
            barInMobile();
        }
	})
    
    $('body').on('click', function(event){
        if (!$(event.target).is('#details_btn') && !$(event.target).closest('#details_of_user').length) {
                    barOut();
                }
    })
    
});
