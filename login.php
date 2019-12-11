<?php

/* Template Name: Custom Wordpress Login */

get_header();
?>

<form id="wp_login_form" action="" method="post">

    <label>Username</label><br>
    <input type="text" name="user_login" class="text" value=""><br>
    <label>Password</label><br>
    <input type="password" name="user_pass" class="text" value=""><br>
    <label>
    <input name="rememberme" type="checkbox" value="forever">Remember me<br>
    <br><br>
    <input type="submit" id="submitbtn" name="submit" value="login">

</form>


<body>
      <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
           Open modal
      </button>
 
      <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                  Modal body..
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>      


    
    
<?php

get_footer();