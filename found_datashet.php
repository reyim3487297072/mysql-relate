<?php

/** 
 * ����һ�����ݿⲢ�������ݱ�����ݱ���ֶ�
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
    //����������
    $sql = "CREATE TABLE " .$dbdata . "( " .
        "data_id INT NOT NULL AUTO_INCREMENT, " .
        $data1 . " VARCHAR(100) NOT NULL, " .
        $data2 . " VARCHAR(40) NOT NULL, " .
        "PRIMARY KEY ( data_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
      //���Դ�ӡ
        // echo $sql;
    //�����ǲ���URL�����ı���������
    /** 
    *"data_id INT NOT NULL AUTO_INCREMENT, " .
    *"userer VARCHAR(100) NOT NULL, " .
    *"passer VARCHAR(40) NOT NULL, " .
    *"PRIMARY KEY ( data_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
    */
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {  //������ʧ��
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //������ɹ�
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
