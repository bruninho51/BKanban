$('#to-do').sortable({
    connectWith: [
        '#in-progress',
        '#done'
    ],
    cursor: 'move',
    start: function (event, ui) {
        ui.item.css('background', 'red');
    },
    stop: function (event, ui) {
        ui.item.css('background', 'blue');
    }
});
$('#in-progress').sortable({
    connectWith: [
        '#to-do',
        '#done'
    ],
    cursor: 'move',
    //event: objeto de evento | ui: para resgatar o item
    start: function (event, ui) {
        ui.item.css('background', 'red');
    },
    stop: function (event, ui) {
        ui.item.css('background', 'blue');
    }
});
$('#done').sortable({
    connectWith: [
        '#to-do',
        '#in-progress'
    ],
    cursor: 'move',
    //event: objeto de evento | ui: para resgatar o item
    start: function (event, ui) {
        ui.item.css('background', 'red');
    },
    stop: function (event, ui) {
        ui.item.css('background', 'blue');
    }
});

function criarTarefa () {
    $('#to-do').append('<li>' + $('#tarefa').val() + '<i class="fa fa-close" onclick="excluirTarefa(this)"></i></li>');
}
function excluirTarefa(e) {
    $(e).parent().remove();
}