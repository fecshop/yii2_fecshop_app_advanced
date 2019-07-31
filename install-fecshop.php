<?php
$step = $_GET['step'];

echo '<div style="width:1000px;margin:auto;padding:20px;line-height:30px;">';
echo '<div style="font-size:26px;margin:10px 10px 30px 0">Fecshop</div>';
$baseInstallUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

if (!$step || $step == 1) {
    echo  "1.Begin Check Php Extensions...<br/>";
    // php extentions check
    $noLoadExtension = [];
    extension_loaded('openssl') || $noLoadExtension[] = 'openssl';
    extension_loaded('bcmath') || $noLoadExtension[] = 'bcmath';
    extension_loaded('curl') || $noLoadExtension[] = 'curl';
    extension_loaded('gd') || $noLoadExtension[] = 'gd';
    extension_loaded('iconv') || $noLoadExtension[] = 'iconv';
    extension_loaded('hash') || $noLoadExtension[] = 'hash';
    extension_loaded('mbstring') || $noLoadExtension[] = 'mbstring';
    extension_loaded('mcrypt') || $noLoadExtension[] = 'mcrypt';
    extension_loaded('mysqli') || $noLoadExtension[] = 'mysqli';
    extension_loaded('OAuth') || $noLoadExtension[] = 'OAuth';
    extension_loaded('pcre') || $noLoadExtension[] = 'pcre';
    extension_loaded('PDO') || $noLoadExtension[] = 'PDO';
    extension_loaded('pdo_mysql') || $noLoadExtension[] = 'pdo_mysql';
    extension_loaded('pdo_sqlite') || $noLoadExtension[] = 'pdo_sqlite';
    extension_loaded('Reflection') || $noLoadExtension[] = 'Reflection';
    extension_loaded('soap') || $noLoadExtension[] = 'soap';
    extension_loaded('imap') || $noLoadExtension[] = 'imap';
    if (!empty($noLoadExtension)) {
        $noLoadExtensionStr = implode(',', $noLoadExtension);
        die('<span style="color:#cc0000">PHP extension [' . $noLoadExtensionStr . ']  is required by Fecshop.</span>');
    }
    echo  "2.Check Php Extensions Complete<br/>";
    
    echo '<div style="margin:20px 0 20px 0" ><button onclick="window.location.href = \''.$baseInstallUrl.'?step=2\'"> 下一步  </button></div>';
    
}



// 第二部
if ($step == 2) {
    $params = getParams();
    $root = str_replace('\\', '/', __DIR__);
    //////////
    $rootTest = $root.'/test';
    $envs = require("$root/environments/index.php");
    $envNames = array_keys($envs);
    $envName = 'Development';
    $env = $envs[$envName];

    echo "<br/>  Start initialization ...<br/><br/>";
    $files = getFileList("$root/environments/{$env['path']}");
    if (isset($env['skipFiles'])) {
        $skipFiles = $env['skipFiles'];
        array_walk($skipFiles, function(&$value) use($env, $root) { $value = "$root/$value"; });
        $files = array_diff($files, array_intersect_key($env['skipFiles'], array_filter($skipFiles, 'file_exists')));
    }
    $all = false;
    foreach ($files as $file) {
        if (!copyFile($root, "environments/{$env['path']}/$file", $file, $all, $params)) {
            break;
        }
    }

    $callbacks = ['setCookieValidationKey', 'setWritable', 'setExecutable', 'createSymlink'];
    foreach ($callbacks as $callback) {
        if (!empty($env[$callback])) {
            $callback($root, $env[$callback]);
        }
    }

    echo "<br/>  ... initialization completed.<br/><br/>";

    echo '<div style="margin:20px 0 20px 0" ><button onclick="window.location.href = \''.$baseInstallUrl.'?step=3\'"> 下一步  </button></div>';
    
}


// 第3步
if ($step == 3) {
    echo '<div><label style="width:150px;    display: inline-block;">Mysql Host</label><input type="text"  name="mysql_host" /></div>';

    echo '<div><label style="width:150px;    display: inline-block;">Mysql 数据库名称</label><input type="text"  name="mysql_db_name" /></div>';

    echo '<div><label style="width:150px;    display: inline-block;">Mysql 数据库用户名</label><input type="text"  name="mysql_db_name" /></div>';
    
    echo '<div><label style="width:150px;    display: inline-block;">Mysql 数据库密码</label><input type="password"  name="mysql_db_name" /></div>';
    
    echo '<div style="margin:20px 0 20px 0" ><button onclick="window.location.href = \''.$baseInstallUrl.'?step=4\'"> 下一步  </button></div>';
    
}

// 第3步
if ($step == 4) {
    
    echo '<div>Mysql初始化数据</div>';
    echo '<div><input type="checkbox" id="import_test_data"   /><label for="import_test_data">导入测试数据</label></div>';
    
    echo '<div style="margin:20px 0 20px 0" ><button onclick="window.location.href = \''.$baseInstallUrl.'?step=5\'"> 下一步  </button></div>';
    
}

// 第3步
if ($step == 5) {
    
    echo '<div>到这里，安装步骤完成，您可以访问您的后台，进行store设置</div>';
    
    echo '<div>后台默认密码为  admin  admin123 , 登陆后请马上修改密码</div>';
    
}



echo "</div>";





function getFileList($root, $basePath = '')
{
    $files = [];
    $handle = opendir($root);
    while (($path = readdir($handle)) !== false) {
        if ($path === '.git' || $path === '.svn' || $path === '.' || $path === '..') {
            continue;
        }
        $fullPath = "$root/$path";
        $relativePath = $basePath === '' ? $path : "$basePath/$path";
        if (is_dir($fullPath)) {
            $files = array_merge($files, getFileList($fullPath, $relativePath));
        } else {
            $files[] = $relativePath;
        }
    }
    closedir($handle);
    return $files;
}

function copyFile($root, $source, $target, &$all, $params)
{
    if (!is_file($root . '/' . $source)) {
        echo "       skip $target ($source not exist)<br/>";
        return true;
    }
    if (is_file($root . '/' . $target)) {
        if (file_get_contents($root . '/' . $source) === file_get_contents($root . '/' . $target)) {
            echo "  unchanged $target<br/>";
            return true;
        }
        if ($all) {
            echo "  overwrite $target<br/>";
        } else {
            echo "      exist $target<br/>";
            echo "            ...overwrite? [Yes|No|All|Quit] ";


            $answer = !empty($params['overwrite']) ? $params['overwrite'] : trim(fgets(STDIN));
            if (!strncasecmp($answer, 'q', 1)) {
                return false;
            } else {
                if (!strncasecmp($answer, 'y', 1)) {
                    echo "  overwrite $target<br/>";
                } else {
                    if (!strncasecmp($answer, 'a', 1)) {
                        echo "  overwrite $target<br/>";
                        $all = true;
                    } else {
                        echo "       skip $target<br/>";
                        return true;
                    }
                }
            }
        }
        file_put_contents($root . '/' . $target, file_get_contents($root . '/' . $source));
        return true;
    }
    echo "   generate $target<br/>";
    @mkdir(dirname($root . '/' . $target), 0777, true);
    file_put_contents($root . '/' . $target, file_get_contents($root . '/' . $source));
    return true;
}

function getParams()
{
    $rawParams = [];
    if (isset($_SERVER['argv'])) {
        $rawParams = $_SERVER['argv'];
        array_shift($rawParams);
    }

    $params = [];
    foreach ($rawParams as $param) {
        if (preg_match('/^--(\w+)(=(.*))?$/', $param, $matches)) {
            $name = $matches[1];
            $params[$name] = isset($matches[3]) ? $matches[3] : true;
        } else {
            $params[] = $param;
        }
    }
    return $params;
}

function setWritable($root, $paths)
{
    foreach ($paths as $writable) {
        if (is_dir("$root/$writable")) {
            echo "      chmod 0777 $writable<br/>";
            @chmod("$root/$writable", 0777);
        } else {
            if (substr($writable,(strlen($writable)-4)) == '.xml') {
                echo "      chmod 0777 $writable<br/>";
                @chmod("$root/$writable", 0777);
            } else {
                echo "<br/>  Error. Directory $writable does not exist. <br/>";
            }
        }
    }
}

function setExecutable($root, $paths)
{
    foreach ($paths as $executable) {
        echo "      chmod 0755 $executable<br/>";
        @chmod("$root/$executable", 0755);
    }
}

function setCookieValidationKey($root, $paths)
{
    foreach ($paths as $file) {
        echo "   generate cookie validation key in $file<br/>";
        $file = $root . '/' . $file;
        $length = 32;
        $bytes = openssl_random_pseudo_bytes($length);
        $key = strtr(substr(base64_encode($bytes), 0, $length), '+/=', '_-.');
        $content = preg_replace('/(("|\')cookieValidationKey("|\')\s*=>\s*)(""|\'\')/', "\\1'$key'", file_get_contents($file));
        file_put_contents($file, $content);
    }
}

function createSymlink($root, $links) {
    foreach ($links as $link => $target) {
        echo "      symlink " . $root . "/" . $target . " " . $root . "/" . $link . "<br/>";
        //first removing folders to avoid errors if the folder already exists
        @rmdir($root . "/" . $link);
        //next removing existing symlink in order to update the target
        if (is_link($root . "/" . $link)) {
            @unlink($root . "/" . $link);
        }
        @symlink($root . "/" . $target, $root . "/" . $link);
    }
}
