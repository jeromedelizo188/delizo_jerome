<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-900 text-gray-400 min-h-screen">
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-200">User Records</h1>
            <a href="<?=site_url('/create');?>" class="bg-red-700 text-white px-4 py-2 rounded-md hover:bg-red-800 transition">Add New Record</a>
        </div>
        <div class="bg-zinc-800 shadow-lg rounded-lg overflow-x-auto">
            <table class="min-w-full divide-y divide-zinc-700">
                <thead class="bg-zinc-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Last Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">First Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-700">
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400"><?=$user['student_id'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400"><?=$user['last_name'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400"><?=$user['first_name'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400"><?=$user['email'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a class="text-red-500 hover:text-red-400 font-medium mr-4 transition" href="<?=site_url('/update/'.$user['student_id']);?>">Edit</a>
                            <a class="text-red-500 hover:text-red-400 font-medium transition" href="<?=site_url('/delete/'.$user['student_id']);?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>