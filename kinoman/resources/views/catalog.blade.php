@extends('layouts.main')

@section('title')
    @parent Каталог
@endsection

@section('pageName')
    @parent Новинки
@endsection

@section('content')
<main class="content container">
<ul>
    
        <li class="main_catalog">
        
          <h2 class="h2">Новинки</h2>
          <div class="grid main_catalog_section">
          @forelse($data as $item)
            <a href="{{route('film', $item->id)}}" class="main_catalog_link">
              <img src="{{'img/'.$item->image_path}}" alt="{{$item->rus_title}}" class="main_catalog_img"/>
              <div class="flex sp_btw main_catalog_description">
                <div>
                  <svg
                    width="40"
                    height="35"
                    viewBox="0 0 40 35"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 11.914V11.4609C0 5.99994 3.94688 1.34213 9.32812 0.445253C12.8203 -0.147716 16.5156 1.01322 19.0625 3.564L20 4.49994L20.8672 3.564C23.4844 1.01322 27.1094 -0.147716 30.6719 0.445253C36.0547 1.34213 40 5.99994 40 11.4609V11.914C40 15.1562 38.6562 18.2577 36.2812 20.4687L22.1641 33.6484C21.5781 34.1952 20.8047 34.4999 20 34.4999C19.1953 34.4999 18.4219 34.1952 17.8359 33.6484L3.71797 20.4687C1.34609 18.2577 2.34375e-05 15.1562 2.34375e-05 11.914H0Z"
                      fill-opacity="0.6"
                    />
                  </svg>
                  <svg
                    width="41"
                    height="41"
                    viewBox="0 0 37 41"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M24.799 11.7452L34.7781 13.4015C35.6045 13.5343 36.2989 14.1906 36.5628 15.089C36.8267 15.9953 36.6114 16.9796 36.0142 17.6515L28.7781 25.6359L30.4864 37.089C30.6253 38.0265 30.2851 38.9796 29.5906 39.5343C28.9031 40.089 27.9934 40.1593 27.2503 39.714L18.3337 34.3624L9.42396 39.714C8.67396 40.1593 7.76424 40.089 7.07674 39.5343C6.38924 38.9796 6.04201 38.0265 6.18785 37.089L7.89618 25.6359L0.658684 17.6515C0.0607673 16.9796 -0.151733 15.9953 0.110767 15.089C0.372573 14.1906 1.06493 13.5343 1.89757 13.4015L11.8684 11.7452L16.3406 1.40696C16.7087 0.546336 17.4865 0 18.3337 0C19.1878 0 19.9656 0.546336 20.3337 1.40696L24.799 11.7452Z"
                      fill-opacity="0.6"
                    />
                  </svg>
                  <svg
                    width="30"
                    height="40"
                    viewBox="0 0 30 40"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M30 3.75V40L15 31.25L0 40V3.75C0 1.67969 1.67969 0 3.75 0H26.25C28.3203 0 30 1.67969 30 3.75Z"
                      fill-opacity="0.6"
                    />
                  </svg>
                </div>
                <div>
                  <p class="main_catalog_description_h3">Рейтинг: 5.3 {{$item->release_year}}</p>
                  <p> {{$item->rus_title}}
                  Профессиональный убийца принимает новое задание от своего
                    загадочного босса. Однако в этот раз всё идет не по плану.
                  </p>
                </div>
              </div>
            </a>
            @empty
        <p>Кина не будет</p>
    @endforelse
          </div>
          
        </li>
    </ul>

</main>
@endsection
