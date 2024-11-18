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

    <div class="w-full max-w-md mx-auto">
        <div class="space-y-4">
            <!-- Accordion Item 1 -->
            <div class="border rounded-lg">
                <button
                    type="button"
                    class="w-full flex justify-between items-center px-4 py-2 text-left text-gray-800 font-medium hover:bg-gray-100"
                    data-accordion-toggle>
                    <span>Accordion Item #1</span>
                    <svg
                        class="w-4 h-4 transform transition-transform"
                        data-accordion-icon
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                    class="px-4 py-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-300"
                    data-accordion-content>
                    Content for accordion item #1 goes here. Add any text or HTML elements.
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="border rounded-lg">
                <button
                    type="button"
                    class="w-full flex justify-between items-center px-4 py-2 text-left text-gray-800 font-medium hover:bg-gray-100"
                    data-accordion-toggle>
                    <span>Accordion Item #2</span>
                    <svg
                        class="w-4 h-4 transform transition-transform"
                        data-accordion-icon
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                    class="px-4 py-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-300"
                    data-accordion-content>
                    Content for accordion item #2 goes here. Add any text or HTML elements.
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="border rounded-lg">
                <button
                    type="button"
                    class="w-full flex justify-between items-center px-4 py-2 text-left text-gray-800 font-medium hover:bg-gray-100"
                    data-accordion-toggle>
                    <span>Accordion Item #3</span>
                    <svg
                        class="w-4 h-4 transform transition-transform"
                        data-accordion-icon
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                    class="px-4 py-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-300"
                    data-accordion-content>
                    Content for accordion item #3 goes here. Add any text or HTML elements.
                </div>
            </div>
        </div>
    </div>


    <script>
        const accordionButtons = document.querySelectorAll('[data-accordion-toggle]');

        accordionButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('[data-accordion-icon]');
                const isOpen = !content.classList.contains('max-h-0');

                // Close all other accordions
                document.querySelectorAll('[data-accordion-content]').forEach((otherContent) => {
                    if (otherContent !== content) {
                        otherContent.classList.add('max-h-0');
                        const otherIcon = otherContent.previousElementSibling.querySelector('[data-accordion-icon]');
                        otherIcon.classList.remove('rotate-180');
                    }
                });

                // Toggle current accordion
                if (isOpen) {
                    content.classList.add('max-h-0');
                    icon.classList.remove('rotate-180');
                } else {
                    content.classList.remove('max-h-0');
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>




    <script src="/wp-content/themes/scamwatch/_/js/jquery.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>