<?php
/** 
 * ������ݿ�����ݱ��е�����
 */
//���ñ��룬��������
header('Content-Type:text/html;charset=utf-8');
//ͨ��URL��ȡ���ݿ����
$dbhost = $_GET['dbhost']; //Ĭ�ϵ�ַ
$dbuser = $_GET['dbuser']; //���ݿ��˺�
$dbpass = $_GET['dbpass']; //���ݿ�����
$dbname = $_GET['dbname']; //���ݿ������ɴ�����
$dbdata = $_GET['dbdata']; //���ݱ���
//��������ֶΣ������ǲ��ԣ�
$data1 = $_GET['data1']; //���ݱ��еĵ�һ���ֶ�
$data2 = $_GET['data2']; //���ݱ��еĵڶ����ֶ�
//ƴ�Ӳ������������ݿ�
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//�ж�״̬
if (!$conn) {  //����ʧ��
    $ret = [
        'msg' => 'error'
    ];
    echo json_encode($ret);
} else { //���ӳɹ�
    $ret = [
        'msg' => 'succes'
    ];
    echo json_encode($ret);
    //�������ı��룬��������
    mysqli_query($conn,"set names uft8");
    //�������Ĵ���
    //Ҫ��������ݶ�Ҫ�����ж��Ƿ����
    $sql = 'SELECT '
    .$data1.','.$data2.
    ',data_id FROM '. $dbdata;
    //��������
    $retval = mysqli_query($conn, $sql);
    //����״̬
    if (!$retval) {  //����ʧ��
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //����ɹ�
        $ret = [
            'msg' => 'succes'
        ];
        echo json_encode($ret);
        //��html��������
        echo '<h2>THIS DATA</h2>';
        echo '<table border="1"><tr><td>id</td><td>'.$data1.'</td><td>'.$data2.'</td></tr>';
        //ѭ������ֶ�����
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
        //�ͷ�����
        $rel = [
            'release' => 'TRUE'
        ];
        echo json_encode($rel);
        mysqli_close($conn);
}
?>
