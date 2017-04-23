<?php
error_reporting(E_ALL || ~E_NOTICE); //除去 E_NOTICE 之外的所有错误信息
ini_set('session.cookie_domain', '.fancyecommerce.com'); //初始化域名，
$http = ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/yii/Yii.php');

require(__DIR__ . '/../../common/config/bootstrap.php');

require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php'),
	# fecshop services config
	require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/config/fecshop.php'),
	# fecshop module config
	require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/app/apphtml5/config/apphtml5.php'),
	
	# thrid part confing
	
	# common modules and services.
	require(__DIR__ . '/../../common/config/fecshop_local.php'),
	 
	# appadmin local modules and services.
	require(__DIR__ . '/../config/fecshop_local.php')
    
);

$str = '<?php '.PHP_EOL;
$str .= 'return '.PHP_EOL;

function toPhpCode($arr,$i=0){
	$i++;
	$tb_i = $i*4;
	$tb = ($i-1)*4;
	$tb1_str = '';
	$tb2_str = '';
	for($j=0;$j<$tb;$j++){
		$tb1_str .= ' ';
	}
	for($jj=0;$jj<$tb_i;$jj++){
		$tb2_str .= ' ';
	}
	$mystr = '';
	if(is_array($arr) && !empty($arr)){
		$mystr .= PHP_EOL .$tb1_str.'['.PHP_EOL;
		$t_arr = [];
		foreach($arr as $k => $v){
			$key 	= '';
			$value 	= '';
			if(is_string($k)){
				$key = "'".$k."'";
			}else{
				$key = $k;
			}
			if(is_array($v) && !empty($v)){
				$value = toPhpCode($v,$i);
			}else if(is_array($v) && empty($v)){
				$value = '[]';
			
			}else{
				if(is_string($v)){
					$value = "'".$v."'";
				}else if(is_bool($v)){
					if($v){
						$value = 'true';
					}else{
						$value = 'false';
					}
				}else{
					if(is_null($v)){
						$v = "''";
					}
					$value = $v;
				}
				
			}
			$t_arr[] = $tb2_str.$key."=>".$value;
		}
		$mystr .= implode(','.PHP_EOL,$t_arr);
		$mystr .= PHP_EOL .$tb1_str.']'. PHP_EOL;
	}
	return $mystr;
}


$str .= toPhpCode($config);
$str .= ';';
file_put_contents('../merge_config.php', $str);
echo 'generate merge config file success';