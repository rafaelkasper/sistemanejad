$(document).ready(function () {
    $('a[data-confirm]').click(function (ev) {
        var href = $(this).attr('href');
        if (!$('#confirm-delete').length) {
            $('body').append(
                    '<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">\n\
                                                        <div class="modal-dialog">\n\
                                                        <div class="modal-content">\n\
                                                        <div class="modal-header bg-primary text-white">EXCLUIR MATRÍCULA<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>\n\
                                                        <div class="modal-body">Tem certeza de que deseja excluir o item selecionado?</div>\n\
                                                        <div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal" id="Cancelar">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Apagar</a></div></div></div></div>');
        }
        $('#dataComfirmOK').attr('href', href);
        $('#confirm-delete').modal({show: true});
        return false;

    });
});