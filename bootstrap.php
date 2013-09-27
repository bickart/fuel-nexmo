/**
 * A package to use Nexmo api https://www.nexmo.com.
 *
 * @package    Nexmo
 * @version    0.1
 * @author     Jeff Bickart
 * @license    MIT License
 * @copyright  2013 Jeff Bickart
 * @link       https://twitter.com/bickart
 */
Autoloader::add_core_namespace('Nexmo');

Autoloader::add_classes(
    array(
         'Nexmo\\Nexmo' => __DIR__ . '/classes/nexmo.php',
         'Nexmo\\Nexmo_Message' => __DIR__ . '/classes/nexmo/nexmomessage.php',
         'Nexmo\\Nexmo_Account' => __DIR__ . '/classes/nexmo/nexmoaccount.php',
         'Nexmo\\Nexmo_Receipt' => __DIR__ . '/classes/nexmo/nexmoreceipt.php',
    )
);
