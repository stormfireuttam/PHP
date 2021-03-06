## PHP Math Functions

- abs() 	Returns the absolute (positive) value of a number
- acos() 	Returns the arc cosine of a number
- acosh() 	Returns the inverse hyperbolic cosine of a number
- asin() 	Returns the arc sine of a number
- asinh() 	Returns the inverse hyperbolic sine of a number
- atan() 	Returns the arc tangent of a number in radians
- atan2() 	Returns the arc tangent of two variables x and y
- atanh() 	Returns the inverse hyperbolic tangent of a number
- base_convert() 	Converts a number from one number base to another
- bindec() 	Converts a binary number to a decimal number
- ceil() 	Rounds a number up to the nearest integer
- cos() 	Returns the cosine of a number
- cosh() 	Returns the hyperbolic cosine of a number
- decbin() 	Converts a decimal number to a binary number
- dechex() 	Converts a decimal number to a hexadecimal number
- decoct() 	Converts a decimal number to an octal number
- deg2rad() 	Converts a degree value to a radian value
- exp() 	Calculates the exponent of e
- expm1() 	Returns exp(x) - 1
- floor() 	Rounds a number down to the nearest integer
- fmod() 	Returns the remainder of x/y
- getrandmax() 	Returns the largest possible value returned by rand()
- hexdec() 	Converts a hexadecimal number to a decimal number
- hypot() 	Calculates the hypotenuse of a right-angle triangle
- intdiv() 	Performs integer division
- is_finite() 	Checks whether a value is finite or not
- is_infinite() 	Checks whether a value is infinite or not
- is_nan() 	Checks whether a value is 'not-a-number'
- lcg_value() 	Returns a pseudo random number in a range between 0 and 1
- log() 	Returns the natural logarithm of a number
- log10() 	Returns the base-10 logarithm of a number
- log1p() 	Returns log(1+number)
- max() 	Returns the highest value in an array, or the highest value of several specified values
- min() 	Returns the lowest value in an array, or the lowest value of several specified values
- mt_getrandmax() 	Returns the largest possible value returned by mt_rand()
- mt_rand() 	Generates a random integer using Mersenne Twister algorithm
- mt_srand() 	Seeds the Mersenne Twister random number generator
- octdec() 	Converts an octal number to a decimal number
- pi() 	Returns the value of PI
- pow() 	Returns x raised to the power of y
- rad2deg() 	Converts a radian value to a degree value
- rand() 	Generates a random integer
- round() 	Rounds a floating-point number
- sin() 	Returns the sine of a number
- sinh() 	Returns the hyperbolic sine of a number
- sqrt() 	Returns the square root of a number
- srand() 	Seeds the random number generator
- tan() 	Returns the tangent of a number
- tanh() 	Returns the hyperbolic tangent of a number

## PHP String Functions

The PHP string functions are part of the PHP core. No installation is required to use these functions.

1. addcslashes() 	Returns a string with backslashes in front of the specified characters
2. addslashes() 	Returns a string with backslashes in front of predefined characters
3. bin2hex() 	Converts a string of ASCII characters to hexadecimal values
4. chop() 	Removes whitespace or other characters from the right end of a string
5. chr() 	Returns a character from a specified ASCII value
6. chunk_split() 	Splits a string into a series of smaller parts
7. convert_cyr_string() 	Converts a string from one Cyrillic character-set to another
8. convert_uudecode() 	Decodes a uuencoded string
9. convert_uuencode() 	Encodes a string using the uuencode algorithm
10. count_chars() 	Returns information about characters used in a string
11. crc32() 	Calculates a 32-bit CRC for a string
12. crypt() 	One-way string hashing
13. echo() 	Outputs one or more strings
14. explode() 	Breaks a string into an array
15. fprintf() 	Writes a formatted string to a specified output stream
16. get_html_translation_table() 	Returns the translation table used by htmlspecialchars() and htmlentities()
17. hebrev() 	Converts Hebrew text to visual text
18. hebrevc() 	Converts Hebrew text to visual text and new lines (\n) into <br>
19. hex2bin() 	Converts a string of hexadecimal values to ASCII characters
20. html_entity_decode() 	Converts HTML entities to characters
21. htmlentities() 	Converts characters to HTML entities
22. htmlspecialchars_decode() 	Converts some predefined HTML entities to characters
23. htmlspecialchars() 	Converts some predefined characters to HTML entities
24. implode() 	Returns a string from the elements of an array
25. join() 	Alias of implode()
26. lcfirst() 	Converts the first character of a string to lowercase
27. levenshtein() 	Returns the Levenshtein distance between two strings
28. localeconv() 	Returns locale numeric and monetary formatting information
29. ltrim() 	Removes whitespace or other characters from the left side of a string
30. md5() 	Calculates the MD5 hash of a string
31. md5_file() 	Calculates the MD5 hash of a file
32. metaphone() 	Calculates the metaphone key of a string
33. money_format() 	Returns a string formatted as a currency string
34. nl_langinfo() 	Returns specific local information
35. nl2br() 	Inserts HTML line breaks in front of each newline in a string
36. number_format() 	Formats a number with grouped thousands
37. ord() 	Returns the ASCII value of the first character of a string
38. parse_str() 	Parses a query string into variables
29. print() 	Outputs one or more strings
30. printf() 	Outputs a formatted string
31. quoted_printable_decode() 	Converts a quoted-printable string to an 8-bit string
32. quoted_printable_encode() 	Converts an 8-bit string to a quoted printable string
33. quotemeta() 	Quotes meta characters
34. rtrim() 	Removes whitespace or other characters from the right side of a string
35. setlocale() 	Sets locale information
36. sha1() 	Calculates the SHA-1 hash of a string
37. sha1_file() 	Calculates the SHA-1 hash of a file
38. similar_text() 	Calculates the similarity between two strings
39. soundex() 	Calculates the soundex key of a string
40. sprintf() 	Writes a formatted string to a variable
41. sscanf() 	Parses input from a string according to a format
42. str_getcsv() 	Parses a CSV string into an array
43. str_ireplace() 	Replaces some characters in a string (case-insensitive)
44. str_pad() 	Pads a string to a new length
45. str_repeat() 	Repeats a string a specified number of times
46. str_replace() 	Replaces some characters in a string (case-sensitive)
47. str_rot13() 	Performs the ROT13 encoding on a string
48. str_shuffle() 	Randomly shuffles all characters in a string
49. str_split() 	Splits a string into an array
50. str_word_count() 	Count the number of words in a string
51. strcasecmp() 	Compares two strings (case-insensitive)
52. strchr() 	Finds the first occurrence of a string inside another string (alias of strstr())
53. strcmp() 	Compares two strings (case-sensitive)
54. strcoll() 	Compares two strings (locale based string comparison)
55. strcspn() 	Returns the number of characters found in a string before any part of some specified characters are found
56. strip_tags() 	Strips HTML and PHP tags from a string
57. stripcslashes() 	Unquotes a string quoted with addcslashes()
58. stripslashes() 	Unquotes a string quoted with addslashes()
59. stripos() 	Returns the position of the first occurrence of a string inside another string (case-insensitive)
60. stristr() 	Finds the first occurrence of a string inside another string (case-insensitive)
61. strlen() 	Returns the length of a string
62. strnatcasecmp() 	Compares two strings using a "natural order" algorithm (case-insensitive)
63. strnatcmp() 	Compares two strings using a "natural order" algorithm (case-sensitive)
64. strncasecmp() 	String comparison of the first n characters (case-insensitive)
65. strncmp() 	String comparison of the first n characters (case-sensitive)
66. strpbrk() 	Searches a string for any of a set of characters
67. strpos() 	Returns the position of the first occurrence of a string inside another string (case-sensitive)
68. strrchr() 	Finds the last occurrence of a string inside another string
69. strrev() 	Reverses a string
70. strripos() 	Finds the position of the last occurrence of a string inside another string (case-insensitive)
71. strrpos() 	Finds the position of the last occurrence of a string inside another string (case-sensitive)
72. strspn() 	Returns the number of characters found in a string that contains only characters from a specified charlist
73. strstr() 	Finds the first occurrence of a string inside another string (case-sensitive)
74. strtok() 	Splits a string into smaller strings
75. strtolower() 	Converts a string to lowercase letters
76. strtoupper() 	Converts a string to uppercase letters
77. strtr() 	Translates certain characters in a string
78. substr() 	Returns a part of a string
79. substr_compare() 	Compares two strings from a specified start position (binary safe and optionally case-sensitive)
80. substr_count() 	Counts the number of times a substring occurs in a string
81. substr_replace() 	Replaces a part of a string with another string
82. trim() 	Removes whitespace or other characters from both sides of a string
83. ucfirst() 	Converts the first character of a string to uppercase
84. ucwords() 	Converts the first character of each word in a string to uppercase
85. vfprintf() 	Writes a formatted string to a specified output stream
86. vprintf() 	Outputs a formatted string
87. vsprintf() 	Writes a formatted string to a variable
88. wordwrap() 	Wraps a string to a given number of characters

# PHP Array Functions

    array_change_key_case — Changes the case of all keys in an array
    array_chunk — Split an array into chunks
    array_column — Return the values from a single column in the input array
    array_combine — Creates an array by using one array for keys and another for its values
    array_count_values — Counts all the values of an array
    array_diff_assoc — Computes the difference of arrays with additional index check
    array_diff_key — Computes the difference of arrays using keys for comparison
    array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function
    array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison
    array_diff — Computes the difference of arrays
    array_fill_keys — Fill an array with values, specifying keys
    array_fill — Fill an array with values
    array_filter — Filters elements of an array using a callback function
    array_flip — Exchanges all keys with their associated values in an array
    array_intersect_assoc — Computes the intersection of arrays with additional index check
    array_intersect_key — Computes the intersection of arrays using keys for comparison
    array_intersect_uassoc — Computes the intersection of arrays with additional index check, compares indexes by a callback function
    array_intersect_ukey — Computes the intersection of arrays using a callback function on the keys for comparison
    array_intersect — Computes the intersection of arrays
    array_key_exists — Checks if the given key or index exists in the array
    array_key_first — Gets the first key of an array
    array_key_last — Gets the last key of an array
    array_keys — Return all the keys or a subset of the keys of an array
    array_map — Applies the callback to the elements of the given arrays
    array_merge_recursive — Merge one or more arrays recursively
    array_merge — Merge one or more arrays
    array_multisort — Sort multiple or multi-dimensional arrays
    array_pad — Pad array to the specified length with a value
    array_pop — Pop the element off the end of array
    array_product — Calculate the product of values in an array
    array_push — Push one or more elements onto the end of array
    array_rand — Pick one or more random keys out of an array
    array_reduce — Iteratively reduce the array to a single value using a callback function
    array_replace_recursive — Replaces elements from passed arrays into the first array recursively
    array_replace — Replaces elements from passed arrays into the first array
    array_reverse — Return an array with elements in reverse order
    array_search — Searches the array for a given value and returns the first corresponding key if successful
    array_shift — Shift an element off the beginning of array
    array_slice — Extract a slice of the array
    array_splice — Remove a portion of the array and replace it with something else
    array_sum — Calculate the sum of values in an array
    array_udiff_assoc — Computes the difference of arrays with additional index check, compares data by a callback function
    array_udiff_uassoc — Computes the difference of arrays with additional index check, compares data and indexes by a callback function
    array_udiff — Computes the difference of arrays by using a callback function for data comparison
    array_uintersect_assoc — Computes the intersection of arrays with additional index check, compares data by a callback function
    array_uintersect_uassoc — Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
    array_uintersect — Computes the intersection of arrays, compares data by a callback function
    array_unique — Removes duplicate values from an array
    array_unshift — Prepend one or more elements to the beginning of an array
    array_values — Return all the values of an array
    array_walk_recursive — Apply a user function recursively to every member of an array
    array_walk — Apply a user supplied function to every member of an array
    array — Create an array
    arsort — Sort an array in reverse order and maintain index association
    asort — Sort an array and maintain index association
    compact — Create array containing variables and their values
    count — Count all elements in an array, or something in an object
    current — Return the current element in an array
    each — Return the current key and value pair from an array and advance the array cursor
    end — Set the internal pointer of an array to its last element
    extract — Import variables into the current symbol table from an array
    in_array — Checks if a value exists in an array
    key_exists — Alias of array_key_exists
    key — Fetch a key from an array
    krsort — Sort an array by key in reverse order
    ksort — Sort an array by key
    list — Assign variables as if they were an array
    natcasesort — Sort an array using a case insensitive "natural order" algorithm
    natsort — Sort an array using a "natural order" algorithm
    next — Advance the internal pointer of an array
    pos — Alias of current
    prev — Rewind the internal array pointer
    range — Create an array containing a range of elements
    reset — Set the internal pointer of an array to its first element
    rsort — Sort an array in reverse order
    shuffle — Shuffle an array
    sizeof — Alias of count
    sort — Sort an array
    uasort — Sort an array with a user-defined comparison function and maintain index association
    uksort — Sort an array by keys using a user-defined comparison function
    usort — Sort an array by values using a user-defined comparison function
