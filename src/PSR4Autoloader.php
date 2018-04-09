<?php
declare(strict_types=1);
/**
 * Elixir Framework
 *
 * @author  Nicholas English <https://github.com/Nenglish7>.
 *
 * @link    <https://github.com/elixir-framework/Autoloader> Github Repository.
 * @license <https://github.com/elixir-framework/Autoloader/master/LICENSE> MIT License.
 *
 * @copyright Copyright (C) 2018 Elixir Framework
 */
namespace Elixir\Autoloader;
/**
 * AbstractAutoloader.
 */
class AbstractAutoloader
{
    /**
     * Require a class based on path generation.
     *
     * @param string $path The path generated.
     *
     * @return void Return nothing.
     */
    protected function require(string $path): void {
        require $path;
    }
    /**
     *
*
}
