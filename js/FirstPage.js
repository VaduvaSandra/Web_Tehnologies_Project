// Definim o functie numita "parallax" care primeste ca argument un eveniment "e"
function parallax(e) {
  // Selectam toate elementele care au clasa "object" si le stocam intr-un array "parallaxItems"
    const parallaxItems = document.querySelectorAll(".object");
  // Pentru fiecare element din array-ul "parallaxItems"
    parallaxItems.forEach(function (item) {
       // Stocam valoarea atributului "data-value" al fiecarui element in variabila "parallaxFactor"
      const parallaxFactor = item.getAttribute("data-value");
      // Calculam pozitia pe axa x in functie de pozitia cursorului si factorul de parallax
      const x = (e.clientX * parallaxFactor) / 250;
      // Calculam pozitia pe axa y in functie de pozitia cursorului si factorul de parallax
      const y = (e.clientY * parallaxFactor) / 250;
       // Setam stilul elementului curent sa fie translatat pe axa x si y
      item.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
  }