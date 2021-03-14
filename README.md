# Nginx uid decoder

A simple library to decode/encode uid from [ngx_http_userid_module](http://nginx.org/en/docs/http/ngx_http_userid_module.html)

Based on [Alain Tiemblo](https://stackoverflow.com/users/731138/alain-tiemblo) [answer on stackoverflow](https://stackoverflow.com/a/48384806)

## Examples

```
 NginxUidDecoder::decodeCookie('CqCx7E5qMNUxrmAUAwMJAg==');

 NginxUidDecoder::encodeUid('ECB1A00AD5306A4E1460AE3102090303');
```

### Installing
```
composer.phar require novemb3r/nginx-uid-decode
```