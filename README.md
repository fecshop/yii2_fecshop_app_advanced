# yii2_fecshop_app_advanced
fecshop app advanced

========

github: https://github.com/fancyecommerce/yii2_fecshop_app_advanced

[![Latest Stable Version](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/v/stable)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced) [![Total Downloads](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/downloads)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced) [![Latest Unstable Version](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/v/unstable)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced)


> 项目已经开始, 正在开发中，框架整理阶段。
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
composer global require "fxp/composer-asset-plugin:~1.1.1"
git clone git@github.com:fancyecommerce/yii2_fecshop_app_advanced.git  fecshop
cd fecsop
composer update
./init
```


执行完上面，就安装完成了。

2、配置 fecshop app advanced

```
在common/main-local.php中配置mysql，mongodb，redis

```

3.配置nginx

```
nginx root 分别指向 appfront/web 和appadmin/web
```

4. 配置store的域名

在配置文件：`@app\config\fecshop_local_services\Store.php`


5. 配置语言：

在配置文件：`@app\config\fecshop_local_services\FecshopLang.php`

6. 配置货币：

在文件：`@app\config\fecshop_local_services\Page.php`

8. 配置是否强制复制assets到web目录，如果是开发环境，按照下面进行配置。

这个是yii2的知识范畴

```
'assetManager' => [
	'forceCopy' => true,
],
```

如果是线上， 将forceCopy设置成false `['forceCopy' => false]`

9.其他参看文档配置。

[Fecshop 初始配置](http://www.fecshop.com/doc/fecshop-guide/cn-1.0/guide-fecshop-init-config.html)





