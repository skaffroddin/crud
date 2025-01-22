<?php
include('config.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertaction.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone"><br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label><br>
        
        <label for="country">Country:</label>
        <select name="country" id="country">
            <option value="UK">UK</option>
            <option value="USA">USA</option>
            <option value="Australia">Australia</option>
            <option value="India" selected>India</option>
        </select>
        <br><br>
        
        <label for="languages">Languages:</label>
        <input type="checkbox" name="languages[]" value="Bengali" id="bengali">
        <label for="bengali">Bengali</label>
        <input type="checkbox" name="languages[]" value="English" id="english">
        <label for="english">English</label>
        <input type="checkbox" name="languages[]" value="Hindi" id="hindi">
        <label for="hindi">Hindi</label>
        <br><br>
        
        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image">
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>

</html>
