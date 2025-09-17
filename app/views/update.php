<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        html, body {
            font-family: 'Inter', sans-serif;
        }

        /* Animated gradient background */
        @keyframes subtleGradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            background: linear-gradient(-45deg, #e6e6e6, #f0f0f0, #e6e6e6, #f8f8f8);
            background-size: 400% 400%;
            animation: subtleGradientMove 15s ease infinite;
            color: #616161;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        /* Blurry orange rising sun light source */
        body::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 1000px;
            height: 1000px;
            background: radial-gradient(circle at 10% 90%, rgba(255, 120, 0, 0.4), transparent 70%);
            filter: blur(120px);
            z-index: 0;
            opacity: 0.8;
            pointer-events: none;
        }

        /* Subtle secondary light source */
        body::after {
            content: '';
            position: absolute;
            top: 15%;
            right: 15%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.5), transparent);
            filter: blur(80px);
            z-index: 0;
            opacity: 0.8;
            pointer-events: none;
        }

        /* General soft-ui class for all main containers and elements */
        .soft-ui {
            border-radius: 1.5rem;
            background: #e6e6e6;
            box-shadow: 6px 6px 12px #c9c9c9,
                        -6px -6px 12px #ffffff;
            transition: all 0.3s ease-in-out;
            position: relative;
            z-index: 1;
        }

        /* Inset effect for clickable elements, making them look pressed */
        .soft-ui-inset {
            box-shadow: inset 5px 5px 10px #c9c9c9,
                        inset -5px -5px 10px #ffffff;
        }

        /* Hover effect for buttons and links to show they are interactive */
        .soft-ui-hover:hover {
            box-shadow: 4px 4px 8px #c9c9c9,
                        -4px -4px 8px #ffffff;
            transform: translateY(-2px);
        }

        /* Active/click effect to simulate a press */
        .soft-ui-active:active {
            box-shadow: inset 5px 5px 10px #c9c9c9,
                        inset -5px -5px 10px #ffffff;
            transform: translateY(0);
        }
        
        .soft-ui-red {
            background-color: #ff6a6a;
            color: white;
            box-shadow: 6px 6px 12px #d65959,
                        -6px -6px 12px #ff7b7b;
        }

        .text-shadow {
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

    </style>
</head>
<body>
    <div class="soft-ui rounded-2xl max-w-lg w-full p-8">
        <h2 class="text-3xl font-semibold text-gray-700 mb-6 text-center tracking-wide text-shadow">UPDATE USER</h2>
        <form action="<?=site_url('update/'.$user['student_id']);?>" method="POST" class="space-y-6">
            <div>
                <label for="lastname" class="block text-gray-600 font-medium mb-1 tracking-wide">LAST NAME</label>
                <input type="text" name="lastname" id="lastname" value="<?=$user['last_name'];?>"
                    class="w-full px-4 py-3 rounded-lg soft-ui-inset focus:outline-none text-gray-700" />
            </div>
            <div>
                <label for="firstname" class="block text-gray-600 font-medium mb-1 tracking-wide">FIRST NAME</label>
                <input type="text" name="firstname" id="firstname" value="<?=$user['first_name'];?>"
                    class="w-full px-4 py-3 rounded-lg soft-ui-inset focus:outline-none text-gray-700" />
            </div>
            <div>
                <label for="email" class="block text-gray-600 font-medium mb-1 tracking-wide">EMAIL</label>
                <input type="email" name="email" id="email" value="<?=$user['email'];?>" required
                    class="w-full px-4 py-3 rounded-lg soft-ui-inset focus:outline-none text-gray-700" />
            </div>
            <input type="submit" value="SUBMIT"
                class="w-full text-center soft-ui soft-ui-red soft-ui-hover soft-ui-active text-white font-bold py-3 text-lg cursor-pointer transition-colors duration-150" />
        </form>
    </div>
</body>
</html>
