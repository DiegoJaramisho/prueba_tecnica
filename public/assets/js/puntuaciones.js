const url='http://127.0.0.1:9000'

fetch(`${url}/puntuaciones`,{
    method: 'post',
    headers: {
        'content-type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
    }, body:{

    }
})
.then(response => response.json())
.then(data => {
    let html='';
    for (const iterator of data) {
        html+=
        `<tr>
            <td>${iterator.nombre}</td>
            <td>${iterator.puntuacion}</td>
        </tr>`;
    }
    document.getElementById('puntuacion').innerHTML = html
    console.log(data)
});

