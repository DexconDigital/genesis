var numeroPaginas = cantidadPaginas(totalpagina, totalInmuebles);
console.log(numeroPaginas, totalpagina, totalInmuebles);

var contenido_paginas = 'Pagina ' + page + ' de ' + numeroPaginas + '';
$('#numero_pagina').append(contenido_paginas);

if (page == 1) {
    $('#ant').css('display', 'none');
} else if (page == numeroPaginas) {
    $('#next').css('display', 'none');
}
function paginador(actual) {
    var reemplazar = '/pagina/' + page;
    url = url.replace(reemplazar, "");
    if (actual == 1) {
        page--;
        location.href = url + '/pagina/' + page;
    }
    if (actual == 2) {
        page++;
        location.href = url + '/pagina/' + page;
    }
}