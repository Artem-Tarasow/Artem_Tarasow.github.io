<?php
$name = "Ваше Имя";
$email = "email@example.com";
$phone = "+7 123 456 7890";
$linkedin = "#";
$about = "Краткое описание себя и своих профессиональных навыков.";
$skills = ["Навык 1", "Навык 2", "Навык 3"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Презентация - <?=htmlspecialchars($name)?></title>
<style>
  html, body {
    margin: 0; padding: 0;
    height: 100%;
    width: 100%;
    background-color: #1a1a28;
    color: #ddd;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: flex-start;
  }
  .container {
    box-sizing: border-box;
    width: 100%;
    max-width: 1200px;
    min-height: 100vh;
    background-color: #27293d;
    padding: 40px 50px;
    border-radius: 14px;
    box-shadow: 0 0 40px 20px rgba(124, 58, 237, 0.15);
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
  }
  header {
    flex: 1 1 300px;
    max-width: 300px;
  }
  /* Градиент и выравнивание по левому краю, без свечения */
  header h1,
  .about-section h2,
  .skills-section h2 {
    background:
      radial-gradient(circle at left bottom,
        #7c3aed 15%,
        rgba(124, 58, 237, 0.1) 40%,
        rgba(124, 58, 237, 0) 75%),
      linear-gradient(to top right, transparent 70%, #27293d 100%);
    color: white;
    border-radius: 8px;
    padding: 15px 20px;
    margin: 0 0 20px 0;
    text-align: left; /* Выравнивание текста по левому краю */
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  .photo {
    background-color: #3b3c56;
    border-radius: 8px;
    overflow: hidden;
    width: 100%;
    padding-top: 100%;
    position: relative;
    margin-bottom: 25px;
  }
  .photo img {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .contact p {
    margin: 5px 0;
    font-size: 1em;
  }
  .about-skill-container {
    display: flex;
    flex-direction: column;
    gap: 24px;
    flex: 2 1 400px;
  }
  .content {
    flex: 3 1 800px;
    display: flex;
    flex-direction: column;
    gap: 30px;
    width: 100%;
  }
  section p, section ul {
    margin: 10px 0 0 0;
    line-height: 1.6;
  }
  ul {
    padding-left: 20px;
  }
  ul li {
    margin-bottom: 8px;
  }
  .skills-section {
    flex: none;
  }
  .achievements {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px 10px;
    margin-top: 10px;
  }
  .achievement-photo {
    background-color: #3b3c56;
    max-width: 120px;
    aspect-ratio: 3 / 4;
    border-radius: 8px;
    overflow: hidden;
  }
  .achievement-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  a {
    color: #c4b5fd;
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
  }
  button {
    background-color: #7c3aed;
    border: none;
    color: white;
    padding: 10px 18px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1em;
    align-self: flex-start;
  }
  button:hover {
    background-color: #5a21a5;
  }
</style>
</head>
<body>

<div class="container">

  <header>
    <h1><?=htmlspecialchars($name)?></h1>
    <div class="photo">
      <!-- Личная фотография -->
      <img src="path_to_your_photo.jpg" alt="Личное фото" />
    </div>
    <div class="contact">
      <p>Email: <a href="mailto:<?=htmlspecialchars($email)?>"><?=htmlspecialchars($email)?></a></p>
      <p>Телефон: <?=htmlspecialchars($phone)?></p>
      <p>LinkedIn: <a href="<?=htmlspecialchars($linkedin)?>" target="_blank">Ссылка</a></p>
    </div>
  </header>

  <div class="about-skill-container">
    <section class="about-section">
      <h2>Обо мне</h2>
      <p><?=htmlspecialchars($about) ?></p>
    </section>

    <section class="skills-section">
      <h2>Навыки</h2>
      <ul>
        <?php foreach ($skills as $skill): ?>
        <li><?=htmlspecialchars($skill) ?></li>
        <?php endforeach; ?>
      </ul>
    </section>
  </div>

  <div class="content">
    <section>
      <h2>Достижения</h2>
      <div class="achievements">
        <!-- 6 фото дипломов -->
        <div class="achievement-photo"><img src="diploma1.jpg" alt="Диплом 1" /></div>
        <div class="achievement-photo"><img src="diploma2.jpg" alt="Диплом 2" /></div>
        <div class="achievement-photo"><img src="diploma3.jpg" alt="Диплом 3" /></div>
        <div class="achievement-photo"><img src="diploma4.jpg" alt="Диплом 4" /></div>
        <div class="achievement-photo"><img src="diploma5.jpg" alt="Диплом 5" /></div>
        <div class="achievement-photo"><img src="diploma6.jpg" alt="Диплом 6" /></div>
      </div>
    </section>

    <button onclick="showGreeting()">Нажмите для приветствия</button>
  </div>

</div>

<script>
  function showGreeting() {
    alert("Привет! Спасибо за посещение моего сайта.");
  }
</script>

</body>
</html>
