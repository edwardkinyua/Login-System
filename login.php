<!DOCTYPE HTML>

<?php
        //CURL POST request to middle server
?>

<script>
        <!-- AJAX dynamically change page -->
        function pr() {
                document.getElementById("user").innerHTML = document.getElementById('username').value;
        }
</script>

<html>
<body>
        <h1> Login </h1>
        <form method="post" action="login_new.php">
                <label for="username"> <b> Username </b><br></label>
                <input name="username" id="username" type="text" placeholder="Enter Username"> <br>

                <label for="pwd"> <b> Password </b><br></label>
                <input name="pwd" id="pwd" type="password" placeholder="Enter Password"> <br><br>
                User: <span id="user"> </span> <br>
                <button type="button" onClick="pr()"> Login </button> <br><br>
        </form>
        <!-- Pack in JSON for CURL POST to middle server -->

        <script>
        <!-- AJAX dynamically change page -->
                function pr() {
                        document.getElementById("user").innerHTML = document.getElementById('username').value;
                }
        </script>
</body>
</html>

