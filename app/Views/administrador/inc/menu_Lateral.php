<!-- MENU LATERAL -->
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-rebel"></i> <span>Avicola "CAYOJA"</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Aiden</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="background-image: url('<?php echo base_url(); ?>uploads/clientes/granja2.jpg'); background-size: cover; background-position: center;" > 
              <div class="menu_section">             
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>index.php/dashboard/index"><i class="fa fa-home"></i> Inicio </a>
                  </li>
                  <li><a><i class="fa fa-gears"></i> Administracion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>index.php/dashboard/listausuario">Administrador</a></li>
                      <!-- <li><a href="<?php echo base_url();?>index.php/dashboard/listaempleado">Empleados</a></li>                      -->
                    </ul>
                  </li>                              
                  <li><a><i class="fa fa-shopping-cart"></i> Compras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="index.html">Compra nueva</a></li>
                      <li><a href="index.html">Lista de productos comprados</a></li>                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="index.html">Venta nueva</a></li>
                    <li><a href="index.html">Lista de ventas realizadas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cubes"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Nuevo producto</a></li>
                      <li><a href="index.html">Lista de productos en almacen</a></li>
                      <li><a href="index.html">Lista de productos por categoria</a></li>                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>index.php/dashboard/listacliente">Lista de Clientes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-truck"></i> Proveedores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Crear proveedor</a></li>
                      <li><a href="index.html">Lista de proveedores</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-print"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Reporte de compras</a></li>
                      <li><a href="index.html">Reporte de ventas</a></li>                    
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <!--  
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              -->
              <a id="22" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <script>
document.getElementById('22').addEventListener('click', function(event) {
    event.preventDefault(); // Evitar que el enlace redireccione

    Swal.fire({
        title: '¿Estás seguro?',
        text: "¿Deseas cerrar la sesión?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, cerrar sesión',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Aquí rediriges a la página de cierre de sesión en CodeIgniter
            window.location.href = '<?php echo base_url();?>index.php/usuarios/logout';
        }
    });
});
</script>
        <!-- FIN DE MENU LATERAL -->