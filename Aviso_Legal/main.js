    const nav = document.querySelector('.nav');

    window.addEventListener('scroll', function() {
        nav.classList.toggle('active', window.scrollY > 0);
    });

    /*Redireccion de t1*/ 
    
    document.querySelector('a[href="#t1"]').addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado de seguir el enlace
      
        var seccionDestino = document.getElementById('t1');
        var distanciaDesdeArriba = seccionDestino.offsetTop; // Obtiene la distancia desde la parte superior de la página hasta la sección destino
      
        window.scrollTo({
          top: distanciaDesdeArriba-200,
          behavior: 'smooth' // Desplaza suavemente a la posición personalizada
        });
      });

    /*Redireccion de t2*/ 
    document.querySelector('a[href="#t2"]').addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado de seguir el enlace
      
        var seccionDestino = document.getElementById('t2');
        var distanciaDesdeArriba = seccionDestino.offsetTop; // Obtiene la distancia desde la parte superior de la página hasta la sección destino
      
        window.scrollTo({
          top: distanciaDesdeArriba -200,
          behavior: 'smooth' // Desplaza suavemente a la posición personalizada
        });
      });

    /*Redireccion de t3*/ 
    document.querySelector('a[href="#t3"]').addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado de seguir el enlace
      
        var seccionDestino = document.getElementById('t3');
        var distanciaDesdeArriba = seccionDestino.offsetTop; // Obtiene la distancia desde la parte superior de la página hasta la sección destino
      
        window.scrollTo({
          top: distanciaDesdeArriba-200,
          behavior: 'smooth' // Desplaza suavemente a la posición personalizada
        });
      });

    /*Redireccion de t5*/ 
    document.querySelector('a[href="#t5"]').addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado de seguir el enlace
      
        var seccionDestino = document.getElementById('t5');
        var distanciaDesdeArriba = seccionDestino.offsetTop; // Obtiene la distancia desde la parte superior de la página hasta la sección destino
      
        window.scrollTo({
          top: distanciaDesdeArriba-200,
          behavior: 'smooth' // Desplaza suavemente a la posición personalizada
        });
      });