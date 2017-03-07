# yii2_fecshop_app_advanced
fecshop app advanced

========

github: https://github.com/fancyecommerce/yii2_fecshop_app_advanced

[![Latest Stable Version](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/v/stable)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced) [![Total Downloads](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/downloads)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced) [![Latest Unstable Version](https://poser.pugx.org/fancyecommerce/fecshop-app-advanced/v/unstable)](https://packagist.org/packages/fancyecommerce/fecshop-app-advanced)


> 项目已经开始, 框架已经整理完毕，已经开始开发，这是安装fecshop
> 的入口部分，您可以通过下面的通过composer的方式安装，安装后，
> Yii2_fecshop,Yii2_fec_admin,Yii2_fec都会通过依赖包的方式被加载进来。

> Terry



本地开发环境推荐使用vagrant部署，box我已经弄好，地址在百度云盘，下载地址为：`https://pan.baidu.com/s/1kVwRD2Z`
，vagrant的使用教程为：http://www.fancyecommerce.com/2016/09/22/vagrant-%E4%B8%8B%E8%BD%BD%E9%83%A8%E7%BD%B2linux%E7%8E%AF%E5%A2%83/
，您可以通过vagrant安装使用。安装完成后，各个区块的访问地址为：

```
pc端地址：appfront.fecshoptest.com appfront.fecshoptest.es 指向 /www/web/develop/fecshop/appfront/web 
 
后台端地址：appadmin.fecshoptest.com 指向/www/web/develop/fecshop/appadmin/web

html5端地址（未开发）：apphtml5.fecshoptest.com 指向/www/web/develop/fecshop/apphtml5/web

api端地址（未开发）：appapi.fecshoptest.com 	 指向/www/web/develop/fecshop/appapi/web

手机app端地址（未开发）：appserver.fecshoptest.com 指向/www/web/develop/fecshop/appserver/web

common图片端地址：img.fecshoptest.com 	指向/www/web/develop/fecshop/appimage/common

appadmin图片端地址：img2.fecshoptest.com 	指向/www/web/develop/fecshop/appimage/appadmin

appfront图片端地址：img3.fecshoptest.com 	指向/www/web/develop/fecshop/appimage/appfront

apphtml5图片端地址：img4.fecshoptest.com 	指向/www/web/develop/fecshop/appimage/apphtml5

appserver图片端地址：img5.fecshoptest.com 	指向/www/web/develop/fecshop/appimage/appserver

rock mongo访问地址：rock.fecshoptest.com    账号：admin  密码：123456

phpmyadmin访问地址: my.fecshoptest.com		账号：root   密码：123456

后台端地址：appadmin.fecshoptest.com访问后，后台的用户名和密码为admin  123456

```



1、环境配置：
------------

需要安装mongodb php mysq等等，详情参看文章：
http://www.fancyecommerce.com/2017/03/06/%E7%8E%AF%E5%A2%83%E9%83%A8%E7%BD%B2/



2、安装 fecshop app advanced
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
composer create-project fancyecommerce/yii2_fecshop_app_advanced fecshop 1.0.1.3
cd fecshop
./init
```


执行完上面，就安装完成了。

3、配置 fecshop app advanced
------------

```
在common/main-local.php中配置mysql，mongodb，redis

```

4、配置环境
------------

4.1 添加host

打开C:\Windows\System32\drivers\etc\hosts，添加如下代码（如果是其他IP，将
127.0.0.1 替换成其他IP即可。）：

```
127.0.0.1       rock.fecshoptest.com
127.0.0.1       my.fecshoptest.com
127.0.0.1       appadmin.fecshoptest.com
127.0.0.1       appfront.fecshoptest.com
127.0.0.1       appfront.fecshoptest.es
127.0.0.1       apphtml5.fecshoptest.com
127.0.0.1       appapi.fecshoptest.com
127.0.0.1       appserver.fecshoptest.com
127.0.0.1       img.fecshoptest.com		#appimage/common
127.0.0.1       img2.fecshoptest.com	#appimage/appadmin
127.0.0.1       img3.fecshoptest.com	#appimage/appfront
127.0.0.1       img4.fecshoptest.com	#appimage/apphtml5
127.0.0.1       img5.fecshoptest.com	#appimage/appserver
```


4.2、配置nginx
```
appfront.fecshoptest.com appfront.fecshoptest.es 指向 fecshop/appfront/web 
 
appadmin.fecshoptest.com 指向fecshop/appadmin/web

apphtml5.fecshoptest.com 指向fecshop/apphtml5/web

appapi.fecshoptest.com 	 指向fecshop/appapi/web

appserver.fecshoptest.com 指向fecshop/appserver/web

img.fecshoptest.com 	指向fecshop/appimage/common

img2.fecshoptest.com 	指向fecshop/appimage/appadmin

img3.fecshoptest.com 	指向fecshop/appimage/appfront

img4.fecshoptest.com 	指向fecshop/appimage/apphtml5

img5.fecshoptest.com 	指向fecshop/appimage/appserver

```



5、配置store的域名和图片的域名，您可以和我下面的示例代码一致，
------------

store在配置文件：`@app\config\fecshop_local_services\Store.php`

譬如我的代码(您可以和我的保持一致，相应域名已经在上面添加host)：

```
<?php
   return [
   'store' => [
		'class' => 'fecshop\services\Store',
		'stores' => [
			# store_code ,define by domain and fold.
			# 语言必须在fecshoplang中定义，否则将无法得到语言属性。
			# 在添加store的时候，必须查看 添加的语言在 fecshoplang中是否定义。
			# 数据的key就是域名
			'appfront.fecshoptest.com' => [
				'language' 		=> 'en_US',
				'languageName' 	=> 'English',
				
				//'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'USD',
				'mobile'		=> [ # 当设备满足什么条件的时候，进行跳转。
					'enable'		=> true,
					'condition'		=> ['phone','tablet'], # phone 代表手机，tablet代表平板
					'redirectUrl' 	=> 'apphtml5.fecshoptest.com',	# 如果是移动设备访问进行域名跳转
				],
				# 第三方账号登录配置
				'thirdLogin' => [
					'facebook' =>[                       #fb api配置 ，fb可以一个app设置pc和手机两个域名 
						'facebook_app_id'     => '1849609081926823',
						'facebook_app_secret' => '2e097a6d5a424531770fc05760dd7139',
					],
					"google" => [                       #谷歌api visit https://code.google.com/apis/console to generate your google api
						'CLIENT_ID'  	 => '380372364773-qdj1seag9bh2n0pgrhcv2r5uoc58ltp3.apps.googleusercontent.com',
						'CLIENT_SECRET'  => 'ei8RaoCDoAlIeh1nHYm0rrwO',
					],
				]

				//'image'	=> [
				//	'domain' => 'img.appfront.fancyecommerce.com',
				//	'baseDir'=> '@appimage/appfront',
				//]
			],
			'appfront.fecshoptest.com/fr' => [
				'language' 		=> 'fr_FR',
				'languageName' 	=> 'Français',
				'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'RMB',
				'mobile'		=> [
					'enable'			=> true,
					'condition'			=> ['phone'], # phone 代表手机，tablet代表平板。
					'redirectDomain' 	=> 'apphtml5.fecshoptest.com/fr', # 跳转后的url。
				],
			],
			'appfront.fecshoptest.es' => [
				'language' 		=> 'es_ES',
				'languageName' 	=> 'Español',
				'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'USD',
				'mobile'		=> [
					'enable'		=> true,
					'condition'		=> ['tablet'],
					'redirectDomain' 	=> 'fecshop.apphtml5.es.fancyecommerce.com',	
				],
			],
			'appfront.fecshoptest.com/cn' => [
				'language' 		=> 'zh_CN',
				'languageName' 	=> '中文',
				'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'RMB',
				'mobile'		=> [
					'enable'		=> false,
					'condition'		=> ['phone','tablet'],
					'redirectDomain' 	=> 'fecshop.apphtml5.fancyecommerce.com/cn',	
				],
			],
		],
		
	],
			
];
```

图片域名配置文件：`@common\config\fecshop_local_services\Image.php`
,譬如我的代码(您可以和我的保持一致，相应域名已经在上面添加host)：

```
<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'image' => [
		'appbase'	=> [
			'appfront' => [
				'basedir' => '@appimage/appfront',
				'basedomain' => 'http://img3.fecshoptest.com',
			],
			'apphtml5' => [
				'basedir' => '@appimage/apphtml5',
				'basedomain' => 'http://img2.fecshoptest.com',
			],
			'appadmin' => [
				'basedir' => '@appimage/appadmin',
				'basedomain' => 'http://img2.fecshoptest.com',
			],
			'common' => [
				'basedir' => '@appimage/common',
				'basedomain' => 'http://img.fecshoptest.com',
			],
		],
	],
];
```


6、配置语言（可以先使用默认）：
------------

在配置文件（：`@common\config\fecshop_local_services\FecshopLang.php`



7、配置货币（可以先使用默认）：
------------

在文件：`@common\config\fecshop_local_services\Page.php`

8、配置是否强制复制assets到web目录，如果是开发环境，按照下面进行配置（可选配置，可以先不管这个）。
------------


这个是yii2的知识范畴

```
'assetManager' => [
	'forceCopy' => true,
],
```

如果是线上， 将forceCopy设置成false `['forceCopy' => false]`

9、导入数据库表(migrate)，在fecshop根目录执行下面的命令行
------------

mysql(导入mysql的表，数据，索引):

```
./yii migrate --interactive=0 --migrationPath=@fecshop/migrations/mysqldb
```

mongodb(导入mongodb的表，数据，索引):

```
./yii mongodb-migrate  --interactive=0 --migrationPath=@fecshop/migrations/mongodb
```

9.2、测试数据安装：

mongodb的示例数据存放路径为：

`./vendor/fancyecommerce/fecshop/migrations/mongodb-example-data/example_data.js`

可以通过mongodb的后台，或者通过php的rockmongo安装这些mongodb中的示例数据。

mongodb的示例数据产品对应的图片下载地址为：`http://www.fancyecommerce.com/appimage.zip`
，下载完成后，覆盖到fecshop根目录即可。
如果下载速度慢，你可以到百度云盘下载`appimage.zip`，下载地址为：`https://pan.baidu.com/s/1kVwRD2Z`
如果覆盖图片后，在网站发现产品图片没有出来，那么您需要清空 `appimage/common/media/catalog/product/cache/*`  下面所有文件和文件夹，重新刷新页面即可。

10、其他参看文档配置。
------------

[Fecshop 初始配置](http://www.fecshop.com/doc/fecshop-guide/cn-1.0/guide-fecshop-init-config.html)





