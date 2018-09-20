<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Responsive Side Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar">
        <span class="open-slide">
            <a href="#" onclick="openSlideMenu()">
                <svg width="30" height="30">
                    <path d="M0,5,30,5" stroke="#fff" stroke-width="5" />
                    <path d="M0,14,30,14" stroke="#fff" stroke-width="5" />
                    <path d="M0,23,30,23" stroke="#fff" stroke-width="5" />
                </svg>
            </a>
            
        </span>
         <h2> STAY TOGETHER IN TOUCH</h2>       
        <div id="main">
            <img src="" alt="LOGO">
            <h1> STAY TOGETHER IN TOUCH</h1>  
        </div>
        <ul class="navbar-bar">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Find</a></li>
            <li><a href="#">Setting</a></li>
        </ul>

    </nav>
    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <a href="#">Home</a>
        <a href="#">about</a>
        <a href="#">Find</a>
        <a href="#">Setting</a>
    </div>
    <div id="main">
      <h1></h1>  
    </div>
    

</body>
</html>
