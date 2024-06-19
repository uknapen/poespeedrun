<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/Chaos_Orb.png" />
    <script src="https://kit.fontawesome.com/82b43b0e7c.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <style>
        * {
            font-family: "Montserrat";
            box-sizing: border-box;
        }

        .table {
            display: table;
            width: 100%;
            border-collapse: collapse;
        }

        .table-row {
            display: table-row;
        }

        .table-heading {
            display: table-header-group;
            font-weight: bold;
        }

        .table-cell {
            display: table-cell;
            padding: 8px;

            height: 40;
            text-align: center;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        poetheme: "#blue",
                        navbar_button: "rgb(243,235,157,1)",
                        navbar_button_hover: "rgb(216 207 119)",
                        navbar_button_hover2: "rgb(133 100 50)",
                        navbar_bg: "rgb(23,14,13,0.9)",
                        panel: "rgb(23 14 13)",
                        foreground: "rgb(255 255 255)",
                        panel_link: "rgb(243 235 157)",
                        mainbgtype: "rgb(45 36 25)",
                        mainhoverbutton: "rgb(25 26 29)",
                        secondmenutxt: "rgb(209 213 219 / 80%)",
                        secondmenubg: "rgb(36 29 20)",
                        mainbg: "#170e0d",
                    },
                },
            },
        };
    </script>
    <title>Path of Exile Speedrun</title>
</head>

<body class="mb-48"
    style="
      background-image: url('images/Bgpoe.png');
      background-size: cover;
      background-position: center;
    ">
    <!-- Top menu -->
    <nav class="flex justify-between items-center absolute top-0 bg-navbar_bg w-full ">
        <!-- logo -->
        <a href="/">
            <img src="images/Chaos_Orb.png" alt="logo" class="w-12 h-12 logo" />
        </a>

        <!-- Title -->
        <a href="/">
            <button
                class="flex flex-row flex-nowrap items-center gap-2 whitespace-nowrap rounded-md p-2 font-medium text-base text-theme-color-on-navbar h-full">
                <div class="px-2 text-navbar_button text-lg">
                    Path of Exile Campain Speedrun
                </div>
            </button>
        </a>

        <!-- Menu -->
        <div class="flex shrink-0 grow flex-row items-center justify-end gap-2 lg:min-w-[160px]">
            <div class="flex flex-row flex-nowrap items-center justify-stretch gap-2 lg:min-w-[160px]">
                @auth
                    <div>
                        <div class="p-2 text-left font-medium text-navbar_button mr-1">
                            <span class="px-2">Welcome {{ auth()->user()->name }}</span>
                        </div>
                    </div>

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"
                            class="flex h-full flex-row flex-nowrap items-center gap-2 whitespace-nowrap rounded bg-navbar-link p-2 text-left font-medium text-navbar hover:bg-navbar-link-hover bg-navbar_button hover:bg-navbar_button_hover mr-1">
                            <div class="px-2">Logout</div>
                        </button>
                    </form>
                @else
                    <a href="/login">
                        <button type="button"
                            class="flex flex-row flex-nowrap items-center gap-2 whitespace-nowrap rounded-md p-2 font-medium text-base h-full hover:bg-navbar_button_hover2">
                            <div class="px-2 text-navbar_button text-lg">Log in</div>
                        </button>
                    </a>

                    <a href="/register">
                        <button type="button"
                            class="flex h-full flex-row flex-nowrap items-center gap-2 whitespace-nowrap rounded bg-navbar-link p-2 text-left font-medium text-navbar hover:bg-navbar-link-hover bg-navbar_button hover:bg-navbar_button_hover mr-1">
                            <div class="px-2">Sign up</div>
                        </button>
                    </a>

                @endauth
            </div>
        </div>
    </nav>
    <!-- end of Top menu -->

    <div class="space-y-4 m-3 mr-0 ml-0 mt-[60px] lg:mr-[15%] lg:ml-[15%]">
        {{ $slot }}
    </div>
</body>

</html>
