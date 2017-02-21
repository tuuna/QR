# QR
在PC端上传文件生成二维码，方便手机扫描二维码下载文件

## v1

版本一：主要支持图片的拖拽上传下载，上传文件的大小可以通过修改`resources/dropzone.js`中
        的`maxFilesize`来修改
        
### 使用的包

- [simple-qrcode](https://github.com/simplesoftwareio/simple-qrcode)用于生成二维码
- [dropzone](https://github.com/enyo/dropzone) 用于拖拽上传图片

#### 使用方法

- clone the package
```
$ git clone https://github.com/vampirebitter/QR.git
```

- composer components

```
$ composer install
```

- 把`.env.example`中的数据库，数据库用户名以及密码修改成自己本地的，然后删除`.env`并把`.env.example`更名为`.env`

- 迁移数据表
```
$ php artisan migrate
```

##### 测试
```
$ php artisan serve --host=your_ip --port=8080
或者
$ php artisan serve --host=0.0.0.0 --port=8080
```
**Have Fun!**
        

