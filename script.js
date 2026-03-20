const services = document.querySelectorAll('.service');
let index = 0;

function showNextService() {
  services[index].classList.remove('active');
  services[index].classList.add('exit');

  index = (index + 1) % services.length;

  services[index].classList.add('active');

  setTimeout(() => {
    services.forEach(s => s.classList.remove('exit'));
  }, 600);
}

// autoplay
setInterval(showNextService, 3000);