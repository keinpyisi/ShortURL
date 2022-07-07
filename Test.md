# Short API Documentation

ဘာမှစဉ်းစားမရသေးလို့မရေးသေးဘူး :3


### Request

`api/shortener/`

    https://vocaloidnationmm.com.pl/api/shortener

### Usuage

    Content-Type: x-www-form-urlencoded
    original_url : https://www.youtube.com/


### Response

    HTTP/1.1 202 OK
    Status: 202 OK
    Connection: keep-alive
    Content-Type: application/json

    {
        "original": "https://www.youtube.com/",
        "short_url": "https://vocaloidnationmm.com.pl/dXjwcg"
    }

## Screen Shot

<img src="https://github.com/keinpyisi/ShortURL/blob/main/screenshots/api%20ss.png"  height="500"/>


### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 36

    {"id":1,"name":"Foo","status":"new"}

