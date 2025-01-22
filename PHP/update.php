<?php
include('config.php');
$upid = $_REQUEST['eid'];

$sql = "SELECT * FROM `user` WHERE id = '$upid'";
$data = $conn->query($sql);
$result = $data->fetch_assoc();
?>

<form action="updateaction.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
    
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $result['name']; ?>" id="name"><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $result['email']; ?>" id="email"><br>
    
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $result['phone']; ?>" id="phone"><br><br>
    
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="Male" id="male" <?php echo ($result['gender'] === 'Male') ? 'checked' : ''; ?>>
    <label for="male">Male</label>
    <input type="radio" name="gender" value="Female" id="female" <?php echo ($result['gender'] === 'Female') ? 'checked' : ''; ?>>
    <label for="female">Female</label><br>
    
    <label for="country">Country:</label>
    <select name="country" id="country">
        <option value="UK" <?php echo ($result['country'] === 'UK') ? 'selected' : ''; ?>>UK</option>
        <option value="USA" <?php echo ($result['country'] === 'USA') ? 'selected' : ''; ?>>USA</option>
        <option value="Australia" <?php echo ($result['country'] === 'Australia') ? 'selected' : ''; ?>>Australia</option>
        <option value="India" <?php echo ($result['country'] === 'India') ? 'selected' : ''; ?>>India</option>
    </select>
    <br><br>
    
    <label for="languages">Languages:</label>
    <?php
    $languages = explode(',', $result['languages']); // Assuming languages are stored as a comma-separated string
    ?>
    <input type="checkbox" name="languages[]" value="Bengali" id="bengali" <?php echo in_array('Bengali', $languages) ? 'checked' : ''; ?>>
    <label for="bengali">Bengali</label>
    <input type="checkbox" name="languages[]" value="English" id="english" <?php echo in_array('English', $languages) ? 'checked' : ''; ?>>
    <label for="english">English</label>
    <input type="checkbox" name="languages[]" value="Hindi" id="hindi" <?php echo in_array('Hindi', $languages) ? 'checked' : ''; ?>>
    <label for="hindi">Hindi</label>
    <br><br>
    
    <label for="image">Upload Image:</label>
    <input type="file" name="image" id="image">
    <br><br>
    
    <button type="submit">Submit</button>
</form>
