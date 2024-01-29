<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/message/messagestyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/message/loading-bar.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <title>Realtime Chat Application CI</title>
</head>

<body>
    <section id="main" class="bg-dark">

	<!-- left bar -->
        <!-- <div id="chat_user_list">
            <div id="owner_profile_details">
                <div id="owner_avtar" style="background-image: url('https://tripidkard.com/wp-content/uploads/2023/10/tripid-card-ver.-2-2.png'); background-size: 100% 100%">
                    <div>
                        <div id="online"></div>
                    </div>
                </div>
                <div id="owner_profile_text" class="">
                    <h6 id="owner_profile_name" class="m-0 p-0">Static Name</h6>
                    <div id="bio">
                        <p id="owner_profile_bio" class="m-0 p-0">Static Bio</p>
                        <i class="fas fa-edit" id="edit_icon"></i>
                    </div>
                    <a class="text-decoration-none" href="" id="logout" style="color:#e86663;"><i
                            class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
            <div id="search_box_container" class="py-3">
                <input type="text" name="txt_search" class="form-control" autocomplete="off" placeholder="Search User"
                    id="search">
            </div>
            <hr />
            <div id="user_list" class="py-3">
            </div>
        </div> -->


        <div id="chatbox" style="width:100%;">

            <div id="data_container" class="">
                <div id="bg_image"></div>
                <h2 class="mt-0">Hi There! Welcome To</h2>
                <h2>Real-Time Chat Application</h2>
                <p class="text-center my-2">Connect to your device via Internet. Remember that you <br> must have a
                    stable Internet Connection for a<br> greater experience.</p>
            </div>

            <div class="chatting_section" id="chat_area" 
			style="//display: none"
			>
                <div id="header" class="py-2">
                    <div id="name_details" class="pt-2">
                        <div id="chat_profile_image" class="mx-2" style="background-size: 100% 100%; background-image: url('https://tripidkard.com/wp-content/uploads/2023/10/tripid-card-ver.-2-2.png');">
                            <div id="online"></div>
                        </div>
                        <div id="name_last_seen">
                            <h6 class="m-0 pt-2">Static Name</h6>
                            <p class="m-0 py-1">Static Last Seen</p>
                        </div>
                    </div>
                    <div id="icons" class="px-4 pt-2">
                        <div id="send_mail">
                            <a href="" id="mail_link"><i class="fas fa-envelope text-dark"></i></a>
                        </div>
                        <div id="details_btn" class="ml-3">
                            <i  class="fas fa-info-circle text-dark"  ></i>
                        </div>
                    </div>
                </div>

                <div id="chat_message_area">
              <!-- Chat Card -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://tripidkard.com/wp-content/uploads/2023/10/tripid-card-ver.-2-2.png" width="150"  alt="Card image cap">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Card Title</div>
                        <p class="text-gray-700 text-base">
                        Some description about the card. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    
                    </div>


                </div>
                
                <div id="messageBar" class="py-4 px-4">
                    <div id="textBox_attachment_emoji_container">
                        <div id="text_box_message">
                            <input type="text" maxlength="200" name="txt_message" id="messageText"
                                class="form-control" placeholder="Type your message">
                        </div>
                        <div id="text_counter">
                            <p id="count_text" class="m-0 p-0"></p>
                        </div>
                    </div>
                    <div id="sendButtonContainer">
                        <button class="btn" id="send_message">
                            <span class="material-icons">send</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>




<!-- block the user -->

        <div id="details_of_user" styl="display: none">
            <div id="user_details_container_avtar" style="background-size: 100% 100%; background-image: url('https://tripidkard.com/wp-content/uploads/2023/10/tripid-card-ver.-2-2.png');"></div>
            <h5 class="text-justify" id="details_of_name">Static Name</h5>
            <p class="text-justify" id="details_of_bio">Static Bio</p>
            <div id="user_details_container_details">
                <p class="text-justify" id="details_of_created">Static Information</p>
                <p class="text-justify" id="details_of_birthday">Static Route</p>
                <p class="text-justify" id="details_of_mobile"><span>Static Mobile</span></p>
                <p class="text-justify" id="details_of_email"><span>Static Email</span></p>
            </div>
            <div>
            <input type="button" class="btn btn-success" id="btn_block" value="Accept">
            <input type="button" class="btn btn-danger" id="btn_block" value="Decline">
            </div>
            
        </div>

    </section>
<!-- Update Profile -->
<!-- 
    <div id="update_container">
        <div style="background-color:#F5F6FA;" class="p-3 d-flex justify-content-between align-items-center">
            <h5 id="update_container_title" class="m-0 p-0">Update Profile</h5>
            <i class="fas fa-times"></i>
        </div>
        <form class="" id="form_details" autocomplete="off">
            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="text" name="txt_dob" id="dob" class="form-control" placeholder="dd-mm-yyyy">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" maxlength="10" name="txt_phone" placeholder="Write your mobile number"
                    id="phone_num" class="form-control">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="txt_addr" id="address" placeholder="Write your address"
                    class="form-control">
            </div>
            <div class="form-group">
                <label>Bio</label>
                <textarea name="bio" class="" id="update_bio" placeholder="Write your bio here.."></textarea>
            </div>
            <button class="btn btn-block" id="update_btn" style="border-radius:0px;">
                <span>Save Changes</span>
            </button>
        </form>
    </div> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="assets/js/message/main1.js">
        
    </script>
</body>

</html>
<!-- 
<style>

#details_of_user {
    position: absolute;
    top: 0;
    right: -20%; /* Initially set to -20% to hide it on the right side */
    width: 20%;
    height: 100%;
    background-color: #f0f0f0; /* Adjust color as needed */
    overflow: hidden;
    transition: right 0.3s ease; /* Add smooth transition */
}

#chatbox {
    width: 100%;
    height: 100vh; /* Adjust height as needed */
    background-color: #ffffff; /* Adjust color as needed */
    overflow: hidden;
    transition: width 0.3s ease; /* Add smooth transition */
}

/* Media query for tablets */
@media (max-width: 768px) {
    #details_of_user {
    position: absolute;
    top: 0;
    right: -20%; /* Initially set to -20% to hide it on the right side */
    background-color: #f0f0f0; /* Adjust color as needed */
    overflow: hidden;
    transition: right 0.3s ease; /* Add smooth transition */
    width: 40%; /* Adjust width for tablets */
    }
    #chatbox {
    width: 100%;
    height: 100vh; /* Adjust height as needed */
    background-color: #ffffff; /* Adjust color as needed */
    overflow: hidden;
    transition: width 0.3s ease; /* Add smooth transition */
}

}

/* Media query for mobile devices */
@media (max-width: 576px) {
    #details_of_user {
        position: absolute;
        top: 0;
        right: -60%; /* Initially set to -20% to hide it on the right side */
        background-color: #f0f0f0; /* Adjust color as needed */
        overflow: hidden;
        transition: right 0.3s ease; /* Add smooth transition */
        width: 60%;/* Adjust width for mobile devices */
    
    }

    #chatbox {
    width: 100%;
}


}

</style> -->

<style>
    /* Media query for mobile devices */

#details_of_user {
    /* Other styles */
    transition: right 0.3s ease; /* Add a transition for the 'right' property */
}

.mobile-transition {
    transition: right 0.3s ease; /* Adjust the transition for mobile */

}


@media (max-width: 576px) {
    #details_of_user {
    position: absolute;
    top: 0;
    right: -60%; /* Initially set to -20% to hide it on the right side */
    width: 60%;
    height: 100%;
    background-color: #f0f0f0; /* Adjust color as needed */
    overflow: hidden;
    transition: right 0.3s ease; /* Add smooth transition */
    display:none;
}


}
</style>