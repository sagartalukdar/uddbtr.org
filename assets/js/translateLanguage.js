





function loadGoogleTranslateScript(callback) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//translate.google.com/translate_a/element.js?cb=' + callback;
    document.head.appendChild(script);
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
}


window.addEventListener('load', function () {
    loadGoogleTranslateScript('googleTranslateElementInit');
    googleTranslateElementInit();
});

window.addEventListener('pageshow', function (event) {
    // Check if the page was restored from cache
    if (event.persisted) {
        loadGoogleTranslateScript('googleTranslateElementInit');
        googleTranslateElementInit();
    }
});



