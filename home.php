<?php 
    include('function.php');
    $cruds = new crudApplication();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_btn'])) {
        $retunData = $cruds->writeData($_POST);
    
        // Redirect to prevent form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    $printData = $cruds->readData();
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
    <div>
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Add Product</h1>

        <form method="post" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
            <div class="space-y-1">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your name"
                >
            </div>
            <div class="space-y-1">
                <label for="roll" class="block text-sm font-medium text-gray-700">Roll</label>
                <input
                    type="text"
                    id="roll"
                    name="roll"
                    placeholder="Enter your roll"
                >
            </div>
            <div class="space-y-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                >
            </div>
            <div class="space-y-1">
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input
                    type="file"
                    id="image"
                    name="image"
                >
            </div>
            <div class="pt-4">
                <button
                    type="submit"
                    class="w-full submit_btn" type="submit" name="submit_btn"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
    <div class="product_display  p-6 bg-white shadow-md rounded-lg">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = mysqli_fetch_assoc($printData)) { ?>
                
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                    <td><?php echo $item['ID']; ?></td>
                    <td><?php echo $item['Name']; ?></td>
                    <td><?php echo $item['Email']; ?></td>
                    <td> <img style="width: 80px; height: 100px;" src="upload/<?php 
                        echo $item['Image']; ?>" alt="Profile Photo">
                    </td>
                    <td>
                        <button class="btn">Edit</button>
                        <button class="btn">Delete</button>
                    </td>
                </tr>
               <?php   } ?>
            </tbody>
        </table>
</div>
</body>
</html>