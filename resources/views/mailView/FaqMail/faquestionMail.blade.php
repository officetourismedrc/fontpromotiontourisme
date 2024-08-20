<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="header">
     <div class="header-container">
        <div class="header-logo"></div>
        <div class="header-description">
            <span>build with love, RDC eloko ya makasi</span>
        </div>
     </div>
    </header>
    <main class="main">
        <h1>mail from {{$sender_name}}</h1>
        <h2>email : {{$sender_email}}</h2>
        <p>{{$question}}</p>
        <p>thank you for replying on time</p>
    </main>
    <footer class="footer">
       <span class="footer-copyright">Copyright ONT all right reserved</span>
    </footer>
</body>
</html>
