<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website Development | YES RAJ</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    background:linear-gradient(-45deg,#0f172a,#1d4ed8,#2563eb,#06b6d4);
    background-size:400% 400%;
    animation:bgMove 12s ease infinite;
}

@keyframes bgMove{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.circle{
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    animation:float 10s linear infinite;
}

.circle:nth-child(1){
    width:220px;
    height:220px;
    left:-60px;
    top:-60px;
}

.circle:nth-child(2){
    width:300px;
    height:300px;
    right:-100px;
    bottom:-100px;
    animation-duration:14s;
}

.circle:nth-child(3){
    width:120px;
    height:120px;
    left:15%;
    bottom:10%;
    animation-duration:8s;
}

@keyframes float{
0%{transform:translateY(0);}
50%{transform:translateY(-30px);}
100%{transform:translateY(0);}
}

.card{
    position:relative;
    width:90%;
    max-width:600px;
    background:rgba(255,255,255,.12);
    backdrop-filter:blur(18px);
    border:1px solid rgba(255,255,255,.2);
    border-radius:25px;
    padding:45px;
    text-align:center;
    color:#fff;
    box-shadow:0 15px 40px rgba(0,0,0,.35);
    animation:show 1s;
}

@keyframes show{
from{
opacity:0;
transform:translateY(40px);
}
to{
opacity:1;
transform:translateY(0);
}
}

.logo{
    width:95px;
    height:95px;
    margin:auto;
    border-radius:50%;
    background:#fff;
    color:#2563eb;
    font-size:42px;
    font-weight:bold;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:20px;
}

h1{
    font-size:38px;
    margin-bottom:15px;
}

.type{
    color:#FFD54F;
}

p{
    font-size:20px;
    line-height:1.8;
    margin-top:20px;
}

.btn{
    display:inline-block;
    margin-top:35px;
    background:#229ED9;
    color:#fff;
    text-decoration:none;
    padding:16px 38px;
    border-radius:50px;
    font-size:18px;
    font-weight:600;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,.35);
}

.services{
    margin-top:30px;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:12px;
}

.services span{
    background:rgba(255,255,255,.15);
    padding:10px 18px;
    border-radius:30px;
    font-size:15px;
}

footer{
    margin-top:30px;
    color:#ddd;
    font-size:14px;
}
</style>
</head>

<body>

<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>

<div class="card">

<div class="logo">YR</div>

<h1>I Build <span class="type"></span></h1>

<p>
🌐 अगर आपको किसी भी प्रकार की Website बनवानी हो,
तो बेझिझक मुझसे संपर्क करें।
<br><br>
Professional • Responsive • Fast • Secure
</p>

<div class="services">
<span>Business Website</span>
<span>Portfolio</span>
<span>School Website</span>
<span>Company Website</span>
<span>Admin Panel</span>
<span>PHP</span>
<span>HTML</span>
<span>JavaScript</span>
</div>

<a class="btn" href="https://t.me/yashraj4bot" target="_blank">
📩 Contact on Telegram
</a>

<footer>
Made with ❤️ by <strong>YES RAJ</strong>
</footer>

</div>

<script>

const words=[
"Professional Websites",
"Modern UI Design",
"Responsive Websites",
"Business Websites",
"Custom Web Projects"
];

let i=0;
let j=0;
let current="";
let isDeleting=false;

function typing(){

current=words[i];

if(isDeleting){
document.querySelector(".type").textContent=current.substring(0,j--);
}else{
document.querySelector(".type").textContent=current.substring(0,j++);
}

if(!isDeleting && j===current.length+1){
isDeleting=true;
setTimeout(typing,1000);
return;
}

if(isDeleting && j===0){
isDeleting=false;
i++;
if(i===words.length)i=0;
}

setTimeout(typing,isDeleting?60:120);

}

typing();

</script>

</body>
</html>
