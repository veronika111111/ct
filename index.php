<?

$connect = new mysqli('localhost', 'root', '', 'ct');
$query=mysqli_query($connect, "SELECT * FROM `User`");

if (isset($_POST['name']) != $_SESSION['name'] ) {

    $name = $_POST["name"];
    $soname = $_POST["soname"];
    $number = $_POST["number"];
    $query=$connect->query("INSERT INTO `User` (`id`,`name`, `soname`, `number` ) 
    VALUES (NULL, '$name', '$soname',  '$number' )");
      header('Location:/');
    
    
    }


?>
<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic tails</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <img src="/img/logo.png">
      <div class="nav">
        <ul>
          <a href="index.php">
            <li>Главная</li>
          </a>
          <a href="#2">
            <li>О нас</li>
          </a>
          <a href="catalog.html">
            <li>Наши услуги</li>
          </a>
          <a href="#1">
            <li>Запись</li>
          </a>
        </ul>
      </div>
      <div class="number">
        <p>+79878816630</p>
      </div>
    </header>

    <div class="home">
      <div class="text">
        <h1>Преображение лапок с любовью и заботой</h1>
        <h2>Доверьте нам уход за вашими любимцами!</h2>
        <form action="#1">
          <button>Записаться</button>
        </form>
      </div>
      <img src="img/home.png">

    </div>

    <div class="about" id="2">
      <img src="img/about.png">
      <div class="text">
        <h3>О нас</h3>
        <p>Наш груминг-салон для собак и кошек - это место, где каждый питомец получает индивидуальный подход и заботу. Наши опытные грумеры обладают профессиональными навыками и любовью к животным, что делает процедуру ухода приятной и комфортной для питомца.
          <br>
          <br>Мы предлагаем широкий спектр услуг, включая стрижку, купание, уход за шерстью, ухаживание за лапками и ушами, обработку когтей и многое другое. Мы используем только качественные средства и инструменты, чтобы ваш питомец выглядел и чувствовал себя замечательно.</p>
      </div>

    </div>

    <div class="service">
      <h3>Услуги</h3>
      <div class="cards">
        <div class="card">
          <img src="img/шпиц.png">
          <div class="text">
            <p>Шпиц
              <br>(комплекс)</p>
            <p>1900 р.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/йорк.png">
          <div class="text">
            <p>Йоркширский терьер
              <br>(комплекс)</p>
            <p>1700 р.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/вычес к.png">
          <div class="text">
            <p>Вычес для короткошёрстных кошек</p>
            <p>800 р.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/вычес д.png">
          <div class="text">
            <p>Вычес для длинношёрстных кошек</p>
            <p>2200 р.</p>
          </div>
        </div>
      </div>
      <a href="catalog.html">
        <button>Узнать больше</button>
      </a>

    </div>

    <div class="cat" id="1">
      <div class="content">
        <form method="POST">
          <div class="input_block">
            <h3>Запишите своего питомца</h3>
            <input type="text" name='name' placeholder="Введите вашу фамилию" required class="tr">
            <br>
            <input type="text" name='soname' placeholder="Введите ваше имя" required class="tr">
            <br>
            <input type="text" name='number' placeholder="Номер телефона" required class="tr">
            <input class="button" type="submit" value="Отправить">
            <p>В течение 10 минут вам поступит звонок для уточнения деталей записи.</p>
          </div>
        </form>
        <img src="img/cat.png">
      </div>
    </div>

    <footer>
      <img src="img/logo footer.png">
      <div class="tx1">
        <a href="index.php">
          <p>Главная</p>
        </a>
        <a href="index.php#2">
          <p>О нас</p>
        </a>
      </div>
      <div class="tx2">
        <a href="catalog.html">
          <p>Наши услуги</p>
        </a>
        <a href="index.php#1">
          <p>Запись</p>
        </a>
      </div>
      <div class="tx3">
        <p>+79878816630</p>
        <p>г. Оренбург ул. Чкалова д. 11</p>
      </div>
      <div class="soc">
        <img src="img/inst.svg">
        <img src="img/vk.svg">
      </div>
    </footer>
  </body>

  </html>