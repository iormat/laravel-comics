@extends('layouts.main-layout')

@section('content')
    <main>
        {{-- top test section --}}
        <section class="top-test">
            <div class="comic-banner">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
            </div>
            <div id="comic-details">
                <div class="details">
                    <h2> action comics #1000: the deluxe edition </h2>
                    <div class="comic-info">
                        <span class="price">
                            U.S. Price: $16.99
                        </span>
                        <span class="availability">
                            <p>AVAILABLE</p>
                            <span class="check-avaiable">
                                Check Availability &DownArrow;
                            </span>
                        </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum non deleniti expedita deserunt corporis hic, explicabo temporibus quis quo repudiandae et, totam ipsam mollitia, dignissimos alias eveniet aliquam ullam accusantium ducimus quasi laboriosam harum quibusdam ab doloremque. Quisquam, voluptates ipsam dolores, impedit labore illum laboriosam est adipisci et tempore corrupti facere consequatur. Et asperiores, repudiandae quos neque distinctio sunt explicabo pariatur enim, deserunt odit possimus dolore ducimus nemo provident. Neque, corrupti quia aliquam expedita dolores sequi adipisci placeat assumenda tempora. Adipisci minus cupiditate ratione praesentium neque vero ex nesciunt assumenda quidem? Sed optio at, provident, non corrupti mollitia repellat inventore saepe natus, delectus totam sint earum reiciendis nulla. Numquam eius quisquam suscipit vero facilis sit laboriosam repellendus iste quidem explicabo.</p>
                </div>
                <div class="comic-details_ads">
                    <h3>advertisment</h3>
                    <div class="ad-container">
                        <button>
                            <a href="#">
                                APPLY NOW
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection