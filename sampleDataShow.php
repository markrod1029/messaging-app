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
    <link rel="stylesheet" href="assets/css/message/loading-bar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <title>Realtime Chat Application CI</title>
</head>

<body>
    <section id="main" class="bg-dark">
        <div id="chat_user_list">

            <!-- Sample static user box, you can repeat this block for each user -->
            <div class='innerBox'>
                <div class='user px-3 py-2'>
                    <div id='avtar_and_details' class=''>
                        <div id='user_avtar'
                            style="background-image: url('upload/avatar1.jpg'); background-size: 100% 100%;">
                            <div id='online'></div>
                            <input type='hidden' name='hdn' id='hidden_id' value="user1">
                        </div>
                        <div id='user_details' class='px-2'>
                            <h6 class='m-0' id='name'>John Doe</h6>
                            <p class='m-0' id="title">Hello!</p>
                        </div>
                    </div>
                    <div>
                        <p id="time">12:30 PM</p>
                    </div>
                </div>
            </div>
            <!-- Repeat the above block for each user -->

            <!-- Another user box -->
            <div class='innerBox'>
                <div class='user px-3 py-2'>
                    <div id='avtar_and_details' class=''>
                        <div id='user_avtar'
                            style="background-image: url('upload/avatar2.jpg'); background-size: 100% 100%;">
                            <input type='hidden' name='hdn' id='hidden_id' value="user2">
                        </div>
                        <div id='user_details' class='px-2'>
                            <h6 class='m-0' id='name'>Jane Doe</h6>
                            <p class='m-0' id="title">Hi there!</p>
                        </div>
                    </div>
                    <div>
                        <p id="time">1:45 PM</p>
                    </div>
                </div>
            </div>
            <!-- Repeat the above block for each user -->

        </div>
    </section>

    <!-- Add your other HTML content here -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="assets/js/message/main.js"></script>
</body>

</html>
