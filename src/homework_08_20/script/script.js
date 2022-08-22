let jsonData = document.getElementById('data').textContent;

const button = document.querySelector('#getDataButton');
const text = document.getElementById('text');
const arrayOfUsers = 10;


async function fetchRandomUser() {
    const response = await fetch(`./json/users.json`);
    if (!response.ok) {
        const message = `An error has occured: ${response.status}`;
        throw new Error(message);
    }
    const users = await response.json();
    return users;
}

button?.addEventListener('click', async (e) => {
    e.preventDefault();
    let userArray = await fetchRandomUser();

    // const mydata = JSON.parse(users);



    // let formData = new FormData();
    // formData.append('json', userArray);
    // formData.append('json', 'test');
    
    // console.log(formData);


    let response = await fetch(window.location.href, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(userArray)
    });

    let result = await response.json();
    console.log(result);
})


