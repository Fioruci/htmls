const init = () => {
    const inputEmail = document.querySelector('#inp_email');
    const inputSenha = document.querySelector('#inp_pass');
    const inputSubmit = document.querySelector('#but_submit');

    console.log(inputEmail);
    console.log(inputSenha);
    console.log(inputSubmit);

    if (inputSubmit) {
        inputSubmit.addEventListener('click', (event) => {
            event.preventDefault();

            fetch('https://reqres.in/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },

                body: JSON.stringify({
                    email: inputEmail.value,
                    password: inputSenha.value,
                })

            }).then((response) => {
                return response.json();
            }).then((data) => {
                console.log(data);
            })
        })
    }
}

window.onload = init;