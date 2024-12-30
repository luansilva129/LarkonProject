<!DOCTYPE html>
<html lang="en">

<head>
      <?php echo view("partials/title-meta", array("title" => "Dashboard")) ?>

      <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">


          <?php 

          $session = session();
          $name = $session->get('name');
          
          echo view("partials/topbar", array("title" => "Olá {$name}, seja bem vindo(a)!")) 
          
          ?>
          <?= $this->include("partials/main-nav") ?>

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    <!-- Start here.... -->
                    <div class="row">
                         <div class="col-xxl-5">
                              <div class="row">
                                   <div class="col-12">
                                        <div class="alert alert-primary text-truncate mb-3" role="alert">
                                             Estamos em manutenção, estarei funcionando parcialmente!
                                        </div>
                                   </div> 
                              </div>
                              <!-- end card -->
                         </div>
                         <!-- end col -->
                    </div> <!-- end row -->

               </div>
               <!-- End Container Fluid -->

                <?= $this->include("partials/footer") ?>

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     <?= $this->include("partials/vendor-scripts") ?>

     <!-- Vector Map Js -->
     <script src="/vendor/jsvectormap/jsvectormap.min.js"></script>
     <script src="/vendor/jsvectormap/maps/world-merc.js"></script>
     <script src="/vendor/jsvectormap/maps/world.js"></script>

     <!-- Dashboard Js -->
     <script src="/js/pages/dashboard.js"></script>

</body>

</html>