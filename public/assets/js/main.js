
const url='http://127.0.0.1:9000'

function cargarRonda() {
    ronda = parseInt(ronda)
    fetch(`${url}/jugar/${ronda}`,{
        method: 'post',
        headers: {
            'content-type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        }, body: {
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        const respuestas = shuffle(data.respuestas);
        console.log(respuestas)
        document.getElementById('dificultad').innerHTML='Dificultad: '+ data.categoria.dificultad
        document.getElementById('nombre').innerHTML='Dificultad: '+ data.categoria.dificultad
        document.getElementById('categoria').innerHTML='Categoria: '+ data.categoria.nombre
        document.getElementById('pregunta').innerHTML= data.pregunta.nombre

        let html = '';
        for (const iterator of respuestas) {
            html +=
            `<button class="list-group-item list-group-item-action" data-bs-toggle="list" role="tab" aria-controls="list-home" onclick="correcta(${iterator.id})">
                ${iterator.respuesta}
            </button>`;
        }
        document.getElementById('list-tab').innerHTML = html
    });

}

function shuffle(a) {
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}

function correcta(id) {
    let padre = document.getElementById('list-tab').childNodes;
    for (const iterator of padre) {
        iterator.disabled = true;
    }
    validarCorrecta(id)
}

function validarCorrecta(id) {
    fetch(`${url}/validar`,{
        method: 'post',
        headers: {
            'content-type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        }, body: JSON.stringify({
            id
        })
    })
    .then(response => response.json())
    .then(data => {
        if(data){
            if (ronda<5) {
                ronda++;
                cargarRonda();
            }else{
                // gano
                puntaje(true)
                console.log('a')
            }
        } else {
            // perdio
            localStorage.clear();
            window.location.href=`${url}/game_over`
        }
    });
}

function puntaje(condicion) {
    let nombre = localStorage.getItem('user')
    let puntuacion;
    if(condicion){
        puntuacion=100;
    }else{
        puntuacion=(ronda-1)*20
    }
    fetch(`${url}/puntaje`,{
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
    .then(data => {
        localStorage.clear();
        window.location.href=`${url}/puntuacion`
    });
}

let user = localStorage.getItem('user')
let ronda = localStorage.getItem('ronda')
if(user){
    if (ronda) {
        if (!isNaN(ronda)) {
            ronda = parseInt(ronda)
            if (ronda > 0 && ronda <= 5 ) {
                cargarRonda();
                // window.location.href=`${url}/jugar/${ronda}`
            } else {
                localStorage.setItem('ronda', '1')
                window.location.href=`${url}/jugar`
            }
        } else {
            localStorage.setItem('ronda', '1')
            window.location.href=`${url}/jugar`
        }
    } else {
        localStorage.setItem('ronda', '1')
        window.location.href=`${url}/jugar`
    }
} else {
        window.location.href='/'
}
