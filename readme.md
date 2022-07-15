# String Protection
This library have simple functions to replace special charecters from strings, in order to prevent XSS and SQL Injecion attacks on file.

## clean()
Removes all special charecters including spaces. This function ignores '@' and '.' making it suitable for E-Mail addresses.

## cleanWithSpaces()
Removes all special charecters, excluding spaces and '@'.

## linient()
Only removes --, ', " and % making less vulnerable to SQL Injection.
