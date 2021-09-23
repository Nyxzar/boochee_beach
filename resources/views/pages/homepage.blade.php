
<x-app-layout title="">

    <div class="theme-container pt-14 lg:pt-16 block " >
        <div class="">
            <section class="theme-container overflow-hidden relative">
                <div class="">
                    <div class="banner-carousel">
                        <div class="swiper-wrapper" >
                            <div class="swiper-slide">
                                <img src="http://demo.copyleftdesign.no/verdensbarn/images/hero-img-2.jpg" alt="" loading="lazy" class="banner-carousel__image">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://demo.copyleftdesign.no/verdensbarn/images/hero-img-2.jpg" alt="" loading="lazy" class="banner-carousel__image">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://demo.copyleftdesign.no/verdensbarn/images/hero-img-2.jpg" alt="" loading="lazy" class="banner-carousel__image">
                            </div>
                        </div>

                        <div class="banner-pagination  banner-wrap absolute bottom-0 text-center z-10"></div>
                        <div class="banner-nav-button swiper-button-next"></div>
                        <div class="banner-nav-button swiper-button-prev"></div>
                    </div>

                    <div class="absolute -bottom-6" style="width: 23%; z-index: 1; left: 7%;">
                        <svg viewBox="0 0 630 170"><defs><path fill="#f8f0eb" d="M339.7 4.36C369.48 12.73 409.98 40.58 362.59 32.46C315.2 24.33 280.56 73 314.42 104.26C318.6 108.11 322.25 110.86 325.36 112.5C358.73 130.1 398.26 131.68 432.93 116.78C444.84 111.66 448.15 110.24 465.66 102.72C482.84 95.34 502.25 95.17 519.55 102.26C593.53 132.59 629.19 151.68 626.54 159.55C623.3 169.13 417.96 171.27 10.52 165.96C4.96 165.89 1.09 160.42 2.87 155.16C2.87 155.16 2.87 155.16 2.87 155.16C15.46 140.85 122.35 70.69 145.05 73.39C167.75 76.08 127.25 102.97 153.4 117.33C179.54 131.7 265.02 -16.63 339.7 4.36Z" id="wavebanner"></path></defs><g><g><g><use xlink:href="#wavebanner" opacity="1" fill-opacity="1"></use></g></g></g></svg>
                    </div>
                </div>   
            </section>
            


            <section class="theme-wrap py-16">
                <div>
                    <div class="w-10/12 m-auto">
                        <div class="text-center">
                            <div class="heading_text text-6xl">Reconnect to your</div>
                            <div class="signature text-7xl">deep nature</div>
                        </div>

                        <div class="text-center mt-6">
                            Located in the lush village of Saplunara on the island of Mljet you can find our charming 4-star PineTree boutique apartments. <br>
                            Situated directly by the sea, PineTree boutique apartments are tastefully furnished and come with high-quality accessories. It is a true hidden gem in a secluded location away from the city noise and perfect for a peaceful vacation or for exploring the island.  <br>
                            The fresh white décor of its exterior mixed with just the right touch of colour enhances its magical surroundings.  <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="theme-wrap py-16">
                <div class="flex w-8/12 m-auto">
                    <div class=" flex flex-row items-stretch justify-center w-full max-w-4xl space-x-12" x-data="{ tab: 1 } ">

                        <div class="text-center w-2/4">
                            <div>
                                <div class="heading_text text-4xl">Our Rooms </div>
                                <div class="signature text-5xl">Distinctive Comfort</div>
                            </div>

                            <div class="flex flex-col justify-start  space-y-4">
                                <a class="px-4 py-2 text-sm" :class="{'font-bold': tab === 1 }" href="#" @click.prevent="tab = 1">
                                    JUNIOR SUITE
                                </a>
                                <a class="px-4 py-2 text-sm" :class="{'font-bold': tab === 2 }" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                                    DELUXE ROOM
                                </a>
                                <a class="px-4 py-2 text-sm" :class="{'font-bold': tab === 3 }" href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                                    SUPERIOR ROOM
                                </a>
                                <a class="px-4 py-2 text-sm" :class="{'font-bold': tab === 4 }" href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                                    CLASSIC ROOMS
                                </a>
                            </div>
                            <div>
                                view this room...
                            </div>
                        </div>


                        <div class="w-3/4">
                            <div class="" x-show="tab === 1">
                                <div x-show="tab === 1"  x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img src="https://relaisdechambord.com/wp-content/uploads/2020/09/relais-de-chambord-boutique-hotel-room-deluxe-4-1200x790.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="tab === 2">
                                <div x-show="tab === 2"   x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img src="https://relaisdechambord.com/wp-content/uploads/2020/10/relais-de-chambord-boutique-hotel-room-deluxe-chambord-5-1200x783.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="tab === 3">
                                <div x-show="tab === 3"   x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img src="https://relaisdechambord.com/wp-content/uploads/2020/09/relais-de-chambord-boutique-hotel-room-classic-2-1200x1373.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="tab === 4">
                                <div x-show="tab === 4"   x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img src="https://relaisdechambord.com/wp-content/uploads/2020/09/relais-de-chambord-boutique-hotel-junior-suite-chambord-1-e1610465407434-1200x1491.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" theme-wrap py-16">
                <div class="text-center">
                    <div class="signature text-5xl ">Things to do</div>
                </div>
                <div class="text-center">
                    <div class="pb-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-5 ">
                        <div>Standup Board</div>
                        <div>Snorkel</div>
                        <div>Kayak</div>

                        <div>Raft</div>
                        <div>Wellness</div>
                        <div>Hammock</div>
                    </div>
                </div>
            </section>

            <section class="py-16 bg-dark_brown text-white">
                <div class="theme-wrap">
                    <div class="text-center">
                        <div class="signature text-5xl">Events</div>
                    </div>
                    <div class="space-y-8">
                        <div class="flex w-5/12 m-auto">
                            <div>
                                img
                            </div>
                            <div>
                                <div>Baazar</div>
                                <div>date</div>
                                <div>
                                    you will discover monumental works. An opportunity to open your senses and give free rein to your emotions.
                                </div>
                                <div>find out more</div>
                            </div>
                        </div>

                        <div class="flex  w-5/12 m-auto">
                            <div>
                                <div>Yoga</div>
                                <div>date</div>
                                <div>
                                    you will discover monumental works. An opportunity to open your senses and give free rein to your emotions.
                                </div>
                                <div>find out more</div>
                            </div>
                            <div>
                                img
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="theme-wrap py-16">
                <div>
                    <div class="heading_text text-4xl">Doggo</div>
                    <div class="signature text-5xl">Residence</div>
                </div>
            </section>


            <section class="theme-wrap py-16">
                <div>
                    Insta
                </div>
            </section>

        </div>
    </div>
    
@once
  @push('scripts')
    <script>

        var swiper = new Swiper('.banner-carousel', {
            slidesPerView: 1,
            spaceBetween: 30,
            autoHeight: true,
            loop: false,
            pagination: {
                el: '.banner-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
  @endpush
@endonce
</x-app-layout>