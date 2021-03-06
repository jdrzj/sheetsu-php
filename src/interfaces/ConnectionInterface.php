<?php
/**
 * Interface for connection object
 * @Author: Emiliano Zublena - https://github.com/emilianozublena
 * @Package: Sheetsu PHP Library - https://github.com/emilianozublena/sheetsu-php
 */

namespace Sheetsu\Interfaces;


interface ConnectionInterface
{
    function makeCall();
    function setConfig(array $config);
}