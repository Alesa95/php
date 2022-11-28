<script>
    /*  =================================================================
        Código javascript para programar el modo oscuro de la aplicación  
        El estado seleccionado se almacena en las cookies para guardar
        las preferencias del usuario   
        =================================================================
    */

    function checkMode() {
        let mode = getCookie("mode");

        if (mode == "dark") {
            darkMode();
        }
    }

    function darkMode () {
        document.cookie = "mode=dark"; 

        $("table").removeClass("table")
        $("table").addClass("table table-dark");
        $("div.container").addClass("bg-dark");
        $("h1,h2,h3,h4,p").addClass("text-light");
    }

    function lightMode () {
        document.cookie = "mode=light";

        $("table").removeClass("table table-dark")
        $("table").addClass("table");
        $("div.container").removeClass("bg-dark");
        $("h1,h2,h3,h4,p").removeClass("text-light");
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Listado Manga</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cambiar apariencia
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" onclick="lightMode()">Modo claro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" onclick="darkMode()">Modo oscuro</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>