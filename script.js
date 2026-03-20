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

particlesJS("particles-js", {
  particles: {
    number: { value: 60 },
    color: { value: "#00bcd4" },
    shape: { type: "circle" },
    opacity: { value: 0.5 },
    size: { value: 3 },
    move: {
      enable: true,
      speed: 2
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#00bcd4",
      opacity: 0.3,
      width: 1
    }
  },
  interactivity: {
    events: {
      onhover: { enable: true, mode: "repulse" }
    }
  }
});