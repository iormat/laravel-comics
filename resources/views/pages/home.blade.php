@extends('layouts.main-layout')

@section('content')
    <main>
        <!-- section comics -->
        <section id="comics">
            <h2>current series</h2>
            <section id="comics-cards" class="container-center">
                <ul>
                    @foreach ($comics as $comic)
                        <li>
                            <div class="card">
                                <a href="{{ route('test') }}">
                                    <div class="img-window">
                                        <img src="{{$comic['thumb']}}" alt="{{ $comic['series'] }}">
                                    </div>
                                    <h3>{{ $comic['series'] }}</h3>
                                    <p>{{ $comic['price'] }}</p>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>
            <div class="see-more">
                <button> <a href="@">load more</a> </button>
            </div>
        </section>
        <!-- section cards -->
        <section id="link-cards">
            <ul class="container-center">
                <li>
                    <a href="#">
                        <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="digital comicse">
                        <p>digital comics</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt="subscription">
                        <p>subscription</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="comic shop locator">
                        <p>comic shop locator</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="dc power visa">
                        <p>dc power visa</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="digital comicse">
                        <p>digital comics</p>
                    </a>
                </li>
            </ul>
        </section>
    </main>
@endsection