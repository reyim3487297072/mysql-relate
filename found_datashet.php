<?php

/** 
 * 链接一个数据库并创建数据表和数据表的字段
 */
//设置编码，避免乱码
header('Content-Type:text/html;charset=utf-8');
//通过URL获取数据库参数
$dbhost = $_GET['dbhost']; //默认地址
$dbuser = $_GET['dbuser']; //数据库账号
$dbpass = $_GET['dbpass']; //数据库密码
$dbname = $_GET['dbname']; //数据库名（可创建）
$dbdata = $_GET['dbdata']; //数据表名
//表的两个字段（这里是测试）
$data1 = $_GET['data1']; //数据表中的第一个字段
$data2 = $_GET['data2']; //数据表中的第二个字段
//拼接参数并链接数据库
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//判断状态
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
    //创建表命令
    $sql = "CREATE TABLE " .$dbdata . "( " .
        "data_id INT NOT NULL AUTO_INCREMENT, " .
        $data1 . " VARCHAR(100) NOT NULL, " .
        $data2 . " VARCHAR(40) NOT NULL, " .
        "PRIMARY KEY ( data_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
      //测试打印
        // echo $sql;
    //下面是不用URL传来的变量来创建
    /** 
    *"data_id INT NOT NULL AUTO_INCREMENT, " .
    *"userer VARCHAR(100) NOT NULL, " .
    *"passer VARCHAR(40) NOT NULL, " .
    *"PRIMARY KEY ( data_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
    */
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {  //创建表失败
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //创建表成功
        $ret = [
            'msg' => 'succes'
        ];
        echo json_encode($ret);
    }
        //释放链接
        $rel = [
            'release' => 'TRUE'
        ];
        echo json_encode($rel);
        mysqli_close($conn);
}
?>
