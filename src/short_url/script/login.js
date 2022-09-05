let getForm = document.getElementById('formLogin');
let loginButton = document.getElementById('loginButton');
let errorLabel = document.getElementById('errorLabel');

loginButton.addEventListener('click', async (e) => {

    e.preventDefault();



    let response = await fetch(window.location.href, {
        method: 'POST',
        body: new FormData(getForm)
    });

    let result = await response.json();

    if (result.code == 200) {
        window.location.replace(result.url);
    }

    errorLabel.innerText = 'User Name or Password Incorrect'

})


