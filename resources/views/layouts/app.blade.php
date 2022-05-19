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
    <script src="{{ asset('js/script.js') }}" type="module" defer></script>

    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
</head>

<body>
    <header id="header">
        <div class="container-xxl">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div>
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <h1 class="visually-hidden">Alquiderna</h1>
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
                                    <a class="nav-link text-white {{ isset($category_name) && $category_name === 'Armadura' ? 'active' : '' }}"
                                        aria-current="page"
                                        href="{{ route('product.category', 'Armadura') }}">Armaduras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ isset($category_name) && $category_name === 'Arma física' ? 'active' : '' }}"
                                        aria-current="page"
                                        href="{{ route('product.category', 'Arma física') }}">Armas físicas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ isset($category_name) && $category_name === 'Arma mágica' ? 'active' : '' }}"
                                        aria-current="page"
                                        href="{{ route('product.category', 'Arma mágica') }}">Armas mágicas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ isset($category_name) && $category_name === 'Poção' ? 'active' : '' }}"
                                        aria-current="page"
                                        href="{{ route('product.category', 'Poção') }}">Poções</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ isset($category_name) && $category_name === 'Grimório' ? 'active' : '' }}"
                                        aria-current="page"
                                        href="{{ route('product.category', 'Grimório') }}">Grimórios</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-magnifying-glass me-2"></i>
                        <button class="btn p-0 m-0 me-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" id="btn-bag"><i
                                class="bi bi-bag"></i></button>
                        @if (!Auth::check())
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('login') }}" class="btn-link">
                                    <i class="bi bi-person-circle me-2"></i>
                                    Login
                                </a>
                            </div>
                        @elseif (Auth()->user()->VerifyIsAdmin())
                            <div class="dropdown d-flex justify-content-center align-items-center">
                                <button class="btn btn-link dropdown-toggle ps-0" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-2"></i>
                                    Olá, {{ Auth()->user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('crud.index') }}">Crud</a></li>
                                    <li class="dropdown-item">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn p-0">Sair da sessão</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="dropdown d-flex justify-content-center align-items-center">
                                <button class="btn btn-link dropdown-toggle ps-0" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-2"></i>
                                    Olá, {{ Auth()->user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn dropdown-item">Sair da sessão</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <aside>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>
        <!-- Isso será substituido por qualquer sessão de se chamar produto-->
    </aside>
    <main>
        <div class="container-xxl">
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
        </div>
        <div>
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="container-xxl">
            <div class="d-flex flex-column justify-content-center align-items-center pt-6">
                <a class="navbar-brand mb-4 align-self-start" href="{{ route('index') }}">
                    <svg width="181" height="39" viewBox="0 0 181 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.888 28.064L27.168 27.296L25.632 28.448C24.72 27.584 24.24 26 24.192 23.744L23.808 7.472C23.76 6.032 24.144 4.736 24.864 3.536C25.392 2.72 26.256 1.664 27.552 0.464L27.456 0.367998C25.392 0.847998 23.616 2 22.032 3.824C18.96 1.712 15.744 0.655997 12.384 0.655997C9.072 0.655997 6.288 1.76 4.08 4.016C1.872 6.272 0.768 8.768 0.768 11.504L0.864 12.56C1.104 15.2 2.784 17.984 5.952 20.912L1.68 27.248C0.576 28.928 0 30.224 0 31.232C0 32.048 0.336 32.48 1.056 32.48C1.824 32.48 2.208 32.144 2.208 31.472C2.208 31.04 1.728 29.984 1.728 29.6C1.728 28.832 2.352 28.208 3.072 28.208C3.6 28.208 4.272 28.448 5.088 28.88L11.904 32.48L18.912 27.248C19.488 29.696 20.64 31.472 22.416 32.576L27.888 28.064ZM18.768 18.416H9.312L17.424 6.464H17.808L18.768 7.856V18.416ZM16.416 5.552L15.264 7.28C14.448 7.088 13.536 6.992 12.528 6.992C10.944 6.992 9.696 7.376 8.736 8.144C7.68 9.008 7.152 10.208 7.152 11.696C7.872 10.496 8.832 9.776 10.032 9.632L10.8 9.536C11.712 9.536 12.432 9.92 12.912 10.688L6.528 20.048C3.696 17.792 2.304 15.296 2.304 12.512C2.304 10.112 3.216 8.144 4.992 6.608C6.672 5.12 8.736 4.4 11.184 4.4C12.864 4.4 14.592 4.784 16.416 5.552ZM18.96 25.616L14.928 28.88L5.136 24.368L6.912 21.776H18.96V25.616ZM40.7678 28.4L40.1918 27.776L39.0398 28.64L35.5358 26.432V6.224C35.5358 4.448 36.3038 3.008 37.8878 1.856C36.1118 2.096 34.4318 2.912 32.9438 4.304L32.4158 4.352C31.5038 3.632 30.4478 3.104 29.2477 2.816C30.3038 3.92 30.8318 4.928 30.8318 5.888V25.04C30.8318 26.432 30.3998 27.584 29.5838 28.496C32.6078 29.6 34.8638 30.8 36.3997 32.144L40.7678 28.4ZM58.6526 37.328C57.4526 35.744 56.8286 34.304 56.8286 33.008V15.296L58.0286 13.76C55.1486 13.184 52.1726 11.792 49.1006 9.584C47.2286 11.216 44.9726 12.368 42.3806 13.04V26.528C42.3806 28.88 43.3886 30.752 45.4046 32.096L52.2206 27.2L52.3646 32.912C52.4126 34.64 51.6926 36.464 50.3006 38.336C51.5966 38.144 52.6526 37.664 53.4686 36.944L55.0526 35.312C55.8206 35.936 56.3966 36.368 56.7326 36.608C57.3566 36.992 57.9806 37.232 58.6526 37.328ZM52.3166 25.904L48.4766 28.688C47.3246 28.064 46.7486 27.296 46.7486 26.384V13.472L52.3166 15.872V25.904ZM79.7749 28.736L79.2949 28.256L78.4309 28.832C77.4709 28.304 76.9909 27.824 76.9909 27.296V13.616L78.3829 12.416L74.8309 9.584L71.4229 12.416L72.5749 13.856V25.904L68.6869 28.688C67.5349 28.064 66.9589 27.296 66.9589 26.384V13.616L68.3989 12.464L64.7509 9.632L60.1429 13.184L60.6229 13.712L61.7269 13.04L62.5909 13.856V26.528C62.5909 28.928 63.5989 30.8 65.6149 32.096L72.4789 27.2C72.4789 29.216 73.4869 30.896 75.5029 32.288L79.7749 28.736ZM88.8161 2.528H85.2641L84.1121 7.424H84.7361L88.8161 2.528ZM90.0641 28.688L89.5841 28.256L88.7201 28.832C87.9521 28.448 87.5201 27.92 87.3761 27.296V14L88.5761 12.656L84.8801 9.584L81.3281 12.512L82.7201 14V26.528L82.6721 27.392C82.5281 29.456 83.5361 31.088 85.6961 32.24L90.0641 28.688ZM108.298 12.8C108.298 12.08 108.442 11.408 108.682 10.736C107.866 11.072 107.194 11.6 106.762 12.32L92.1698 3.008V7.568L98.2658 11.504C96.4898 12.416 95.0498 13.04 93.8978 13.328V24.8C93.8978 26.48 93.4658 27.68 92.5538 28.496C95.7218 29.168 98.6018 30.416 101.194 32.288C103.162 30.704 105.514 29.504 108.298 28.592V12.8ZM103.738 28.496L98.3618 26.576V13.472L99.9458 12.512L103.738 15.056V28.496ZM124.833 15.776L118.641 9.584C116.529 11.072 114.369 12.368 112.161 13.376V26.192C112.161 27.584 111.729 28.736 110.817 29.696C113.121 30.128 115.329 30.944 117.441 32.096L121.617 29.168C122.577 28.496 123.441 27.92 124.257 27.392L123.729 26.816L120.561 28.832L116.529 27.056V22.064C118.593 20.288 121.329 18.224 124.833 15.776ZM121.041 17.36L116.481 20.96V12.704L121.041 17.36ZM141.401 13.04L138.281 9.632L133.433 13.328C133.289 12.32 132.953 11.552 132.473 11.024C132.089 10.592 131.417 10.112 130.409 9.584L126.329 13.184L126.857 13.712L127.673 13.184C128.441 13.808 128.825 14.576 128.825 15.392V25.04C128.825 26.624 128.393 27.776 127.529 28.496C129.785 29.36 131.849 30.56 133.673 32.144L138.041 28.4L137.465 27.824L136.073 28.832L133.481 26.816V14.384L135.353 12.944L138.233 15.776L141.401 13.04ZM161.758 28.736L161.278 28.256L160.27 28.832C159.646 28.4 159.166 27.872 158.926 27.296V14.672C159.598 13.568 160.318 12.56 161.038 11.648L160.558 11.12L158.494 12.752L155.182 9.68C153.79 10.976 151.726 12.656 149.038 14.624C149.038 12.464 148.03 10.784 146.014 9.584L142.078 13.184L142.558 13.712L143.326 13.184C144.094 13.808 144.478 14.576 144.478 15.392V27.728L143.134 29.216L146.782 32.288L150.238 29.216L148.942 27.584V15.68L152.35 13.184L154.51 15.056V26.528C154.51 29.408 155.134 30.8 157.438 32.288L161.758 28.736ZM180.879 28.688L180.351 28.256L179.487 28.688C178.863 28.496 178.383 28.016 178.143 27.2V14.624C178.479 13.328 179.007 12.128 179.775 10.928L179.679 10.736L178.335 11.792L171.519 9.536C170.031 10.928 168.351 11.552 166.575 11.408L165.951 11.36L168.255 17.36C165.087 20.192 163.503 23.072 163.503 26.048C163.503 28.016 164.655 30.08 166.911 32.192H167.151L173.679 26.96C173.679 29.312 174.687 31.04 176.751 32.144L180.879 28.688ZM173.679 19.664L168.735 17.264L166.719 11.792L173.679 14.384V19.664ZM173.727 25.712L170.127 28.784C168.255 26.912 167.343 24.896 167.343 22.736C167.343 21.248 167.823 19.664 168.735 18.032L173.727 20.528V25.712Z"
                            fill="white" />
                    </svg>

                </a>
                <div class="d-flex justify-content-around align-items-start w-100 mb-4">
                    <ul class="list-unstyled">
                        <a href="{{ route('product.category', ['category' => 'Armadura']) }}"
                            class="link-primary">Armaduras</a>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Armadura', 'itemClass' => 'leve']) }}"
                                class="link-secondary">Armadura leve</a></li>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Armadura', 'itemClass' => 'média']) }}"
                                class="link-secondary">Armadura média</a></li>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Armadura', 'itemClass' => 'pesada']) }}"
                                class="link-secondary">Armadura pesada</a></li>
                    </ul>
                    <ul class="list-unstyled" class="link-primary">
                        <a href="{{ route('product.category', ['category' => 'Arma física']) }}"
                            class="link-primary">Armas físicas</a>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Arma física', 'itemClass' => 'espada']) }}"
                                class="link-secondary">Espada</a></li>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Arma física', 'itemClass' => 'machado']) }}"
                                class="link-secondary">Machado</a></li>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Arma física', 'itemClass' => 'arco']) }}"
                                class="link-secondary">Arco</a></li>
                    </ul>
                    <ul class="list-unstyled" class="link-primary">
                        <a href="{{ route('product.category', ['category' => 'Arma mágica']) }}"
                            class="link-primary">Armas mágicas</a>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Arma mágica', 'itemClass' => 'varinha']) }}"
                                class="link-secondary">Varinha</a></li>
                    </ul>
                    <ul class="list-unstyled" class="link-primary">
                        <a href="{{ route('product.category', ['category' => 'Poção']) }}"
                            class="link-primary">Poções</a>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'vida']) }}"
                                class="link-secondary">Poção de vida</a></li>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'mana']) }}"
                                class="link-secondary">Poção de mana</a></li>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Poção', 'itemClass' => 'força']) }}"
                                class="link-secondary">Poção de força</a></li>
                    </ul>
                    <ul class="list-unstyled" class="link-primary">
                        <a href="{{ route('product.category', ['category' => 'Grimório']) }}"
                            class="link-primary">Grimório</a>
                        <li><a href="{{ route('product.itemClass', ['category' => 'Grimório', 'itemClass' => 'mágico']) }}"
                                class="link-secondary">Mágico</a></li>
                    </ul>
                </div>
                <div class="text-center pb-6">
                    <span class="text-white"> Alguns direitos reservados &copy; 2022</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
