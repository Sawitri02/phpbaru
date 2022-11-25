<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" href="stylesheet.css">

    <link rel="stylesheet2" href="responsive.css">

  </head>
  <body>
    <div class="header">
      <div class="header-logo">Progate</div>
      <div class="header-list">
        <ul>
          <li>Tentang</li>
          <li>Pelajaran</li>
          <li>Hubungi Kami</li>
        </ul>
      </div>
    </div>

    <div class="top-wrapper">
        <div class="container">
            <h1>belajar coding</h1>
            <h1>belajar menjadi lebih kreatif.</h1>
            <p>progate adalah platform online untuk belajar coding.</p>
            <p>kami menawarkan lingkungan program yang lebih lengkap untuk mempermudah</p>
            <div class="btn-wrapper">
                <a href="#" class="btn signup">Daftar dengan Email</a>
                <p>atau</p>
                <a href="#" class="btn facebook"> <span class="fa fa-facebook"></span> Daftar dengan facebook</a>
                <a href="#" class="btn twitter"> <span class="fa fa-twitter"></span> Daftar dengan teitter</a>
            </div>
        </div>
    </div>



    <div class="main">
      <div class="copy-container">
        <h1>HELLO WORLD<span>.</span></h1>
        <h2>Ayo belajar coding</h2>
      </div>
      
      <div class="lesson">
        <h3 class="lesson-title">Pelajaran</h3>
        <div class="lesson-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg">
          <p>HTML & CSS</p>
        </div>
        <div class="lesson-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
          <p>PHP</p>
        </div>
        <div class="lesson-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
          <p>Ruby</p>
        </div>
        <div class="lesson-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
          <p>Swift</p>
        </div>
      </div>
      
      <div class="contact-form">
        <h3 class="section-title">Hubungi kami</h3>
        <p>Email (Wajib Diisi)</p>
        
        <form action="welcome.php" method="post">
          First Name: <input type="text" name="firstname"><br>
          Last Name: <input type="text" name="lastname"><br>
          E-mail: <input type="text" name="email"><br>
          <input type="submit">
        </form> 
      </div>
    </div>

    <div class="footer">
      <div class="footer-logo">Progate</div>
      <div class="footer-list">
        <ul>
          <li>Tentang</li>
          <li>Karier</li>
          <li>Hubungi Kami</li>
        </ul>
      </div>
    </div>
  </body>
</html>