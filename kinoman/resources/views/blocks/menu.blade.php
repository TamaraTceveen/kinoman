<!-- <div class="main-menu">
    <ul>
        <li><a href="{{route('home')}}">Начало</a></li>
        <li><a href="{{route('catalog')}}">Каталог</a></li>
    </ul>
</div> -->
<header class="container flex sp_btw header">
      <nav class="flex header_navigation">
        <ul class="flex sp_btw header_navigation_list">
          <li><a href="{{route('catalog')}}">Фильмы</a></li>
          <li><a href="#">Сериалы</a></li>
          <li><a href="{{route('home')}}">Новинки</a></li>
        </ul>
      </nav>
      <div class="flex sp_btw header_blocks">
        
          <a href="#" class="flex header_blocks_search">
            <svg
              width="40"
              height="40"
              viewBox="0 0 50 50"
              xmlns="http://www.w3.org/2000/svg"
              class="header_blocks_img"
            >
              <path
                d="M48.8574 43.3301L37.168 31.6406C39.8262 27.6944 41.1377 22.7637 40.4356 17.5098C39.2383 8.57327 31.9141 1.30081 22.9688 0.168289C9.66895 -1.51462 -1.51464 9.66897 0.168369 22.9688C1.30118 31.918 8.57462 39.2481 17.5121 40.4395C22.766 41.1415 27.6977 39.8305 31.643 37.1719L43.3324 48.8613C44.8578 50.3867 47.3314 50.3867 48.8568 48.8613C50.3809 47.334 50.3809 44.8535 48.8574 43.3301ZM7.72462 20.3125C7.72462 13.4199 13.332 7.81253 20.2246 7.81253C27.1172 7.81253 32.7246 13.4199 32.7246 20.3125C32.7246 27.2051 27.1172 32.8125 20.2246 32.8125C13.332 32.8125 7.72462 27.2071 7.72462 20.3125Z"
              />
            </svg>
            Поиск
          </a>
        
        <div class="flex sp_btw header_blocks_login">
          <p class="flex header_blocks_search">
            <img src="img/user.svg" alt="account" class="header_blocks_img" />
            Войти
            <div class="flex header_blocks_authorization">
              <p class="header_blocks_authorization_p">АВТОРИЗАЦИЯ</p>
              <form action="#" class="flex header_blocks_authorization_form">
                <input type="text" class="header_blocks_authorization_input" 
                placeholder="Введите логин"/>
                <input type="password" name="password" id="password" 
                class="header_blocks_authorization_input"
                placeholder="Введите пароль" />
              </form>
              <a href="#" class="header_blocks_authorization_link">Нет учетной записи? <span class="grey_text">Зарегистрируйся</span></a>
            </div>
          </p>
        </div>
      </div>
    </header>
