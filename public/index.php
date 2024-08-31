<?php 
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../resources/css/login.css">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center backgrnd_drop backdrop-blur-lg">
    <div class="bg-white shadow-lg rounded-lg flex max-w-4xl w-full backdrop-blur-lg">
        <div class="w-1/2 p-8 flex justify-center h-screen flex-col">

            <h2 class="text-3xl font-bold mb-4">Welcome back</h2>
            <p class="text-gray-500 mb-8">Welcome back! Please enter your details.</p>

            <form action="" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 ">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-none focus:outline-none" placeholder="Enter your email">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-none focus:outline-none" placeholder="********">
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                </div>
                <p class="text-sm text-red-500 text-center"><?php echo $error ?></p>
                <div>
                    <input type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700" name="signup" value="Sign in">
                </div>
            </form>
            <div class="w-full h-16 justify-center items-center flex text-center">
                <p class="absolute bottom-2 text-center text-xs font-medium">&copy; 2024 gsolutech. Tous droit réservés.</p>
            </div>
        </div>

        <!-- Right Side - Image and Quote -->
        <div class="w-1/2 relative hidden md:block">
            <img src="../resources/src/assets/office.jpg" alt="Bookshelf" class="h-full w-full object-cover rounded-r-lg">
            <div class="absolute bottom-0 bg-white bg-opacity-60 p-6 rounded-tl-lg">
                <p class="text-lg italic">"We’ve been using Weka Task app to kick start every new project and can’t imagine working without it."</p>
                <p class="mt-4 font-bold">Weka Task</p>
                <p class="text-sm text-gray-500">Team 243, Catalog Web Design Agency</p>
            </div>
        </div>
    </div>
</body>
</html>
