<?php include __DIR__ . '/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron text-center professores-title">
                <h1>Professores</h1>
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
                            <th scope="col">Titulação</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone(s)</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-center">1</th>
                            <td>José Carlos Silva</td>
                            <td>123.456.789-10</td>
                            <td>Administração</td>
                            <td>josecarlos@teste.com.br</td>
                            <td>(11) 96633-6622</td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    <span class="oi oi-pencil" title="Editar" aria-hidden="true"></span>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <span class="oi oi-trash"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-center">2</th>
                            <td>Maria Joana Oliveira</td>
                            <td>222.222.222-22</td>
                            <td>Pedagogia</td>
                            <td>mariajoana@teste.com.br</td>
                            <td>(11) 96633-6623</td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    <span class="oi oi-pencil" title="Editar" aria-hidden="true"></span>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <span class="oi oi-trash"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-center">3</th>
                            <td>Lucas Amarílio das Flores</td>
                            <td>333.333.333-33</td>
                            <td>Corte e Costura</td>
                            <td>lucasdasflores@teste.com.br</td>
                            <td>(11) 96633-6625</td>
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
</div>    
<?php include __DIR__ . '/footer.php'; ?>