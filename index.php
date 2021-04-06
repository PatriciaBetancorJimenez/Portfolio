<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled" />
    <link rel="icon" href="img/code-solid.svg" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/161339b2f2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <title>PBJ - Portfolio</title>
  </head>
  <body>
    <nav class="nav">
      <a href="#home" class="nav__logo-link">
        <p class="nav__logo-text">pbj</p>
      </a>
      <ul class="nav__list">
        <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
        <li class="nav__item">
          <a href="#project" class="nav__link">projects</a>
        </li>
        <li class="nav__item">
          <a href="#skills" class="nav__link">skills</a>
        </li>
        <li class="nav__item">
          <a href="#courses" class="nav__link">Courses</a>
        </li>
        <li class="nav__item">
          <a href="#contact" class="nav__link">contact</a>
        </li>
      </ul>

      <div class="nav__burger">
        <div class="nav__burger-line"></div>
        <div class="nav__burger-line"></div>
        <div class="nav__burger-line"></div>
      </div>
    </nav>

    <div class="header" id="home">
    <?php echo $alert; ?>
      <div class="header__overlay"></div>
      <video
        class="header__video"
        autoplay
        playsinline
        muted
        loop
        preload
        src="img/video.mp4"
      ></video>
      <div class="header__text">
        <h1 class="header__h1">Welcome to Patricia's Website</h1>
        <hr class="header__hr" />
        <h2 class="header__h2">Web Developer and Designer</h2>

        <a href="#project" class="header__button">See projects</a>
      </div>
    </div>

    <div class="main">
      <section class="project" id="project">
        <div class="project__upper">
          <div class="project__left">
            <h4 class="project__header">projects</h4>
          </div>

          <div class="project__right">
            <div class="project__item">
              <h3 class="project__title">Cake Universum</h3>
              <figure class="project__figure">
                <div class="project__overlay project__overlay--1">
                  <div class="project__buttons">
                    <a
                      href="https://github.com/PatriciaBetancorJimenez/cake-universum"
                      target="_blank"
                      class="project__button project__button--1"
                      >Code</a
                    >
                    <a
                      href="https://patriciabetancorjimenez.github.io/cake-universum/"
                      target="_blank"
                      class="project__button project__button--1"
                      >Web</a
                    >
                  </div>
                </div>
                <img src="img/desktop1.png" alt="" class="project__img" />
                <img
                  src="img/mobile1.png"
                  alt=""
                  class="project__img-responsive"
                />
              </figure>

              <div class="project__description">
                <h4 class="project__h4">Description:</h4>
                <p class="project__text">
                  Cake Universum's layout has been built with customized
                  Bootstrap. Javascript has been used to create the image
                  gallery. Forms are validated with the Bootstrap form
                  validation plugin. Styles are added with Sass. Web 100%
                  responsive.
                </p>

                <h4 class="project__h4">Technologies used:</h4>
                <div class="project__technologies project__technologies--1">
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">Sass</span></i
                  >
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">Bootstrap</span></i
                  >
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">JS</span></i
                  >
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">CSS</span></i
                  >
                </div>
              </div>
            </div>
            <div class="project__item">
              <h3 class="project__title">Aqua Travels</h3>
              <figure class="project__figure">
                <div class="project__overlay project__overlay--2">
                  <div class="project__buttons">
                    <a
                      href="https://github.com/PatriciaBetancorJimenez/aqua-travels"
                      target="_blank"
                      class="project__button project__button--2"
                      >Code</a
                    >
                    <a
                      href="https://patriciabetancorjimenez.github.io/aqua-travels/index.html"
                      target="_blank"
                      class="project__button project__button--2"
                      >Web</a
                    >
                  </div>
                </div>
                <img src="img/desktop2.png" alt="" class="project__img" />
                <img
                  src="img/mobile2.png"
                  alt=""
                  class="project__img-responsive"
                />
              </figure>

              <div class="project__description">
                <h4 class="project__h4">Description:</h4>
                <p class="project__text">
                  Aqua travel's layout has been built from scratch using CSS
                  Flexbox and advanced CSS techniques. Media queries added for
                  responsive design. Chat functionaly created with JQuery.
                  Default browser form validation.
                </p>

                <h4 class="project__h4">Technologies used:</h4>
                <div class="project__technologies project__technologies--2">
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">Sass</span></i
                  >
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">Jquery</span></i
                  >
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">JS</span></i
                  >
                  <i class="fas fa-tag project__tag"
                    ><span class="project__tag-text">CSS</span></i
                  >
                </div>
              </div>
            </div>
          </div>
          <!--//right project ends-->
        </div>
        <!--//upper project ends-->
      </section>
      <!-- section project ends -->
      <div class="separator">
        <hr class="separator__hr" />
      </div>

      <section class="skills" id="skills">
        <h4 class="skills__header">skills</h4>

        <div class="skills__box">
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/js.png
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/html.png
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/sass.png
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/css.png
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/jquery.png
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/git.png
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/github.jpg
          "
              alt="skills"
            />
          </figure>
          <figure class="skills__figure">
            <img
              class="skills__img"
              src="img/bootstrap.png
          "
              alt="skills"
            />
          </figure>
        </div>
        <h4 class="skills__others">Other skills:</h4>
        <ul class="skills__list">
          <li class="skills__item">Media Queries</li>
          <li class="skills__item">BEM</li>

          <li class="skills__item">Flexbox</li>
          <li class="skills__item">Command Line</li>

          <li class="skills__item">CSS Grid</li>
        </ul>
      </section>
      <!-- section skills ends -->
      <div class="separator">
        <hr class="separator__hr" />
      </div>
      <section class="courses" id="courses">
        <div class="courses__left">
          <ul class="courses__list">
            <li class="courses__item">
              <h4 class="courses__title">
                <i class="fas fa-check courses__icon"></i>
                The complete Javascript course 2021: From Zero to expert
              </h4>
              <p class="courses__text">By Jonas Schmedtmann, Udemy Academy.</p>
            </li>
            <li class="courses__item">
              <h4 class="courses__title">
                <i class="fas fa-check courses__icon"></i>
                The complete JQuery course: from beginner to advanced!
              </h4>
              <p class="courses__text">By Joe Parys, Udemy Academy.</p>
            </li>
            <li class="courses__item">
              <h4 class="courses__title">
                <i class="fas fa-check courses__icon"></i>
                Bootstrap 4 from Scratch with 5 projects
              </h4>
              <p class="courses__text">By Brad Traversi, Udemy Academy.</p>
            </li>
            <li class="courses__item">
              <h4 class="courses__title">
                <i class="fas fa-check courses__icon"></i>
                Advanced CSS and SASS: Flexbox, Grid, animations and more!
              </h4>
              <p class="courses__text">By Jonas Schmedtmann, Udemy Academy.</p>
            </li>
            <li class="courses__item">
              <h4 class="courses__title">
                <i class="fas fa-check courses__icon"></i>
                Web Developer Bootcamp
              </h4>

              <p class="courses__text">By Colt Steele, Udemy Academy.</p>
            </li>
          </ul>
        </div>
        <div class="courses__right">
          <h4 class="courses__header">Courses</h4>
        </div>
      </section>
      <!-- courses section ends-->
      <div class="separator">
        <hr class="separator__hr" />
      </div>
    </div>
    <!-- main ends-->

    <section class="contact" id="contact">
      <svg
        class="contact__wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,224L60,197.3C120,171,240,117,360,133.3C480,149,600,235,720,261.3C840,288,960,256,1080,250.7C1200,245,1320,267,1380,277.3L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>

      <h4 class="contact__header">Contact</h4>

      <div class="contact__form-box">
        <form action="" method="post" class="contact__form">
          
          <input
            type="text"
            name="name"
            id="fullname"
            class="contact__name"
            placeholder="Enter full name"
            required
          />
          <input
            type="email"
            name="email"
            id="email"
            class="contact__email"
            placeholder="Enter e-mail address"
            required
          />
          <textarea
            name="message"
            id="text"
            cols="30"
            rows="5"
            placeholder="Write a message"
            required
          ></textarea>

          <input
            type="submit"
            class="contact__submit"
            name="submit"
            value="Submit"
          />
        </form>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__left">
        <p class="footer__nav">Navigation</p>
        <ul class="footer__list">
          <li class="footer__item">
            <a href="#home" class="footer__link">home</a>
          </li>
          <li class="footer__item">
            <a href="#project" class="footer__link">projects</a>
          </li>
          <li class="footer__item">
            <a href="#skills" class="footer__link">skills</a>
          </li>
          <li class="footer__item">
            <a href="#contact" class="footer__link">contact</a>
          </li>
        </ul>
      </div>
      <div class="footer__center">
        <a
          class="footer__icon"
          href="https://github.com/PatriciaBetancorJimenez"
          ><i class="fab fa-github"></i
        ></a>
        <p class="footer__name">&copy; 2021 PBJ Portfolio</p>
        <p class="footer__name">Patricia Betancor Jimenez &hearts;</p>
      </div>

      <div class="footer__right">
        <p class="footer__email">E-mail</p>
        <a class="footer__address">info@pbjportfolio.com</a>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="js/js.js"></script>
     <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  </body>
</html>
