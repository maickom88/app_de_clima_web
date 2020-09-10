@extends('templete.site')


@section('content')


    <body>

        <div class="site-content">
            <div class="site-header">
                <div class="container">
                    <a href="/" class="branding">
                        <img src="images/logo.png" alt="" class="logo">
                        <div class="logo-type">
                            <h1 class="site-title">App Previsão do Tempo</h1>
                            <small class="site-description">Veja as previsões do dia</small>
                        </div>
                    </a>


                </div>
            </div>
            <!-- .site-header -->
            <div class="hero"
                data-bg-image="images/banner.png
                                                                                                                                                                                                                                                                                                                          ">
                <div class="container">
                    <form action="/city" method="POST" class="find-location">
                        @csrf
                        <input name="city" type="text" placeholder="Busque por sua cidade...">
                        <input type="submit" value="Procurar">
                    </form>

                </div>
            </div>
            <div class="forecast-table">
                <div class="container">
                    <div class="forecast-container">
                        <div class="today forecast">
                            <div class="forecast-header">
                                <div class="day">Hoje</div>
                            </div>
                            <!-- .forecast-header -->
                            <div class="forecast-content">

                                @if ($error ?? false)

                                    <h1>Error 404</h1>
                                    <p>Verifique sua pesquisa e digite somente a cidade!</p>

                                @else
                                    <div class="location">{{ $data->name }}</div>
                                    <div class="degree">
                                        <div class="num">{{ substr($data->main->temp, 0, 2) }}<sup>o</sup>C</div>
                                        <div class="forecast-icon">
                                            @if ($data->weather[0]->description == 'nublado')

                                                <img src="images/icons/icon-3.svg" alt="" width=90>
                                                <h6 style="margin-left: 6px">{{ $data->weather[0]->description }}</h6>
                                            @elseif($data->weather[0]->description == 'céu limpo')

                                                <img src="images/icons/icon-2.svg" alt="" width=90>
                                                <h6 style="margin-left: 6px">{{ $data->weather[0]->description }}</h6>
                                            @elseif($data->weather[0]->description == 'algumas nuvens' ||
                                                $data->weather[0]->description == 'nuvens dispersas')

                                                <img src="images/icons/icon-3.svg" alt="" width=90>
                                                <h6 style="margin-left: 6px">{{ $data->weather[0]->description }}</h6>
                                            @else
                                                <img src="images/icons/icon-9.svg" alt="" width=90>
                                                <h6 style="margin-left: 6px">{{ $data->weather[0]->description }}</h6>

                                            @endif
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endsection
