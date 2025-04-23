 // Observador de elementos na tela
 const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  });


  document.querySelectorAll('.from-left').forEach(el => observer.observe(el));