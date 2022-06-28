<?php
/** 
 * 输出数据库的数据表中的数据
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
    //设置中文编码，避免乱码
    mysqli_query($conn,"set names uft8");
    //插入语句的创建
    //要输出的数据都要进行判断是否存在
    $sql = 'SELECT '
    .$data1.','.$data2.
    ',data_id FROM '. $dbdata;
    //运行命令
    $retval = mysqli_query($conn, $sql);
    //插入状态
    if (!$retval) {  //插入失败
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //插入成功
        $ret = [
            'msg' => 'succes'
        ];
        echo json_encode($ret);
        //用html表格来输出
        echo '<h2>THIS DATA</h2>';
        echo '<table border="1"><tr><td>id</td><td>'.$data1.'</td><td>'.$data2.'</td></tr>';
        //循环输出字段内容
        while($row=mysqli_fetch_array($retval,MYSQLI_ASSOC))
        {
            echo 
            "<tr>".
            "<td>{$row['data_id']} </td> ".
            "<td>{$row[$data1]} </td> ".
            "<td>{$row[$data2]} </td> ".
            "</tr>";
        }
    }
        //释放链接
        $rel = [
            'release' => 'TRUE'
        ];
        echo json_encode($rel);
        mysqli_close($conn);
}
?>
