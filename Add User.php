<?php
session_start();
$_SESSION["tab"] = "Add User";

if ($_SESSION["login"] != 1) {
    echo '<h2 style="color:red;">Authentication Error!!!</h2>';
} else {
    include_once('userhead.php');

    // Form content
    echo '
    <form name="addUser" action="addUser.php" method="POST" autocomplete="off">
        <h2>Add User</h2>
        <br>

        <p>
            <label>Admin Password: </label>
            <br>
            <input type="password" name="super_pwd" class="userinput" required/>
        </p>
        <p>
            <label>Username: </label>
            <br>
            <input type="text" name="usr_name" class="userinput" required/>
        </p>
        <p>
            <label>Email: </label>
            <br>
            <input type="email" name="usr_email" class="userinput" required/>
        </p>
        <p>
            <label>Password: </label>
            <br>
            <input type="password" name="usr_pwd" class="userinput" required/>
        </p>
        <p>
            <label>Confirm Password: </label>
            <br>
            <input type="password" name="usr_cnfrm_pwd" class="userinput" required/>
        </p>

        <p>
            <button type="submit" class="userbtn">Create User</button>
            <button type="button" onclick="window.location.href=\'newmenu.php\'" class="userbtn">Back To Home</button>
        </p>
    </form>';

    include_once('footer.php');
}
?>
