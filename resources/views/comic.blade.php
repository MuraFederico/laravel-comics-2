@extends('templates/main')

@section('title', $title)

@section('content')
<section id="comic-container">
    <div class="blue-band">
        <div class="container">
            <img src={{ $thumb }} alt="">
        </div>
    </div>
    <div class="main-container container">
        <div class="flex-container">
            <div class="description-container">
                <h1>{{ $title }}</h1>
                <div class="price-container">
                    <div class="left">
                        <div class="price">
                            <span>U.S. Price: </span><span class="white">{{ $price }}</span>
                        </div>
                        <div>AVIABLE</div>
                    </div>
                    <div class="right">Check Aviability</div>
                </div>
                <p>{{ $description }}</p>
            </div>
            <div class="advertise">
                <h3>ADVERTISEMENT</h3>
                <img src="/images/adv.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="info-container">
        <div class="container">
            <div class="talents">
                <h2>Talent</h2>
                <div class="artists">
                    <span>Art by:</span>
                    <span class="list-artists">
                        @foreach ($artists as $artist)
                            <a href="#">{{ $artist }} </a>
                        @endforeach
                    </span>
                </div>
                <div class="writers">
                    <span>Written by:</span>
                    <span>
                        @foreach ($writers as $writer)
                            <a href="#">{{ $writer }} </a>
                        @endforeach
                    </span>
                </div>
            </div>
            <div class="specs">
                <h2>specs</h2>
                <div>
                    <span class="tag">series: </span>
                    <a href="#">{{ $series }}</a>
                </div>
                <div>
                    <span class="tag">U.S. price: </span>
                    <a href="#">{{ $price }}</a>
                </div>
                <div>
                    <span class="tag">On Sale Date: </span>
                    <a href="#">{{ $sale_date }}</a>
                </div>
            </div>
        </div>

        <nav class="nav-main">
            <div class="container">
                <ul>
                    <li>
                        <a href="">
                            <div class="container-img">
                                <img src="/images/buy-comics-digital-comics.png" alt="DIGITAL COMICS">
                            </div>

                            DIGITAL COMICS
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="container-img">
                                <img src="/images/buy-comics-merchandise.png" alt="DC MERCHANDISE">
                            </div>

                            DC MERCHANDISE
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="container-img">
                                <img src="/images/buy-comics-subscriptions.png" alt="SUBSCRIPTION">
                            </div>

                            SUBSCRIPTION
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="container-img">
                                <img src="/images/buy-comics-shop-locator.png" alt="COMIC SHOP LOCATOR">
                            </div>

                            COMIC SHOP LOCATOR
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="container-img">
                                <img src="/images/buy-dc-power-visa.svg" alt="DC POWER VISA">
                            </div>

                            DC POWER VISA
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</section>
@endsection
