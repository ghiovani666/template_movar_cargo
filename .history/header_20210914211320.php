<style>

    
.header {
    width: 100%;
    height: 8em;
    display: flex;
    background-color: var(--header-background-color);
}

.logo {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.nav {
    flex-grow: 11;
    display: flex;
    flex-direction: column;
}
.nav-header {
    flex-grow: 3;
    background-color: var(--nav-header-color);
}

.nav-body {
    flex-grow: 3;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: .5rem;
    margin-left: .5rem;
    font-size: 1.2rem;
}
.menu a, nav a {
    color: var(--nav-text-color);
    text-decoration: none;
}
.menu a:hover, nav a:hover {
    text-decoration: underline;
}

.nav-body .toogle {
    display: none;
}

nav {
    display: none;
    background-color: var(--header-background-color);
    text-align: center;
}
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
nav li {
    padding-top: .5rem;
    font-size: 1.2rem;
}
nav.responsive {
    display: inherit;
}

@media (max-width: 600px) {
    .nav-body li:not(:last-child) {
        display: none;
    }
    .nav-body {
        flex-grow: .8;
        justify-content: flex-end;
    }
    .nav-body .toogle {
        display: inherit;
        font-size: 2rem;
        color: var(--movar-blue-color);
        cursor: pointer;
    }
}
</style> 
 
 <!-- Cabecera -->
 <div class="header">
        <div class="logo">
            <img src="./assets/img/movar-logo-grande-2.svg" alt="grupo-movar-logo">
        </div>
        <div class="nav">
            <div class="nav-header"></div>
            <div class="nav-body">
                <ul class="menu">
                    <li class="item"><a href="#">Inicio</a></li>
                    <li class="item"><a href="#">Nosotros</a></li>
                    <li class="item"><a href="#">Servicios</a></li>
                    <li class="item"><a href="#">Contáctenos</a></li>
                    <li id="bars" class="toogle" onclick="toogleMenu()"><i class="fa fa-bars"></i></li>
                </ul>
            </div>
        </div>
    </div>    
    
    <header class="header-area">

        <div class="top-header top-header-three">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-4">
                        <ul class="header-left-content">
                            <li>
                                <a href="https://www.facebook.com/movarcargo/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/movarcargosac" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/agencia-movar-cargo" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                        <div class="header-right-content">
                            <div class="call-us">
                                <i class="bx bx-phone-call"></i>
                                <a href="javascript:void(0)">(511)6816950 / +51 981503398</a>
                            </div>
                            <ul class="flag-area">
                                <li class="flag-item-top">
                                    <a id="intranet_menu" href="intranet.php" class="flag-bar">
                                        <i class="bx  bx-globe"></i>
                                        <span>Intranet</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area">
            <div class="mobile-nav">
                <div class="container-fluid">
                    <a href="javascript:void(0)" class="logo">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="main-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md">
                        <a class="navbar-brand" href="javascript:void(0)">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a id="index_principal" href="#index_mains" class="nav-link">
                                        Inicio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="quienes_somos" href="#about_main" class="nav-link">Nosotros</a>
                                </li>

                                <li class="nav-item">
                                    <a id="servicios_menu" href="javascript:void(0)" class="nav-link">
                                        Servicios
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#transporte_internacional" class="nav-link">Transporte
                                                internacional</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#agenciamiento_aduana" class="nav-link">Agenciamiento de
                                                aduanas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#trasporte_distribucion" class="nav-link">Transporte y
                                                distribución</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a id="cotizar_menu" href="#cotizar_main" class="nav-link">
                                        Cotización</a>
                                </li>
                                <li class="nav-item">
                                    <a id="contacto_menu" href="#contacto_main" class="nav-link">Contáctenos</a>
                                </li>
                            </ul>
                            <!-- <div class="others-option">
                                <div class="option-item">
                                    <i class="search-btn bx bx-search"></i>
                                    <i class="close-btn bx bx-x"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Buscar"
                                                    type="text">
                                                <button class="search-button" type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <!-- <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="option-item">
                                    <i class="search-btn bx bx-search"></i>
                                    <i class="close-btn bx bx-x"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search"
                                                    type="text">
                                                <button class="search-button" type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </header>