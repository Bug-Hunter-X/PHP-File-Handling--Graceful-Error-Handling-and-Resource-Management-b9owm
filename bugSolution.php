```php
$file = fopen("myfile.txt", "r+");
if ($file === false) {
    // Handle the error gracefully
    die("Error opening file: " . error_get_last()['message']);
} else {
    // ... process the file ...
    fclose($file);
}
```
This improved version explicitly checks if `fopen()` returned `false`, providing a clear error message.  This avoids the warning from `fclose()` on a non-resource value.

For more complex file operations, consider using a `try-catch` block and explicitly closing the file pointer in a `finally` block to ensure resources are released regardless of success or failure.