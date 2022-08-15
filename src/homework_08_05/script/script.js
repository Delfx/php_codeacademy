const btn = document.querySelector('#submit');
const form = document.querySelector('#registration');


let user = {};
let lang = [];


btn?.addEventListener('click', async (e) => {
    e.preventDefault();


    const formData = new FormData(form);


    let response = await fetch(window.location.href, {
        method: 'POST',
        body: user,
        headers: {
            'Accept': 'application/json',
            'Location': 'views/text.phtml'
        },
    });

    const result = await response.json();

    console.log(result.message);

});

function getDataFromUser() {
    const formData = new FormData(form);
    const values = [...formData.entries()];

    for (let i = 0, len = values.length; i < len; i++) {
        if (values[i][0] === 'lang[]') {
            lang.push(values[i][1]);
        }
    }

    values.forEach(element => {
        if (element[0] == 'lang[]') {
            user['lang'] = lang;
        } else {
            user[element[0]] = element[1];
        }

        delete user['lang[]'];
    });

    // console.log(JSON.parse(user));

    return values;
}

// console.log(getDataFromUser());

const subscribe = async () => {
    let data = JSON.parse(getDataFromUser());

    try {
        let response = await fetch(window.location.href, {
            method: 'POST',
            body: data,
            headers: {
                'Accept': 'application/json',
            },
        });

        const result = await response.json();

        alert(result);

    } catch (error) {
        alert(error);
        console.log(error);
    }
};

