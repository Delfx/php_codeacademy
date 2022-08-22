let jsonData = document.getElementById('data').textContent;

const button = document.querySelector('#getDataButton');
const text = document.getElementById('text');
const downloadLink = document.getElementById('downloadLink');
const arrayOfUsers = 10;

button?.addEventListener('click', async (e) => {
    e.preventDefault();
    let response = await fetch(window.location.href, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        // body: JSON.stringify(userArray)
    });

    let result = await response.json();

    downloadLink?.setAttribute('href', result.file)
    downloadLink?.parentElement.classList.remove('d-none');
})


