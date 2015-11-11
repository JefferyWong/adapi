slim-utils
===

Utility classes for Slim based applications.

Current utility classes are :

- `StringUtils`

Class : StringUtils
---

This class offers static utility methods related to string manipulation :

* `emptyOrSpaces($value)`
  * Test if given value is `null`, `false` (equivalent to a call to PHP `empty()` method) or composed with spaces only.
* `camelize($value, $ucFirst = false)`
  * Camelize the given string value
  * If `$ucFirst` is `true` then first letter of returned string is upper.
* `replaceAccents($value)`
  * Replace all accents in given string value with their no accent equivalent.
* `startsWith($haystack, $needle)`
  * Check if `$haystack` starts with `$needle`.
* `endsWith($haystack, $needle)`
  * Check if `$haystack` ends with `$needle`.

