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
        {{-- bottom test section --}}
        <section class="bottom-test">
            <div class="comic_more-details">
                <div class="talent">
                    <h3>Talent</h3>
                    <div class="specs_info">
                        <h5>Art by:</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum iusto ipsum odit quod libero voluptatum dicta repellendus excepturi? Nesciunt, libero?</p>
                    </div>
                    <div class="specs_info">
                        <h5>Written by:</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro similique ab, soluta saepe nesciunt omnis perspiciatis libero maiores quas quasi vel nobis dicta nam iste? Ducimus iste exercitationem possimus.</p>
                    </div>
                </div>
                <div class="specs">
                    <h3>Specs</h3>
                    <div class="specs_info">
                        <h5>Series:</h5>
                        <p>ACTION COMICS</p>
                    </div>
                    <div class="specs_info">
                        <h5>U.S. Price:</h5>
                        <p>$ 19.99</p>
                    </div>

                    <div class="specs_info">
                        <h5>On Sale Date:</h5>
                        <p>Oct 02 2018</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection