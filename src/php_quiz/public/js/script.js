const buttonSubmit = document.querySelector('.submitButton');

buttonSubmit.addEventListener("click", async (e) => {
    e.preventDefault()

    const location = window.location.hostname;
    const settings = {
        method: 'POST',
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
        }
    };
    try {
        const fetchResponse = await fetch(window.location.href, settings);
        const data = await fetchResponse.json();
        return data;
    } catch (e) {
        return e;
    }    
})