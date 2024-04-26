  const formi = document.querySelectorAll('.form');
  const err = document.getElementById('error');



  formi.forEach(function(form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const action = form.getAttribute('action');
      console.log(action);
      fetch (action ,{
        method: 'POST',
        body: new FormData(form)
      })
      .then(response => response.text())
      .then (response => {err.innerHTML = response} )
    });
  });

