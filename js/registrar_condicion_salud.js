let seleccion = document.getElementById('seleccion');

seleccion.addEventListener('change',(e)=>{
    let  valor = e.target.value;
    if(valor==4){
        let condicion = document.getElementById('condicion');
        condicion.setAttribute("type","text");
    }
    else{
        let condicion = document.getElementById('condicion');
        condicion.setAttribute("type","hidden");
    }
})


let formulario = document.getElementById('formulario_envio');
formulario.addEventListener('submit',(e)=>{
    let condicion = document.getElementById('condicion').value;
    let cedula = document.getElementById('cedula').value;
    e.preventDefault();
    let valorSelect = seleccion.value;
    if(valorSelect=="4"){
        valorSelect=condicion;
    }
    let html =  `
    <tr>
        <td>${cedula}</td>
        <td>${valorSelect}</td>
        <td>Eliminar</td>
    </tr>`;
    let classtr = document.getElementById('classtr');
    classtr.innerHTML += html;
    formulario.reset();

})