{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alquiderna</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/eb4109d4de.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}" type="module"></script>
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
</head>

<body>
    <header class="bg-primary">
        <div class="container-xxl">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div>
                        <a class="navbar-brand" href="#">
                            <h1 class="d-none">Alquiderna</h1>
                            <svg width="95" height="20" viewBox="0 0 1086 229" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M167.328 166.384L163.008 161.776L153.792 168.688C148.32 163.504 145.44 154 145.152 140.464L142.848 42.832C142.56 34.192 144.864 26.416 149.184 19.216C152.352 14.32 157.536 7.98401 165.312 0.784018L164.736 0.208008C152.352 3.08801 141.696 10 132.192 20.944C113.76 8.27201 94.464 1.936 74.304 1.936C54.432 1.936 37.728 8.56 24.48 22.096C11.232 35.632 4.608 50.608 4.608 67.024L5.184 73.36C6.624 89.2 16.704 105.904 35.712 123.472L10.08 161.488C3.456 171.568 0 179.344 0 185.392C0 190.288 2.016 192.88 6.336 192.88C10.944 192.88 13.248 190.864 13.248 186.832C13.248 184.24 10.368 177.904 10.368 175.6C10.368 170.992 14.112 167.248 18.432 167.248C21.6 167.248 25.632 168.688 30.528 171.28L71.424 192.88L113.472 161.488C116.928 176.176 123.84 186.832 134.496 193.456L167.328 166.384ZM112.608 108.496H55.872L104.544 36.784H106.848L112.608 45.136V108.496ZM98.496 31.312L91.584 41.68C86.688 40.528 81.216 39.952 75.168 39.952C65.664 39.952 58.176 42.256 52.416 46.864C46.08 52.048 42.912 59.248 42.912 68.176C47.232 60.976 52.992 56.656 60.192 55.792L64.8 55.216C70.272 55.216 74.592 57.52 77.472 62.128L39.168 118.288C22.176 104.752 13.824 89.776 13.824 73.072C13.824 58.672 19.296 46.864 29.952 37.648C40.032 28.72 52.416 24.4 67.104 24.4C77.184 24.4 87.552 26.704 98.496 31.312ZM113.76 151.696L89.568 171.28L30.816 144.208L41.472 128.656H113.76V151.696Z"
                                    fill="white" />
                                <path
                                    d="M244.607 168.4L241.15 164.656L234.238 169.84L213.215 156.592V35.344C213.215 24.688 217.823 16.048 227.327 9.13601C216.671 10.576 206.591 15.472 197.663 23.824L194.495 24.112C189.023 19.792 182.686 16.624 175.486 14.896C181.822 21.52 184.99 27.568 184.99 33.328V148.24C184.99 156.592 182.399 163.504 177.503 168.976C195.647 175.6 209.182 182.8 218.398 190.864L244.607 168.4Z"
                                    fill="white" />
                                <path
                                    d="M351.916 221.968C344.716 212.464 340.972 203.824 340.972 196.048V89.776L348.172 80.56C330.892 77.104 313.036 68.752 294.604 55.504C283.372 65.296 269.836 72.208 254.284 76.24V157.168C254.284 171.28 260.332 182.512 272.428 190.576L313.324 161.2L314.188 195.472C314.476 205.84 310.156 216.784 301.804 228.016C309.58 226.864 315.916 223.984 320.812 219.664L330.316 209.872C334.924 213.616 338.38 216.208 340.396 217.648C344.14 219.952 347.884 221.392 351.916 221.968ZM313.9 153.424L290.86 170.128C283.948 166.384 280.492 161.776 280.492 156.304V78.832L313.9 93.232V153.424Z"
                                    fill="white" />
                                <path
                                    d="M478.649 170.416L475.769 167.536L470.585 170.992C464.825 167.824 461.945 164.944 461.945 161.776V79.696L470.297 72.496L448.985 55.504L428.537 72.496L435.449 81.136V153.424L412.121 170.128C405.209 166.384 401.753 161.776 401.753 156.304V79.696L410.393 72.784L388.505 55.792L360.857 77.104L363.737 80.272L370.361 76.24L375.545 81.136V157.168C375.545 171.568 381.593 182.8 393.689 190.576L434.873 161.2C434.873 173.296 440.921 183.376 453.017 191.728L478.649 170.416Z"
                                    fill="white" />
                                <path
                                    d="M532.897 13.168H511.585L504.673 42.544H508.417L532.897 13.168ZM540.385 170.128L537.505 167.536L532.321 170.992C527.713 168.688 525.121 165.52 524.257 161.776V82L531.457 73.936L509.281 55.504L487.969 73.072L496.321 82V157.168L496.033 162.352C495.169 174.736 501.217 184.528 514.177 191.44L540.385 170.128Z"
                                    fill="white" />
                                <path
                                    d="M649.786 74.8C649.786 70.48 650.651 66.448 652.091 62.416C647.195 64.432 643.162 67.6 640.57 71.92L553.018 16.048V43.408L589.594 67.024C578.938 72.496 570.298 76.24 563.386 77.968V146.8C563.386 156.88 560.795 164.08 555.323 168.976C574.331 173.008 591.61 180.496 607.162 191.728C618.97 182.224 633.083 175.024 649.786 169.552V74.8ZM622.427 168.976L590.17 157.456V78.832L599.674 73.072L622.427 88.336V168.976Z"
                                    fill="white" />
                                <path
                                    d="M748.998 92.656L711.846 55.504C699.174 64.432 686.214 72.208 672.966 78.256V155.152C672.966 163.504 670.374 170.416 664.902 176.176C678.726 178.768 691.974 183.664 704.646 190.576L729.702 173.008C735.462 168.976 740.646 165.52 745.542 162.352L742.374 158.896L723.366 170.992L699.174 160.336V130.384C711.558 119.728 727.974 107.344 748.998 92.656ZM726.246 102.16L698.886 123.76V74.224L726.246 102.16Z"
                                    fill="white" />
                                <path
                                    d="M848.408 76.24L829.688 55.792L800.599 77.968C799.735 71.92 797.719 67.312 794.839 64.144C792.535 61.552 788.504 58.672 782.456 55.504L757.976 77.104L761.143 80.272L766.039 77.104C770.647 80.848 772.951 85.456 772.951 90.352V148.24C772.951 157.744 770.359 164.656 765.175 168.976C778.711 174.16 791.095 181.36 802.039 190.864L828.247 168.4L824.792 164.944L816.44 170.992L800.888 158.896V84.304L812.12 75.664L829.399 92.656L848.408 76.24Z"
                                    fill="white" />
                                <path
                                    d="M970.549 170.416L967.669 167.536L961.621 170.992C957.877 168.4 954.997 165.232 953.557 161.776V86.032C957.589 79.408 961.909 73.36 966.229 67.888L963.349 64.72L950.965 74.512L931.093 56.08C922.741 63.856 910.357 73.936 894.229 85.744C894.229 72.784 888.181 62.704 876.085 55.504L852.469 77.104L855.349 80.272L859.957 77.104C864.565 80.848 866.869 85.456 866.869 90.352V164.368L858.805 173.296L880.693 191.728L901.429 173.296L893.653 163.504V92.08L914.101 77.104L927.061 88.336V157.168C927.061 174.448 930.805 182.8 944.629 191.728L970.549 170.416Z"
                                    fill="white" />
                                <path
                                    d="M1085.28 170.128L1082.11 167.536L1076.92 170.128C1073.18 168.976 1070.3 166.096 1068.86 161.2V85.744C1070.88 77.968 1074.04 70.768 1078.65 63.568L1078.08 62.416L1070.01 68.752L1029.12 55.216C1020.19 63.568 1010.11 67.312 999.452 66.448L995.708 66.16L1009.53 102.16C990.524 119.152 981.02 136.432 981.02 154.288C981.02 166.096 987.932 178.48 1001.47 191.152H1002.91L1042.08 159.76C1042.08 173.872 1048.12 184.24 1060.51 190.864L1085.28 170.128ZM1042.08 115.984L1012.41 101.584L1000.32 68.752L1042.08 84.304V115.984ZM1042.36 152.272L1020.76 170.704C1009.53 159.472 1004.06 147.376 1004.06 134.416C1004.06 125.488 1006.94 115.984 1012.41 106.192L1042.36 121.168V152.272Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navegadorPrincipal" aria-controls="navegadorPrincipal"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navegadorPrincipal">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-white" aria-current="page" href="#">Armaduras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" aria-current="page" href="#">Armas físicas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" aria-current="page" href="#">Armas mágicas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" aria-current="page" href="#">Poções</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" aria-current="page" href="#">Grimorios</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-magnifying-glass me-2"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bag me-2" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg>
                        <div class="d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle me-1" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @if (session()->get('success'))
            <div class="container-xxl mt-5">
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            </div>
        @endif
        @if (session()->get('error'))
            <div class="container-xxl mt-5">
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            </div>
        @endif
        <main>
            <!-- Isso será substituido por qualquer sessão de se chamar produto-->
            <div class="container-xxl mt-3">
                @yield('content')
            </div>
        </main>
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>

</html>
