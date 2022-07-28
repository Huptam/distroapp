<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Central</div>
                <a class="nav-link" href="{{route('dashboardAdmin')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Gestionar</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Productos
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('agregarProducto')}}">Agregar</a>
                        <a class="nav-link" href="{{route('gestionarProducto')}}">Listar</a>
                        <a class="nav-link" href="{{route('gestionarProducto')}}">Buscar</a>
                        <a class="nav-link" href="{{route('gestionarProducto')}}">Editar*</a>
                        <a class="nav-link" href="{{route('gestionarProducto')}}">Eliminar</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Usuarios
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Clientes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('registrarCliente')}}">*Añadir</a>
                                <a class="nav-link" href="{{route('gestionarCliente')}}">*Listar</a>
                                <a class="nav-link" href="{{route('gestionarCliente')}}">*Buscar</a>
                                <a class="nav-link" href="{{route('gestionarCliente')}}">*Editar</a>
                                <a class="nav-link" href="{{route('gestionarCliente')}}">*Eliminar</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Administradores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('registrarAdmin')}}">*Añadir</a>
                                <a class="nav-link" href="{{route('gestionarAdmin')}}">*Listar</a>
                                <a class="nav-link" href="{{route('gestionarAdmin')}}">*Buscar</a>
                                <a class="nav-link" href="{{route('gestionarAdmin')}}">*Editar</a>
                                <a class="nav-link" href="{{route('gestionarAdmin')}}">*Eliminar</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Datos</div>
                <a class="nav-link" href="{{route('error404')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    *Gráficas
                </a>
                <a class="nav-link" href="{{route('error404')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    *Tablas
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Sesión como: </div>
            Administrador
        </div>
    </nav>
</div>
