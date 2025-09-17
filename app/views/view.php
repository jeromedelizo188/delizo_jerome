<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body { font-family: 'Inter', 'Segoe UI', Arial, sans-serif; }
    </style>
</head>
<body class="bg-zinc-950 text-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-100 border-4 border-red-700 px-4 py-2 rounded-lg bg-zinc-900">
                User Records
            </h1>
            <a href="<?=site_url('/create');?>" class="bg-red-700 text-white font-bold text-lg px-6 py-3 rounded-lg border-4 border-red-900 hover:bg-red-800 transition-colors duration-150">
                Add New Record
            </a>
        </div>
        <div class="bg-zinc-900 border-4 border-red-700 rounded-xl overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-zinc-950">
                        <th class="px-6 py-4 text-left text-base font-extrabold text-gray-100 uppercase border-b-4 border-red-700">ID</th>
                        <th class="px-6 py-4 text-left text-base font-extrabold text-gray-100 uppercase border-b-4 border-red-700">Last Name</th>
                        <th class="px-6 py-4 text-left text-base font-extrabold text-gray-100 uppercase border-b-4 border-red-700">First Name</th>
                        <th class="px-6 py-4 text-left text-base font-extrabold text-gray-100 uppercase border-b-4 border-red-700">Email</th>
                        <th class="px-6 py-4 text-left text-base font-extrabold text-gray-100 uppercase border-b-4 border-red-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr class="border-b-4 border-zinc-800">
                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold text-gray-200 border-r-4 border-zinc-800"><?=$user['student_id'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold text-gray-200 border-r-4 border-zinc-800"><?=$user['last_name'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold text-gray-200 border-r-4 border-zinc-800"><?=$user['first_name'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold text-gray-200 border-r-4 border-zinc-800"><?=$user['email'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold">
                            <a class="bg-red-700 text-white px-4 py-2 rounded-lg border-2 border-red-900 hover:bg-red-800 transition-colors mr-2" href="<?=site_url('/update/'.$user['student_id']);?>">Edit</a>
                            <a class="bg-zinc-950 text-red-700 px-4 py-2 rounded-lg border-2 border-red-700 hover:bg-red-700 hover:text-white transition-colors" href="<?=site_url('/delete/'.$user['student_id']);?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>