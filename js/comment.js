"use strict";

const API_URL = "api/comentarios";

let commentList = new Vue({
    el: '#comment-list',
    data: {
        comments: [],
    },
    methods: {
        deleteComment: function (e) {
            e.preventDefault();
            deleteCommentAPI(e.target.getAttribute("data-id"));
        }
    }
});

async function getComments() {
    try {

        let id = document.querySelector("#product");
        let url = API_URL + "/producto/" + id.dataset.id;
        let response = await fetch(url);

        if (response.status == 200) {
            let JSONcomments = await response.json();
            commentList.comments = JSONcomments;
        }

    } catch (error) {
        console.log(error);
    }
}

let form = document.querySelector("#formComment");
form.addEventListener('submit', addComment);

async function addComment(e) {
    e.preventDefault();

    let producto = document.querySelector('#product');

    let data = new FormData(form);

    let comment = {
        descripcion: data.get('descripcion'),
        puntaje: parseInt(data.get('puntaje')),
        fecha: getFecha(),
    }

    let url = API_URL + "/" + producto.dataset.id;

    try {
        let response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(comment),
        });

        if (response.ok) {
            let comment = await response.json();
            commentList.comments.push(comment);
        }

    } catch (e) {
        console.log(e);
    }

}

async function deleteCommentAPI(id) {
    try {
        let url = API_URL + "/" + id;
        let response = await fetch(url, {
            "method": "DELETE"
        });
        if (response.status === 200) {
            let index = commentList.comments.findIndex(element => element.id == id);
            if (index > -1) {
                commentList.comments.splice(index, 1);
            }
        }
    } catch (error) {

    }
}

function getFecha() {
    let date = new Date(Date.now());
    let dia = date.getDate();
    let mes = date.getMonth() + 1;
    let anio = date.getFullYear();
    let fecha = anio + "/" + mes + "/" + dia;
    return fecha;
}


function getProductID() {
    let id = document.querySelector("#product");
    return id.dataset.id;
}

let filterForm = document.querySelector("#filterComment");
filterForm.addEventListener('submit', filter);

async function filter(e) {
    e.preventDefault();

    let data = new FormData(filterForm);

    let puntaje = data.get('puntaje');

    let url = API_URL + "/filter" + "?puntaje=" + puntaje + "&id=" + getProductID();

    try {
        let response = await fetch(url);

        if (response.status === 200) {
            let comment = await response.json();
            commentList.comments = comment;
        }
    } catch (e) {
        console.log(e);
    }
}

let orderForm = document.querySelector("#orderComment");
orderForm.addEventListener('submit', order);

async function order(e) {
    e.preventDefault();

    let data = new FormData(orderForm);

    let campo = data.get('campo');
    let orden = data.get('orden');

    console.log(campo);
    console.log(orden);

    let url = API_URL + "/order" + "?id=" + getProductID() + "&campo=" + campo + "&orden=" + orden;

    try {
        let response = await fetch(url);
        /*
        if (response.status === 200) {
            let comment = await response.json();
            commentList.comments = comment;
        }
        */
        if (response.status === 200) {
            let comment = await response.json();
            commentList.comments = comment;
        }
    } catch (e) {
        console.log(e);
    }
}



getComments();
getFecha();