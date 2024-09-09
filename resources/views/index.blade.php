<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://fonts.cdnfonts.com/css/scarecrow" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')


</head>

<body class="box-border p-0 m-0 left-0 right-0">
    <header class=" sticky top-0 z-50   box-border backdrop-blur-xl ">
        <nav class="flex border border-b-black  w-full">
            <ul id="header-text" class="flex justify-between items-center border border-red-200 w-full transition-all">
                <li class="mx-4 font-bold"><a href="{{url('/')}}">Home</a></li>
                <div class="flex gap-5 font-semibold p-2">
                    <li><a href="{{route('posyandu')}}">Posyandu</a></li>
                    <li><a href="{{route('kalkulator')}}">Kalkulator</a></li>

                    </li>
                    <li class="mr-2"><a href="#">Contact</a></li>
                    <li class="w-5 justify-center items-center flex"><a href=""><img src="images/icon/menu.svg" alt=""></a></li>
                </div>
            </ul>
        </nav>
    </header>

    <main>
        <div class=" overflow-wrap">
            <section class="relative border border-black h-screen flex flex-col " id="section1">
                <!-- Menggunakan container dan mx-auto untuk menengah secara horizontal -->
                <div class="absolute -z-10 w-full h-full  border border-black">
                    <img src="images/index/bayi.jpeg" alt="Example Image" class=" w-full h-full object-cover">
                </div>

                <div class="relative p-4 border border-amber-500 h-full flex flex-col">
                    <div
                        class="md:h-full  relative flex items-center m-2 text-white border  border-white text-center flex flex-col  ">

                        <h1
                            class="shadow md:w-[40vw] md:text-[10vw] md:h-full   font-bold text-[20vw] w-[70%] break-all drop-shadow-3d  drop-shadow-2xl ">
                            BESTI
                        </h1>
                        <p class="text-[10px] tracking-widest font-sans"><span>B</span><span>e</span>rita
                            <span>S</span><Span>t</Span>unt<span>i</span>ng
                        </p>
                        <h2
                            class="  md:w-full md:justify-center md:translate-left-20px flex flex-wrap items-center border border-white text- w-full italic  justify-center">
                            Kelurahan Kejaksan</h2>



                    </div>
                    <div
                        class=" relative border border-white flex flex-col mt-auto text-white text-center align-center mx-auto font-extralight text-[0.4rem]">
                        <p class="">made with LPPM 44</p>
                        <p>Universitas Muhammadiyah Cirebon</p>
                    </div>

                </div>
            </section>
        </div>
        <div class="xl:container mx-auto box-border overflow-hidden min-h-full">
            <section class="w-full flex flex-col box-border border mb-2">
                <div
                    class="flex flex-col xl:flex-row  m-auto py-10 px-2 border border-black box-border relative shadow-xl drop-shadow-2xl text-wrap">
                    <!-- Gambar -->
                    <div
                        class=" rounded-xl relative drop-shadow-2xl shadow-2xl text-wrap mb-4 xl:mb-0 sm:w-1/3 sm:mx-auto">
                        <img src="images/index/i.jpg" alt="Descriptive alt text"
                            class="w-full h-auto object-cover rounded-xl">
                    </div>
                    <!-- Teks -->
                    <div
                        class="flex flex-col w-full sm:w-full text-wrap rounded-2xl shadow-xl drop-shadow-2xl border box-border  ">
                        <h3 class="font-extrabold font-mono text-2xl border-b-4 p-2">
                            Pola Hidup Higienis & Sanitasi
                        </h3>
                        <p>
                            Mengadopsi pola hidup higienis dan praktik sanitasi yang baik merupakan langkah
                            fundamental dalam menjaga kesehatan individu dan masyarakat. Pola hidup higienis
                            mencakup berbagai kebiasaan sehari-hari yang bertujuan untuk mencegah penyebaran
                            penyakit dan menjaga kebersihan pribadi. Berikut adalah beberapa aspek penting dalam
                            pola hidup higienis:
                        </p>

                        <h3>1. Kebersihan Pribadi</h3>
                        <ul>
                            <li>
                                <strong>Mencuci Tangan:</strong> Mencuci tangan dengan sabun dan air bersih adalah
                                salah satu cara paling efektif untuk mencegah infeksi. Lakukan sebelum makan,
                                setelah menggunakan toilet, dan setelah melakukan aktivitas yang berpotensi
                                menyebarkan kuman.
                            </li>
                            <li>
                                <strong>Kebersihan Mulut dan Gigi:</strong> Menyikat gigi setidaknya dua kali sehari
                                membantu mencegah masalah kesehatan gigi dan mulut seperti karies dan radang gusi.
                            </li>
                            <li>
                                <strong>Mandi Teratur:</strong> Mandi setiap hari membantu menjaga kebersihan tubuh
                                dan mencegah penumpukan bakteri serta bau badan yang tidak sedap.
                            </li>
                        </ul>

                        <h3>2. Kebersihan Lingkungan</h3>
                        <ul>
                            <li>
                                <strong>Pengelolaan Sampah:</strong> Buang sampah pada tempatnya dan pisahkan sampah
                                organik dari non-organik. Lingkungan yang bersih akan mengurangi risiko penyakit
                                yang ditularkan melalui vektor seperti nyamuk dan lalat.
                            </li>
                            <li>
                                <strong>Sanitasi Air:</strong> Pastikan air yang digunakan untuk minum dan memasak
                                berasal dari sumber yang aman. Gunakan air bersih yang telah dimasak atau diolah
                                dengan baik.
                            </li>
                        </ul>

                        <h3>3. Pentingnya Sanitasi yang Baik</h3>
                        <ul>
                            <li>
                                <strong>Penyediaan Toilet yang Layak:</strong> Toilet yang bersih dan tertutup
                                mencegah kontaminasi lingkungan dan penyebaran penyakit. Penggunaan toilet yang
                                sehat juga merupakan bagian dari menjaga sanitasi yang baik.
                            </li>
                            <li>
                                <strong>Pengelolaan Limbah:</strong> Penanganan limbah rumah tangga dan limbah
                                industri dengan cara yang aman sangat penting untuk mencegah polusi dan menjaga
                                kesehatan masyarakat.
                            </li>
                        </ul>

                        <h3>4. Peran Edukasi</h3>
                        <ul>
                            <li>
                                <strong>Penyuluhan dan Pendidikan:</strong> Mengedukasi masyarakat tentang
                                pentingnya hidup higienis dan sanitasi akan menciptakan perubahan perilaku positif.
                                Program penyuluhan di sekolah, rumah, dan komunitas sangat efektif untuk
                                meningkatkan kesadaran dan praktik hidup sehat.
                            </li>
                        </ul>
                        </p>
                    </div>

                </div>

        </div>



        </section>
        <section class="w-full h-screen border border-black mt-3 overflow-hidden ">
            <div class="border border-black  overflow-wrap relative overflow-wrap ">
                <div class="flex   m-auto  py-10 px-2 border border-black  box-border h-dvh relative ">
                    <div class="flex w-[60%] z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                        ipsum
                        laboriosam similique culpa temporibus possimus provident maiores omnis optio explicabo.
                    </div>
                    <div class=" max-h-full  w-[40%] mx-2  self-center   ">
                        <img src="images/index/telur.png" class=" object-cover" alt="">

                    </div>



                </div>
            </div>
        </section>
        </div>

    </main>
    <script>
        document.addEventListener('scroll', function () {
            const section1 = document.getElementById('section1');
            const headerText = document.getElementById('header-text');
            const section1Top = section1.getBoundingClientRect().top;

            if (section1Top <= 0 && section1Top + section1.offsetHeight > 0) {
                headerText.classList.add('text-white');
            } else {
                headerText.classList.remove('text-white');
            }
        });


    </script>
</body>

</html>