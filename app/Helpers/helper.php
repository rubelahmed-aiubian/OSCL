<?php

namespace App\Helpers;

    use function Composer\Autoload\includeFile;

    function redirect($to){
        header("Location:".$to);
    }
