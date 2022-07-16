<?php
require_once '../db/conexao.php';


        $sql = 'SELECT bilhete.idBilhete,cliente.nome,cliente.apelido, bilhete.numero,bilhete.estado,bilhete.fpagamento,bilhete.horaCompra,sessao.data,sessao.horaInicio, sessao.preco FROM bilhete INNER JOIN cliente ON bilhete.idCliente=cliente.idCliente INNER JOIN sessao ON bilhete.idSessao=sessao.id WHERE bilhete.tipo="reservado"';
            $resultado = mysqli_query($mysqli,$sql);
            $linha = mysqli_fetch_row($resultado);
            $num = mysqli_affected_rows($mysqli);
            
        if($num >=1){
            $line="";
            $qtd =1;
            do{
            $line.='
                <tr>
                <td></td>
                <td>'.$qtd.'</td>
                <td>'.$linha[1]." ".$linha[2].'</td>
                <td>'.$linha[3].'</td>
                <td>'.$linha[5].'</td>
                <td>'.date("d-m-Y",strtotime($linha[7])).'</td>
                <td>'.$linha[8]." ---> ".$linha[9].'</td>
                <td>'.$linha[4].'</td>
                <td>'.date("d-m-Y H:m",strtotime($linha[6])).'</td>
            <td>
                <button class="action print btn btn-outline-success" onclick="actualizarBr('.$linha[0].')"><i class="fa fa-check"style="color: green"></i></button>
            </td>
            </tr>';
          $qtd++; 
          }while($linha = mysqli_fetch_row($resultado));
          echo $line;
          }
          