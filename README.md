# mfby
my framework based yaf for api 

## 安装
- 确保已安装yaf。
- nginx重写规则: 
```
if (!-e $request_filename) {
    rewrite ^/(.*)  /index.php/$1 last;
}
```
