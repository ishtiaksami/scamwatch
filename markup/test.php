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


    <h2>Language Translator</h2>
    <textarea id="text-to-translate" rows="4" cols="50" placeholder="Enter text to translate"></textarea>
    <br><br>

    <select id="language-select">
        <option value="es">Spanish</option>
        <option value="fr">French</option>
        <option value="de">German</option>
        <option value="hi">Hindi</option>
        <option value="bn">Bengali</option>
        <option value="ja">Japanese</option>
    </select>
    <button id="translate-btn">Translate</button>

    <h3>Translation:</h3>
    <p id="translated-text"></p>

    <script>
        $(document).ready(function() {
            $('#translate-btn').on('click', function() {
                const text = $('#text-to-translate').val();
                const targetLang = $('#language-select').val();

                if (text === "") {
                    alert("Please enter text to translate");
                    return;
                }

                // Translation API URL
                const url = 'https://libretranslate.com/translate';

                // Ajax call to translate text
                $.ajax({
                    url: url,
                    type: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify({
                        q: text,
                        source: 'en', // assuming input text is in English
                        target: targetLang,
                        format: 'text'
                    }),
                    success: function(response) {
                        $('#translated-text').text(response.translatedText);
                    },
                    error: function(error) {
                        console.error("Error:", error);
                        alert("Translation failed. Please try again later.");
                    }
                });
            });
        });
    </script>






    <script src="/wp-content/themes/scamwatch/_/js/jquery.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>