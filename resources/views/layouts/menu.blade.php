<!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Dia,Mes nuemro_dia año</p>
                    </li>
                  <!--Inicio menu admin-->
                    <li class="active ripple">
                      <a class="tree-toggle nav-header" href="index_admin.html"><span class="fa-home fa"></span> Inicio Administrador
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="rep_atencion.html"><span class="fa fa-file-text"></span>Reporte-Atencio caso</a></li>
                          <li><a href="rep_problematica.html"><span class="fa fa-file-text"></span>Reporte-Problematica</a></li>
                          <li><a href="rep_edad.html"><span class="fa fa-file-text"></span>Reporte-por edad</a></li>
                          <li><a href="rep_documento.html"><span class="fa fa-file-text"></span>Reporte-documento de identificacion</a></li>
                          <li><a href="rep_origen.html"><span class="fa fa-file-text"></span>Reporte-lugar de origen</a></li>
                          <li><a href="rep_ocupacion.html"><span class="fa fa-file-text"></span>Reporte-ocupacion</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-user-female"></span>Usuarios
                         <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="{{ route('register') }}"><span class="icons icon-people"></span>Aregar Usuario</a></li>
                        <li><a href="modificar_usuario.html"><span class="fa fa-edit"></span>Modificar Datos</a></li>
                        <li><a href="{{ route('users.index') }}"><span class="fa fa-list-alt"></span>Mostrar Usuarios</a></li>
                        <li><a href="ver_perfil.html"><span class="icons icon-list"></span>Ver Perfil</a></li>
                      </ul>
                    </li>
                  <!--fin menu admin-->
                  <!--Inicio Menu usuario estandar-->
                    <li class="ripple">
                      <a class="tree-toggle nav-header" href="index_estandar.html"><span class="fa-home fa"></span> Inicio Estandar
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="ver_rep_es.html"><span class="fa fa-file-text"></span>Ver Reportes</a></li>
                          <li><a href="editar_rep_es.html"><span class="fa fa-edit"></span>Editar Observaciones</a></li>
                          <li><a href="exportar.html"><span class="fa fa-file-pdf-o"></span>Exportar</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-login"></span>Ficha de Ingreso
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_ingreso_1.html"><span class="fa fa fa-file"></span>Aregar Ingreso</a></li>
                        <li><a href="modificar_ingreso_1.html"><span class="fa fa-edit"></span>Modificar Ingreso</a></li>
                        <li><a href="mostrar_ingreso.html"><span class="fa fa-list-alt"></span>Mostrar Ingreso</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-folder-open"></span>Ficha Social
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_social_1.html"><span class="fa fa fa-file"></span>Aregar Social</a></li>
                        <li><a href="modificar_social_1.html"><span class="fa fa-edit"></span>Modificar Social</a></li>
                        <li><a href="mostrar_social.html"><span class="fa fa-list-alt"></span>Mostrar Social</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-child"></span>Ficha Psicologica
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_psicologico_1.html"><span class="fa fa fa-file"></span>Aregar Psicologico</a></li>
                        <li><a href="modificar_psicologico_1.html"><span class="fa fa-edit"></span>Modificar Psicologico</a></li>
                        <li><a href="mostrar_psicologico.html"><span class="fa fa-list-alt"></span>Mostrar Psicologico</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-logout"></span>Ficha Egreso
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_egreso_1.html"><span class="fa fa fa-file"></span>Aregar Egreso</a></li>
                        <li><a href="modificar_egreso_1.html"><span class="fa fa-edit"></span>Modificar Egreso</a></li>
                        <li><a href="mostrar_egreso.html"><span class="fa fa-list-alt"></span>Mostrar Egreso</a></li>
                      </ul>
                    </li>
                  <!--Fin Menu usuario estandar-->
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->