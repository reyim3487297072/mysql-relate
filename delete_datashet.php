<?php

/** 
 * ɾ��ĳһ�����ݿ�����ݱ�
 */
//���ñ��룬��������
header('Content-Type:text/html;charset=utf-8');
//ͨ��URL��ȡ���ݿ����
$dbhost = $_GET['dbhost']; //Ĭ�ϵ�ַ
$dbuser = $_GET['dbuser']; //���ݿ��˺�
$dbpass = $_GET['dbpass']; //���ݿ�����
$dbname = $_GET['dbname']; //���ݿ������ɴ�����
$dbdata = $_GET['dbdata']; //���ݱ���
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
    //ɾ��������
    $sql = "DROP TABLE " .$dbdata;
      //���Դ�ӡ
        // echo $sql;
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {  //ɾ����ʧ��
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //ɾ����ɹ�
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
