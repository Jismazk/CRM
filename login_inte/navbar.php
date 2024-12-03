
    <!-- Barra de navegación -->
    <nav class="navbar" width="80px">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link active"  href="../login_inte/home.php"><img src="../img/logo.png" alt="logo"  width="85px" ></a>
                    </li>
                    <li>
                        <a class="nav-link" href="../contactos/contactos.php">Contactos</a>
                    </li>
                    <li>
                        <a class="nav-link" href="../ordenes/ordenes.php">Ordenes</a>
                    </li>
                    <li>
                        <a class="nav-link" href="../clientes/clientes.php">Clientes</a>
                    </li>
                    <li> <a class="nav-link iconcerrar" href="../login_inte/logout.php">
                        <img src="../img/off.svg" alt="Cerrar Sesión" width="25px">
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
    .navbar{
    list-style: none;
    padding: 0;
    width: 100%;
    max-width: 1000px;
    margin: 0;
    background: none;

   
}
.navbar-nav {
            display: flex;
            justify-content: center;
            gap: 30px;
            width: 100%;
        }
.navbar li a{
    text-decoration: none;
    color:rgb(0, 0, 0);
    padding: 20px;
    display:block;
    margin-top: 0;
   
}
.navbar li{
    display: inline-block;
    text-align: center;
    
}
.navbar li a:hover{
    background:white;
}

    </style>