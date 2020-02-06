<?php

namespace Core;

/**
 * Description of ConfigController
 *
 * @copyright (c) year, Everton Vitor
 */
class ConfigController
{

    private $Url;

    public function __construct()
    {
        $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        echo "URL: {$this->Url} <br>";
    }

}
