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
//=============================== JS PARTICLES SERVICE PAGE===============================
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
//=============================== FIN JS PARTICLES SERVICE PAGE===============================
function procesar_formulario_contacto() {

    // Seguridad básica
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        wp_die('Datos incompletos');
    }

    $nombre = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $mensaje = sanitize_textarea_field($_POST['message']);

    $para = get_option('cloudsoftpanama@gmail.com'); // correo destino (puedes cambiarlo)
    $asunto = "Nuevo mensaje de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido = "Email: $email\n\n";
    $contenido = "Mensaje:\n$mensaje";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    wp_mail($para, $asunto, $contenido, $headers);

    // Redirigir después de enviar
    wp_redirect(home_url('/contacto?enviado=true'));
    exit;
}

add_action('admin_post_nopriv_enviar_formulario', 'procesar_formulario_contacto');
add_action('admin_post_enviar_formulario', 'procesar_formulario_contacto');