<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="../css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden" style="width: 800px; height: 500px;">
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-semibold text-center text-gray-800">RA NURUL HIDAYAH</h2>
            <p class="text-lg text-center text-gray-600 mt-4">LOGIN</p>
           
            <form class="mt-8 space-y-6" action="" method="POST">
                @csrf
                <div class="relative">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input type="text" value="{{ old('username') }}" name="username" id="username" placeholder="Username" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>
                <div class="relative mt-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                </div>
                @if ($errors->has('login'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                        <strong class="font-bold">Kesalahan!</strong>
                    <span class="block sm:inline">{{ $errors->first('login') }}</span>
                    </div>
                @endif

                <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full mt-6 bg-gradient-to-r from-teal-400 to-blue-500 text-white font-semibold py-2 rounded-lg hover:shadow-lg transition duration-300">
                    Login
                </button>
            </form>
        </div>
        <div class="w-1/2 bg-gradient-to-br from-teal-400 to-blue-500 flex items-center justify-center">
            <img src="{{ asset('images/admin_login_graphic.png') }}" alt="Login Graphic" class="h-3/4">
        </div>
    </div>
</body>
</html>
