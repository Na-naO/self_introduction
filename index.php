<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <header>
    
  </header>
  

  <div class="top-wrapper">
    <div class="container">
      <h1>ご覧いただきありがとうございます</h1>
      <p>my portfolio</p>


    </div>
    <!-- <img src="img/pexels-vincent-gerbouin-1168764.jpg" alt="" class="header"> -->
    
  </div>



  <main>
    <div class="concept">
      <h1>Concept</h1>
    </div>

    <div class="service">
      <h1>Service</h1>
    </div>

    <div class="works">
      <h1>Works</h1>
      <div class="card">
        <img src="img/pexels-pok-rie-4856367.jpg" alt="" class="card_img">
        <div class="card_content">
          <h1 class="card_title">ポートフォリオ①</h1>
          <p class="card_text">最初のポートフォリオ</p>
        </div>
      </div>

      <div class="about_me">
        <h1>About me</h1>
      </div>
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
          </div>
        </form>
      </div>
    </div>

  </main>


  <footer>
  </footer>


</body>
</html>

