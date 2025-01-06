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
        <form action="" method="post" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
            <div class="space-y-1">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input
                    type="text"
                    id="name"
                    placeholder="Enter your name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>
            <div class="space-y-1">
                <label for="roll" class="block text-sm font-medium text-gray-700">Roll</label>
                <input
                    type="text"
                    id="roll"
                    placeholder="Enter your roll"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>
            <div class="space-y-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    placeholder="Enter your email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>
            <div class="space-y-1">
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input
                    type="file"
                    id="image"
                    class="w-full text-gray-700 bg-gray-100 rounded-md shadow-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
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
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Image</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-semibold text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2 text-gray-700 text-sm">101</td>
                    <td class="border border-gray-300 px-4 py-2 text-gray-700 text-sm">Md Nuruddin</td>
                    <td class="border border-gray-300 px-4 py-2 text-gray-700 text-sm">awcnuruddin@gmail.com</td>
                    <td class="border border-gray-300 px-4 py-2 text-gray-700 text-sm">Image</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <button class="btn">Edit</button>
                        <button class="btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
</div>

    <!-- <div class="produc_display">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>image</th>
                <th>action</th>
            </tr>
            <tr>
                <td>101</td>
                <td>Md Nuruddin</td>
                <td>awcnuruddin@gmail.con</td>
                <td>Image</td>
                <td>
                    <button>edit</button>
                    <button>delete</button>
                </td>
            </tr>
        </table>
    </div> -->
</body>
</html>