<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-900 min-h-screen flex items-center justify-center">
    <div class="bg-zinc-800 rounded-xl shadow-lg max-w-md w-full p-8">
        <h2 class="text-2xl font-bold text-center text-gray-200 mb-6">Create User Account</h2>
        <form action="<?=site_url('create');?>" method="POST" class="space-y-5">
            <div>
                <label for="lastname" class="block text-gray-400 font-medium mb-1">Last Name</label>
                <input type="text" name="lastname" id="lastname" required
                    class="w-full px-4 py-2 border border-zinc-700 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700 bg-zinc-900 text-gray-200" />
            </div>
            <div>
                <label for="firstname" class="block text-gray-400 font-medium mb-1">First Name</label>
                <input type="text" name="firstname" id="firstname" required
                    class="w-full px-4 py-2 border border-zinc-700 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700 bg-zinc-900 text-gray-200" />
            </div>
            <div>
                <label for="email" class="block text-gray-400 font-medium mb-1">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-zinc-700 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700 bg-zinc-900 text-gray-200" />
            </div>
            <input type="submit" value="Submit"
                class="w-full bg-red-700 hover:bg-red-800 text-white font-semibold py-2 rounded-md transition duration-150 cursor-pointer" />
        </form>
    </div>
</body>
</html>