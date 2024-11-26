<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative  py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class=" absolute inset-0 bg-gradient-to-r from-[#1C1C1C] to-[#CCCCCC] shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div class="text-center">
                            <h1 class="text-2xl font-bold font-serif">Login</h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input autocomplete="off" id="email" name="email" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                        placeholder="Email address" />
                                    <label for="email"
                                        class="absolute left-0 -top-3.5 text-gray-600  peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-[10px]">Email
                                    </label>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="password" name="password" type="password"
                                        class="peer placeholder-transparent h-10 w-full  border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600"
                                        placeholder="Password" />
                                    <label for="password"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-[10px] ">Password</label>
                                    <button type="button" id="togglePassword"
                                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-600">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>
                                <div class="relative ">
                                    <button
                                        class="w-full bg-[#1C1C1C] text-[20px] md:text-[14px] text-white rounded-md px-3 mt-6 py-4 md:py-1 hover:text-gray-400">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <a href="{{ route('register.index') }}"
                            class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            <span>Create Account</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Ganti ikon menggunakan innerHTML
            this.innerHTML = type === 'password' ?
                '<i class="fa-regular fa-eye"></i>' :
                '<i class="fa-regular fa-eye-slash"></i>';
        });
    </script>
</body>

</html>
