<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/8159a6c191.js" crossorigin="anonymous"></script>

  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/mail-favicon.png">
  <link rel="stylesheet" href="../css/main.css">
  <title>Contact Me</title>
</head>

<body>
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait"></div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item">
          <a href="../index.html" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="../about.html" class="nav-link">
            About Me
          </a>
        </li>
        <li class="nav-item">
          <a href="../work.html" class="nav-link">
            My Work
          </a>
        </li>
        <li class="nav-item current">
          <a href="../contact.php" class="nav-link">
            Contact Me
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main id="contact">
    <h1 class="lg-heading">
      Contact
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">This is how you can reach me!</h2>
      <div class="contact-form-wrapper">
        <form class="contact-form" action="contactform.php" method="post">
          <h2>
            Send me an
            <span class="text-secondary">E-mail</span>
          </h2>
          <p>
            <label>First Name</label>
            <input type="text" name="first-name">
          </p>
          <p>
            <label>Last Name</label>
            <input type="text" name="last-name">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email">
          </p>
          <p>
            <label>Message</label>
            <textarea name="message" rows="5"></textarea>
          </p>
          <p class="submit">
            <button type="submit" name="submit">Submit</button>
          </p>
        </form>
      </div>
  </main>

  <footer id="main-footer">
    Copyright &copy; 2020
  </footer>

  <script src="../js/main.js"></script>
</body>

</html>