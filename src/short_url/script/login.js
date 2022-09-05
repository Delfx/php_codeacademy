let getForm = document.getElementById('formLogin');
let loginButton = document.getElementById('loginButton');


loginButton.addEventListener('click', async (e) => {

    e.preventDefault();

    let response = await fetch(window.location.href, {
        method: 'POST',
        body: new FormData(getForm)
      });

      let result = await response.json();

      alert(result);

})


