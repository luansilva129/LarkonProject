<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "Cadastro de pacientes")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "Cadastro de Paciente")) ?>
          <?= $this->include('partials/main-nav') ?>

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

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container">


                    <div class="row">
                         <div class="col-xl-9">
                              <div class="card">
                                   <div class="card-body">
                                        <form action="<?= base_url('pacientes/save') ?>" method="post">
                                             <div class="mb-3">
                                                  <label for="simpleinput" class="form-label">Nome</label>
                                                  <input type="text" name="nome" id="nome"class="form-control">
                                             </div>

                                             <div class="mb-3">
                                                  <label for="simpleinput" class="form-label">Endereço / Rua</label>
                                                  <input type="text" name="logradouro" id="logradouro" class="form-control">
                                             </div>

                                             <div class="mb-3">
                                                  <label for="example-select" class="form-label">Bairro</label>
                                                  <select class="form-select" name="bairro" id="bairro">
                                                       <option></option>
                                                       <option>Natal</option>
                                                       <option>Parnamirim</option>
                                                  </select>
                                             </div>

                                             <div class="mb-3">
                                                  <label for="example-select" class="form-label">Cidade</label>
                                                  <select class="form-select" name="cidade" id="cidade">
                                                       <option></option>
                                                       <option>Teste</option>
                                                       <option>Nova Parnamirim</option>
                                                  </select>
                                             </div>

                                             <div class="mb-3">
                                                  <label for="simpleinput" class="form-label">CEP</label>
                                                  <input type="text" id="cep" name="cep" class="form-control" data-toggle="input-mask" data-mask-format="00000-000">
                                             </div>

                                             <div class="mb-3">
                                                  <label for="simpleinput" class="form-label">Telefone</label>
                                                  <input type="text" id="telefone" name="telefone" class="form-control" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                             </div>
                                             
                                             <div class="mb-3">
                                                  <label for="simpleinput" class="form-label">Data de nascimento</label>
                                                  <input type="text" id="basic-datepicker" name="datanascimento" class="form-control">
                                             </div>

                                             <div class="mb-3">
                                                  <label for="simpleinput" class="form-label">CPF</label>
                                                  <input type="text" id="cpf" name="cpf" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000-00">
                                             </div>
                                             
                                             <div class="mb-3">
                                                  <label for="example-email" class="form-label">Email</label>
                                                  <input type="email" id="email" name="email" class="form-control">
                                             </div>

                                             <div class="mb-3">
                                                  <button type="button" class="btn btn-light" onclick="limparFormulario()" >Limpar</button>
                                                  <button type="submit" class="btn btn-primary">Salvar</button>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </div>
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

     <!-- Flatepicker Demo Js -->
     <script src="/js/components/form-flatepicker.js"></script>

     <script>
         function limparFormulario() {
             document.getElementById('pacienteForm').reset();
         }
     </script>

</body>

</html>