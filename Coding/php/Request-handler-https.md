# Request handler https


```php
// Force https.
if (App::environment('force_ssl') === false && isset($_SERVER['HTTP_HOST']))
{
  if(!in_array($_SERVER['REQUEST_URI'], ['/test'])){
    
    $protocol = 'http';
    if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])){
      $protocol =  $_SERVER['HTTP_X_FORWARDED_PROTO'];
    }else{
      $protocol = !empty($_SERVER['HTTPS']) ? "https" : "http";
    }

    if($protocol == 'http'){
      header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
      exit;
    }
  }
```


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
    return 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
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