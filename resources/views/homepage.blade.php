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
                    <ul class="links flex space-x-4 font-[600] ">
                        <li> <button class="button-81" onclick="location.href='#'"> Home </button> </li>
                        <li> <button class="button-81" onclick="location.href='#'"> Rooms </button> </li>
                        <li> <button class="button-81" onclick="location.href='#'"> Info </button> </li>
                    </ul>
                </nav>
                <button class="button-81 ml-auto pr-[20px] mb-[15px]" role="button" onclick="location.href='#'">Login</button>
            </div>


    </header>

    <main>
    <div class="search-header">
            <video src="" autoplay muted loop></video>
            <img src="images/banner.png" alt="">

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

        .button-81 {
            background-color: #fff;
            
            color: #0d172a;
            cursor: pointer;
            display: inline-block;
            font-family: "Basier circle",-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            font-size: 1.1rem;
            font-weight: 600;
            line-height: 1.7;
            padding: 1rem 1.6rem;
            text-align: center;
            text-decoration: none #0d172a solid;
            text-decoration-thickness: auto;
            transition: all .1s cubic-bezier(.4, 0, .2, 1);
            border-top: 15px solid #fff;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-81:hover {
            background-color: #45AAE0;
            color: #fff;
            border-top: 15px solid #45AAE0;
        }

        @media (min-width: 768px) {
        .button-81 {
            font-size: 1.125rem;
            padding: 0.5rem 2rem;
            padding-top: 10px;
        }

        .search-header {
        margin-top: -100px; /* Adjust the value as needed */
        
        }



}
/* nav bar einde */

    </style>
</body>
</html>