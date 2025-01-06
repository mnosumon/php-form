<?php 
if (isset($_POST["submit_btn"])) {
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $idNumber = $_POST["idNumber"];
    // $photo = $_FILES["photo"];
    // $photo_name = $photo["name"];
    // $temp_name = $photo["tmp_name"];
    $photo_name = $_FILES["photo"]["name"];
    $temp_name = $_FILES["photo"]["tmp_name"];
    move_uploaded_file($temp_name, "upload/".$photo_name);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="input.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

        <div class="max-w-sm rounded-lg shadow-lg overflow-hidden bg-white">
            <!-- Photo Section -->
            <div class="flex justify-center mt-4">
                <img class="w-32 h-32 rounded-full border-4 border-gray-300 img_card" src="upload/<?php if (isset($photo_name)) {
                    echo $photo_name;
                } ?>" alt="Profile Photo">
            </div>
        
            <!-- Details Section -->
            <div class="px-6 py-4">
                <!-- Name -->
                <h2 class="text-xl font-semibold text-center text-gray-800">Name : 
                    <?php if (isset($name)) {
                    echo $name;
                    } ?></h2>
                
                <!-- Email -->
                <p class="text-center text-gray-600 mt-2">Email :                    
                    <?php if (isset($email)) {
                    echo $email;
                    } ?></p>
        
                <!-- ID Number -->
                <p class="text-center text-gray-500 mt-2">ID number :                   
                    <?php if (isset($idNumber)) {
                    echo $idNumber;
                    } ?></p>
            </div>
        </div>


</body>
</html>