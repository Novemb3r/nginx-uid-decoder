# Nginx uid decoder

A simple library to decode/encode uid from [ngx_http_userid_module](http://nginx.org/en/docs/http/ngx_http_userid_module.html)

Based on [Alain Tiemblo](https://stackoverflow.com/users/731138/alain-tiemblo) [answer on stackoverflow](https://stackoverflow.com/a/48384806)

When you use ngx_http_userid_module cookies set to variables $uid_got and $uid_set has format that 
differs from the one you get from user cookies. So, you have to decode them to compare.

## Examples

```
 NginxUidDecoder::decodeCookie('CqCx7E5qMNUxrmAUAwMJAg==');
 // 'ECB1A00AD5306A4E1460AE3102090303'

 NginxUidDecoder::encodeUid('ECB1A00AD5306A4E1460AE3102090303');
 // 'CqCx7E5qMNUxrmAUAwMJAg=='
```

### Installing
This library installs as a [composer package](https://packagist.org/packages/novemb3r/nginx-uid-decode) with

```
composer require novemb3r/nginx-uid-decoder
```
or 
```
{
    "require": {
        "novemb3r/nginx-uid-decoder": "dev-master"
    }
}
```