<?php
/** 
 * ɾ�����ݿ�
 */
//���ñ��룬��������
header('Content-Type:text/html;charset=utf-8');
//ͨ��URL��ȡ���ݿ����
$dbhost = $_GET['dbhost']; //Ĭ�ϵ�ַ
$dbuser = $_GET['dbuser']; //���ݿ��˺�
$dbpass = $_GET['dbpass']; //���ݿ�����
$dbname = $_GET['dbname']; //Ҫɾ�������ݿ���
//ƴ�Ӳ������������ݿ�
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//�Ƚ��������ݿ��ж�״̬
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
    //ɾ�����ݿ�
    $sql = "DROP DATABASE " . $dbname;
    //��������
    $retcal = mysqli_query($conn, $sql);
    //�ж�״̬
    if (!$retcal) { //ɾ��ʧ��
        $ret = [
            'msg' => 'error'
        ];
        echo json_encode($ret);
    } else { //ɾ���ɹ�
        $ret = [
            'msg' => 'sucess'
        ];
        echo json_encode($ret);
        //�ͷ�����
        $rel = [
            'release' => 'TRUE'
        ];
        echo json_encode($rel);
        mysqli_close($conn);
    }
}
?>