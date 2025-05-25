 const links = document.querySelectorAll('.box-icons a');
  links.forEach(link => {
    link.onclick = () => {
      links.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
    };
  });
  