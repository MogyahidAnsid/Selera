<div class="relative">

    <livewire:navbar />

    <div class="md:flex">
        <div class="w-full md:pl-5 lg:px-10">
            <!-- Banner -->
            <div class="lg:mt-10">
                <figure class="w-full bg-red-400 rounded-lg h-52 max-w-7xl mx-auto">
                    <img class="w-full rounded-lg h-full object-cover aspect-auto"
                        src="https://plus.unsplash.com/premium_photo-1673108852141-e8c3c22a4a22?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt="">
                </figure>
            </div>

            <!--- Categories -->
            <div class="grid lg:grid-cols-8 md:grid-cols-4 gap-3 max-w-7xl mx-auto lg:py-10 md:py-5">
                <button class="bg-orange-500 text-white font-semibold lg:p-2.5 rounded-full">All (56)</button>
                <button
                    class="bg-gray-100 text-gray-800 font-semibold p-2.5  rounded-full hover:bg-orange-100 duration-200">
                    Soft Foods (12)</button>
                <button
                    class="bg-gray-100 text-gray-800 font-semibold p-2.5  rounded-full hover:bg-orange-100 duration-200">
                    Desserts (8)</button>
                <button
                    class="bg-gray-100 text-gray-800 font-semibold p-2.5  rounded-full hover:bg-orange-100 duration-200">
                    Drinks (15)</button>
            </div>

            <!--- Food Display -->
            <div class="max-w-7xl mx-auto">
                <h1 class="font-bold text-2xl">Popular Dishes</h1>
                <div class="grid lg:grid-cols-5 md:grid-cols-2 gap-3 lg:gap-y-10 mt-5">
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZCUyMGluJTIwcGxhdGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1539735257177-0d3949225f96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Zm9vZCUyMGluJTIwcGxhdGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1528738064262-9f834cbdfda1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Zm9vZCUyMGluJTIwcGxhdGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1516684465974-78661ba8165d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGZvb2QlMjBpbiUyMHBsYXRlfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y29mZmVlfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1503481766315-7a586b20f66d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fGNvZmZlZXxlbnwwfDB8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dGVhfGVufDB8MHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                        <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                            <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZGlubmVyfGVufDB8MHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                alt="" class="w-full rounded h-full object-cover aspect-auto">
                        </figure>

                        <div class="p-2 md:flex-1">
                            <div class="flex relative items-center justify-between">
                                <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                            </div>
                            <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                            <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                            <button
                                class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                </svg>
                            </button>

                            <div class="lg:block md:hidden w-full mt-2">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                    to Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Discounts and Offers -->
                <div class="mt-10">
                    <h1 class="font-bold text-2xl">Top Discounts and Offers</h1>
                    <div class="grid lg:grid-cols-5 md:grid-cols-2 gap-3 lg:gap-y-10 mt-5">
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fGRpbm5lcnxlbnwwfDB8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1475090169767-40ed8d18f67d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1514460154823-73e3f57f72d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1567234669003-dce7a7a88821?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1517652792063-9c3118770d54?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1541833000669-8dbe1bfb574a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEzfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-gray-50 border rounded md:h-30 md:p-2 lg:p-0 lg:block md:flex md:justify-start md:items-start relative">
                            <figure class="lg:w-full lg:h-36 md:w-24 md:h-full">
                                <img src="https://images.unsplash.com/photo-1484344597163-9347ad5cb26d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                                    alt="" class="w-full rounded h-full object-cover aspect-auto">
                            </figure>

                            <div class="p-2 md:flex-1">
                                <div class="flex relative items-center justify-between">
                                    <h2 class="font-semibold">Pesto Pasta Grill</h2>
                                    <h1 class="font-semibold md:hidden lg:block">₱300.00</h1>
                                </div>
                                <p class="text-gray-500 font-medium text-sm">Pasta, Chocolate, String bins...</p>
                                <h1 class="font-semibold lg:hidden md:block">₱300.00</h1>

                                <button
                                    class="bg-orange-500 hover:bg-orange-600 duration-200 text-white absolute top-0 right-0 p-2 lg:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 9V6H8V4h3V1h2v3h3v2h-3v3h-2ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22Zm2-5H3.625L6.6 11.6L3 4H1V2h3.275l4.25 9h7.025l3.875-7H21.7l-4.975 9H8.1L7 15h12v2Z" />
                                    </svg>
                                </button>

                                <div class="lg:block md:hidden w-full mt-2">
                                    <button
                                        class="text-white bg-orange-500 hover:bg-orange-600 duration-200 p-2 text-sm font-semibold rounded w-full">Add
                                        to Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart -->
        <div class="bg-white shadow-xl fixed inset-y-0 w-96 ml-0 right-0 h-screen z-50 mt-0 pt-5">
            {{-- <div class="absolute bg-red-500 h-full w-10 -left-2 inset-y-0 -z-10 rounded-tl-full"></div> --}}

            <div class="lg:px-5 md:px-3 z-50 h-full relative">
                <div class="flex justify-between items-center lg:py-5">
                    <h2 class="font-bold text-2xl">Your Orders</h2>
                    <button
                        class="font-semibold border lg:px-3 md:p-1.5 bg-gray-100 hover:bg-gray-200 duration-200 rounded text-gray-700 text-md">
                        <svg class="lg:hidden md:block" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4 4h6v6H4V4m16 0v6h-6V4h6m-6 11h2v-2h-2v-2h2v2h2v-2h2v2h-2v2h2v3h-2v2h-2v-2h-3v2h-2v-4h3v-1m2 0v3h2v-3h-2M4 20v-6h6v6H4M6 6v2h2V6H6m10 0v2h2V6h-2M6 16v2h2v-2H6m-2-5h2v2H4v-2m5 0h4v4h-2v-2H9v-2m2-5h2v4h-2V6M2 2v4H0V2a2 2 0 0 1 2-2h4v2H2m20-2a2 2 0 0 1 2 2v4h-2V2h-4V0h4M2 18v4h4v2H2a2 2 0 0 1-2-2v-4h2m20 4v-4h2v4a2 2 0 0 1-2 2h-4v-2h4Z" />
                        </svg>
                        <span class="md:hidden lg:block">Scan
                            QR</span>
                    </button>
                    {{-- <h2 class="font-semibold text-gray-400 text-xl">Room #101</h2> --}}
                </div>

                <button
                    class="absolute bg-orange-500 hover:bg-orange-600 duration-200 p-1 -left-5 lg:top-6 md:top-2 rounded-full text-white block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41z" />
                    </svg>
                </button>

                <div class="lg:pb-4 md:pt-5 space-y-2 lg:overflow-y-auto">
                    <div class="shadow p-1.5 lg:h-20 md:h-16 justify-between rounded-md flex items-start space-x-3">
                        <div class="flex h-full items-start">
                            <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                                alt="" class="bg-red-200 h-full lg:w-20 md:w-16 rounded-md object-cover">

                            <div class="flex ml-3 flex-col justify-between">
                                <div class="leading-tight md:flex lg:block">
                                    <h2 class="font-semibold">Cape Verder</h2>
                                    <span class="text-gray-500 text-sm"><span class="ml-2 lg:hidden">• </span>
                                        Dessert</span>
                                </div>

                                <p class="font-semibold md:mt-1.5 lg:mt-0">₱78.00 <span
                                        class="text-xs text-gray-400">x2</span></p>
                            </div>
                        </div>

                        <div>+</div>
                    </div>
                </div>


                <div class="absolute bottom-5 w-full md:pr-6 lg:pr-10">
                    <div class="flex pb-7 pt-4 border-t-2 text-lg border-dashed mt-4 items-center justify-between">
                        <h2 class="font-bold">Total Order:</h2>
                        <h2 class="font-semibold">₱548.00</h2>
                    </div>

                    <button
                        class="bg-orange-500 flex items-center space-x-2 hover:bg-orange-600 text-white py-3 rounded-md font-semibold w-full justify-center">
                        <span>Place Order</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M13.3 17.275q-.3-.3-.288-.725t.313-.725L16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.3-.713t.3-.712q.3-.3.713-.3t.712.3L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.687.275t-.713-.3Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>