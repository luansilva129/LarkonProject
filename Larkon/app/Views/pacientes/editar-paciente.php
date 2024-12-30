<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Editar Paciente")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>
    <div class="wrapper">
        <?php echo view("partials/topbar", array("title" => "Editar Paciente")) ?>
        <?= $this->include('partials/main-nav') ?>

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('pacientes/atualizar/' . $paciente['id']) ?>" method="post">
                                    <div>
                                        <div class="mb-3">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" name="nome" id="nome" class="form-control" value="<?= $paciente['nome'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="logradouro" class="form-label">Endereço / Rua</label>
                                            <input type="text" name="logradouro" id="logradouro" class="form-control" value="<?= $paciente['logradouro'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="bairro" class="form-label">Bairro</label>
                                            <input type="text" name="bairro" id="bairro" class="form-control" value="<?= $paciente['bairro'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="cidade" class="form-label">Cidade</label>
                                            <input type="text" name="cidade" id="cidade" class="form-control" value="<?= $paciente['cidade'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="cep" class="form-label">CEP</label>
                                            <input type="text" name="cep" id="cep" class="form-control" value="<?= $paciente['cep'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="telefone" class="form-label">Telefone</label>
                                            <input type="text" name="telefone" id="telefone" class="form-control" value="<?= $paciente['telefone'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="datanascimento" class="form-label">Data de nascimento</label>
                                            <input type="date" name="datanascimento" id="datanascimento" class="form-control" value="<?= $paciente['datanascimento'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="cpf" class="form-label">CPF</label>
                                            <input type="text" name="cpf" id="cpf" class="form-control" value="<?= $paciente['cpf'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="<?= $paciente['email'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Atualizar</button>
                                            <a href="<?= base_url('listar-pacientes') ?>" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include("partials/footer") ?>
        </div>
    </div>

    <?= $this->include("partials/vendor-scripts") ?>
</body>

</html>
