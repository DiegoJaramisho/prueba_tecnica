const url='http://127.0.0.1:9000'

function iniciar() {
    let nombre=document.getElementById('nombre').value
    let puntuacion=0
    if(nombre && nombre.trim()){
        nombre=nombre.trim()
        fetch(`${url}/iniciar`,{
            method: 'post',
            headers: {
                'content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            }, body: JSON.stringify({
                nombre,
                puntuacion
            })
        })
        .then(response => response.json())
        .then( data => {
            localStorage.setItem('user', data)
            localStorage.setItem('ronda', '1')
            window.location.href=`${url}/jugar`
        });
    }

}
let contenedor = document.getElementById('container-card')
let user = localStorage.getItem('user')
if(user){
    window.location.href=`${url}/jugar`
} else {
    contenedor.classList.remove('d-none');
}

