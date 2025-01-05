<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-700 text-center mb-6">ID Card Form</h1>
        <form action="id.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <!-- Full Name -->
            <div>
                <label for="fullName" class="block text-sm font-medium text-gray-600">Full Name</label>
                <input type="text" id="fullName" name="fullName" 
                    class="w-full border border-gray-500 focus:outline-none"
                    placeholder="Enter your full name" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                <input type="email" id="email" name="email" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    placeholder="Enter your email" required>
            </div>

            <!-- ID Number -->
            <div>
                <label for="idNumber" class="block text-sm font-medium text-gray-600">ID Number</label>
                <input type="text" id="idNumber" name="idNumber" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    placeholder="Enter your ID number" required>
            </div>

            <!-- Photo Upload -->
            <div>
                <label for="photo" class="block text-sm font-medium text-gray-600">Upload Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*"
                    class="mt-1 block w-full text-gray-700 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>

            <!-- Submit Button -->
            <div>
                <input type="submit" name="submit_btn" value="Submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg shadow-md focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 cursor-pointer">
                </input>
            </div>
        </form>
    </div>
</div>
</body>
</html>
