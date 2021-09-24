
<x-app-layout title="">

    <div class="theme-container pt-14 lg:pt-16 block overflow-hidden" >
        <div class="">
            <section class="theme-container overflow-hidden relative">
                <div class="">
                    <div class="banner-carousel">
                        <div class="swiper-wrapper" >
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1574146494511-f1c1efb4d1f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2069&q=80" alt="" loading="lazy" class="banner-carousel__image">
                            </div>
                        </div>

                        <div class="banner-pagination  banner-wrap absolute bottom-0 text-center z-10"></div>
                        <div class="banner-nav-button swiper-button-next"></div>
                        <div class="banner-nav-button swiper-button-prev"></div>
                    </div>

                    <div class="absolute -bottom-3" style="width: 23%; z-index: 2; left: 7%;">
                        <svg viewBox="0 0 680 183.49"><defs><path d="M374.16 11.27C403.94 19.64 444.44 47.49 397.05 39.36C349.66 31.24 315.02 79.9 348.88 111.16C353.06 115.02 356.7 117.77 359.81 119.41C393.18 137.01 432.72 138.58 467.38 123.69C479.3 118.57 482.61 117.15 500.12 109.62C516.93 102.4 536.21 103.92 551.67 113.69C566.41 122.99 585.67 135.16 600.35 144.43C616.85 154.85 635.26 161.89 654.51 165.14C655.09 165.23 639.05 162.53 642.48 163.11C652.41 164.78 662.49 165.45 672.56 165.11C672.75 165.1 672.84 165.1 672.85 165.1C680.52 166.38 676.44 172.55 675.67 180.38C675.64 180.7 456.13 181.56 17.16 182.94C10.5 182.96 4.63 178.57 2.78 172.17C2.37 170.76 3.41 174.33 2.78 172.17C1.76 168.65 4.42 165.14 8.09 165.18C16.43 165.27 9.58 165.19 11.79 165.22C36.26 165.48 59.97 156.73 78.4 140.63C118.16 105.89 151.86 85.78 179.5 80.29C179.5 80.29 167.93 78.92 179.5 80.29C202.2 82.98 161.71 109.88 187.85 124.24C214 138.6 299.48 -9.73 374.16 11.27Z" id="wavebanner"></path></defs><g><g><g><use xlink:href="#wavebanner" opacity="1" fill="#f8f0eb" fill-opacity="1"></use></g></g></g></svg>
                    </div>
                </div>   
            </section>
            


            <section class="theme-wrap py-20">
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

            <section class="theme-wrap py-20 relative">
                <div class="flex w-9/12 m-auto">
                    <div class=" flex flex-row items-stretch justify-center w-full  space-x-12" x-data="{ tab: 1 } ">

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
                                <div x-show="tab === 1"  x-transition:enter="transition duration-1000 transform ease-in-out" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img style="height: 48vh;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1545552663-0eb050bb04c3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YmVhY2glMjByb29tfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" loading="lazy" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="tab === 2">
                                <div x-show="tab === 2"   x-transition:enter="transition duration-1000 transform ease-in-out" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img style="height: 48vh;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1520483601560-389dff434fdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGJlYWNoJTIwaG90ZWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" loading="lazy" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="tab === 3">
                                <div x-show="tab === 3"   x-transition:enter="transition duration-1000 transform ease-in-out" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img style="height: 48vh;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1537640685236-a9df2496e232?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8YmVhY2glMjBob3RlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" loading="lazy" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="tab === 4">
                                <div x-show="tab === 4"   x-transition:enter="transition duration-1000 transform ease-in-out" x-transition:enter-start="opacity-0">
                                    <div>
                                        <img style="height: 48vh;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1592229506490-dda533630362?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njl8fGJlYWNoJTIwaG90ZWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" loading="lazy" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="absolute -bottom-36 right-0 w-72 transform rotate-45-xx opacity-70" style="--tw-rotate: 56deg;" >
                    <img src="{{ asset('images/leaf_b.png') }}" alt="tropical leaf">
                </div>

            </section>

            <section class=" theme-wrap py-20 relative">

                <div class="w-7/12 m-auto">
                    <div class="text-center">
                        <div class="signature text-5xl ">Things to do</div>
                    </div>
                    <div class="text-center">
                        <div class="pb-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-5 ">
                            <div>
                                <div><img style="height:450px;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1544132682-d5e91c4a0974?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8c3RhbmR1cCUyMGJvYXJkfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt=""></div>
                                <div>Standup Board</div>
                            </div>
                            <div>
                                <div><img style="height:450px;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1600418305287-f700a713d0be?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25vcmtsaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt=""></div>
                                <div>Snorkel</div>
                            </div>
                            <div>
                                <div><img style="height:450px;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1622040959024-e4c57e79b1e9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGtheWFrfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt=""></div>
                                <div>Kayak</div>
                            </div>

                            <div>
                                <div><img style="height:450px;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1496273626145-58a523ac0b5e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmFmdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt=""></div>
                                <div>Raft</div>
                            </div>
                            <div>
                                <div><img style="height:450px;" class="w-full object-cover object-center" src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bWFzc2FnZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt=""></div>
                                <div>Massage</div>
                            </div>
                            <div>
                                <div><img style="height:450px;" class="w-full object-cover object-center" src="https://media.istockphoto.com/photos/happy-traveler-womn-in-hammock-relaxing-on-swing-and-looking-nature-picture-id1305268329?b=1&k=20&m=1305268329&s=170667a&w=0&h=Rm3QTDV906WWIVifA_ZNg9Ryy7-N_qyRoAuOZGE3fh0=" alt=""></div>
                                <div>Hammock</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute -bottom-6 left-0 w-1/4" style="transform: scaleX(-1);">
                    <img src="{{ asset('images/tropical_leaves.png') }}" alt="tropical leaves">
                </div>
            </section>

            <section class="py-28 bg-dark_brown text-white relative">
                <div class="theme-wrap">
                    <div class="text-center pb-10">
                        <div class="signature text-5xl">Events</div>
                    </div>
                    <div class="space-y-8">
                        <div class="block lg:flex w-10/12 m-auto">
                            <div class="lg:order-1 w-7/12 pr-14">
                                <img src="https://scontent.fmnl25-2.fna.fbcdn.net/v/t39.30808-6/242201657_10159339760046343_4154711142108487388_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=730e14&_nc_ohc=_RccD07SThYAX-qc_Vv&_nc_ht=scontent.fmnl25-2.fna&oh=33e989ce327b425ab889189040bd8171&oe=615203B4" alt="">
                            </div>
                            <div class="lg:order-2 w-5/12 mt-20">
                                <div class="text-4xl">Beach Baazar</div>
                                <div class="text-xl">date</div>
                                <div class="py-8">
                                    you will discover monumental works. An opportunity to open your senses and give free rein to your emotions.
                                </div>
                                <div>find out more</div>
                            </div>
                        </div>

                        <div class="block lg:flex w-10/12 m-auto">
                            <div class="lg:order-2 w-7/12 pl-14">
                                <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.6435-9/186243881_142268927918387_5661648663368605625_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=730e14&_nc_ohc=SF5A5x7mD6kAX_Il-Oo&_nc_ht=scontent.fceb2-1.fna&oh=48d3483e8c4fdd2be17225df6a483e12&oe=61737BC5" alt="">
                            </div>
                            <div class="lg:order-1 w-5/12 mt-20">
                                <div class="text-4xl">Yoga Wine</div>
                                <div class="text-xl">date</div>
                                <div class="py-8">
                                    you will discover monumental works. An opportunity to open your senses and give free rein to your emotions.
                                </div>
                                <div>find out more</div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="absolute -bottom-0 right-8 w-72 transform -rotate-45"  style="z-index: 0;">
                    <img src="{{ asset('images/leaf_c.png') }}" alt="tropical leaves">
                </div>
            </section>


            <section class="theme-wrap pt-24">
                <div>
                    <div class="heading_text text-5xl">Meet Our </div>
                    <div class="signature text-6xl pl-6">Furry Residents</div>
                </div>
                <div class="py-6 relative " style="display: grid; position: relative; grid-template-columns: repeat(26, minmax(0, 1fr));">
                    <div class="" style="grid-row: 1; grid-column: 1 / span 14; ">
                        <div class="pt-8">
                            <img style="height:450px;" class="w-full object-cover object-center" src="https://images.pexels.com/photos/2253275/pexels-photo-2253275.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" loading="lazy" alt="">
                        </div>
                        <div>
                            <div>name</div>
                            <div></div>
                        </div>
                    </div>

                    <div class=" "  style="grid-column: 13 / -1; grid-row: 1; z-index: 1;">
                        <div class="">
                            <img style="height:400px;" class="w-full object-cover object-center" src="https://images.pexels.com/photos/731022/pexels-photo-731022.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" loading="lazy" alt="">
                        </div>
                        <div>
                            <div>name</div>
                            <div></div>
                        </div>
                    </div>

                    <div class="" style="grid-column: 2 / 16; grid-row: 2; z-index: 2;">
                        <div class="">
                            <img style="height:400px;" class="w-full object-cover object-center" src="https://images.pexels.com/photos/4681107/pexels-photo-4681107.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" loading="lazy" alt="">
                        </div>
                        <div>
                            <div>name</div>
                            <div></div>
                        </div>
                    </div>

                    <div class="" style="grid-column: 15 / -1; grid-row: 2; position: relative; top: -14%; right: 4%; z-index: 1;">
                        <div class="">
                            <img style="height:550px;" class="w-full object-cover object-center" src="https://images.pexels.com/photos/2252311/pexels-photo-2252311.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" loading="lazy" alt="">
                        </div>
                        <div>
                            <div>name</div>
                            <div></div>
                        </div>
                    </div>

                    <div class=""  style="grid-column: 4 / -5; grid-row: 3; position: relative; top: -26%;">
                        <div class="">
                            <img style="height:450px;" class="w-full object-cover object-center" src="https://images.pexels.com/photos/2906033/pexels-photo-2906033.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" loading="lazy" alt="">
                        </div>
                        <div>
                            <div>name</div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="theme-wrap pb-16">
                <div>
                    grm
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