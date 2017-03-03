# yii2_fecshop_app_advanced
fecshop app advanced

========

github: https://github.com/fancyecommerce/yii2_fecshop_app_advanced

[![Latest Stable Version](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/v/stable)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced) [![Total Downloads](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/downloads)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced) [![Latest Unstable Version](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/v/unstable)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced)


> 项目已经开始, 框架已经整理完毕，已经开始开发，这是安装fecshop
> 的入口部分，您可以通过下面的通过composer的方式安装，安装后，
> Yii2_fecshop,Yii2_fec_admin,Yii2_fec都会通过依赖包的方式被加载进来。

> Terry

1、安装 fecshop app advanced
------------

安装这个扩展的首选方式是通过 [composer](http://getcomposer.org/download/).

安装composer

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
composer self-update
```

安装fecshop app advanced

```
composer global require "fxp/composer-asset-plugin:^1.2.0"
git clone https://github.com/fancyecommerce/yii2_fecshop_app_advanced.git   fecshop
cd fecshop
composer update
./init
```


执行完上面，就安装完成了。

2、配置 fecshop app advanced

```
在common/main-local.php中配置mysql，mongodb，redis

```

3、配置nginx

```
nginx root 分别指向 appfront/web 和appadmin/web
```

4、配置store的域名

在配置文件：`@app\config\fecshop_local_services\Store.php`


5、配置语言：

在配置文件（：`@common\config\fecshop_local_services\FecshopLang.php`



6、配置货币：

在文件：`@common\config\fecshop_local_services\Page.php`

7、配置是否强制复制assets到web目录，如果是开发环境，按照下面进行配置。

这个是yii2的知识范畴

```
'assetManager' => [
	'forceCopy' => true,
],
```

如果是线上， 将forceCopy设置成false `['forceCopy' => false]`

8、导入数据库表(migrate)

mysql(导入mysql的表，数据，索引):

```
./yii migrate --interactive=0 --migrationPath=@fecshop/migrations/mysqldb
```

mongodb(导入mongodb的表，数据，索引):

```
./yii mongodb-migrate  --interactive=0 --migrationPath=@fecshop/migrations/mongodb
```

mongodb的示例数据存放路径为：

./vendor/fancyecommerce/fecshop/migrations/mongodb-example-data/example_data.js

可以通过mongodb的后台，或者通过php的rockmongo安装这些mongodb中的示例数据。



9、其他参看文档配置。

[Fecshop 初始配置](http://www.fecshop.com/doc/fecshop-guide/cn-1.0/guide-fecshop-init-config.html)





