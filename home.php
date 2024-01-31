
<?php include "includes/header.php"?>
<body>
<section id="main" class="bg-dark">

	<!-- left bar -->
        <div id="chat_user_list" class="setting" style="display:none;">
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

                </div>
            </div>
           
        </div>

        <!--  Left bar End-->

        <!-- chat box -->

    <div id="chatbox" style="width:100%;">
        
        <div class="chatting_section" id="chat_area" 
			style="//display: none">
           
                        
                <div id="header" class="py-5" >
        
                    <div id="menubar" class="d-flex align-items-center justify-content-center bg-dark text-light rounded-circle p-2 ml-2">
                        <i class="fa fa-bars" style="font-size: 18px;"></i>
                        </div>

                    <div id="icons" class="px-4 pt-2">
                        <div id="send_mail">
                            <a href="home.php" id="mail_link"><i class="fas fa-envelope text-dark"></i></a>
                        </div>
                        <div id="details_btn" class="ml-3">
                            <i  class="fas fa-info-circle text-dark"  ></i>
                        </div>
                    </div>
                </div>

                <div id="chat_message_area">
          
                        <div id="search_box_container" class="py-3">
                            <input type="text" name="txt_search" class="form-control" autocomplete="off" placeholder="Search User"
                                id="search">
                        </div>

                        <hr />
                
                <div id="user_list" class="py-3">

                <a href="chat.php?user_id=<?php echo $row['unique_id']; ?>" class="card chat-link">
                <div class="card-body content">
                    <img src="https://tripidkard.com/wp-content/uploads/2023/10/tripid-card-ver.-2-2.png" alt="" class="rounded-circle" width='100' height="100">
                    <div class="details">
                        <span class="font-weight-bold">Mark Rod Cadayong</span>
                        <p class="text-muted">NOT Available</p>
                        </div>
                </div>
                <div class="status-dot bg-success"></div>
                </a>


                </div>
                    
            </div>
        </div>
    </div>
        <!-- chat box End -->

</section>

</body>
<?php include "includes/script.php"?>
</html>

<style>

@media (max-width: 576px) {
        #chat_user_list {
           
            overflow: hidden;
            transition: right 0.3s ease; /* Add smooth transition */

        }
    }

    :is(.users, .users-list) .content .details{
    margin-left: 15px;
  }
  :is(.users, .users-list) .content{
  display: flex;
  align-items: center;
}

#user_list .details{
    flex-direction: column;
  }
</style>