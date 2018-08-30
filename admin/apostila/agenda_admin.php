
<?php
include '../../functions/valida_sessao_admin.php';
include "../../functions/conecta_banco.inc";

$resultado_events = $con->query("SELECT id, title, color, start, end FROM events");
$row = mysqli_fetch_array($resultado_events);
$id = $row ['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset='utf-8'/>
        <title>Agenda</title>
     <link rel="stylesheet" type="text/css" href="../../css/navbar.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href='../../css/bootstrap.min.css' rel='stylesheet'>
        <link href='../../css/fullcalendar.min.css' rel='stylesheet' />
        <link href='../../css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link href='../../css/personalizado_admin.css' rel='stylesheet' />

        <script src='../../js/jquery.min.js'></script>
        <script src='../../js/bootstrap.min.js'></script>
        <script src='../../js/moment.min.js'></script>
        <script src='../../js/fullcalendar.min.js'></script>
        <script src='../../locale/pt-br.js'></script>
        <script>
            $(document).ready(function () {
                $('#calendar').fullCalendar({

                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: Date(),
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    eventClick: function (event) {
                        $("#excluir").attr("href", "proc_del_evento.php?id=" + event.id);
                        $('#visualizar #id').text(event.id);
                        $('#visualizar #id').val(event.id);
                        $('#visualizar #title').text(event.title);
                        $('#visualizar #title').val(event.title);
                        $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
                        $('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
                        $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
                        $('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
                        $('#visualizar #color').val(event.color);
                        $('#visualizar').modal('show');
                        return false;

                    },

                    selectable: true,
                    selectHelper: true,
                    select: function (start, end) {
                        $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
                        $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
                        $('#cadastrar').modal('show');
                    },
                    events: [
<?php
while ($row_events = mysqli_fetch_array($resultado_events)) {
    ?>
                            {
                                id: '<?php echo $row_events['id']; ?>',
                                title: '<?php echo $row_events['title']; ?>',
                                start: '<?php echo $row_events['start']; ?>',
                                end: '<?php echo $row_events['end']; ?>',
                                color: '<?php echo $row_events['color']; ?>',
                            },<?php
}
?>
                    ]
                });
            });

            //Mascara para o campo data e hora
            function DataHora(evento, objeto) {
                var keypress = (window.event) ? event.keyCode : evento.which;
                campo = eval(objeto);
                if (campo.value == '00/00/0000 00:00:00') {
                    campo.value = ""
                }

                caracteres = '0123456789';
                separacao1 = '/';
                separacao2 = ' ';
                separacao3 = ':';
                conjunto1 = 2;
                conjunto2 = 5;
                conjunto3 = 10;
                conjunto4 = 13;
                conjunto5 = 16;
                if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length < (19)) {
                    if (campo.value.length == conjunto1)
                        campo.value = campo.value + separacao1;
                    else if (campo.value.length == conjunto2)
                        campo.value = campo.value + separacao1;
                    else if (campo.value.length == conjunto3)
                        campo.value = campo.value + separacao2;
                    else if (campo.value.length == conjunto4)
                        campo.value = campo.value + separacao3;
                    else if (campo.value.length == conjunto5)
                        campo.value = campo.value + separacao3;
                } else {
                    event.returnValue = false;
                }
            }
        </script>
    </head>
     <header>

        <nav class="topnav" id="myTopnav">

            <a href="../admin.php">HOME</a>
            <a href="agenda_admin.php">AGENDA</a>
            <a href="registrar_nota_apostila.php">LANÇAR NOTAS</a>
            <a href="consultar_notas_apostila.php">CONSULTAR NOTAS</a>
            <a href="lancar_orientacao.php">LANÇAR ORIENTAÇÃO</a>
            <a href="consultar_orientacao.php">CONSULTAR ORIENTAÇÃO</a>
            <a style="float:right"href=""><?php echo "Usuário: " . $nome ?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <a style="float:right" href="../../functions/logout.php">SAIR&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"></a>
        </nav>
    </header>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Agenda</h1>
            </div>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>

            <div id='calendar'></div>
        </div>

        <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Dados do Evento</h4>
                    </div>
                    <div class="modal-body">
                        <div class="visualizar">
                            <dl class="dl-horizontal">

                                <dt>Titulo do Evento</dt>
                                <dd id="title"></dd>
                                <dt>Inicio do Evento</dt>
                                <dd id="start"></dd>
                                <dt>Fim do Evento</dt>
                                <dd id="end"></dd>
                            </dl>
                            <button class="btn btn-canc-vis btn-warning">Editar</button>

                            <a class="btn btn-danger" id="excluir" type="submit" href="proc_del_evento.php?id=<?php echo $id; ?>" method="GET">Excluir evento</a>
                        </div>
                        <div class="form">

                            <form class="form-horizontal" method="POST" action="proc_edit_evento.php">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Titulo do Evento">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                                    <div class="col-sm-10">
                                        <select name="color" class="form-control" id="color">
                                            <option value="">Selecione</option>			
                                            <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                            <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                            <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                            <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                                            <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                            <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                            <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                            <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>										
                                            <option style="color:#228B22;" value="#228B22">Verde</option>
                                            <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="id" id="id">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-canc-edit btn-primary">Cancelar</button>
                                        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Cadastrar Evento</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="proc_cad_evento.php">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="Titulo do Evento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Selecione</option>			
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>										
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('.btn-canc-vis').on("click", function () {
                $('.form').slideToggle();
                $('.visualizar').slideToggle();
            });
            $('.btn-canc-edit').on("click", function () {
                $('.visualizar').slideToggle();
                $('.form').slideToggle();
            });
        </script>
         <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>