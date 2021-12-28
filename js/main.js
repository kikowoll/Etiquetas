var texto = $('#buscador')

texto.on('keyup', buscar)

function buscar() {
    var valor = texto.val(),
        caja = $('.caja')
    
    if(valor.length > 0) {
        caja.hide()
        var cajon = caja.children('.card'),
            listo = cajon.children('.card-header')
        listo.find('h6:contains("'+valor+'")').parents(cajon).show()
        console.log(listo);
    } else {
        caja.show()
    }
}

$('#buscador').on('click', buscar)