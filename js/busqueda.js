form.addEventListener('submit', function(e) {
  e.preventDefault();
  const busqueda = form.querySelector('input[name="busqueda"]').value;
  const action = form.getAttribute('action');
  
  fetch(action, {
    method: 'POST',
    body: new URLSearchParams({ busqueda: busqueda })
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Hubo un problema al enviar la solicitud.');
    }
    // Retorna el texto de la respuesta
    return response.text();
  })
  .then(data => {
    // Actualiza el contenido HTML del tbody con los datos recibidos
    tbody.innerHTML = data;
  })
  .catch(error => {
    console.error('Error:', error);
  });
});