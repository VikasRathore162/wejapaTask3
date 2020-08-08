<html>
    <title>Slack Name- Vikas</title>
<body bgcolor="<?php echo $_POST["color"]; ?>">
        <script type="text/javascript"> 
            function myFunction() {
            document.body.style.backgroundColor = <?php echo $_POST["color"]?>;
            }
    </script> 

<h1>Welcome <?php echo ''.$_POST["first_name"].' '.$_POST["second_name"]; ?>to Wejapa Internship </h1><br>
<h1>Email address : <?php echo $_POST["email"]; ?></h1>  
<h2> Date of Birth : <?php echo $_POST["DOB"] ?></h2>
<h2> Gender : <?php echo $_POST["gender"] ?></h2>
<h2> Department : <?php echo $_POST["department"] ?> </h2>

</body>
</html>