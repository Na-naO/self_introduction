<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <header>
    <div class="header-container">
      <div class="header-left">
        <!-- <img src="" alt=""> -->
        <h1>Nanae's portfolio</h1>
      </div>
      <div class="header-right">
        <a href="#" class="works">Works</a>
        <a href="#" class="Contact">Contact</a>
      </div>
    </div>
  </header>
  

  <div class="top-wrapper">
    <div class="container">
      <h1>ご覧いただきありがとうございます</h1>
      <p>my portfolio</p>
    </div>
  </div>


  <div class="main-wrapper">

    <div class="concept">
      <h1>Concept</h1>
    </div>

    <div class="skills">
      <div class="skills-heading">
        <h1>Skills</h1>
      </div>
      <div class="skills-wrapper">
        <div class="skills-container">
          <div class="skills-icons">
            <i class="fab fa-html5 size"></i>
            <p></p>
          </div>
          <div class="skills-contents"></div>
        </div>
        <div class="skills-container">
          <div class="skills-icons">
            <i class="fab fa-css3-alt size"></i>
            <p></p>
          </div>
          <div class="skills-contents"></div>
        </div>
        <div class="skills-container">
          <div class="skills-icons">
            <i class="fab fa-php size"></i>
            <p></p>
          </div>
          <div class="skills-contents"></div>
        </div>
        <div class="skills-container">
          <div class="skills-icons">
            <i class="fab fa-wordpress size"></i>
            <p></p>
          </div>
          <div class="skills-contents"></div>
        </div>
        <div class="skills-container">
          <div class="skills-icons">
            <i class="fab fa-shopify size"></i>
            <p></p>
          </div>
          <div class="skills-contents"></div>
        </div>
      </div>
    </div>

    <div class="works">
      <h1>Works</h1>
      <!-- <div class="card">
        <img src="img/pexels-pok-rie-4856367.jpg" alt="" class="card_img">
        <div class="card_content">
          <h1 class="card_title">ポートフォリオ①</h1>
          <p class="card_text">最初のポートフォリオ</p>
        </div>
      </div> -->
    </div>


    <div class="about_me">
     <h1>About me</h1>
    </div>


    <div class="contact">
      <h1>Contact</h1>
      <div class="contact_form">
        <form action="check.php" method="POST">
          <p class="contact_message">
            <span>*</span>
            は入力が必須です
          </p>
          <div class="contact_title">
            御社名
            <input type="text" name="contact_office" class="contact_office_name">
          </div>

          <div class="contact_name">
            お名前
            <input type="text" name="name" style="width:100px" class="contact_name">
          </div>

          <div class="contact_email">
            Eメールアドレス
            <input type="text" name="email" style="width:100px">
          </div>

          <div class="contact_content">
            お問い合わせ内容
            <textarea name="content" cols="40" rows="10"></textarea>
            <p>まずはお気軽にご相談ください！</p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer>
  </footer>


</body>
</html>

