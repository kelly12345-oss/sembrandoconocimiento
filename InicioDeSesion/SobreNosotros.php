<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sembrando Conocimiento</title>
  <meta name="description" content="Aprende sobre el cuidado del medio ambiente de manera divertida.">
  <meta name="keywords" content="medio ambiente, naturaleza, reciclaje">
  <style>
    /* Estilos básicos */
    body {
      font-family: 'Comic Sans MS', cursive;
      background-color: #fff; /* Fondo blanco */
      margin: 0;
      padding: 100px;
      color: #333;
      overflow-x: hidden;
    }
    h1 {
      color: hsl(192, 82.20%, 51.60%);
      text-align: center;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      font-size: 3em;
      margin-bottom: 30px;
    }
    .button {
      background-color: #ff9800;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 20px auto;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .button:hover {
      background-color: #f57c00;
    }
    img {
      max-width: 20%;
      height: auto;
      border-radius: 10px;
      transition: transform 0.3s ease;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    img:hover {
      transform: scale(1.05);
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    .gallery img {
      width: 30%;
      margin: 10px;
      cursor: pointer;
    }
    p, h2, h3 {
      font-size: 1.5em;
      line-height: 1.6;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: hsl(192, 82.20%, 51.60%);
      text-align: center;
    }
    h3 {
      color: #e91e63;
    }
    /* Fondo de burbujas estático */
    body {
      background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"%3E%3Ccircle cx="20" cy="20" r="18" fill="rgba(100,149,237,0.2)"/%3E%3Ccircle cx="10" cy="10" r="8" fill="rgba(255,182,193,0.3)"/%3E%3Ccircle cx="30" cy="30" r="12" fill="rgba(144,238,144,0.2)"/%3E%3C/svg%3E'), linear-gradient(to bottom, #c2e9fb, #a1c4fd);
      background-repeat: repeat, no-repeat;
      background-attachment: fixed;
      background-blend-mode: overlay;
    }
  </style>
</head>
<body>
  <a href="Inicio.php" class="button">Inicio</a>
  <h1>¡Ey, Amigo del Planeta!</h1>

  <div style="display: flex; align-items: center; margin-bottom: 20px;">
    <img src="planetabonitoviejo.jpeg" alt="Planeta con flores" style="width: 30%; margin-right: 20px;">
    <div>
      <h2>¡Queremos contarte un poquito sobre nosotros!</h2>
      <p>Imagina un lugar secreto en internet donde puedes convertirte en un guardián del planeta Tierra. ¡Ese lugar es "Sembrando Conocimiento"! Aquí, aprenderemos sobre la naturaleza de una forma súper divertida, como si fuera un juego gigante.</p>
    </div>
  </div>

  <h2 style="text-align: center;">¿Qué encontrarás aquí?</h2>

  <div style="display: flex; align-items: center; margin-bottom: 20px;">
    <img src="planetatristecontaminado.jpeg" alt="Cambio Climático" style="width: 30%; margin-right: 20px;">
    <div>
      <h3>Cambio Climático</h3>
      <p>¡El Clima Está Cambiando! Descubriremos por qué el clima está un poco loco y cómo podemos ayudar a que vuelva a estar en equilibrio. ¡No te preocupes, no necesitamos capas de superhéroe, solo un poco de conocimiento!</p>
    </div>
  </div>

  <div style="display: flex; align-items: center; margin-bottom: 20px;">
    <img src="bio.png" alt="Biodiversidad" style="width: 30%; margin-right: 20px;">
    <div>
      <h3>Biodiversidad</h3>
      <p>¡Un Mundo Lleno de Criaturas Asombrosas! Exploraremos la selva, el océano y hasta tu jardín para conocer a los animales y plantas más increíbles del mundo. ¡Cada uno tiene un papel importante en nuestro planeta!</p>
    </div>
  </div>

  <div style="display: flex; align-items: center; margin-bottom: 20px;">
    <img src="planetaastral.jpeg" alt="Recursos Naturales" style="width: 30%; margin-right: 20px;">
    <div>
      <h3>Recursos Naturales</h3>
      <p>¡El Tesoro de la Tierra! Aprenderemos sobre el agua, los árboles, el sol y cómo podemos usarlos sin gastarlos todos. ¡Son como el tesoro de la Tierra y debemos cuidarlos!</p>
    </div>
  </div>

  <h2 style="text-align: center;">El Reciclaje es Nuestra Súper Habilidad:</h2>

  <div style="display: flex; align-items: center; margin-bottom: 20px;">
    <img src="niños reciclando.jpeg" alt="Reciclaje" style="width: 30%; margin-right: 20px;">
    <div>
      <h3>¿Por qué Reciclar?</h3>
      <p>Descubriremos por qué separar la basura es como darle una segunda vida a las cosas. ¡Es magia!</p>
    </div>
  </div>

  <div class="gallery">
    <img src="paisaje.png" alt="Paisaje" onclick="alert('¡Qué hermoso paisaje!')" />
    <img src="animales.png" alt="Animal" onclick="alert('¡Este animal es increíble!')" />
    <img src="planetabonitito.jpeg" alt="Personas cuidando el planeta" onclick="alert('¡Juntos podemos hacer la diferencia!')" />
  </div>

  <p>Verás fotos de paisajes increíbles, animales adorables y personas trabajando juntas para cuidar el planeta.</p>

  <h3>Infografías Divertidas</h3>
  <p>Aprenderás datos curiosos sobre el medio ambiente con gráficos súper coloridos y fáciles de entender.</p>

  <h3>Testimonios Visuales</h3>
  <p>Conocerás a personas que están haciendo cosas increíbles por el planeta y te inspirarán a unirte a la aventura.</p>

  <!-- Sección Fundación Jardín Franciscano -->
  <div style="margin-top: 30px; text-align: justify; padding: 20px; border-radius: 10px; background-color: rgba(255, 255, 255, 0.8);">
    <h2 style="text-align: center; color: hsl(192, 82.20%, 51.60%);">¡Descubre la Historia de tu Colegio!</h2>
    <p>¡Hola, chicos y chicas! ¿Sabían que su colegio, la Fundación Jardín Franciscano, tiene una historia súper interesante? ¡Prepárense para un viaje en el tiempo!</p>
    <p>Todo comenzó en octubre de 1957. ¡Hace un montón de años! En ese entonces, un Padre Capuchino tuvo una idea genial: crear un hogar para los niños de Chapellin, un barrio lleno de gente trabajadora y muchas esperanzas. ¡Y así nació nuestro querido Jardín Franciscano!</p>
    <p>Desde el principio, todos los hermanos Capuchinos apoyaron esta increíble misión. ¡Y no estuvieron solos! Un grupo de personas maravillosas se unieron para hacer de este sueño una realidad.</p>
    <p>A lo largo de los años, el Jardín Franciscano ha crecido y se ha hecho aún más especial. Siempre nos hemos preocupado por darles la mejor educación posible. Seguimos los programas del Ministerio del Poder Popular para la Educación, así que siempre están aprendiendo cosas nuevas y emocionantes.</p>
    <p>Lo más importante para nosotros es que cada uno de ustedes se prepare para el futuro. Queremos que descubran sus talentos y los utilicen para construir un país mejor. ¡Así que pónganle muchas ganas al estudio y recuerden que en el Jardín Franciscano siempre tendrán un lugar para crecer y aprender!</p>
  </div>
</body>
</html>
