let inputUrl = document.getElementById('inputUrl');
let buttonUrl = document.getElementById('buttonUrl');
let messageEl = document.getElementById('messageEl');


buttonUrl.addEventListener('click', async (e) => {

    try {
        let response = await fetch(window.location.href, {
            method: 'POST',
            body: inputUrl.value,
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
            }
        });

        let result = await response.json();
        showMessage(result.message, result.response);
        
    } catch (error) {
        showMessage(error.message, 'danger');
    }
});

const showMessage = (message, type = 'success') => {
    messageEl.innerHTML = `
        <div class="alert alert-${type}">
        <a  href="${message}" target="_blank">${message}</a>
        </div>
    `;
};

