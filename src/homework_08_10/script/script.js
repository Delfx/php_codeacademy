const btn = document.querySelector('#submit');
const form = document.querySelector('#registration');
const mesg = document.querySelector('#message');
const mesgImgerror = document.querySelector('#messageImgError');


let user = {};
let lang = [];


btn?.addEventListener('click', async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    let response = await fetch(window.location.href, {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json',
            'Location': 'views/text.phtml'
        },
    });

    const result = await response.json();
    console.log(window.location.href + 'upload/');
    console.log(result);

    if (result.verification) {
        mesgImgerror.classList.add('d-none');
        mesg.setAttribute('href', 'upload/' + result.href);
        mesg.textContent = result.message;
        mesg.classList.remove('d-none');
        mesg.classList.remove('fillAllFields');
    }else{
        mesgImgerror.textContent = result.imgError;
        mesgImgerror.classList.remove('d-none');
        mesg.textContent = result.message;
        mesg.classList.add('fillAllFields')
        mesg.classList.remove('d-none');
    }

});

