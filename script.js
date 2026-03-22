document.addEventListener('DOMContentLoaded', () => {
  const services = document.querySelectorAll('.service');
  let index = 0;

  function showNextService() {
    const current = services[index];

    // Aplicar animación a la carta actual
    current.classList.add('animate');

    // Después de la animación (3s), limpiar y pasar a la siguiente carta
    setTimeout(() => {
      current.classList.remove('animate');
      current.style.opacity = '0';
      current.style.transform = 'translateX(100%)'; // prepara la siguiente entrada

      // siguiente carta
      index = (index + 1) % services.length;
      showNextService(); // recursivo para la siguiente carta
    }, 3000); // debe coincidir con duración de la animación
  }

  showNextService(); // iniciar carrusel
});

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

document.addEventListener('DOMContentLoaded', () => {
  const bg = document.getElementById('wow-bg');
  const canvas = document.createElement('canvas');
  canvas.width = bg.offsetWidth;
  canvas.height = bg.offsetHeight;
  bg.appendChild(canvas);
  const ctx = canvas.getContext('2d');

  const width = canvas.width;
  const height = canvas.height;

  // Partículas energéticas
  const particles = [];
  const numParticles = 120;

  for (let i = 0; i < numParticles; i++) {
    particles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      vx: (Math.random() - 0.5) * 1.5,
      vy: (Math.random() - 0.5) * 1.5,
      size: Math.random() * 2 + 1,
      color: Math.random() < 0.5 ? '#ff7f00' : '#00ffff'
    });
  }

  // Rayos estilo relámpago
  const bolts = [];



  function draw() {
    ctx.clearRect(0, 0, width, height);

    // Dibujar partículas
    particles.forEach(p => {
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
      ctx.fillStyle = p.color;
      ctx.shadowColor = p.color;
      ctx.shadowBlur = 6;
      ctx.fill();

      // Movimiento
      p.x += p.vx;
      p.y += p.vy;

      // Reaparece al cruzar límites
      if (p.x < 0) p.x = width;
      if (p.x > width) p.x = 0;
      if (p.y < 0) p.y = height;
      if (p.y > height) p.y = 0;
    });

    // Dibujar rayos
    bolts.forEach((bolt, idx) => {
      ctx.beginPath();
      ctx.moveTo(bolt.x, bolt.y);
      bolt.segments.forEach(seg => ctx.lineTo(seg.x, seg.y));
      ctx.strokeStyle = 'rgba(255,127,0,0.9)';
      ctx.lineWidth = bolt.thickness;
      ctx.shadowColor = '#ff7f00';
      ctx.shadowBlur = 12;
      ctx.stroke();

      bolt.x += bolt.speed;
      bolt.segments.forEach(seg => seg.x += bolt.speed);

      if (bolt.segments[bolt.segments.length - 1].x > width + 50) {
        bolts.splice(idx, 1);
      }
    });

  
    requestAnimationFrame(draw);
  }

  draw();
});