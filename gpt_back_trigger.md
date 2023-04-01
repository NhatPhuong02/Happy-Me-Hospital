#### demo index.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Navigation Detection</title>
    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) === 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkBackNavigation() {
            var lastVisit = getCookie("lastVisit");
            if (lastVisit !== "") {
                var currentTime = new Date().getTime();
                var elapsedTime = currentTime - lastVisit;

                if (elapsedTime < 30000) { // 30 seconds
                    window.location.replace("back.html");
                }
            }
        }

        function updateLastVisit() {
            var currentTime = new Date().getTime();
            setCookie("lastVisit", currentTime, 1);
        }

        window.addEventListener('load', checkBackNavigation);
        window.addEventListener('beforeunload', updateLastVisit);
    </script>
</head>
<body>
    <h1>Back Navigation Detection</h1>
    <p>Click the link below to navigate to another page, then use the browser's back button or Alt + Left Arrow to navigate back to this page.</p>
    <a href="https://www.example.com">Go to example.com</a>
</body>
</html>

```

#### demo back.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You are back</title>
</head>
<body>
    <h1>You are back</h1>
</body>
</html>

```