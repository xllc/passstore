<html>
<head>
<script type='text/javascript'>

function yh(m,text){
    var last="";
    for(i=0;i<text.length;i++){
        for(j=0;j<m.length;j++){
            var key=m.charCodeAt(j);
            var text2=text.charCodeAt(i) ^ key;
        }
        last+= String.fromCharCode(text2);
    }
    return last;
}

function copy(){
    var pw=document.getElementById("password");
    pw.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
}

function encrypt(){
    var a=password.value;
    var b=m.value;
    var x=yh(b,a);
    password.value=x;
    copy();
}


</script>
</head>
<body>
密钥(可自己修改)：<br />
<input id='m' name="m" value='key!@#'>

<br />明文/密文 密码(可自己修改)：
<br />
<textarea rows='3' cols='20' id='password' name='password'>WKJPjPsBPPTLQG</textarea>

<br />
<input type='button' value='加解密并自动复制' onclick='encrypt()' />
</body>
</html>
