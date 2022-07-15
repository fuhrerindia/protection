# String Protection
This library have simple functions to replace special charecters from strings, in order to prevent XSS and SQL Injecion attacks on file.

## clean()
Removes all special charecters including spaces. This function ignores '@' and '.' making it suitable for E-Mail addresses.

## cleanWithSpaces()
Removes all special charecters, excluding spaces and '@'.

## linient()
Only removes --, ', " and % making less vulnerable to SQL Injection.

### Example
$email = $_POST['mail'];
$pass = $_POST['pass'];
$query = "SELECT * FROM table WHERE email = '{$email}' AND password='{$pass}'";
// ABOVE QUERY WILL BREAK IF USER/HACKER TRIES TO PASS ' in variable or hacker can externally modify this query due to this raw variable, check how below.

If hacker tries to bypass password, then he can try to pass "abc@xyz.com'--" to bypass it, so clean() will help here.
Saving variables like below can help
$email = clean($_POST['mail']);
