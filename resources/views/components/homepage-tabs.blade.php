

                <div class="flex w-6/12 m-auto">
                    <div class=" flex flex-row items-stretch justify-center w-full max-w-4xl space-x-12" x-data="{ tab: 1 } ">

                        <div class="flex flex-col justify-start w-2/4 space-y-4">
                            <a class="px-4 py-2 text-sm" :class="{'font-bold': tab === 1 }" href="#" @click.prevent="tab = 1">
                                BATMAN & ROBIN
                            </a>
                            <a class="px-4 py-2 text-sm" :class="{'font-bold': tab === 2 }" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                                BATMAN V SUPERMAN: DAWN OF JUSTICE (2016)
                            </a>
                        </div>


                        <div class="w-3/4">
                            <div class="space-y-6" x-show="tab === 1">
                                <div x-show="tab === 1"  x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    <h3 class="text-xl font-bold leading-tight" >
                                        BATMAN & ROBIN
                                    </h3>
                                    <div>
                                        the quick brown fox jumps over the lazy dog.
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-6" x-show="tab === 2">
                                
                                <div x-show="tab === 2"   x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                                    <h3 class="text-xl font-bold leading-tight" >
                                        BATMAN V SUPERMAN: DAWN OF JUSTICE (2016)
                                    </h3>
                                    <div>
                                        the quick brown fox jumps over the lazy dog.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
        

                </div>