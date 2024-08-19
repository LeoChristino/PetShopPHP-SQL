<?php
require_once 'php_action/conexao_bd.php';

// cabeçalho
require_once 'includes/header.php';

require_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Animais</h3>
        <table class="striped">
            <thead>
                <tr>
					<th>Cod</th>
                    <th>Nome</th>
                    <th>Especie</th>
                    <th>Sexo</th>
                    <th>Raca</th>
                    <th>cor</th>
                    <th>Nascimento</th>
                </tr>                
            </thead>
            
            <tbody>
                <?php 
                    $sql = "SELECT * FROM tbAnimal";
                    $resultado = mysqli_query($connection, $sql);

                    if (!$resultado) {
                        die("Erro ao executar query: " . mysqli_error($connection));
                    }

                    while($dados = mysqli_fetch_array($resultado)){
                ?>                
                    <tr>
                        <td><?php echo $dados['codAnimal']; ?></td>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['especie']; ?></td>
                        <td><?php echo $dados['sexo']; ?></td>
                        <td><?php echo $dados['raca']; ?></td>
                        <td><?php echo $dados['cor']; ?></td>
                        <td><?php echo $dados['nascimento']; ?></td>

                        <td><a href="alterar.php?id=<?php echo $dados['codAnimal']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                        <td><a href="#modal<?php echo $dados['codAnimal']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure in Materializecss -->
                          <div id="modal<?php echo $dados['codAnimal']; ?>" class="modal">
                            <div class="modal-content">
                              <h4>Aviso.</h4>
                              <p>Deseja excluir o cliente?</p>
                            </div>
                            <div class="modal-footer">
                              

                              <form action="php_action/excluir_cliente.php" method="POST">
                                <input type="hidden" name="codAnimal" value="<?php echo $dados['codAnimal']; ?>">

                                <button type="submit" name="btn-excluir" class="btn red">Excluir</button>

                                <a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

                              </form>
                            </div>
                          </div>

                    </tr>
                    
                <?php }

                ?>
                
            </tbody>

            </table>
            <br>
            <a href="cadastrar.php" class="btn">Adicionar Cliente</a>
        </div>        
    </div>

<?php 
    // rodapé
    require_once 'includes/footer.php';
?>