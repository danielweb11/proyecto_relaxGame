function consumir_api() {

    var endpoint="https://jsonplaceholder.typicode.com/users";

    fetch(endpoint)

    .then(function(response) {
        return response.json();
    })

    .then(function(data) {
        var mayor=data[0];

        for (let i = 0; i < data.length; i++) {
            if (mayor.id<data[i].id){
                mayor=data[i];
            }
            
        }

        document.getElementById("resultado").innerHTML=
             `
                <h2>El usuario con el id mas grande es: ${mayor.name} </h2>
                <h2>Su id es:  ${mayor.id} </h2>
            `
        
    });
    
}