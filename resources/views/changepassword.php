<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg flex max-w-4xl w-full">
        <!-- Left Side - Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-3xl font-bold mb-4">Welcome back</h2>
            <p class="text-gray-500 mb-8">Welcome back! Please enter your details.</p>
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your email">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="********">
                </div>
                <div class="flex items-center justify-between">
                    <!-- <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember for 30 days</label>
                    </div> -->
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">Sign in</button>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <button class="w-full flex items-center justify-center py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Logo_2013_Google.png/768px-Logo_2013_Google.png" alt="Google" class="w-5 h-5 mr-2">
                        Sign in with Google
                    </button>
                </div>
            </form>
            <p class="text-center text-sm text-gray-500 mt-6">
                Don’t have an account? <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign up for free</a>
            </p>
        </div>

        <!-- Right Side - Image and Quote -->
        <div class="w-1/2 relative hidden md:block">
            <img src="path_to_your_image" alt="Bookshelf" class="h-full w-full object-cover rounded-r-lg">
            <div class="absolute bottom-0 bg-white bg-opacity-60 p-6 rounded-tl-lg">
                <p class="text-lg italic">"We’ve been using Untitled to kick start every new project and can’t imagine working without it."</p>
                <p class="mt-4 font-bold">Andi Lane</p>
                <p class="text-sm text-gray-500">Founder, Catalog Web Design Agency</p>
            </div>
        </div>
    </div>
</body>
</html>
