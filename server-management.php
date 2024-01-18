<?php
// Lucas Leijon data 3 2024
// define variables and set to empty values
$name = $email = $image = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $comment = test_input($_POST["comment"]);
    $image = test_input($_POST["image"]);
    // File uploading
    $target_dir = "forum_submissions/"; // Directory where files will be uploaded
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1; // Set initial value to 1 for successful upload
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (change 1000000 to the size you prefer)
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    //*Allow certain file formats (you can add more formats as needed)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $file_name = basename($_FILES["fileToUpload"]["name"]);
            echo "The file ". htmlspecialchars($file_name) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert into the database
    $servername = "localhost";
    $username = "your_username"; // Replace with your database username
    $password = "your_password"; // Replace with your database password
    $dbname = "forum_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO forum_submissions (name, email, website, comment, uploaded_file, registration_date) 
            VALUES ('$name', '$email', '$website', '$comment', '$file_name', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="quito-forum.css">
    <style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #04AA6D;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>
</head>
<body>

<ul class="topnav">
  <li><a href="web-development.php">Web Development Questions</a></li>
  <li><a class="active" href="server-management.php">Server Management Assistance</a></li>
  <li><a href="general-questions.php">General Questions</a></li>
</ul>

</head>
<body>  

<ul class="city">
        <h2>Quito Server Management Assistans</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  
            Name: <input type="text" name="name" required>
            <br><br>
            E-mail: <input type="text" name="email" required>
            <br><br>
            Image: <input type="text" name="image">
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br> 
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Submit" name="submit"> 
        </form>
    </ul>

</body>
</html>