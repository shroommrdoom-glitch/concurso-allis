<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Dama de Negro - Halloween 2025</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Crimson+Text:ital,wght@0,400;0,700;1,400&family=Creepster&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #000000;
      color: #f0f0f0;
      font-family: 'Crimson Text', serif;
      overflow-x: hidden;
      position: relative;
    }

    /* Efecto de niebla oscura animada */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: 
        radial-gradient(ellipse at 30% 20%, rgba(100, 0, 100, 0.15) 0%, transparent 50%),
        radial-gradient(ellipse at 70% 80%, rgba(0, 0, 50, 0.15) 0%, transparent 50%),
        radial-gradient(ellipse at 50% 50%, rgba(20, 20, 20, 0.3) 0%, transparent 60%);
      pointer-events: none;
      z-index: 1;
      animation: mistMove 25s ease-in-out infinite;
    }

    @keyframes mistMove {
      0%, 100% { opacity: 0.6; transform: scale(1) rotate(0deg); }
      50% { opacity: 0.9; transform: scale(1.2) rotate(5deg); }
    }

    /* Partículas fantasmales */
    .ghost-particle {
      position: fixed;
      pointer-events: none;
      z-index: 0;
      opacity: 0.4;
      font-size: 35px;
      animation: ghostFloat 20s infinite ease-in-out;
      filter: blur(1px);
    }

    @keyframes ghostFloat {
      0%, 100% { transform: translateY(0) translateX(0) rotate(0deg); opacity: 0.3; }
      25% { transform: translateY(-80px) translateX(30px) rotate(10deg); opacity: 0.5; }
      50% { transform: translateY(-120px) translateX(-20px) rotate(-10deg); opacity: 0.4; }
      75% { transform: translateY(-60px) translateX(40px) rotate(15deg); opacity: 0.6; }
    }

    .container {
      position: relative;
      z-index: 2;
      max-width: 1200px;
      margin: 50px auto;
      background: linear-gradient(145deg, rgba(10, 0, 20, 0.98), rgba(30, 0, 40, 0.98));
      border: 3px solid #3d0066;
      border-radius: 25px;
      box-shadow: 
        0 0 60px rgba(100, 0, 150, 0.8),
        inset 0 0 40px rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(15px);
      overflow: hidden;
    }

    /* Header elegante y oscuro */
    header {
      background: linear-gradient(180deg, #0a0015 0%, #1a0030 100%);
      padding: 70px 40px;
      text-align: center;
      position: relative;
      border-bottom: 4px solid #660099;
      overflow: hidden;
    }

    header::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 0;
      width: 100%;
      height: 30px;
      background: repeating-linear-gradient(
        90deg,
        transparent,
        transparent 45px,
        #3d0066 45px,
        #3d0066 55px
      );
      filter: drop-shadow(0 8px 5px rgba(100, 0, 150, 0.6));
    }

    .candle-icon {
      font-size: 65px;
      animation: candleFlicker 2.5s infinite;
      display: inline-block;
      margin: 0 25px;
      filter: drop-shadow(0 0 20px #9933ff);
    }

    @keyframes candleFlicker {
      0%, 100% { opacity: 1; text-shadow: 0 0 25px #9933ff, 0 0 40px #cc66ff; }
      50% { opacity: 0.85; text-shadow: 0 0 35px #9933ff, 0 0 60px #cc66ff; }
    }

    h1 {
      font-family: 'Cinzel', serif;
      font-size: 4em;
      color: #ffffff;
      text-shadow: 
        0 0 30px #9933ff,
        0 0 60px #cc66ff,
        4px 4px 15px rgba(0, 0, 0, 0.9);
      letter-spacing: 8px;
      margin: 25px 0;
      animation: titleGlow 4s ease-in-out infinite;
      font-weight: 700;
    }

    @keyframes titleGlow {
      0%, 100% { text-shadow: 0 0 30px #9933ff, 0 0 60px #cc66ff, 4px 4px 15px rgba(0, 0, 0, 0.9); }
      50% { text-shadow: 0 0 45px #9933ff, 0 0 90px #cc66ff, 4px 4px 15px rgba(0, 0, 0, 0.9); }
    }

    .subtitle {
      font-family: 'Creepster', cursive;
      font-size: 1.8em;
      color: #cc99ff;
      text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.9);
      letter-spacing: 4px;
      margin: 10px 0;
    }

    .content {
      padding: 60px 50px;
    }

    .section {
      background: linear-gradient(135deg, rgba(50, 0, 80, 0.4), rgba(30, 0, 50, 0.4));
      margin-bottom: 35px;
      padding: 40px;
      border-radius: 20px;
      border: 3px solid #660099;
      position: relative;
      transition: all 0.5s ease;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.6);
      animation: sectionFadeIn 1s ease-out forwards;
      opacity: 0;
    }

    .section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(153, 51, 255, 0.1), transparent);
      opacity: 0;
      transition: opacity 0.5s ease;
      border-radius: 20px;
      pointer-events: none;
    }

    .section:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 50px rgba(153, 51, 255, 0.5);
      border-color: #9933ff;
    }

    .section:hover::before {
      opacity: 1;
    }

    h2 {
      font-family: 'Cinzel', serif;
      font-size: 2.5em;
      color: #cc99ff;
      margin-bottom: 25px;
      text-transform: uppercase;
      letter-spacing: 4px;
      text-shadow: 2px 2px 12px rgba(153, 51, 255, 0.9);
      border-bottom: 3px solid rgba(153, 51, 255, 0.4);
      padding-bottom: 15px;
    }

    .quote {
      font-style: italic;
      font-size: 1.6em;
      color: #e6ccff;
      text-align: center;
      margin: 30px 0;
      padding: 25px;
      background: rgba(100, 0, 150, 0.2);
      border-left: 5px solid #9933ff;
      border-radius: 10px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
      position: relative;
    }

    .quote::before {
      content: '"';
      font-size: 4em;
      position: absolute;
      left: 15px;
      top: -10px;
      color: #9933ff;
      opacity: 0.5;
    }

    .info {
      line-height: 2;
      font-size: 1.2em;
    }

    .info p {
      margin: 15px 0;
      color: #e0e0e0;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
    }

    .info strong {
      color: #cc99ff;
      font-size: 1.15em;
      text-shadow: 0 0 10px rgba(153, 51, 255, 0.5);
    }

    /* Galería de imágenes mejorada */
    .image-gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin: 40px 0;
    }

    .image-container {
      position: relative;
      overflow: hidden;
      border-radius: 20px;
      box-shadow: 0 10px 35px rgba(153, 51, 255, 0.5);
      transition: all 0.5s ease;
      border: 4px solid #660099;
      background: #000;
    }

    .image-container:hover {
      transform: scale(1.08) translateY(-10px);
      box-shadow: 0 20px 50px rgba(153, 51, 255, 0.8);
      border-color: #9933ff;
    }

    .image-container img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      display: block;
      transition: all 0.5s ease;
      filter: brightness(0.9) contrast(1.1);
    }

    .image-container:hover img {
      transform: scale(1.15);
      filter: brightness(1) contrast(1.2);
    }

    .image-label {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.95));
      padding: 25px;
      color: #cc99ff;
      font-size: 1.5em;
      text-align: center;
      font-family: 'Cinzel', serif;
      text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.9);
      letter-spacing: 2px;
      transform: translateY(100%);
      transition: transform 0.4s ease;
    }

    .image-container:hover .image-label {
      transform: translateY(0);
    }

    .character-info {
      background: linear-gradient(135deg, rgba(100, 0, 150, 0.3), rgba(50, 0, 100, 0.3));
      padding: 30px;
      border-radius: 15px;
      margin: 25px 0;
      border: 2px solid #660099;
      box-shadow: 
        0 8px 25px rgba(0, 0, 0, 0.6),
        inset 0 2px 15px rgba(100, 0, 150, 0.3);
    }

    @keyframes sectionFadeIn {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .section:nth-child(1) { animation-delay: 0.1s; }
    .section:nth-child(2) { animation-delay: 0.2s; }
    .section:nth-child(3) { animation-delay: 0.3s; }
    .section:nth-child(4) { animation-delay: 0.4s; }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.2em;
        letter-spacing: 3px;
      }

      .container {
        margin: 20px;
        border-radius: 20px;
      }

      .content {
        padding: 40px 25px;
      }

      .section {
        padding: 25px;
      }

      h2 {
        font-size: 1.8em;
      }

      .candle-icon {
        font-size: 45px;
      }

      .image-gallery {
        grid-template-columns: 1fr;
        gap: 25px;
      }

      .image-container img {
        height: 350px;
      }
    }
  </style>
</head>
<body>
  <!-- Partículas fantasmales -->
  <div class="ghost-particle" style="top: 15%; left: 8%; animation-delay: 0s;">👻</div>
  <div class="ghost-particle" style="top: 25%; right: 12%; animation-delay: 3s;">🕯️</div>
  <div class="ghost-particle" style="top: 65%; left: 7%; animation-delay: 6s;">💀</div>
  <div class="ghost-particle" style="bottom: 25%; right: 15%; animation-delay: 9s;">🌑</div>
  <div class="ghost-particle" style="top: 75%; left: 85%; animation-delay: 4s;">⚰️</div>

  <div class="container">
    <header>
      <span class="candle-icon">🕯️</span>
      <h1>LA DAMA DE NEGRO</h1>
      <span class="candle-icon">🕯️</span>
      <p class="subtitle">~ JENNET HUMFRYE ~</p>
      <p class="subtitle" style="font-size: 1.3em; margin-top: 15px;">Halloween 2025</p>
    </header>

         <div class="content">
            <div class="section">
                <h2>👤 PARTICIPANTE</h2>
                <p><span class="highlight">Nombre Completo:</span>Allisson Marcelino Martinez</p>
                <p><span class="highlight">Grupo:</span> 501</p>
            </div>

    <div class="content">
      <div class="section">
        <h2>🎭 El Personaje</h2>
        <div class="quote">
          "Donde aparece la Dama de Negro... la tragedia la sigue."
        </div>
        
        <div class="info">
          <p><strong>Nombre:</strong> Jennet Humfrye</p>
          <p><strong>Conocida como:</strong> La Dama de Negro / The Woman in Black</p>
          <p><strong>Obra Original:</strong> Novela de Susan Hill (1983) y adaptación teatral</p>
          <p><strong>Rol:</strong> Espíritu vengativo y presagio de muerte</p>
        </div>
      </div>

      <div class="section">
        <h2>📸 Galería del Personaje</h2>
        <div class="image-gallery">
          <div class="image-container">
            <img src="dama.JPEG" alt="La Dama de Negro - Personaje">
            <div class="image-label">👤 PERSONAJE</div>
          </div>
          
          <div class="image-container">
            <img src="disf.JPEG" alt="La Dama de Negro - Disfraz">
            <div class="image-label">🎭 DISFRAZ</div>
          </div>
        </div>
      </div>

      <div class="section">
        <h2>📖 Historia del Personaje</h2>
        
        <div class="character-info">
          <p><strong>Jennet Humfrye</strong> es el espíritu central de una de las historias de terror gótico más inquietantes de la literatura moderna. Su tragedia comienza en vida, cuando fue obligada por las convenciones sociales de la época victoriana a <strong>dar en adopción a su hijo</strong>, considerado ilegítimo por la sociedad.</p>
          
          <p style="margin-top: 20px;">El destino fue cruel: el niño murió trágicamente en las ciénagas de Eel Marsh House, ahogándose en el lodo mientras Jennet observaba impotente desde la ventana, incapaz de salvarlo. Este momento de <strong>horror absoluto y desesperación maternal</strong> la marcó para siempre.</p>
          
          <p style="margin-top: 20px;">Tras su propia muerte, Jennet regresa como un <strong>espectro vestido completamente de negro</strong>, un símbolo de luto eterno. Su espíritu atormentado vaga por los alrededores de Eel Marsh House, y su mera aparición anuncia una terrible maldición: <strong>cada vez que alguien la ve, un niño del pueblo muere</strong>.</p>
          
          <p style="margin-top: 20px;">Esta venganza no es aleatoria: es el castigo perpetuo por la pérdida de su propio hijo, una forma retorcida de hacer que otros experimenten el mismo dolor desgarrador que ella sufrió. La Dama de Negro se ha convertido en la <strong>personificación del duelo sin consuelo y la venganza maternal</strong>.</p>
        </div>
      </div>

      <div class="section">
        <h2>🎨 Temas y Significado</h2>
        
        <div class="info">
          <p><strong>🖤 El Dolor y la Pérdida:</strong> La historia explora el sufrimiento maternal más profundo y cómo el dolor no procesado puede transformarse en algo oscuro y destructivo.</p>
          
          <p><strong>⚖️ Venganza Sobrenatural:</strong> Jennet representa la venganza más allá de la muerte, donde el rencor trasciende lo físico y se convierte en una maldición eterna.</p>
          
          <p><strong>👶 Maternidad Negada:</strong> La separación forzada de una madre y su hijo por prejuicios sociales, y las consecuencias devastadoras de esta injusticia.</p>
          
          <p><strong>👻 Terror Gótico Victoriano:</strong> La historia se enmarca en el género gótico clásico con mansiones aisladas, pantanos brumosos y espíritus vengativos que habitan entre la vida y la muerte.</p>
          
          <p><strong>🌫️ Lo Sobrenatural:</strong> La frontera difusa entre el mundo de los vivos y los muertos, donde el pasado nunca descansa y los fantasmas literalmente cobran venganza.</p>
        </div>
      </div>

      <div class="section">
        <h2>🎬 Impacto Cultural</h2>
        
        <div class="info">
          <p>Desde su publicación en 1983, <strong>"La Dama de Negro"</strong> se ha convertido en un clásico del terror gótico moderno. La novela de Susan Hill ha sido adaptada múltiples veces:</p>
          
          <p style="margin-top: 15px;">🎭 <strong>Teatro:</strong> La adaptación teatral de Stephen Mallatratt (1987) se convirtió en una de las obras más exitosas y longevas del West End londinense, aterrorizando al público durante más de 30 años.</p>
          
          <p style="margin-top: 15px;">🎥 <strong>Cine:</strong> La película de 2012 protagonizada por Daniel Radcliffe revitalizó la historia para una nueva generación, demostrando que el terror psicológico sigue siendo tan efectivo como siempre.</p>
          
          <p style="margin-top: 15px;">📚 <strong>Literatura:</strong> La novela es considerada una obra maestra del terror atmosférico, donde lo que <em>no se ve</em> es más aterrador que lo explícito.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>