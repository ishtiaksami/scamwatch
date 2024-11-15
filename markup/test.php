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



<nav class="bg-gray-200 py-4 px-4">
    <ul
        class="relative flex justify-center items-center gap-4 md:gap-10 [&>li>a]:text-black [&>li>a]:font-medium [&>li>a]:text-xs lg:[&>li>a]:text-base [&>li>a]:uppercase">
        <li><a href="" class="after-effect relative hover:text-green-500 duration-500">Home</a></li>

        <!-- Mega Menu Parent -->
        <li class="group relative">
            <a id="scam-link" href="#" class="after-effect relative hover:text-green-500 duration-500">Type of Scam</a>

            <!-- Mega Menu Dropdown -->
            <div
                id="mega-menu"
                class="bg-gray-100 absolute -left-4 top-10 w-screen shadow-md py-8 opacity-0 pointer-events-none ease-in-out flex justify-center transition-all duration-500 z-10">
                <div class="grid grid-cols-3 gap-8 max-w-[53rem] w-full px-4">
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
        </li>

        <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="" class="after-effect relative">I have been scam</a></li>
        <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="" class="after-effect relative">Protection against Scam</a></li>
        <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="" class="after-effect relative">About</a></li>
        <li class="[&>a]:hover:text-green-500 [&>a]:duration-500"><a href="" class="after-effect relative">More</a></li>
    </ul>
</nav>

    const scamLink = document.getElementById('scam-link');
    const megaMenu = document.getElementById('mega-menu');

    // Toggle Mega Menu on Click (for mobile or touch users)
    scamLink.addEventListener('click', (event) => {
        event.preventDefault();
        megaMenu.classList.toggle('opacity-100');
        megaMenu.classList.toggle('pointer-events-auto');
        megaMenu.classList.toggle('translate-y-2');
    });

    // Close the mega menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!scamLink.contains(event.target) && !megaMenu.contains(event.target)) {
            megaMenu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-2');
        }
    });

    // Close the mega menu with the Escape key
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            megaMenu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-2');
        }
    });

    // Hover effect for desktop users
    scamLink.parentElement.addEventListener('mouseenter', () => {
        megaMenu.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-2');
    });

    scamLink.parentElement.addEventListener('mouseleave', () => {
        megaMenu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-2');
    });
</script> -->




<script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>