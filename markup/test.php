<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/output.css">
    <title>Ishtiak | Scamwatch</title>

    <style>
        /* Smooth transition for steps */
        #step-1,
        #step-2,
        #step-3 {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Smooth transition for progress bar */
        #progress-1,
        #progress-2 {
            transition: background-color 0.3s ease;
        }

        /* Smooth fade for content */
        .content {
            transition: opacity 0.3s ease;
            opacity: 0;
            pointer-events: none;
        }

        .content:not(.hidden) {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
</head>

<body>
    <div class="w-full max-w-4xl p-4">
        <div class="flex items-center">
            <div class="flex flex-col items-center">
                <div id="step-1" class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full text-gray-700 font-bold">1</div>
                <div class="w-1 h-16 bg-gray-300" id="progress-1"></div>
                <div id="step-2" class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full text-gray-700 font-bold">2</div>
                <div class="w-1 h-16 bg-gray-300" id="progress-2"></div>
                <div id="step-3" class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full text-gray-700 font-bold">3</div>
            </div>
            <div class="ml-4">
                <div class="content" id="content-1">
                    <h2 class="text-xl font-bold text-blue-900">STOP</h2>
                    <p class="text-blue-900">Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up, delete.</p>
                </div>
                <div class="content hidden" id="content-2">
                    <h2 class="text-xl font-bold text-blue-900">CHECK</h2>
                    <p class="text-blue-900">Scammers pretend to be from organisations you know and trust – like myGov, your bank, the police or government. If you’re not sure, call the official phone number of the organisation to check.</p>
                </div>
                <div class="content hidden" id="content-3">
                    <h2 class="text-xl font-bold text-blue-900">REPORT</h2>
                    <p class="text-blue-900">The more we talk, the less power they have. Report scams to us when you see them.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button id="prev-btn" class="px-4 py-2 bg-gray-300 text-gray-700 rounded disabled:opacity-50" disabled>Previous</button>
            <button id="next-btn" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">Next</button>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let currentStep = 1;

            const totalSteps = 3;
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            const updateProgress = () => {
                for (let i = 1; i <= totalSteps; i++) {
                    const step = document.getElementById(`step-${i}`);
                    const progress = document.getElementById(`progress-${i - 1}`);
                    const content = document.getElementById(`content-${i}`);

                    if (i === currentStep) {
                        step.classList.add('bg-blue-500', 'text-white');
                        step.classList.remove('bg-gray-200', 'text-gray-700');
                        content.classList.remove('hidden');
                    } else {
                        step.classList.add('bg-gray-200', 'text-gray-700');
                        step.classList.remove('bg-blue-500', 'text-white');
                        content.classList.add('hidden');
                    }

                    if (progress) {
                        if (i < currentStep) {
                            progress.classList.add('bg-blue-500');
                            progress.classList.remove('bg-gray-300');
                        } else {
                            progress.classList.add('bg-gray-300');
                            progress.classList.remove('bg-blue-500');
                        }
                    }
                }

                prevBtn.disabled = currentStep === 1;
                nextBtn.disabled = currentStep === totalSteps;
            };

            prevBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateProgress();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateProgress();
                }
            });

            // Initialize progress bar
            updateProgress();
        });
    </script>


    <script src="/wp-content/themes/scamwatch/_/js/jquery.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>