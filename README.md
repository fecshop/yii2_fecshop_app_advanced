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
