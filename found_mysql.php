<?php
/** 
 * 创建新的数据库
 */
//设置编码，避免乱码
header('Content-Type:text/html;charset=utf-8');
//通过URL获取数据库参数
$dbhost = $_GET['dbhost']; //默认地址
$dbuser = $_GET['dbuser']; //数据库账号
$dbpass = $_GET['dbpass']; //数据库密码
$dbname = $_GET['dbname']; //要创建的数据库名（可创建）
//拼接参数并链接数据库
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//先进性链数据库判断状态
if (!$conn) {  //链接失败
    $ret = [
        'msg' => 'error'
    ];
    echo json_encode($ret);
} else { //链接成功
    $ret = [
        'msg' => 'succes'
    ];
    echo json_encode($ret);
    //创建新的数据库
    $sql = "CREATE DATABASE " . $dbname;
    //运行命令
    $retcal = mysqli_query($conn, $sql);
    //判断状态
    if (!$retcal) { //创建失败
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //创建成功
        $ret = [
            'msg' => 'sucess'
        ];
        echo json_encode($ret);
        //释放链接
        $rel = [
            'release' => 'TRUE'
        ];
        echo json_encode($rel);
        mysqli_close($conn);
    }
}
?>