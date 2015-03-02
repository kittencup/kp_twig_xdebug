<?php
/**
 * Kittencup
 *
 * @date 2015 15/1/20 下午12:39
 * @copyright Copyright (c) 2014-2015 Kittencup. (http://www.kittencup.com)
 * @license   http://kittencup.com
 */

namespace Drupal\kp_twig_xdebug\Twig\Extension;

use Twig_Extension;
use Twig_SimpleFunction;
use Twig_Environment;

/**
 * Class Xdebug
 * @package Drupal\kp_twig_xdebug\Twig\Extension
 */
class Xdebug extends Twig_Extension
{
    /**
     * Returns a list of global functions to add to the existing list.
     *
     * @return array An array of global functions
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('xdebug_break', [$this, 'xdebug_break'], ['needs_context' => true, 'needs_environment' => true]),
        ];
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'xdebug';
    }

    /**
     * @param Twig_Environment $env
     * @param $context
     */
    public function xdebug_break(Twig_Environment $env)
    {
        if ($env->isDebug() && function_exists('xdebug_break')) {
            xdebug_break();
        }
    }
}

