<?php
/* Template Name: Custom Registration Page */
get_header();
global $wpdb;

if ($_POST) {

    $username = $wpdb->prepare($_POST['txtUsername']);
    $email = $wpdb->prepare($_POST['txtEmail']);
    $password = $wpdb->prepare($_POST['txtPassword']);
    $ConfPassword = $wpdb->prepare($_POST['txtConfirmPassword']);

    $error = array();
    if (strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "Username has Space";
    }

    if (empty($username)) {
        $error['username_empty'] = "Needed Username must";
    }

    if (username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }

    if (!is_email($email)) {
        $error['email_valid'] = "Email has no valid value";
    }

    if (email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }

    if (strcmp($password, $ConfPassword) !== 0) {
        $error['password'] = "Password didn't match";
    }

    if (count($error) == 0) {

        wp_create_user($username, $password, $email);
        echo "User Created Successfully";
        exit();
    }else{
        
        print_r($error);
        
    }
}

?>
<h2>TEST CONNEXION</h2>

<form method="post">

<p>
    <label>Enter Username</label>
    <div>
        <input type="text" name="txtUsername" id="txtUsername" placeholder="Username">
    </div>
</p>

<p>
    <label>Enter Email</label>
    <div>
        <input type="Email" name="txtEmail" id="txtUEmail" placeholder="Email">
    </div>
</p>

<p>
    <label>Enter Password</label>
    <div>
        <input type="password" name="txtPassword" id="txtPassword" placeholder="Password">
    </div>
</p>

<p>
    <label>Enter Confirm Password</label>
        <div>
            <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="Password">
        </div>
</p>

<input type="submit" name="btnSubmit"/>
</form>

<?php
get_footer();
?>