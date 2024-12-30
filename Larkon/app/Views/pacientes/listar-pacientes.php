<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Listagem de pacientes")) ?>

    <!-- Gridjs Plugin css -->
    <link href="/vendor/gridjs/theme/mermaid.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include("partials/head-css") ?>

    <style>
          .gridjs-container .gridjs-td {
               text-align: center; 
               vertical-align: middle;
               }

          .gridjs-container .gridjs-th {
          text-align: center; 
          }

    </style>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <?php echo view("partials/topbar", array("title" => "Listagem de pacientes")) ?>

          <?php if (session()->getFlashdata('success')): ?>
               <div class="alert alert-success" style="text-align:center">
                    <?= session()->getFlashdata('success'); ?>
               </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('error')): ?>
               <div class="alert alert-danger" style="text-align:center">
                    <?= session()->getFlashdata('error'); ?>
               </div>
          <?php endif; ?>

        <?= $this->include('partials/main-nav') ?>

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->

        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container">
               <div class="row">
                    <div class="col-xl-10">
                         <div class="card">
                              <div class="card-body">
                                   <div class="py-2">
                                        <div id="table-search"></div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>               
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

    <!-- Gridjs Plugin js -->
    <script src="/vendor/gridjs/gridjs.umd.js"></script>

    <script>
          // Pega os dados do servidor injetados pelo PHP
          const pacientesData = <?= json_encode($pacientes) ?>;

          // Configura a tabela Grid.js
          if (document.getElementById("table-search"))
          new gridjs.Grid({
               columns: [
                    { name: "Nome", width: '25%' },
                    { name: "Data de Nascimento", width: '10%' },
                    { name: "Email", width: '30%' },
                    { name: "Telefone", width: '15%' },
                    {
                         name: "Ação",
                         width: '20%',
                         formatter: (cell, row) => {
                              return gridjs.html(`
                              <button class="btn btn-primary btn-sm" onclick="editarPaciente(${row.cells[4].data})">Editar</button>
                              <button class="btn btn-dark btn-sm" onclick="excluirPaciente(${row.cells[4].data})">Excluir</button>
                              `);
                         }
                    }
               ],
               pagination: {
                    limit: 10
               },
               search: true,
               data: pacientesData // Usa os dados do PHP
          }).render(document.getElementById("table-search"));


          function editarPaciente(id) {
               window.location.href = `/pacientes/editar/${id}`;
          }

          function excluirPaciente(id) {
               if (confirm("Tem certeza que deseja excluir este paciente?")) {
                    window.location.href = `/pacientes/excluir/${id}`;
               }
          }
     </script>

</body>

</html>