<?php


session_start();

header("Cache-control:no-store,no-cache,must-revalidate,max-age=0");
header("pragma:no-cache");
header("expires:0");

if(isset($_SESSION['stu_id'])){
    header("Location:login.php");
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted ){
                window.location.href = "login.php";
            }
        });
    </script>
</head>
<body>
    <h1>welcom to dashboard</h1>
    <h2>welcom,<?php echo htmlspecialchars($_SESSION['username']);?>!</h2>
    <div>
        <a href="register.php">list of students</a>
        <a href = "logout.php">logout</a>
    </div>
    
</body>
</html>
