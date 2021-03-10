<?php
namespace scripts;

class htmlGenerator
{
    public static $listaItens = array();
   
    public function gerarQuadro(array $param) {
       
    }
}
/*?>
 <h2 style="margin-left:40%">LOJA</h2><br/><br/><br/>
 <a href="#">Adicionar</a>
 <br>
 <br>
 <table border="1" width="100%">
 <tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Descrição</th>
 <th>Preço</th>
 <th>Qtd</th>
 <th>Categoria</th>
 </tr>
 <?php
 $sql = $pdo->prepare("SELECT * FROM produtos");
 $sql->execute();
 foreach($sql->fetchAll() as $item) {
 ?>
 <tr>
 <td><?php echo $item['id']?></td>
 <td><?php echo $item['nome']?></td>
 <td><?php echo $item['descricao']?></td>
 <td><?php echo $item['preco']?></td>
 <td><?php echo $item['estoque']?></td>
 <td><?php echo $item['categoria']?></td>
 </tr>
 <?php
 }
 ?>
 </table>
 <?php
 */
