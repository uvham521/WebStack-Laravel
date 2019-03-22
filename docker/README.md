### 项目介绍

根据[WebStackLaravel](https://github.com/hui-ho/WebStack-Laravel)项目创建的Docker部署版本，旨在快速进行部署和使用，也总结了一些这个项目的使用经验及排错方法。此后会根据此项目Release版本不定期更新。欢迎使用及建议

- 联系邮箱【arvon2014@gmail.com】

### 使用说明

包含直接执行`docker run`的方式以及`docker-compose`的方式，推荐使用docker-compose的方法，另外添加了支持参数的说明

- 镜像支持的参数

|参数|说明|
|---|---|
|INSTALL_DIR|容器内的部署家目录|
|DB_HOST|数据库地址，默认`127.0.0.1`|
|DB_PORT|数据库端口，默认`3306`|
|DB_DATABASE|数据库名称,默认`homestead`|
|DB_USERNAME|数据库用户名,默认`homestead`|
|DB_PASSWORD|数据库密码,默认`secret`|
|LOGIN_COPTCHA|是否启动控制台验证码，默认true|


- 使用`docker run`方式
**注意**由于webstacklaravel需要mysql支持，所以直接使用`docker run`需要手动指定Mysql的地址信息
目前支持的参数

- 使用`Docker-compose`方式
使用compose命令会起3个容器，第一次启动默认会进行数据库初始化
```
docker-compose up
```
**WARING:**
当只想启动数据库，不进行初始化的话，需要修改`docker-compose.yml`文件中的`command`指令
```
#修改前
command: ['/entrypoint.sh','new-server']
#修改后
command: ['/entrypoint.sh','serve']
```
具体可查看`entrypoint.sh`脚本,Dockerfile的默认参数是`serve`



### 常见问题

针对一些原项目的提问在这里做一下汇总，欢迎补充

- 改变监听地址
可以通过Nginx Proxy进行代理，或者添加`--host`参数
```
php artisan serve --host=0.0.0.0 --port=8000
```

- 推荐使用Mysql5.6版本


