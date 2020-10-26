# Generate passwords

## Only latin and digits

```php
 public static function generate_password( $length = 8 ) {
        $chars = "abcdefghjknpqstuxyzABCDEFGHJKMNPQRSTUXY3456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
```
