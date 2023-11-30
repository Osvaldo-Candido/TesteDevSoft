const form = document.querySelector('form')

form.addEventListener('submit', (e)=> {
    e.preventDefault()
    var formData = new FormData(document.getElementById("formData"));

    fetch("http://localhost/testedevsoft/product/store", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
       // document.getElementById("response").innerHTML = data;
       if(data.includes("Adicionado com sucesso"))
       {
            window.location.href = "http://localhost/testedevsoft/product/index";
       }
      
    })
    .catch(error => console.error("Erro:", error));
})