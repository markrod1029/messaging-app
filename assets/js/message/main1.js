$(document).ready(function () {
    var detailsOfUser = $('#details_of_user');
    var chatBox = $('#chatbox');
    var chatUserList = $('#chat_user_list');

    // desktop User Details
    function barInDesktop() {
        detailsOfUser.css({
            'width': '20%',
        });
        chatbox.css({
            'width': '100%'
        });
        detailsOfUser.children().show();
        console.log("barInDesktop function executed.");
    }

    // mobile User Details
    function barInMobile() {
        if (parseInt(detailsOfUser.css('right')) < 0 || detailsOfUser.css('display') === 'none') {
            detailsOfUser.css('opacity', 'block'); // Make sure it's visible before animating
            detailsOfUser.animate({ right: 0 }, 'fast');
            detailsOfUser.children().show();
            console.log("barIn function executed.");
        }
    }
    
// Hide  User Details
    function barOut() {
        if ($(window).width() > 576) {
            $('#details_of_user').children().hide();
            $('#details_of_user').css('width', ''); // Remove inline width
            chatBox.css('width', '100%');
        } else {
            var detailsOfUser = $('#details_of_user');
            if (parseInt(detailsOfUser.css('right')) >= 0) {
                detailsOfUser.removeClass('show');
                detailsOfUser.animate({ right: '-100%', display: 'block' }, 'slow', function () {
                    detailsOfUser.children().hide();
                });
                console.log("barOut function executed.");
            }
        }
    }
// button details_btn click to hide and show
    $('#details_btn').click(function () {
        event.stopPropagation(); // Prevent the event from reaching the body click event
        var bar = document.getElementById('details_of_user').style;

        if ($(window).width() > 576) {
            if (bar.width == "20%") {
                barOut();
            } else {
                barInDesktop();
            }
        } else {
            barInMobile();
        }
    })


    //     function barDesktopMenuIn()
    //     {
    //         chatUserList.css({'width': '20%'});
    //         chatUserList.css({
    //             'width': '20%',
    //             'display' : 'block'
    //         });
    //         chatUserList.animate({ left: 0 }, 'slow');
    
    //         chatBox.css({'width': '80%'});
    //         chatUserList.children().show()
    //         console.log("barDesktopMenuIn function executed.");
    

    // }

        function barDesktopMenuIn() {
            chatUserList.animate({ right: 0 }, 'slow');
            chatBox.css({'width': '80%'});
            chatUserList.children().show();
            console.log("barDesktopMenuIn function executed.");
        }




        // function barMobileMenuIn()
        // {
            // if(parseInt(chatUserList).css('right') < 0 || chatUserList.css('display') === 'none' )
            // {
            //     chatUserList.css('opacity', 'block');
            //     chatUserList.animate({right: 0}, fast)
            //     chatUserList.children().show();
            //     console.log("barMobileMenuIn function executed.");

            // } 
        // }

        function barMobileMenuIn() {
            if (parseInt(chatUserList.css('left')) < 0 || chatUserList.css('display') === 'none') {
                chatUserList.css('display', 'block');
                chatUserList.animate({ left: 0 }, fast);
                chatUserList.children().show();
                console.log("barMobileMenuIn function executed.");
            }
        }


        

    function barMenuOut()
    {
        chatUserList.css({
        'width': '',
        'display' : 'none'
    });
    chatUserList.animate({ left: 0 }, 'slow');
        chatBox.css({'width': '100%'});
        chatUserList.children().hide();
        console.log("barMenuOut function executed.");

    }




    $('#menubar').click(function(){
        var userbar = document.getElementById('chat_user_list').style;
        if ($(window).width() > 576) {
            if (bar.width == "20%") {
                barMenuOut();
            } else {
                barDesktopMenuIn();
            }
        } else {
            barMobileMenuIn();
        }


        
    });

    
    $('body').on('click', function (event) {
        if (!$(event.target).is('#details_btn') && !$(event.target).closest('#details_of_user').length) {
            barOut();
            if ($(window).width() > 576) {
                barMenuOut();
            }
        }
    })

});
