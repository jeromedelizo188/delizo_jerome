<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for Neubrutalism, if needed beyond Tailwind */
        .neubrutalist-box {
            border: 2px solid #000;
            box-shadow: 4px 4px 0px #000;
        }
        .neubrutalist-input {
            border: 2px solid #000;
        }
        .neubrutalist-button {
            border: 2px solid #000;
        }
    </style>
</head>
<body class="bg-gray-950 min-h-screen flex items-center justify-center p-4">
    <div class="bg-gray-800 rounded-none neubrutalist-box max-w-md w-full p-8">
        <h2 class="text-2xl font-bold text-gray-50 mb-6 text-center tracking-wide">UPDATE USER</h2>
        <form action="<?=site_url('update/'.$user['student_id']);?>" method="POST" class="space-y-6">
            <div>
                <label for="lastname" class="block text-gray-50 font-medium mb-1 tracking-wide">LAST NAME</label>
                <input type="text" name="lastname" id="lastname" value="<?=$user['last_name'];?>"
                    class="w-full px-4 py-2 neubrutalist-input focus:outline-none focus:ring-0 focus:border-red-500 bg-gray-900 text-gray-50" />
            </div>
            <div>
                <label for="firstname" class="block text-gray-50 font-medium mb-1 tracking-wide">FIRST NAME</label>
                <input type="text" name="firstname" id="firstname" value="<?=$user['first_name'];?>"
                    class="w-full px-4 py-2 neubrutalist-input focus:outline-none focus:ring-0 focus:border-red-500 bg-gray-900 text-gray-50" />
            </div>
            <div>
                <label for="email" class="block text-gray-50 font-medium mb-1 tracking-wide">EMAIL</label>
                <input type="email" name="email" id="email" value="<?=$user['email'];?>" required
                    class="w-full px-4 py-2 neubrutalist-input focus:outline-none focus:ring-0 focus:border-red-500 bg-gray-900 text-gray-50" />
            </div>
            <input type="submit" value="SUBMIT"
                class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 neubrutalist-button transition-colors duration-150 cursor-pointer text-sm" />
        </form>
    </div>
</body>
</html>