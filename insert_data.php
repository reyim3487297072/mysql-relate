<?php
/** 
 * �������ݿ�����ݱ��в�������
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
//�������������
$user = $_GET['user']; //���ݱ��еĵ�һ���ֶβ��������
$pass = $_GET['pass']; //���ݱ��еĵڶ����ֶβ��������
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
    $sql = "INSERT INTO " . $dbdata .
        "(" . $data1 . "," . $data2 . ")" .
        " VALUES " .
        "(" . $user . "," . $pass . ")";
           //���Դ�ӡ
        //echo $sql;
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
    }
        //�ͷ�����
        $rel = [
            'release' => 'TRUE'
        ];
        echo json_encode($rel);
        mysqli_close($conn);
}
?>
