# Request handler https

```php
// Force https.
if(!MyRequest::isHttps()){
    MyRequest::refresh();
}

// Handle protocols, requests from proxies and generate URLs.
class MyRequest{

  static function refresh(){

    header('Location: ' . static::getFullUrl());
    exit;
  }

  static function getFullUrl(){
    return 'https://' . implode('/', [$_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI']]);
  }

  static function isHttps() {
    return static::getProtocol() == 'https';
  }
  
  static function getProtocol() {
    if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO']))
        return $_SERVER['HTTP_X_FORWARDED_PROTO'];
    else 
        return !empty($_SERVER['HTTPS']) ? "https" : "http";
  }
}
```