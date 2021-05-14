
$(document).ready(function(){
    
    //Agregar mas input file con su respetivo nombre e id
    var contenedor = $('.files');
    $('#btnDocumentos').on('click',function(e){
        e.preventDefault();

        var nombre = 'documentos-subir' + ($('#files').find('input').length + 1);
        var caja = '<input type="file" name="' + nombre + '" id="' + nombre + '" ><br>'
        contenedor.append(caja);
    })
})