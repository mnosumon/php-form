<?php 
    include('function.php');
    $crud = new crudApplication();
 
    if (isset($_GET['status'])) {
        if ($_GET['status']='edit') {
           $id = $_GET['id'];
           $findDataById = $crud->readDataById($id);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
            <div class="space-y-1">
                <label for="updateName" class="block text-sm font-medium text-gray-700">Name</label>
                <input
                    type="text"
                    name="updateName"
                    id="name"
                    value=<?php echo $findDataById['Name']; ?>
                >
            </div>
            <div class="space-y-1">
                <label for="updateEmail" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="updateEmail"
                    value=<?php echo $findDataById['Email']; ?>
                >
            </div>
            <div class="space-y-1">
                <label for="updateImage" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input
                    type="file"
                    id="image"
                    name="updateImage"
                >
            </div>
            <div class="pt-4">
                <button
                    type="submit"
                    class="w-full submit_btn" type="submit" name="update_btn"
                >
                    Update
                </button>
            </div>
        </form>
</body>
</html>