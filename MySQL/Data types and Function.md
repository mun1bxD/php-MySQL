# SQL Data Types and Functions Cheat Sheet

## Numeric Data Types

**TINYINT:** A very small integer.

Size:1Byte

**SMALLINT:** A small integer.

Size:2Byte

**MEDIUMINT:** A medium-sized integer.

Size:3Byte

**INT or INTEGER:** A standard integer.

Size:4Byte

**BIGINT:** A large integer.

Size:8Byte

**FLOAT:** A floating-point number.

Size:4Byte

**DOUBLE:** A double-precision floating-point number.

Size:8Byte

**DECIMAL:** A fixed-point number.

Size: Varies, depends on the precision and scale. Each digit requires 4 bits.

## Date and Time Data Types

**DATE:** A date value (year, month, and day). 

`FORMAT (YYYY-MM-DD)`

Size:3Byte

**TIME:** A time value (hours, minutes, seconds). 

`Format: 'HH:MM:SS'`

Size:3Byte

**DATETIME:** A date and time combination. 

`Format: 'YYYY-MM-DD HH:MM:SS'`

Size:8Byte

**TIMESTAMP:** A timestamp, typically used for recording the date and time of an event.

`Format: 'YYYY-MM-DD HH:MM:SS'`

Size:4Byte

**YEAR:** A year value. 

`Format: 'YYYY' or YY`

Size: 1 byte (for a 2-digit year) or 2 bytes (for a 4-digit year).

## String Data Types

**CHAR:** A fixed-length string.

Fixed length; 1 to 255 bytes

**VARCHAR:** A variable-length string.

Variable length; 1 byte or 2 bytes + string length .

**BINARY:** A fixed-length binary data.

Fixed length; 1 to 255 bytes

**VARBINARY:** A variable-length binary data.

Variable length; 1 byte or 2 bytes + binary length

**TINYBLOB, BLOB, MEDIUMBLOB, LONGBLOB:** Binary large objects.

**TINYBLOB:** Up to 255 bytes

**BLOB:** Up to 65,535 bytes (64 KB)

**MEDIUMBLOB:** Up to 16,777,215 bytes (16 MB)

**LONGBLOB:** Up to 4,294,967,295 bytes (4 GB)

**TINYTEXT, TEXT, MEDIUMTEXT, LONGTEXT:** Large text objects.

**TINYTEXT:** Up to 255 bytes

**TEXT:** Up to 65,535 bytes (64 KB)

**MEDIUMTEXT:** Up to 16,777,215 bytes (16 MB)

**LONGTEXT:** Up to 4,294,967,295 bytes (4 GB)

**ENUM**: An enumeration, which is a string object with a value chosen from a list of permitted values.

1 or 2 bytes (depending on the number of values, max 65,535 values)

**SET:** A set, which is a string object that can have zero or more values, each chosen from a list of permitted values.

 1, 2, 3, 4, or 8 bytes (depending on the number of set members, max 64 members)

## Arithmetic Function

**ABS(x):** Returns the absolute value of x, converting negative numbers to positive.

**CEIL(x):** Rounds x up to the nearest integer, always rounding toward positive infinity.

**FLOOR(x):** Rounds x down to the nearest integer, always rounding toward negative infinity.

**ROUND(x, d):** Rounds x to d decimal places, or to the nearest integer if d is omitted.

**TRUNCATE(x, d):** Truncates x to d decimal places without rounding.

**POW(x, y):** Calculates x raised to the power of y, providing exponentiation.

**POWER(x, y):** Equivalent to POW(x, y), calculates x raised to the power of y.

**SQRT(x):** Returns the square root of x, which is the number that, when multiplied by itself, gives x.

**EXP(x):** Returns e raised to the power of x, where e is the base of natural logarithms.

**LOG(x):** Returns the natural logarithm (base e) of x.

**LOG10(x):** Returns the base-10 logarithm of x.

**PI():** Returns the mathematical constant π (pi), approximately 3.14159.

**RAND():** Returns a random floating-point number between 0 and 1.

**Example**

`SELECT abs(-2.5);`

`SELECT ceil(4.3);`

`SELECT ROUND(123.4567, 1);`

**Example with query**

```
SELECT name, ABS(balance) AS absolute_balance

FROM bankaccount;
```

## STRING  function

**CONCAT(str1, str2, ...):** Concatenates multiple strings into one.

**CONCAT_WS(separator, str1, str2, ...):** Concatenates strings with a separator.

**SUBSTRING(str, pos, len):** Extracts a substring from a string.

**LEFT(str, len):** Returns the leftmost len characters from a string.

**RIGHT(str, len):** Returns the rightmost len characters from a string.

**LENGTH(str):** Returns the length of a string in bytes.

**CHAR_LENGTH(str):** Returns the number of characters in a string.

**UPPER(str):** Converts a string to uppercase.

**LOWER(str):** Converts a string to lowercase.

**TRIM([{BOTH | LEADING | TRAILING} [remstr] FROM] str):** Removes specified characters from the start and/or end of a string.

**LTRIM(str):** Removes leading spaces from a string.

**RTRIM(str):** Removes trailing spaces from a string.

**REPLACE(str, from_str, to_str):** Replaces occurrences of a substring with another substring.

**INSTR(str, substr):** Returns the position of the first occurrence of a substring in a string.

**LOCATE(substr, str, pos):** Finds the position of a substring in a string starting from a specified position.

**POSITION(substr IN str):** Synonym for LOCATE().

**FIND_IN_SET(str, strlist):** Returns the position of a string within a comma-separated list.

**LPAD(str, len, padstr):** Pads the left side of a string with another string to a specified length.

**RPAD(str, len, padstr):** Pads the right side of a string with another string to a specified length.

**REPEAT(str, count):** Repeats a string a specified number of times.

**REVERSE(str):** Reverses the characters in a string.

**ASCII(str):** Returns the ASCII value of the leftmost character of a string.

**HEX(N):** Returns a hexadecimal representation of a number.

**UNHEX(str):** Converts a hexadecimal string to its binary representation.

**QUOTE(str):** Escapes a string for use in an SQL statement.

**Example:**

`SELECT concat(gender,' ',age) AS Gender_with_Age FROM student_perssonal_info;`

`SELECT length(Name)  FROM student_marks;`

`SELECT hex(Name)  FROM student_marks;`

`SELECT TRIM(LEADING 'x' FROM 'xxxHello World!xxx') AS trimmed_string;`

`SELECT TRIM(BOTH 'x' FROM 'xxxHello World!xxx') AS trimmed_string;`

## DATE and TIME function

**NOW():** Returns the current date and time.

   `SELECT NOW();`

**CURDATE():** Returns the current date.

   `SELECT CURDATE();`

**CURTIME():** Returns the current time.

   `SELECT CURTIME();`

**DATE():** Extracts the date part from a datetime expression.

   `SELECT DATE(NOW());`

**DATEDIFF(date1, date2):** Returns the number of days between two dates.

   `SELECT DATEDIFF('2024-08-02', '2024-07-01');`

**DATE_ADD(date, INTERVAL expr unit):** Adds a time value (expr) to a date value (date).

   `SELECT DATE_ADD(NOW(), INTERVAL 7 DAY);`

**DATE_SUB(date, INTERVAL expr unit):** Subtracts a time value (expr) from a date value (date).

   `SELECT DATE_SUB(NOW(), INTERVAL 7 DAY);`

**EXTRACT(unit FROM date):** Extracts a part of the date (e.g., year, month, day).

   `SELECT EXTRACT(YEAR FROM NOW());`

**LAST_DAY(date):** Returns the last day of the month for a given date.

   `SELECT LAST_DAY(NOW());`

**MONTH(date):** Returns the month for a given date.

    `SELECT MONTH(NOW());`

**YEAR(date):** Returns the year for a given date.

    `SELECT YEAR(NOW());`

 **WEEK(date)**: Returns the week number for a given date.

    `SELECT WEEK(NOW());`

**STR_TO_DATE(str, format):** Converts a string into a date according to the specified format.

    `SELECT STR_TO_DATE('02-08-2024', '%d-%m-%Y');`

**DATE_FORMAT(date, format):** Formats a date value according to the specified format.

    `SELECT DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s');`

