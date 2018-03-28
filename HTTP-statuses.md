# HTTP statuses

* [HTTP statuses](https://httpstatuses.com/).
* [restfulapi.net/http-status-codes](https://restfulapi.net/http-status-codes/).

## [What to return if request params are incorrect?](https://stackoverflow.com/a/10323055)
* 400 - is the generic client-side error status, used when no other 4xx error code is appropriate.

### Server does not undesrstand the content type (requires JSON).
* 415 - Unsupported Media Type.

### Server understand the content type
but was unable to process the contained instructions.

* 422 (Unprocessable Entity).


## 2×× Success
* 200 OK
* 201 Created
* 202 Accepted

## 3×× Redirection
* 301 Moved Permanently
* 302 Found
* 304 Not Modified
* 308 Permanent Redirect

## 4×× Client Error
* 400 Bad Request
* 401 Unauthorized
* 403 Forbidden
* 404 Not Found
* 405 Method Not Allowed
* 406 Not Acceptable
* 408 Request Timeout
* 409 Conflict
* 410 Gone

## 5×× Server Error
* 500 Internal Server Error
* 501 Not Implemented
* 502 Bad Gateway
* 503 Service Unavailable
* 504 Gateway Timeout
* 507 Insufficient Storage
* 511 Network Authentication Required
* 599 Network Connect Timeout Error
