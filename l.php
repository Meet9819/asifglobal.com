<?php
// translate.php (core PHP with Google Translate)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google Translate in PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        #google_translate_element {
            margin-bottom: 20px;
        }
        .flags {
            margin: 15px 0;
        }
        .flags a {
            font-size: 20px;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- Google Translate Dropdown -->
    <div id="google_translate_element"></div>

    <!-- Flag links -->
    <div class="flags">
        <a href="#" onclick="doGTranslate('en|en');return false;">🇬🇧 English</a>
        <a href="#" onclick="doGTranslate('en|fr');return false;">🇫🇷 French</a>
        <a href="#" onclick="doGTranslate('en|de');return false;">🇩🇪 German</a>
        <a href="#" onclick="doGTranslate('en|es');return false;">🇪🇸 Spanish</a>
        <a href="#" onclick="doGTranslate('en|hi');return false;">🇮🇳 Hindi</a>
        <a href="#" onclick="doGTranslate('en|ar');return false;">🇸🇦 Arabic</a>
    </div>

    <h1>Welcome to My PHP Website</h1>
    <p>This website is built with core PHP. You can use the dropdown or flags above to translate it into different languages using Google Translate.</p>

    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en', // default site language
            includedLanguages: 'en,fr,de,es,hi,ar', // languages you want
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

    function doGTranslate(lang_pair) {
        if (lang_pair.value) lang_pair = lang_pair.value;
        if (lang_pair=='') return;
        var lang = lang_pair.split('|')[1];
        var sel = document.querySelector('.goog-te-combo');
        if (sel) {
            sel.value = lang;
            sel.dispatchEvent(new Event('change'));
        }
    }
    </script>

    <script type="text/javascript" 
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</body>
</html>
