<?php session_start();if(!$_SESSION["logged"]){header('Location: ../../../');} ?><!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="width=device-width,initial-scale=1"name="viewport"><title>FacioCMS Updater</title><style>*{margin:0;padding:0;box-sizing:border-box;font-family:sans-serif}#app{padding:20px 100px;background:#1f2020;color:#fff;height:100vh}h2{font-size:50px}.bottom{width:100%;height:100px;background:#151515;color:#fff;position:fixed;bottom:0;left:0;display:flex;align-items:center;justify-content:center;font-size:50px}</style></head><body><div id="app"><h2>Downloading started!</h2><div id="response"></div><div class="bottom">Downloading ... ()</div></div><script>const $ = _ => document.querySelector(_)
        const xhr=new XMLHttpRequest;let isDownloading=!0;xhr.open("GET","update.php"),xhr.send(),xhr.addEventListener("readystatechange",()=>{""!=xhr.responseText&&(isDownloading=!1,$("#response").innerHTML="",$(".bottom").innerHTML="Task finished",$("#response").innerHTML+=xhr.responseText)});const mult=(e,n)=>{let t="";for(let r=0;r<e;r++)t+=n;return t};let time=0;function timeInterval(){0!=isDownloading&&(time++,$(".bottom").innerHTML=`Downloading ${mult(time%3+1,".")} (${time}s)`)}timeInterval(),setInterval(()=>{timeInterval()},1e3);</script></body></html>