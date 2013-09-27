<?php

/**
 * A package to use Nexmo api https://www.nexmo.com.
 *
 * @package    Nexmo
 * @version    0.1
 * @author     Jeff Bickart
 * @license    MIT License
 * @copyright  2013 Matthew McConnell
 * @link       https://twitter.com/bickart
 */
Autoloader::add_core_namespace('Nexmo');

Autoloader::add_classes(array(
    'Nexmo\\NexmoMessage'						=> __DIR__ . '/classes/NexmoMessage.php',
));
