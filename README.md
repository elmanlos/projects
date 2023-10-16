<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>netflix.website</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body::before {
    content:"";
    position: absolute;
    left:0;
    top:0;
    width:100%;
    height: 100%;
    opacity: 0.5;
    background: url("R.jpeg");
    background-position:center;
}
nav{
    position:fixed;
    z-index:1;
    padding:25px 60px;
}
nav a img{
    width: 160px;
    
}
body{
    background-color:black;
}
.from-wrapper{
    color:white;
    font-size:15px;
    position: absolute;
    left:50%;
    top:50%;
   width: 430px;
   padding: 60px;
   border-radius:4px;
    background: rgba(0,0,0,0.75);
    transform: translate(-50%, -50%);
}
form .form-control {
    position:relative;
    height:50px;
    margin-bottom:16px;
}
.form-control input{
    height:60px;
    width:100%;
    background:black;
    outline:none;
    border: none;
    color:white;
    font-size: 1rem;
    border-radius:4px;
    border-color:gray;
}
.form-control label{
    position:absolute;
    left:20px;
    top: 50%;
    color:gray;
}
button{
width:100%;
padding: 16px 0;
font-size: 1rem;
background: red;
color:white;
cursor: pointer;
margin: 25px 0 10px;
transition: 0.1s ease;
}
button:hover{
    background:red;
}
.form-help{
    display:flex;
    justify-content:space-between;
}
.form-help :where(label, p , small, a){
    color:gray;
}
.remember-me{
    color:white;
    margin-right:5px;
    accent-color:white;
}
.needhelp{
    color:gray;
}
small{
    color:gray;
}
small a{
color:blue;
}
.href{
    color:blue;
}
p{
    color:gray;
}
.from-wrapper p a{
    color:white;
}
</style>

<body>
    
    <nav>
    <a href="#"><img src="netflix-logo-e1536243210766-1024x284.png" alt="logo"></a>
</nav>

<div class="from-wrapper">
<h3>Sign In</h3>

<div class="from">
<from action="#">
</div>
<div class="form-control">
<input type="text" name="Email or phone" placeholder="Email or phone" required><br>
</div>
<div class="form-control">
<input type="text" name="Password" placeholder="Password" required><br>
</div>
<div class="button">
<button type="submit">Sign In</button>
</div>
<div class="form-help">
<div class="remember-me">
<input type="checkbox" id="remember-me">
<label for="remember-me">Remember me </label>
</div>
<a href="#">Need help?</a>
</div>

<div>
</from>
<p>New to Netflix? <a href="#">Sign up now</a></p>
<small>
    This page is protected by google reCAPTCHA to ensure you're not a bot.
   <a href="#">Learn more.</a>
</small>
</div>

</body>
</html># projects
