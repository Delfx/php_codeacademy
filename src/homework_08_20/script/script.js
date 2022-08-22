let jsonData = document.getElementById('data').textContent;

const button = document.querySelector('#getDataButton');
const text = document.getElementById('text');
const downloadLink = document.getElementById('downloadLink');
const numberOfUsersToGet = document.getElementById('numberOfUsersToGet');
const arrayOfUsers = 10;

button?.addEventListener('click', async (e) => {
    e.preventDefault();

    let response = await fetch(window.location.href, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: numberOfUsersToGet.value
    });

    let result = await response.json();

    if (result.message !== undefined) {
        text.innerText = result.message;
    }
    downloadLink?.setAttribute('href', result.fileName);
    downloadLink?.parentElement.classList.remove('d-none');
})


