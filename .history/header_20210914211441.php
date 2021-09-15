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
            <img src="assets/img/logo.png" alt="grupo-movar-logo">
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
