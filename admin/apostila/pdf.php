<?php	

	include "../../functions/conecta_banco.inc";
                
                $nome = $_POST["Nome"];
                $curso = $_POST["Curso"];
	
	
	$resultado_usuario = $con->query("SELECT * FROM t_matricula WHERE Nome_Aluno LIKE '%$nome%' ORDER BY Nome_Aluno");
                
	
                while($row = mysqli_fetch_assoc($resultado_usuario)){
		$html = "<table width='100%' border='0'>";	
	
	$html .= '<tr>';
	$html .= '<td><b>MATRÍCULA:  </b>'.$row['matricula'].'</td>';
	$html .= '<td colspan="2"><b>CURSO:    </b>'.$curso.'</td>';
	$html .= '<td colspan="2"><b>DATA DE INGRESSO:     </b>'.$row['Data_Ingresso'].'</td>';
	$html .= '</tr>';
                 
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td colspan="4"><b>NOME DO ALUNO (A):    </b>'.$row['Nome_Aluno'].'</td>';
                $html .= '</tr>';
               
                 $html .= '<tr>';
	$html .= '<td colspan="2"><b>DATA DE NASCIMENTO:    </b>'.$row['Data_Nascimento'].'</td>';
	$html .= '<td><b>SEXO:    </b>'.$row['Sexo'].'</td>';
                $html .= '<td colspan="2"><b>ESTADO CIVIL:    </b>'.$row['Estado_Civil'].'</td>';
                $html .= '</tr>';
                 
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
		
                 $html .= '<tr>';
                $html .= '<td colspan="2"><b>NOME DO PAI:    </b>'.$row['Nome_Pai'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td colspan="2"><b>NOME DA MÃE:    </b>'.$row['nome_mae'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td colspan="2"><b>ENDEREÇO:    </b>'.$row['Endereco'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td><b>BAIRRO:    </b>'.$row['Bairro'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                $html .= '<tr>';
                $html .= '<td><b>CIDADE:    </b>'.$row['Cidade'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                   $html .= '<tr>';
	$html .= '<td><b>UF:    </b>'.$row['UF'].'</td>';
	$html .= '<td><b>CEP:   </b>'.$row['CEP'].'</td>';
                $html .= '<td><b>PAÍS:    </b>'.$row['País'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                $html .= '<tr>';
	$html .= '<td colspan="2"><b>TELEFONE RESIDENCIAL:    </b>'.$row['Telefone_Residencial'].'</td>';
	$html .= '<td colspan="2"><b>TELEFONE CELULAR:    </b>'.$row['nro_celular'].'</td>';
               
                $html .= '</tr>';
               
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                
                  $html .= '<tr>';
	$html .= '<td colspan="2"><b>NATURALIDADE:    </b>'.$row['Naturalidade'].'</td>';
	$html .= '<td><b>UF:    </b>'.$row['UF2'].'</td>';
                $html .= '</tr>';
                   
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                 $html .= '<tr>';
	$html .= '<td><b>NACIONALIDADE:    </b>'.$row['Nacionalidade'].'</td>';
                $html .= '</tr>';               
                  
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                   $html .= '<tr>';
	$html .= '<td><b>CPF:    </b>'.$row['CPF'].'</td>';
                $html .= '</tr>';              
                      
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                 $html .= '<tr>';
	$html .= '<td><b>IDENTIDADE:    </b>'.$row['Identidade'].'</td>';
	$html .= '<td><b>EMISSOR:    </b>'.$row['Órgão'].'</td>';
                $html .= '<td colspan="2"><b>DATA DE EXPEDIÇÃO:    </b>'.$row['Data_Expedição'].'</td>';
                $html .= '</tr>';               
                   
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                 $html .= '<tr>';
	$html .= '<td><b>TÍTULO DE ELEITOR:    </b>'.$row['Título_Eleitor'].'</td>';
	$html .= '<td><b>ZONA:    </b>'.$row['Zona'].'</td>';
                $html .= '<td><b>SEÇÃO:    </b>'.$row['Seção'].'</td>';
                $html .= '<td colspan="2"><b>DATA DE EMISSÃO:    </b>'.$row['Data_Emissão'].'</td>';
                $html .= '</tr>';   
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                $html .= '<tr>';
	$html .= '<td colspan="2"><b>CERTIDÃO DE NASCIMENTO:    </b>'.$row['Certidão_Nascimento'].'</td>';
	$html .= '<td colspan="2"> <b>CERTIDÃO DE CASAMENTO:    </b>'.$row['Certidão_Casamento'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                
                $html .= '<tr>';
	$html .= '<td><b>CURSO CONCLUÍDO:    </b>'.$row['Curso_Concluído'].'</td>';
	$html .= '<td><b>DATA DA CONCLUSÃO:    </b>'.$row['Data_Conclusão'].'</td>';
                $html .= '</tr>';
                
                $html .= '<tr>';
                $html .= '<td></td>';
                $html .= '</tr>';
                
                $html .= "</table>";
                
	}
	
	
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	include "../../dompdf/autoload.inc.php";

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html(" <style>
                                    body {
  
	margin: 0.5cm 0;
	text-align: justify;
}
                                    td{
                                    line-height: 20px;
                                    font-size:14px;
                                    padding-left: 0;
                                    padding-rigth: 0;
                                   }                                    }
                                    </style>
			<h3 style='text-align: center;'>FICHA DE MATRÍCULA</h3>
                                                <h4 style='text-align: center;'>NÚCLEO MUNICIPAL DE EDUCAÇÃO DE JOVENS E ADULTOS - NEJAD</h4>
                                                <h4 style='text-align: center;'>$curso</h4>
                                                <hr>
			$html 
                                                    <br>
                                               <p style='text-align: center;'>  ____________________________________________________</p>
                                               
                                               <p style='text-align: center;'> ASSINATURA DO(A) ALUNO (A)</p><br>
		");
                //Definindo o tipo de fonte padrão

                $dompdf->set_option('defaultFont', 'Calibri’');
	//Renderizar o html
	$dompdf->render();

	//Exibibir a pÃ¡gina
	$dompdf->stream(
		"$nome.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>