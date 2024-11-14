<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/output.css">
    <title>Ishtiak | Scamwatch</title>
</head>

<body>

    <header>
        <div class="bg-black py-2">
            <div class="holder">
                <ul class="flex justify-end items-center gap-4 md:gap-10 [&>li>a]:text-white [&>li>a]:font-medium [&>li>a]:text-sm ">
                    <li><a href="">News & Alerts</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Reports</a></li>
                </ul>
            </div>
        </div>

        <div class="holder flex flex-col md:flex-row justify-between items-center py-10 space-y-6 md:space-y-0">
            <div>
                <a href="">
                    <h1 class="text-3xl uppercase font-bold">Scamwatch</h1>
                </a>
            </div>
            <div class="flex items-center">
                <input
                    type="text"
                    placeholder="Search..."
                    class="px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:border-black" />
                <button
                    class="px-4 py-2 bg-black text-white rounded-r-md hover:bg-green-500 focus:outline-none">
                    Search
                </button>
            </div>

        </div>
    </header>

    <nav class="bg-gray-200 py-4 ">

        <ul
            class="relative flex justify-center items-center gap-4 md:gap-10 [&>li>a]:text-black [&>li>a]:font-medium [&>li>a]:text-base [&>li>a]:uppercase">
            <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="">Home</a></li>

            <!-- Mega Menu Parent -->
            <li class="[&>a]:hover:text-green-500 [&>a]:duration-500 group">
                <a href="#">Type of Scam</a>

                <!-- Mega Menu Dropdown -->
                <div
                    class="bg-gray-100 absolute left-0 top-10 w-screen shadow-md py-8 opacity-0  group-hover:opacity-100 ease-in-out flex justify-center transition-all duration-500">
                    <div class="max-w-6xl w-full px-4">
                        <div class="grid grid-cols-3 gap-8">
                            <!-- Column 1 -->
                            <div>
                                <h4 class="font-semibold mb-4">Online Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Phishing</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Fake E-commerce</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Email Scams</a></li>
                                </ul>
                            </div>
                            <!-- Column 2 -->
                            <div>
                                <h4 class="font-semibold mb-4">Investment Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Ponzi Schemes</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Crypto Scams</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Stock Market Scams</a></li>
                                </ul>
                            </div>
                            <!-- Column 3 -->
                            <div>
                                <h4 class="font-semibold mb-4">Social Media Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Fake Profiles</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Romance Scams</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-green-500 duration-500">Impersonation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="">I have been scam</a></li>
            <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="">Protection against Scam</a></li>
            <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="">About Us</a></li>
            <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="">More</a></li>
        </ul>

    </nav>



    <script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>