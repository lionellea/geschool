<?php
/**
* @file src/Twig/TwigExtension.php
**/

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    /**
    * return an array of our custom filters
    */
    public function getFilters(): array
    {
        return [
            new TwigFilter('strpad', [$this, 'strpad'], ['is_safe' => ['html']]),
            new \Twig_SimpleFilter('currencysymbol', array($this, 'currencySymbolFilter')),
            new TwigFilter('filesize', [$this, 'readableFilesize'], ['is_safe' => ['html']]),
        ];
    }

    /**
    * return an array of our custom functions
    */
    public function getFunctions(): array
    {
        return [];

    }

    /**
     * Twig wrapper for str_pad to Pad a string to a fixed length.
     * example usage in template:
     *
     * {{ page.title|strpad(50,'-', 'left') }}
     *
     * @param $input
     * @param $padlength
     * @param string $padstring
     * @param mixed $padtype
     *
     * @return string
     */
    public function strpad($input, $padlength, $padstring='', $padtype =  'left' )
    {
        if (is_string($padtype)) {
            switch (true) {
                case stristr($padtype,'left'):
                    $padtype = STR_PAD_LEFT;
                    break;
                case stristr($padtype,'both'):
                    $padtype = STR_PAD_BOTH;
                    break;
                default:
                    $padtype = STR_PAD_RIGHT;
            }

        }

        return str_pad($input, $padlength, $padstring, $padtype);
    }
    
    /**
    * example:  {{ curcode|currencysymbol }}{{ price }}
    * add more symbols to suit your localisation
    **/
    public function currencySymbolFilter($currencyCode, $asHTML = false )
    {

        switch (strtoupper($currencyCode) ) {
            case 'GBP':
                $symbol = "£";
                $symbolHTML = "&pound;";
                break;
            default:
                $symbol = "€";
                $symbolHTML = "&euro;";
        }

        if ($asHTML) {
            return $symbolHTML;
        }
        return $symbol;
    }
    
  
  
    /**
     * @param $filesize in bytes
     * @param null $units
     * @param null $decimals
     *
     * @example {{ filename }}{{ filesize|filesize('GB',3) }}
     * @return string
     */
    public function readableFilesize($filesize, $units=null, $decimals=null)
    {
        // if user specified bytes just return the same number input
        $units = strtoupper($units);
        $decimals  = is_null($decimals) || ! is_numeric($decimals) ? 2 : (int)$decimals;
        $allowedUnits = array('bytes','KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

        if (empty($units) || ! in_array($units, $allowedUnits)) {
                $factor = floor((strlen($filesize) - 1) / 3);
                return sprintf("%.{$decimals}f %s", $filesize / pow(1024, $factor),  $allowedUnits[$factor]);
        } else {

            $pow = array_search($units, $allowedUnits);
            if ($pow >=1 ) {
                $divideBy = pow(1024, $pow);
            } else {
                $divideBy = 1;
            }
            $filesize /= $divideBy;
            return sprintf("%.{$decimals}f %s", $filesize,  $allowedUnits[$pow]);
        }
    }
  
    
}
