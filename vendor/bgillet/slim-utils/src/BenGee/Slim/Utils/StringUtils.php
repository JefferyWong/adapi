<?php

/**
 * SlimUtils - Utility classes for Slim based apps.
 *
 * @author Benjamin GILLET <bgillet@hotmail.fr>
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BenGee\Slim\Utils;

/**
 * Collection of string utility methods.
 * @author Benjamin GILLET <bgillet@hotmail.fr>
 */
class StringUtils
{
    /**
     * Test if variable is empty or, if it is a string, composed with spaces only.
     * @param mixed $value Value to check.
     * @return bool 'true' if the variable is empty or, if it is a string, composed with spaces only.
     */
    public static function emptyOrSpaces($value)
    {
        return (empty($value) ? true : (is_string($value) ? ctype_space(strval($value)) : false));
    }
    
    /**
     * Camelize a string.
     * @param string $value String to camelize.
     * @param bool $ucfirst Make first character upper case.
     * @return string Camelized version of input string with accents replaced by their non-accent equivalents and non-alpha and non-numeric characters by spaces.
     * @throw \InvalidArgumentException Thrown when given value is null or not a string.
     */
    public static function camelize($value, $ucfirst = false)
    {
        if (!is_string($value)) throw new \InvalidArgumentException('Given value is null or not a string !');
        // Replace accents by non-accent equivalents.
        $value = self::replaceAccents($value);
        // Non-alpha and non-numeric characters become spaces.
        $value = preg_replace('/[^a-z0-9]+/i', ' ', $value);
        // Uppercase the first character of each word.
        $value = str_replace(" ", "", ucwords(strtolower(trim($value))));
        return ($ucfirst ? $value : lcfirst($value));
    }

    /**
     * Replace accents by non-accent equivalents.
     * @param string $value String where to replace accents.
     * @return string Input string with all accents replaced by their non-accent equivalents.
     * @throw \InvalidArgumentException Thrown when given value is null or not a string.
     */
    public static function replaceAccents($value)
    {
        if (!is_string($value)) throw new \InvalidArgumentException('Given value is null or not a string !');
        $search = explode(',', 'ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ');
        $replace = explode(',', 'c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE');
        return str_replace($search, $replace, strval($value));
    }
    
    /**
     * Test if a string starts with the given string.
     * @param string $haystack The string to test.
     * @param string $needle The string to find.
     * @return bool Return true if $needle is found at the beginning of $haystack else false.
     * @throw \InvalidArgumentException Thrown when value to test or find is null or not a string.
     */
    public static function startsWith($haystack, $needle)
    {
        if (!is_string($haystack)) throw new \InvalidArgumentException('String to test is null or not a string !');
        if (!is_string($needle)) throw new \InvalidArgumentException('String to find is null or not a string !');
        $haystack = strval($haystack);
        $needle = strval($needle);
        return $needle === "" || strpos($haystack, $needle) === 0;
    }
    
    /**
     * Test if a string ends with the given string.
     * @param string $haystack The string to test.
     * @param string $needle The string to find.
     * @return bool Return true if $needle is found at the end of $haystack else false.
     * @throw \InvalidArgumentException Thrown when value to test or find is null or not a string.
     */
    public static function endsWith($haystack, $needle)
    {
        if (!is_string($haystack)) throw new \InvalidArgumentException('String to test is null or not a string !');
        if (!is_string($needle)) throw new \InvalidArgumentException('String to find is null or not a string !');
        $haystack = strval($haystack);
        $needle = strval($needle);
        return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
    }
}
