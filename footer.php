<section class="cta">
      <div class="bg-grey section-cta ">
        <picture alt="call to action" class="cta-image">
  <source type="image/webp" srcset="img/cta.webp">
  <source type="image/jpeg" srcset="img/cta.png">
  <img src="img/cta.png" alt="cta" style="width:100%;">
</picture>
        
        <div class="cta-from-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title" style="margin-left: 4px;margin-top: 0;margin-bottom: 0;padding-top: 7px;">Хотите сотрудничать?</h2>
            <p class="cta-form-text" style="margin-top: 26px;/*! margin-right: -218px; */margin-left: 2px;margin-bottom: 50px;" >Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text"
                 class="input" 
                 name="username"
                 placeholder=" "
                 required
                 maxlength="100"
                 />
                <label 
                class="input-group-label" 
                 for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input  
                id="user-phone"
                 type="tel" 
                 name="userphone"
                 class="input phone-mask" 
                 placeholder=" "
                 required
                 maxlength="30"
                 />
                <label class="input-group-label" 
                for="user-phone">Номер телефона
              </label>

              </div>
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">Оставить заявку</button>
              <div class="alert">
                <svg class="alert-svg" width="14" height="14">
                <use href="img/sprite.svg#alert-svg"></use>
              </svg>

<p class="alert-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
                </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="img/sprite.svg#logo"></use>
          </svg>
          <a href="tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
          <div class="footer-info" style="margin-left: 6px;margin-top: -9px;">
            <svg class="Vector" width="19" height="19">
              <use href="img/sprite-mobile.svg#Vector"></use>
            </svg>
            <address class="footer-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="footer-info" style="margin-top: -10px;margin-left: -23px;">
            <svg class="Vector" width="24" height="24">
              <use href="img/sprite-mobile.svg#Vector-1"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link">  
               <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
            <a href="#" class="footer-social-link">  
               <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
          </div>
        </div>
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
     <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title" style="margin-left: 10px;">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link"style="margin-left: -32px;">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link"style="margin-left: -32px;">Косметическая продукция</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link"style="margin-left: -32px;">Краски аэрозольные</a>
            </li>
          </ul>
        </div>
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title"style="margin-left: -70px;">Собственные марки</h2>
          <ul class="footer-menu-list"style="margin-left: -79px;">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AP</a>
            </li>
     
          </ul>
        </div>
        <div class="footer-menu-wrapper">
         
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="/about.html" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
     </div>
     <hr color="#ebebf0" class="footer-seporator" />
     <div class="container">
<div class="footer-wrapper">
  <div class="footer-legal">
    <p class="copyright">
      &copy; <?php echo date("d.m.Y") ?> "Aliance Production". Все права защищены.
    </p>
    <a href="#" class="footer-policy">Политика конфиденциальности</a>
  </div>
  <div class="footer-author">
    <span class="made-in">Сделано в </span>
    <svg class="RUSO" width="52" height="11">
      <use href="img/sprite.svg#RUSO"></use>
    </svg>
  </div>
</div>
     </div>
    </footer>
<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
      <svg class="close-icon" width="24" height="24">

        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях</p>
      <form action="handler.php" method ="POST" class="modal-form">
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input 
            id="modal-user-name"
             type="text" 
             name="username"
             class="input modal-input " 
             placeholder=" "
             />
            <label class="input-group-label modal-input-label"  for="modal-user-name">Имя

            </label>
          </div>
          <div class="input-group modal-input-group">
            <input  id="modal-user-phone"
            type="tel" 
            name="userphone"
            class="input modal-input phone-mask" 
            placeholder=" "
            />
            <label class="input-group-label modal-input-label" 
            for="modal-user-phone"
            >Номер телефона</label>

          </div>
        </div>
        <div class="modal-form-footer">
          <button type="submit"  class="button cta-form-button modal-form-button">Оставить заявку</button>
          <div class="alert">
            <svg class="alert-svg" width="36" height="36">
            <use href="img/sprite.svg#alert-svg"></use>
          </svg>

<p class="alert-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
            </div>
        </div>
      </form>
  </div>
</div>


<div class="modal" id="alert-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Спасибо!</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях</p>
  </div>
</div>
<section class="cta-mobile">
      <div class="bg-grey section-cta ">
        <div class="cta-from-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title" style="margin-left: 4px;margin-top: 0;margin-bottom: 0;padding-top: 7px;">Хотите сотрудничать?</h2>
            <p class="cta-form-text" style="margin-top: 26px;/*! margin-right: -218px; */margin-left: 2px;margin-bottom: 50px;" >Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text"
                 class="input" 
                 name="username"
                 placeholder=" "
                 required
                 maxlength="100"
                 />
                <label 
                class="input-group-label" 
                 for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input  
                id="user-phone"
                 type="tel" 
                 name="userphone"
                 class="input phone-mask" 
                 placeholder=" "
                 required
                 maxlength="30"
                 />
                <label class="input-group-label" 
                for="user-phone">Номер телефона
              </label>

              </div>
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">Оставить заявку</button>
              <div class="alert">
                <svg class="alert-svg" width="14" height="14">
                <use href="img/sprite.svg#alert-svg"></use>
              </svg>

<p class="alert-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
                </div>
            </div>
          </form>
        </div>
      </div>
    </section>

 <footer class="footer-mobile">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo" style="margin-left: -17px;max-width: inherit;">
            <use href="img/sprite.svg#logo"></use>
          </svg>
          <a href="tel:+79996861014" class="footer-phone-mobile">+7 (999) 686-10-14</a>
          <div class="footer-info">
            <svg class="Vector" width="19" height="19">
              <use href="img/sprite-mobile.svg#Vector"></use>
            </svg>
            <address class="footer-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="footer-info">
            <svg class="Vector" width="24" height="24">
              <use href="img/sprite-mobile.svg#Vector-1"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link">  
               <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
            <a href="#" class="footer-social-link">  
               <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
          </div>
        </div>
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
       <div class="mobile-menu-mobile">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>

          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
          <li class="mobile-menu-nav-item">
                    <a href="./about.php" class="mobile-menu-link">О компании</a>
</li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
            <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      
     <hr color="#ebebf0" class="footer-seporator" />
     <div class="container">
<div class="footer-wrapper">
  <div class="footer-legal" style="margin-bottom: 10px;">
    <p class="copyright">
      &copy; <?php echo date("d.m.Y") ?> "Aliance Production". Все права защищены.
    </p>
    <a href="#" class="footer-policy">Политика конфиденциальности</a>
  </div>
  <div class="footer-author">
    <span class="made-in">Сделано в </span>
    <svg class="RUSO" width="52" height="11">
      <use href="img/sprite.svg#RUSO"></use>
    </svg>
  </div>
</div>
     </div>
    </footer>
<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Есть вопросы?</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
      <svg class="close-icon" width="24" height="24">

        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях</p>
      <form action="handler.php" method ="POST" class="modal-form">
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input 
            id="modal-user-name"
             type="text" 
             name="username"
             class="input modal-input " 
             placeholder=" "
             />
            <label class="input-group-label modal-input-label"  for="modal-user-name">Имя

            </label>
          </div>
          <div class="input-group modal-input-group">
            <input  id="modal-user-phone"
            type="tel" 
            name="userphone"
            class="input modal-input phone-mask" 
            placeholder=" "
            />
            <label class="input-group-label modal-input-label" 
            for="modal-user-phone"
            >Номер телефона</label>

          </div>
        </div>
        <div class="modal-form-footer">
          <button type="submit"  class="button cta-form-button modal-form-button">Оставить заявку</button>
          <div class="alert">
            <svg class="alert-svg" width="36" height="36">
            <use href="img/sprite.svg#alert-svg"></use>
          </svg>

<p class="alert-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
            </div>
        </div>
      </form>
  </div>
</div>


<div class="modal" id="alert-modal">
  <div class="modal-dialog">
    <h2 class="modal-title">Спасибо!</h2>
    <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
      <svg class="close-icon" width="24" height="24">
        <use href="img/sprite.svg#close"></use>
      </svg>
    </a>
    <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях</p>
  </div>
</div>

     <script src="js/swiper-bundle.min.js"></script>
   <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>