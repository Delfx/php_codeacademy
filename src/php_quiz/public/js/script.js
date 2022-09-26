const buttonSubmit = document.querySelector('.submitButton');
const form = document.getElementById('form');

console.log(form);
// console.log('labas');

buttonSubmit.addEventListener("click", async (e) => {
  e.preventDefault();
  const formData = new FormData(form);

  // formData.append('x', 'hello');

  const rawResponse = await fetch(window.location.href, {

    method: 'POST',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: formData
  });

  const content = await rawResponse.json();
  // console.log(content);
})