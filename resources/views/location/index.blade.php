<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="w-full fixed z-50 box-border backdrop-blur-xl">
        <nav class="flex justify-between items-center border border-b-black w-full">
            <!-- Bagian kiri untuk Home -->
            <div class="mx-4 font-bold">
                <a href="{{url('/')}}">Home</a>
            </div>

            <!-- Tombol menu yang muncul pada layar kecil -->
            <div class="sm:hidden">
                <button id="menu-toggle" class="p-4">
                    <div class="bar w-6 h-1 bg-black mb-1"></div>
                    <div class="bar w-6 h-1 bg-black mb-1"></div>
                    <div class="bar w-6 h-1 bg-black"></div>
                </button>
            </div>

            <!-- Bagian kanan untuk menu di layar besar dan kecil -->
            <ul class="hidden sm:flex gap-5 font-semibold p-2">
                <li><a href="{{route('posyandu')}}">Posyandu</a></li>
                <li><a href="{{route('kalkulator')}}">Kalkulator</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <!-- Menu link yang di-hidden pada layar besar dan muncul pada layar kecil -->



            <div id="mobile-menu"
                class="flex flex-col gap-2 font-semibold p-2 sm:hidden z-90 top-16 right-0 w-full absolute  shadow-lg hidden backdrop-blur-lg bg-white/30 ">
                <ul class="z-50 relative">
                    <li><a href="{{route('posyandu')}}">Posyandu</a></li>
                    <li><a href="{{route('kalkulator')}}">Kalkulator</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

            </div>


        </nav>
    </header>


    <div>
        <img src="background/kejaksan.jpg"
            class="sm:w-full sm:h-screen sm:object-cover sm:absolute  h-0 invisible   md:visible " alt="">
    </div>
    <main class="flex flex-col min-h-screen ">
        <section
            class="w-full min-h-screen justify-center items-center box-border  border-4  border-black flex flex-wrap sm:flex-col ">


            <div
                class="border box-border flex flex-wrap gap-5 border-red-300 items-center justify-center py-20 sm:container">
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>
                <div
                    class="sm:bg-[#F5F5F7]  drop-shadow-md border-t-2 border-2 flex flex-col rounded-xl w-full sm:w-[48%] md:w-[30%] lg:w-[22%]">
                    <div class="pt-5 px-2 drop-shadow-2xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.159059928758!2d-122.4089820846811!3d37.78378897975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c61d5e3a5%3A0x2c20a67877f3b9d!2s1600+Palo+Alto+Ln%2C+Palo+Alto%2C+CA+94301%2C+USA!5e0!3m2!1sen!2sid!4v1611234567890!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="drop-shadow-2xl bg-white mt-2 rounded-b-xl p-2 text-center">
                        <h1>Posyandu Mawar 01</h1>
                    </div>
                </div>

            </div>

            <!-- Repeat for remaining items -->

            </div>


        </section>
    </main>
    <footer>
        <div class="rel">
            <p>terimakasih semuanya kontol</p>
        </div>

    </footer>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });

    </script>
</body>

</html>