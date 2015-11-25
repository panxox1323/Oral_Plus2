<aside class="main-sidebar">

    <section class="sidebar">

        <ul class="sidebar-menu ajustes2">
            <li class="header text-uppercase text-green"><h3>Menu</h3></li>

            <li class="{{ Active::pattern('admin')}} prueba icono"><a href="/admin"><span class="icon-home"></span> Home</a></li>
            <li class="{{ Active::pattern('admin/users') }} prueba treeview">
                <a href="#">
                    <span class="icon-users"> Usuarios</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.users.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Usuarios</a></li>
                    <li class="icono"><a href="{!! route('admin.users.create') !!}"><span class="icon-add-user"></span> Crear Usuario</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/especialistas') }} prueba treeview">
                <a href="#">
                    <span class="icon-health"> Especialistas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.especialistas.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Especialistas</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/insumos')}} prueba treeview">
                <a href="#">
                    <span class="icon-lab"> Insumos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.insumos.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Insumos</a></li>
                    <li class="icono {{ Active::pattern('admin/insumos/create') }}"><a href="{!! route('admin.insumos.create') !!}"><span class="icon-circle-with-plus"></span> Crear Insumo</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/tratamiento') }} prueba treeview">
                <a href="#">
                    <span class="icon-injection"> Tratamientos</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.tratamiento.index') !!}"><span class="icon-chevron-thin-right"></span> Ir a Tratamientos</a></li>
                    <li class="icono"><a href="{!! route('admin.tratamiento.create') !!}"><span class="icon-circle-with-plus"></span> Crear Tratamiento</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/facturas') }} prueba treeview">
                <a href="#" class="icono">
                    <span class="icon-clipboard"> Facturas</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.factura.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Facturas</a></li>
                    <li class="icono"><a href="{!! route('admin.factura.create') !!}"><span class="icon-circle-with-plus"></span> Ingresar factura</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/proveedores') }} prueba treeview">
                <a href="#">
                    <span class="icon-user-tie"> Proveedores</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.proveedores.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Proveedores</a></li>
                    <li class="icono"><a href="{!! route('admin.proveedores.create') !!}"><span class="icon-circle-with-plus"></span> Crear Proveedor</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/especialidades') }} prueba treeview">
                <a href="#">
                    <span class="icon-briefcase"> Especialidades</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.especialidades.index')!!}"><span class="icon-chevron-thin-right"></span> Ir a Especialidades</a></li>
                    <li class="icono"><a href="{!! route('admin.especialidades.create') !!}"><span class="icon-circle-with-plus"></span> Crear Especialidad</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/agendar') }} prueba treeview">
                <a href="#">
                    <span class="icon-calendar"> Agendar</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="/admin/agendar/{{ Carbon\Carbon::now()->toDateString()}}"><span class="icon-chevron-thin-right"></span> Agendar Cita</a></li>
                    <li class="icono"><a href="{!! route('admin.intervencion.index') !!}"><span class="icon-chevron-thin-right"></span> Agregar Intervenci&oacute;n</a></li>
                </ul>
            </li>
            <li class="{{ Active::pattern('admin/historial') }} prueba treeview">
                <a href="#">
                    <span class="icon-archive"> Configuraciones</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="icono"><a href="{!! route('admin.configurar.index') !!}"><span class="icon-chevron-thin-right"></span> Configurar Horas</a></li>
                    <li class="icono"><a href="{!! route('admin.historial.create') !!}"><span class="icon-circle-with-plus"></span> Ingresar Historial</a></li>
                </ul>
            </li>
            
            <li class="{{ Active::pattern('admin/pdf') }} prueba treeview">
                <a href="#">
                    <span class="icon-clipboard2"> Reportes</span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="#">
                            <span class="icon-user"> Usuarios</span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="icono"><a href="{!! route('admin.pdf-usuarios.index') !!}"><span class="icon-eye"></span> Ver Documento</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#">
                            <span class="icon-user-tie"> Proveedores</span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="icono"><a href="{!! route('admin.pdf-proveedores.index') !!}"><span class="icon-eye"></span> Ver Documento</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#">
                            <span class="icon-lab"> Insumos</span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="icono"><a href="{!! route('admin.pdf-insumos.index') !!}" target="_blank"><span class="icon-eye"></span> Ver Documento</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
