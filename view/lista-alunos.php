<?php include __DIR__ . '/header.php'; ?>
<div class="container">
    <div class="col-12">
        <div class="jumbotron text-center alunos-title">
            <h1>
                <?=$titulo;?>
            </h1>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <a href="#" class="btn btn-primary" style="margin-bottom: 10px;">
                    <span class="oi oi-plus"></span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cód.</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Curso</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone(s)</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-center">1</th>
                        <td><?= $alunos[0]->getNome(); ?></td>
                        <td><?= $alunos[0]->getCpf(); ?></td>
                        <td><?= $alunos[0]->getCurso(); ?></td>
                        <td><?= $alunos[0]->getEmail(); ?></td>
                        <td><?= $alunos[0]->getTelefones()[0]->getNumero(); ?></td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                <span class="oi oi-pencil" title="Editar" aria-hidden="true"></span>
                            </a>
                            <a href="#" class="btn btn-danger">
                                <span class="oi oi-trash"></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include __DIR__ . '/footer.php'; ?>