<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body class="bg-slate-100 m-0">
    <header>
            <div class="hele-menu bg-white"></div>
            <div class="header-container pl-[20px] flex items-center">
            
                <div class="header-logo">
                    <img src="images/logo1.png" alt="" class="w-[300px]">
                </div>
                <nav>
                    <ul class="links flex space-x-4 font-[600]">
                        <li> <a href="#"> Home </a> </li>
                        <li> <a href="#"> Rooms </a> </li>
                        <li> <a href="#"> Info </a> </li>
                    </ul>
                </nav>
                <button class="button-81 ml-auto pr-[20px] mb-[15px]" role="button" onclick="location.href='#'">Login</button>
            </div>


    </header>

    <main>
    <div class="search-header">
            <div class="overlay  pt-[77px] flex justify-end">
                <img src="images/banner.png" alt="" class="banner-image">
            </div>
            <div class=" video-box w-[50%] h-[557px] bg-slate-500 pt-[100]" >
                <video src="" autoplay muted loop></video>
            </div>
        </div>
    </main>

    <style>
        /* nav bar begin*/
        .links > * {
            padding-left: 50px;
            padding-bottom: 15px;
        }

        .hele-menu{
            width: 100%;
            height: 70px;
            position: absolute;
            z-index: -1;
        }

/* nav bar einde */

    </style>
</body>
</html>