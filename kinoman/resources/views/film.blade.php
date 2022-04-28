@extends('layouts.main')

@section('title')
    @parent Фильм
@endsection

@section('pageName')
    @parent Фильм
@endsection

@section('content')

<!-- <h2>{{$data->rus_title}}</h2> -->
    <!-- <div>({{$data->title}})</div> -->
    <!-- <div>{{$data->release_year}} год</div> -->
    <!-- <div>{{$data->length_in_minutes}} мин.</div> -->
    <!-- <div>{{$data->genres}}</div> -->
    <!-- <div>Режиссер: {{$data->directors}}</div> -->
    <!-- <div>Актеры: {{$data->actors}}</div> -->
    <!-- <img src="{{'../img/'.$data->poster}}"> -->
    <!-- <div>Описание: {{$data->about}}</div> -->
    <!-- <a href="/catalog">Назад</a> -->
<main class="container conteiner_movie wrap">
    <div class="movie_blocks">
        <div class="movie_blocks_text_img">

            <h2 class="movie_blocks_text">{{$data->rus_title}}</h2>  
                <p class="movie_blocks_text_svg">
                {{$data->release_year}} {{$data->genres}} {{$data->length_in_minutes}} мин. 16+ 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="15" height="20"
                    class="movie_blocks_thumb_svg">
                    <path d="M192 352c53.03 0 96-42.97 96-96v-160c0-53.03-42.97-96-96-96s-96 42.97-96 
                    96v160C96 309 138.1 352 192 352zM344 192C330.7 192 320 202.7 320 215.1V256c0 73.33-61.97 
                    132.4-136.3 127.7c-66.08-4.169-119.7-66.59-119.7-132.8L64 215.1C64 202.7 53.25 192 40 192S16 202.7 
                    16 215.1v32.15c0 89.66 63.97 169.6 152 181.7V464H128c-18.19 0-32.84 15.18-31.96 33.57C96.43 505.8 
                    103.8 512 112 512h160c8.222 0 15.57-6.216 15.96-14.43C288.8 479.2 274.2 464 256 464h-40v-33.77C301.7 
                    418.5 368 344.9 368 256V215.1C368 202.7 357.3 192 344 192z"/>
                    </svg>
                    Rus 16+
                </p >
            <p class="movie_blocks_text_p">
            {{$data->about}}
            </p>
            <p class="movie_blocks_text_p">
                <span class="movie_blocks_text_grey">Режиссёр:</span>  {{$data->directors}} <br>
                <span class="movie_blocks_text_grey">Актёры:</span>  {{$data->actors}}
            </p>
            <div class="movie_btn" onclick="myFunction()">
                Добавить в коллекцию
                <div class="movie_drop" id="myDropdown">
                    <a class="movie_drop_a" href="#"> Буду смотреть</a>
                    <a class="movie_drop_a" href="#"> Любимые</a>
                    <a class="movie_drop_a" href="#"> Избраное</a>
                    <a class="movie_drop_a" href="#"> Новая папка</a>
                </div>
            </div>
        </div>  

        <div class="movie_blocks_img">
            <img class="movie_blocks_image" src="{{'../img/'.$data->poster}}" alt="{{$data->title}}">
        </div>
        <div class="movie_widget">
        <h2>
            Как вам фильм?
        </h2> 
        <div class="movie_widget_icon">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="50" height="50">
                    <path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 
                    512C114.6 512 0 397.4 0 256zM256.3 331.8C208.9 331.8 164.1 324.9 124.5 312.8C112.2 309 
                    100.2 319.7 105.2 331.5C130.1 390.6 188.4 432 256.3 432C324.2 432 382.4 390.6 407.4 
                    331.5C412.4 319.7 400.4 309 388.1 312.8C348.4 324.9 303.7 331.8 256.3 331.8H256.3zM199.3 
                    129.1C181.5 124.4 163.2 134.9 158.4 152.7L154.1 168.8L137.1 164.5C120.2 159.7 101.9 170.3
                    97.14 188.1C92.38 205.8 102.9 224.1 120.7 228.9L185.8 246.3C194.4 248.6 203.1 243.6 205.4 
                    235L222.9 169.1C227.6 152.2 217.1 133.9 199.3 129.1H199.3zM353.6 152.7C348.8 134.9 330.5 
                    124.4 312.7 129.1C294.9 133.9 284.4 152.2 289.1 169.1L306.6 235C308.9 243.6 317.6 248.6 
                    326.2 246.3L391.3 228.9C409.1 224.1 419.6 205.8 414.9 188.1C410.1 170.3 391.8 159.7 374 
                    164.5L357.9 168.8L353.6 152.7z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M451.4 369.1C468.8 356 480 335.4 480 312c0-39.75-32.25-72-72-72h-14.12C407.3 228.2 
                    416 211.2 416 191.1c0-35.25-28.75-63.1-64-63.1h-5.875C349.8 117.9 352 107.2 352 95.1c0-53-43-96-96-96c-5.25 0-10.25 
                    .75-15.12 1.5C250.3 14.62 256 30.62 256 47.1c0 44.25-35.75 80-80 80H160c-35.25 0-64 28.75-64 63.1c0 19.25 8.75 
                    36.25 22.12 48H104C64.25 239.1 32 272.3 32 312c0 23.38 11.25 44 28.62 57.13C26.25 374.6 0 404.1 0 440C0 479.8 
                    32.25 512 72 512h368c39.75 0 72-32.25 72-72C512 404.1 485.8 374.6 451.4 369.1zM192 256c17.75 0 32 14.25 32 
                    32s-14.25 32-32 32S160 305.8 160 288S174.3 256 192 256zM351.5 395C340.1 422.9 292.1 448 256 448c-36.99 
                    0-84.98-25.12-95.48-53C158.5 389.8 162.5 384 168.3 384h175.5C349.5 384 353.5 389.8 351.5 395zM320 
                    320c-17.75 0-32-14.25-32-32s14.25-32 32-32s32 14.25 32 32S337.8 320 320 320z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M416 400V464C416 490.5 394.5 512 368 512H320V464C320 455.2 312.8 448 304 448C295.2 448 288 
                    455.2 288 464V512H224V464C224 455.2 216.8 448 208 448C199.2 448 192 455.2 192 464V512H144C117.5 512 
                    96 490.5 96 464V400C96 399.6 96 399.3 96.01 398.9C37.48 357.8 0 294.7 0 224C0 100.3 114.6 0 256 0C397.4 
                    0 512 100.3 512 224C512 294.7 474.5 357.8 415.1 398.9C415.1 399.3 416 399.6 416 400V400zM160 192C124.7 
                    192 96 220.7 96 256C96 291.3 124.7 320 160 320C195.3 320 224 291.3 224 256C224 220.7 195.3 192 160 
                    192zM352 320C387.3 320 416 291.3 416 256C416 220.7 387.3 192 352 192C316.7 192 288 220.7 288 256C288 291.3 316.7 320 352 320z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4
                    0 256C0 114.6 114.6 0 256 0zM256 352C290.9 352 323.2 367.8 348.3 394.9C354.3 401.4 364.4 
                    401.7 370.9 395.7C377.4 389.7 377.7 379.6 371.7 373.1C341.6 340.5 301 320 256 320C247.2 
                    320 240 327.2 240 336C240 344.8 247.2 352 256 352H256zM208 369C208 349 179.6 308.6 166.4 
                    291.3C163.2 286.9 156.8 286.9 153.6 291.3C140.6 308.6 112 349 112 369C112 395 133.5 416 
                    160 416C186.5 416 208 395 208 369H208zM303.6 208C303.6 225.7 317.1 240 335.6 240C353.3 
                    240 367.6 225.7 367.6 208C367.6 190.3 353.3 176 335.6 176C317.1 176 303.6 190.3 303.6 
                    208zM207.6 208C207.6 190.3 193.3 176 175.6 176C157.1 176 143.6 190.3 143.6 208C143.6 
                    225.7 157.1 240 175.6 240C193.3 240 207.6 225.7 207.6 208z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 
                    397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256.3 331.8C208.9 
                    331.8 164.1 324.9 124.5 312.8C112.2 309 100.2 319.7 105.2 331.5C130.1 
                    390.6 188.4 432 256.3 432C324.2 432 382.4 390.6 407.4 331.5C412.4 319.7 
                    400.4 309 388.1 312.8C348.4 324.9 303.7 331.8 256.3 331.8H256.3zM133.5 
                    146.7C125.6 142.4 116 148.2 116 157.1C116 159.9 116.1 162.6 118.8 164.8L154.8 
                    208L118.8 251.2C116.1 253.4 116 256.1 116 258.9C116 267.8 125.6 273.6 133.5 269.3L223.4
                    221.4C234.1 215.7 234.1 200.3 223.4 194.6L133.5 146.7zM396 157.1C396 148.2 
                    386.4 142.4 378.5 146.7L288.6 194.6C277.9 200.3 277.9 215.7 288.6 221.4L378.5 269.3C386.4 
                    273.6 396 267.8 396 258.9C396 256.1 395 253.4 393.2 251.2L357.2 208L393.2 164.8C395 162.6 
                    396 159.9 396 157.1V157.1z"/></svg>
            </div>        
        </div>
    </div>
    </div>

 <!-- <div class="movie_box_text ">
            <h3>Описание </h3>
        <div class="movie_box_text_range">
            <div class="box_range"></div>
        </div>
    </div> -->

<section class="movie_aside_widget">
    <!-- <div>
        <h2 class="movie_aside_widget_h2">
        {{$data->about}}
        </h2>
    </div> -->

    <!-- <div class="movie_widget">
        <h2>
            Как вам фильм?
        </h2> 
        <div class="movie_widget_icon">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="50" height="50">
                    <path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 
                    512C114.6 512 0 397.4 0 256zM256.3 331.8C208.9 331.8 164.1 324.9 124.5 312.8C112.2 309 
                    100.2 319.7 105.2 331.5C130.1 390.6 188.4 432 256.3 432C324.2 432 382.4 390.6 407.4 
                    331.5C412.4 319.7 400.4 309 388.1 312.8C348.4 324.9 303.7 331.8 256.3 331.8H256.3zM199.3 
                    129.1C181.5 124.4 163.2 134.9 158.4 152.7L154.1 168.8L137.1 164.5C120.2 159.7 101.9 170.3
                    97.14 188.1C92.38 205.8 102.9 224.1 120.7 228.9L185.8 246.3C194.4 248.6 203.1 243.6 205.4 
                    235L222.9 169.1C227.6 152.2 217.1 133.9 199.3 129.1H199.3zM353.6 152.7C348.8 134.9 330.5 
                    124.4 312.7 129.1C294.9 133.9 284.4 152.2 289.1 169.1L306.6 235C308.9 243.6 317.6 248.6 
                    326.2 246.3L391.3 228.9C409.1 224.1 419.6 205.8 414.9 188.1C410.1 170.3 391.8 159.7 374 
                    164.5L357.9 168.8L353.6 152.7z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M451.4 369.1C468.8 356 480 335.4 480 312c0-39.75-32.25-72-72-72h-14.12C407.3 228.2 
                    416 211.2 416 191.1c0-35.25-28.75-63.1-64-63.1h-5.875C349.8 117.9 352 107.2 352 95.1c0-53-43-96-96-96c-5.25 0-10.25 
                    .75-15.12 1.5C250.3 14.62 256 30.62 256 47.1c0 44.25-35.75 80-80 80H160c-35.25 0-64 28.75-64 63.1c0 19.25 8.75 
                    36.25 22.12 48H104C64.25 239.1 32 272.3 32 312c0 23.38 11.25 44 28.62 57.13C26.25 374.6 0 404.1 0 440C0 479.8 
                    32.25 512 72 512h368c39.75 0 72-32.25 72-72C512 404.1 485.8 374.6 451.4 369.1zM192 256c17.75 0 32 14.25 32 
                    32s-14.25 32-32 32S160 305.8 160 288S174.3 256 192 256zM351.5 395C340.1 422.9 292.1 448 256 448c-36.99 
                    0-84.98-25.12-95.48-53C158.5 389.8 162.5 384 168.3 384h175.5C349.5 384 353.5 389.8 351.5 395zM320 
                    320c-17.75 0-32-14.25-32-32s14.25-32 32-32s32 14.25 32 32S337.8 320 320 320z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M416 400V464C416 490.5 394.5 512 368 512H320V464C320 455.2 312.8 448 304 448C295.2 448 288 
                    455.2 288 464V512H224V464C224 455.2 216.8 448 208 448C199.2 448 192 455.2 192 464V512H144C117.5 512 
                    96 490.5 96 464V400C96 399.6 96 399.3 96.01 398.9C37.48 357.8 0 294.7 0 224C0 100.3 114.6 0 256 0C397.4 
                    0 512 100.3 512 224C512 294.7 474.5 357.8 415.1 398.9C415.1 399.3 416 399.6 416 400V400zM160 192C124.7 
                    192 96 220.7 96 256C96 291.3 124.7 320 160 320C195.3 320 224 291.3 224 256C224 220.7 195.3 192 160 
                    192zM352 320C387.3 320 416 291.3 416 256C416 220.7 387.3 192 352 192C316.7 192 288 220.7 288 256C288 291.3 316.7 320 352 320z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4
                    0 256C0 114.6 114.6 0 256 0zM256 352C290.9 352 323.2 367.8 348.3 394.9C354.3 401.4 364.4 
                    401.7 370.9 395.7C377.4 389.7 377.7 379.6 371.7 373.1C341.6 340.5 301 320 256 320C247.2 
                    320 240 327.2 240 336C240 344.8 247.2 352 256 352H256zM208 369C208 349 179.6 308.6 166.4 
                    291.3C163.2 286.9 156.8 286.9 153.6 291.3C140.6 308.6 112 349 112 369C112 395 133.5 416 
                    160 416C186.5 416 208 395 208 369H208zM303.6 208C303.6 225.7 317.1 240 335.6 240C353.3 
                    240 367.6 225.7 367.6 208C367.6 190.3 353.3 176 335.6 176C317.1 176 303.6 190.3 303.6 
                    208zM207.6 208C207.6 190.3 193.3 176 175.6 176C157.1 176 143.6 190.3 143.6 208C143.6 
                    225.7 157.1 240 175.6 240C193.3 240 207.6 225.7 207.6 208z"/></svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
                    <path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 
                    397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM256.3 331.8C208.9 
                    331.8 164.1 324.9 124.5 312.8C112.2 309 100.2 319.7 105.2 331.5C130.1 
                    390.6 188.4 432 256.3 432C324.2 432 382.4 390.6 407.4 331.5C412.4 319.7 
                    400.4 309 388.1 312.8C348.4 324.9 303.7 331.8 256.3 331.8H256.3zM133.5 
                    146.7C125.6 142.4 116 148.2 116 157.1C116 159.9 116.1 162.6 118.8 164.8L154.8 
                    208L118.8 251.2C116.1 253.4 116 256.1 116 258.9C116 267.8 125.6 273.6 133.5 269.3L223.4
                    221.4C234.1 215.7 234.1 200.3 223.4 194.6L133.5 146.7zM396 157.1C396 148.2 
                    386.4 142.4 378.5 146.7L288.6 194.6C277.9 200.3 277.9 215.7 288.6 221.4L378.5 269.3C386.4 
                    273.6 396 267.8 396 258.9C396 256.1 395 253.4 393.2 251.2L357.2 208L393.2 164.8C395 162.6 
                    396 159.9 396 157.1V157.1z"/></svg>
            </div>        
        </div>
    </div> -->
    <div class="movie_information">
        <div class="movie_information_p">
            <h2>Информация</h2>
                <div class="movie_information_p">
                    <p>
                        <span class="movie_information_span">Страна</span> <br>
                        США
                    </p>
                    <p>
                        <span class="movie_information_span"> Жанр</span> <br>
                        {{$data->genres}}
                    </p>
                    <p>
                        <span class="movie_information_span"> Оригинальное название </span> <br>
                        ({{$data->title}})
                    </p>
                    <p>
                        <span class="movie_information_span"> Примьера в мире  </span> <br>
                        {{$data->release_year}}
                    </p>
                </div>
        </div>
        <div class="movie_information_p">
            <h2>Съёмочная группа</h2>
                <div class="movie_information_p">
                    <p>
                        <span class="movie_information_span"> Режиссёр  </span> <br>
                        {{$data->directors}}
                    </p>
                    <p>
                        <span class="movie_information_span"> Актёры  </span> <br>
                        {{$data->actors}}
                    </p>
                </div>
        </div>
        <div>
            <div class="movie_information_p">
                <h2>Звук и субтитры</h2>
                
                    <p>
                        <span class="movie_information_span"> Аудиодорожки </span> <br>
                        Аудиодорожки
                        Русский
                    </p>
                    <p>
                        <span class="movie_information_span">  Качество </span> <br>
                        Качество
                        SD
                    </p>
            </div>
        </div>
    </div>
</section>
</main>

@endsection