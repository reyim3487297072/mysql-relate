<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql</title>
</head>

<body>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
    </script>
    <script type="text/javascript">
   $(function(){
       //婵炴潙顑堥惁顖炴煣閻愵剙澶?
       //var hosturl="http://learn.com:8888/";
       var hosturl=$('#url').val();
       $("#dbhost").val("localhost");
       $("#btn1").on('click',function(){
           var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val();
           var url =hosturl+"conn.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
       $("#btn2").on('click',function(){
        var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val();
           var url =hosturl+"found_mysql.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
       $("#btn3").on('click',function(){
        var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val()+"&dbdata="+$('#dbdata').val()+"&data1="+$('#data1').val()+"&data2="+$('#data2').val();
           var url =hosturl+"found_datashet.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
       $("#btn4").on('click',function(){
        var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val();
           var url =hosturl+"delete_mysql.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
       $("#btn5").on('click',function(){
        var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val()+"&dbdata="+$('#dbdata').val();
           var url =hosturl+"delete_datashet.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
       $("#btn6").on('click',function(){
        var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val()+"&dbdata="+$('#dbdata').val()+"&data1="+$('#data1').val()+"&data2="+$('#data2').val()+"&user="+$('#user').val()+"&pass="+$('#pass').val();
           var url =hosturl+"insert_data.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
       $("#btn7").on('click',function(){
        var geturl = "dbhost="+$('#dbhost').val()+"&dbuser="+$('#dbuser').val()+"&dbpass="+$('#dbpass').val()+"&dbname="+$('#dbname').val()+"&dbdata="+$('#dbdata').val()+"&data1="+$('#data1').val()+"&data2="+$('#data2').val();
           var url =hosturl+"output_data.php?"+geturl;
          //闁瑰灚鎸稿畵鍐ㄎ涢埀顒€霉?
           console.log("url="+url);
           //闁瑰灚鎸哥槐鎴︽煣閻愵剙澶?
           window.open(url,"_blank");
       });
   });
    </script>
    <h1>THIS MYSQL OPERATION !</h1>
    <h3>Please input the information in the input box before operating the database!<br> and your url must '/' end! (http://www.xxx.com/)</h3>
<div >
<input name="url" id="url" placeholder="数据库地址"></input>
    <input name="dbhost" id="dbhost" placeholder="dbhost"></input>
    <input name="dbuser" id="dbuser" placeholder="数据库账号"></input>
    <input name="dbpass" id="dbpass" placeholder="数据库密码"></input>
    <input name="dbname" id="dbname" placeholder="数据库名"></input>
    <input name="dbdata" id="dbdata" placeholder="数据表名"></input>
    <input name="data1" id="data1" placeholder="表字段名1"></input>
    <input name="data2" id="data2" placeholder="表字段名2"></input>
    <input name="user" id="user" placeholder="测试输入的字段1数据"></input>
    <input name="pass" id="pass" placeholder="测试输入的字段2数据"></input>
</div>
<div>
    <button id="btn1" name="btn1">链接数据库</button>
    <button id="btn2" name="btn2">创建新的数据库</button>
    <button id="btn3" name="btn3">创建新的数据表</button>
    <button id="btn4" name="btn4">删除数据库</button>
    <button id="btn5" name="btn5">删除数据表</button>
    <button id="btn6" name="btn6">插入字段数据</button>  
    <button id="btn7" name="btn7">输出字段数据</button>
</div>
<h3><a href="https://github.com/reyim3487297072">AUTHER : github sear reyim3487297072 .</a></h3>
<p>简单的数据库测试工</p>
</body>
</html>