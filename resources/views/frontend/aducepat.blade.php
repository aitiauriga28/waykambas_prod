@extends('layouts.index')

@section('meta')
    @include('partials.metaStory')
@endsection

@section('content')

    @include('partials.topbar')
    <!-- hero -->
    <section class="relative sm:block hidden" x-data="{hero: false}">
        <div class=" py-6 storyaducepat" >

            <!-- nav -->
            <div class="max-w-7xl px-4 py-3  mx-auto relative ">
                <!-- bahasa -->
                {{-- <div class="sm:flex hidden justify-end">
                    <div class="flex space-x-1 text-sm text-gray-400">
                        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="cursor-pointer @if(App::getLocale() == 'id') text-white font-bold @endif">Indonesia</a>
                        <span class="border-r border-green-600"></span>
                        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="cursor-pointer @if(App::getLocale() == 'en') text-white font-bold @endif">English</a>
                    </div>
                </div> --}}
                <!-- nav -->
                <div class=" justify-between items-center sm:flex hidden">
                    <div class="flex space-x-4 items-center mb-2">
                        <h1 class="text-4xl font-bold text-white mr-6"> <a href="index.html">Rawa Kadut</a> </h1>
                        <!-- about -->
                        <div class="flex-col flex" x-data="{pages:false}">
                            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-white cursor-pointer inline-flex   items-center" >About
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-1 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2" x-show="pages" x-cloak style="display: none !important">
                                <a href="{{ route('whoweare', app()->getlocale() )}}" class="text-sm mr-6">Siapa Kami</a>
                                <a href="{{ route('waykambas', app()->getlocale() )}}" class="text-sm mr-6">Way Kambas</a>
                                <a href="{{ route('rawakadut', app()->getlocale() )}}" class="text-sm mr-6">Restorasi Kadut</a>
                            </div>
                        </div>

                            <a href="{{ route('azrestoration', app()->getlocale() )}}" class="text-white">A-Z Restoration</a>

                        {{-- <a href="#" class="text-white">Kebakaran</a> --}}
                        <div class="@if ($nav === 'story') border-b border-white @endif">
                            <a href="{{ route('story', app()->getlocale() )}}" class="text-white">Story</a>
                        </div>
                        <a href="{{ route('diary', app()->getlocale() )}}" class="text-white">Diary</a>
                    </div>
                    <div class="flex space-x-4 items-center">
                        <button class="bg-green-600 px-8  text-sm font-bold py-1 text-white hover:bg-white border border-green-600 hover:text-green-600">Donate</button>
                    </div>
                </div>
            </div>
            <div class="flex h-full items-center max-w-5xl mx-auto" >
                <div class=" text-center  text-white  w-full flex flex-col">
                    <h1 class=" sm:text-7xl text-5xl font-bold inline-flex justify-center">{{ $text }}</h1>
                    <p class="">Disalin sepenuhnya dari: <br> <a href="https://auriga.or.id/resource/reference/ekuilibrium_konservasi_menjaga_keseimbangan_di_taman_nasional_way_kambas.pdf" class="underline">Ekuilibrium Konservasi: Menjaga Keseimbangan di Taman Nasional Way Kambas</a> (<a href="https://tfcasumatera.org/" class="underline">TFCA Sumatera</a>, 2017)</p>
                </div>
            </div>

            <div @click="hero =! hero" class=" z-50 cursor-pointer absolute rounded-full bg-gray-100 opacity-80 bottom-6 right-6 h-5 w-5  text-black flex justify-center items-center">
                <a class="text-sm select-none">i</a>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-22 bg-gray-600 opacity-70" x-show="hero">
                <div class="max-w-7xl mx-auto text-white flex items-center py-2 px-12 sm:text-normal text-sm">
                    {{$imgdesc}}
                </div>
            </div>
        </div>
        <div class="">

        </div>
        <div x-data="{ open: true }" @scroll.window="open = (window.pageYOffset > 50) ? false : true">
            <div class="fixed z-20 inset-x-0 bottom-5 cursor-pointer " x-show="open" x-transition="">
                <div class="sm:px-4 px-2 sm:py-4 py-2  flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                      </svg>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sm:hidden block">
            <img src="{{ asset('assets/'.$imageHero.'')}}" alt="{{$title}}" class="w-full h-full">
        </div>
        <div class="px-4 mt-4 text-center sm:hidden block">
            <h1 class="text-2xl font-bold ">{{ $text }}</h1>
            <p class="">Disalin sepenuhnya dari: <br> <a href="https://auriga.or.id/resource/reference/ekuilibrium_konservasi_menjaga_keseimbangan_di_taman_nasional_way_kambas.pdf" class="underline">Ekuilibrium Konservasi: Menjaga Keseimbangan di Taman Nasional Way Kambas</a> (<a href="https://tfcasumatera.org/" class="underline">TFCA Sumatera</a>, 2017)</p>
        </div>
        <div class="max-w-6xl mx-auto "  >
            <div class="w-full py-8 flex justify-center">
                <div class="px-4 sm:w-6/12 w-full ">
                    <h1 class="text-xl ">Luasnya hamparan ilalang menjadi tengara masa lalu masih menggelayuti Way Kambas. Untuk menumpas rumput tangguh itu, hutan ditumbuhkan kembali. Namun, upaya pemulihan hutan sungguh tidak mudah. </h1>
                </div>
            </div>

            <div class="py-4 ">
                <div class="px-4">
                    <img src="{{asset('assets/2.png')}}" alt="" class="w-full h-full">
                    <p class="text-sm mt-1 italic ">Nyaris tak ada pohon di hamparan alang-alang. Ulah pemburu
                        liar yang membakar rumput berulang-ulang telah menghentikan
                        proses suksesi alami. Dan terciptalah ekosistem ilalang. AGUS PRIJONO</p>
                </div>
            </div>
            <div class="py-6 ">
                <div class="w-full flex sm:flex-row flex-col justify-between px-4 mt-4   sm:space-x-4 space-x-0 text-justify text-sm">

                    <div class="flex sm:flex-row flex-col  sm:space-x-4 space-x-0 sm:w-6/12 w-full h-full">

                        <div class="h-full  sm:px-4 px-0 border-black">
                            <blockquote class="text-center italic text-red-800 font-semibold text-2xl sm:mt-0 mt-4"><p>"Upaya reforestasi di Rawa Kadut akan menautkan hutan di timur dengan hutan di sisi barat taman nasional."</p></blockquote>
                            <p class="leading-relaxed new-font mt-4" ><a class="font-semibold text-xl">R</a>inai hujan sepertinya enggan berhenti. Sudah sejak pagi, gerimis mengguyur Way Kambas. Tak menghiraukan cuaca yang basah, Tim reforestasi itu beranjak ke jantung taman nasional. Serejang menunggu hujan reda, Fajar Sandika Negara dan timnya berteduh di kedai sederhana. Kopi hangat menemani koodinator reforestasi Konsorsium AL eRT-Universitas Lampung itu</p>
                            <p class="mt-4 leading-relaxed new-font ">Hari itu, dia hendak ke lokasi reforestasi, atau penghutanan
                                kembali, Rawa Kadut di Resor Toto Projo, Seksi Pengelolaan Taman
                                Nasional (SPTN) II Bungur, Taman Nasional Way Kambas. Rawa
                                Kadut berada di tengah padang ilalang di jantung taman nasional.
                                Di sisi timur Rawa Kadut membentang hutan dataran rendah, dan
                                di sisi barat terdapat sederet hutan yang ringkih. Kendati didomi
                                -
                                nasi ilalang, hutan tumbuh hijau di sepanjang sungai kecil. Deretan
                                hutan ini membentuk jaringan seperti lengan gurita: menjalar ke
                                segala arah mengikuti anak sungai.</p>
                            <p class="mt-4 leading-relaxed new-font">Kopi telah tandas di dasar gelas. Kendati cuaca tak pasti, dia tetap
                                berangkat berombongan dengan sepeda motor. Roda-roda sepeda
                                motor mengaduk setapak yang berlumpur. Setelah menyeberangi
                                sungai dengan menumpang rakit yang rapuh, rombongan menem
                                -
                                bus hutan sekunder. Aroma hutan mengapung di udara. Pepohonan
                                tumbuh rapat. Air menggenang, jalan setapak berlumpur.</p>
                            <p class="mt-4 leading-relaxed new-font">Keluar dari hutan, rombongan mulai menembus hamparan alangalang. Di segala penjuru, rumput berbulu itu merajai bentang alam.
                                Di batas cakrawala, hutan berbaris jarang-jarang. Hutan galeri tumbuh
                                di sepanjang aliran sungai kecil. Sisa-sisa kejayaan hutan di masa
                                lalu terlihat dari satu dua pohon yang masih bertahan hidup. Dalam
                                pandangan 360 derajat, ilalang menguasai bentang alam. </p>

                        </div>
                    </div>

                    <div class="sm:w-6/12 w-full">
                        <img src="{{asset('assets/3.png')}}" alt="" class="sm:h-screen h-full object-cover">
                        <p class="text-sm mt-1 italic">Menjulang di tengah padang, pohon ini menunjukkan hutan pernah menyelimuti kawasan Rawa Kadut. Kini, perlu usaha keras untuk memulihkan kembali hutan yang telah sirna. AGUS PRIJONO</p>
                    </div>
                </div>
            </div>

            <div class="py-6 ">
                <div class="w-full justify-between px-4 mt-4   text-justify text-sm">
                    <div class="relative">
                        <img src="{{asset('assets/4.png')}}" alt="" class=" w-full relative">

                            <p class="sm:absolute  bottom-3 right-0 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-6/12 sm:not-italic italic">Untuk menjangkau areal penghutanan kembali, tim harus menyeberangi sungai di perbatasan taman nasional. Tempat penyeberangan ini akan terputus bila air sungai meluap. Lokasi yang terpencil mempersulit akses menuju areal reforestasi. AGUS PRIJONO </p>

                    </div>
                    <div class="mt-4 max-w-2xl mx-auto w-full h-full">
                            <p class="leading-relaxed new-font">Dari batas hutan tadi, jarak ke Rawa Kadut sekitar 10 kilometer.
                                “Itu jarak lurus di atas peta,” ujar Fajar. Tapi di lapangan, ia menempuh jarak lebih jauh karena jalan yang berbelok-belok. Di hamparan
                                alang-alang itu, angin berhembus leluasa tanpa penghalang. Langit
                                membentang lapang. Hujan yang baru turun seolah tak berbekas. Air
                                begitu cepat menguap. </p>
                            <p class="mt-4 leading-relaxed new-font">Munculnya lautan ilalang ini lantaran perbuatan manusia. Fajar
                                mengatakan, pada era 1970-an, perusahaan hutan pernah mengelola
                                wilayah ini. Dahulu, wilayah taman nasional memang areal konsesi
                                pengusahaan hutan selama kurun 1970-an hingga 1980-an. </p>
                            <p class="leading-relaxed new-font mt-4">Setelah itu, pembalak liar menebangi pohon hingga awal 2000.
                                Ganasnya pembalakan liar tak menyisakan pepohonan. Bahkan
                                tonggak akar pun tak ada bekasnya. Akibatnya, hutan semakin
                                terbuka, lalu tumbuhlah ilalang. </p>
                            <p class="mt-4 leading-relaxed new-font">Sialnya, itu bukan pukulan terakhir. Setelah itu, orang-orang tak
                                bertanggung jawab menggunakan padang ilalang sebagai ladang
                                perburuan. Mereka menyasar satwa dengan cara membakar lahan.
                                Ilalang makin merajalela, pohon hutan semakin sulit tumbuh. Tanpa
                                disadari, pembakaran berulang-ulang telah menciptakan bentang
                                alam buatan manusia: ekosistem padang ilalang. </p>
                            <p class="mt-4 leading-relaxed new-font">Sebenarnya, tanpa campur tangan manusia, hutan Way Kambas
                                yang pernah ditebang bisa memulihkan diri. Melalui kondisi tanah
                                dan anakan vegetasi, tangan alam dapat melakukan suksesi alami.
                                Secara alami, hutan sebenarnya punya daya lenting: ia bisa memulihkan kembali.</p>
                            <p class="mt-4 leading-relaxed new-font">Dari 125.621 hektare luas taman nasional, hanya 78.500 hektare
                                atau 60 persen yang diselimuti hutan dataran rendah. Sisanya 40
                                persen terdiri dari hutan mangrove, hutan rawa, ilalang dan belukar.
                                Data Balai Taman Nasional menyebutkan, hamparan ilalang mencakup luasan 27.000 hektare. </p>




                    </div>
                    <div class="relative mt-4">
                        <img src="{{asset('assets/6.png')}}" alt="" class=" w-full relative">

                            <p class="sm:absolute  bottom-3 right-0 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-6/12 sm:not-italic italic">Pondok kerja di lapangan untuk menjaga, merawat, dan memastikan bibit tanaman dapat tumbuh secara normal. Aktivitas di pondok kerja juga untuk mencegah pemburu liar masuk taman nasional. Sayangnya, upaya pencegahan itu tak selalu berhasil. Pemburu tetap saja membakar lahan untuk memburu satwa liar. AGUS PRIJONO </p>

                    </div>
                    <div class="mt-4 max-w-2xl mx-auto w-full h-full">
                        <p class="mt-4 leading-relaxed new-font">Di tengah lautan ilalang itu, Konsorsium ALeRT-UNILA berupaya
                            menumbuhkan kembali hutan yang telah sirna. Sebagai salah satu
                            anggota Konsorsium, Yayasan Auriga memegang kendali atas program reforestasi. Dan hari itu, Fajar akan menilik lokasi reforestasi
                            Rawa Kadut. Lokasinya kira-kira berada di padang ilalang di pusat
                            taman nasional. Ini wilayah antah-berantah. Meski bisa dijangkau
                            dengan sepeda motor, namun untuk urusan logistik penanaman,
                            Rawa Kadut terbilang terpencil: jauh dari pemukiman dan pos
                            pengelolaan taman nasional.</p>
                            <p class="mt-4 leading-relaxed new-font">Ada beberapa alasan memilih lokasi yang terpencil. “Pertimbangan
                                pertama, kita melihat Rawa Kadut strategis. Rawa Kadut betul-betul
                                berada di tengah taman nasional. Artinya, di masa depan kalau kita
                                mau melanjutkan reforestasi, arahnya bisa ke mana saja.”
                                Dalam pandangan Fajar, keberhasilan penghutanan kembali di
                                Rawa Kadut bisa dilanjutkan ke segala arah. Dengan demikian, hutan
                                yang kembali tumbuh akan menjadi koridor yang menautkan habitat
                                satwa yang terpecah-belah.</p>
                            <p class="mt-4 leading-relaxed new-font">Alur pikirnya begini. Di sisi timur Rawa Kadut, membentang
                                hutan dataran rendah yang luas dan relatif utuh; sementara di barat,
                                berserakan bercak-bercak hutan. Hamparan alang-alang Rawa
                                Kadut membentang di tengah-tengah, yang memisahkan kerumunan
                                hutan di timur dan di barat itu. </p>
                            <p class="mt-4 leading-relaxed new-font">Harapannya, di masa datang, upaya penghutanan kembali, yang
                                dimulai dari Rawa Kadut, bisa menyambungkan hutan di timur dan
                                barat. Tutupan hutan di sisi barat relatif masih bagus; sementara di
                                sisi timur, hutan telah jarang-jarang, yang sekaligus menjadi batas
                                kawasan taman nasional.</p>
                    </div>


                </div>
            </div>

            <div class="py-6 ">
                <div class="w-full flex sm:flex-row flex-col justify-between px-4 mt-4   sm:space-x-4 space-x-0 text-justify text-sm">
                    <div class="sm:w-6/12 w-full">
                        <img src="{{asset('assets/5.png')}}" alt="" class="sm:h-screen h-full object-cover">
                        <p class="text-sm mt-1 italic">Kebakaran hutan menghanguskan apa saja yang ada di padang ilalang. Rumput yang mengering amat rawan kebakaran. Sekali tersulut, api akan berkobar, lalu melalap semua bentuk kehidupan. AGUS PRIJONO</p>
                    </div>
                    <div class="flex sm:flex-row flex-col sm:space-x-4 space-x-0 sm:w-6/12 w-full h-full">
                        <div class=" h-full  sm:px-4 px-0 border-black">
                            <blockquote class="text-center italic text-red-800 font-semibold text-2xl sm:mt-0 mt-4"><p>"Sayangnya, baru berumur 8 - 9 bulan, tanaman lebur dilalap api."</p></blockquote>
                            <p class="leading-relaxed new-font mt-4">Tersambungnya dua sisi hutan itu akan membentuk koridor
                                vegetasi, yang memudahkan satwa menjelajahi taman nasional. Yang
                                kedua, lanjut Fajar, Rawa Kadut sekaligus berada di pusat masalah
                                taman nasional, terutama perburuan satwa liar. “Program reforestasi
                                akan memperbanyak aktivitas di tengah taman nasional yang bisa
                                mencegah perburuan liar. Jadi ketika ada aktivitas di Rawa Kadut,
                                pemburu akan berpikir dua kali dan menghindar.” Ringkasnya,
                                kehadiran personel memberikan efek gentar kepada pemburu liar.
                                Itu pertimbangan dari sisi nonteknis.</p>
                            <p class="mt-4 leading-relaxed new-font">Sedangkan secara teknis tanam-menanam, upaya reforestasi
                                memerlukan beberapa syarat: lokasi pembibitan tak jauh dari areal
                                penanaman, persemaian cukup terbuka untuk sinar matahari; dan
                                mudah dijangkau. Di atas segala syarat tersebut, yang terpenting
                                adalah sumber air di sekitar persemaian. Air menjadi faktor pembatas
                                keberhasilan tanam-menanam. Di sekitar Rawa Kadut, air berasal
                                dari aliran sungai, sumur, dan hujan. </p>
                            <p class="mt-8 leading-relaxed new-font"><a class="font-bold">BILAH-BILAH</a> daun ilalang bergelombang di terpa angin tropis.
                                Daun alang-alang yang masih basah memantulkan cahaya matahari.
                                Saat menembus alang-alang, daun rumput yang tajam dan berbulu
                                halus menampari lutut. Lama-kelamaan terasa perih. Bentangan
                                rumput ini bukan seperti lapangan bola yang berumput lembut.
                                Bayangkan: alang-alang tumbuh setinggi leher, tepi daunnya tajam,
                                bulu-bulu daun menyengat kulit. Setelah melewati hutan galeri—
                                deretan vegetasi yang tumbuh di sepanjang sungai kecil, Fajar tiba
                                di pondok kerja reforestasi. Mendung masih menggantung di langit. </p>
                            <p class="mt-4 leading-relaxed new-font">Di pondok kerja berloteng itu, hari itu Ahmad Tohari dan Sutrisno
                                sedang giliran bertugas. “Piket rutin biasanya antara dua sampai
                                empat orang selama delapan hari. Setelah itu pulang, ganti orang,”
                                jelas Fajar.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 ">
                <div class="w-full px-4 mt-4 text-justify text-sm">
                    <div class="relative">
                        <img src="{{asset('assets/7.png')}}" alt="" class=" w-full relative">
                        <p class="sm:absolute  bottom-3 right-0 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-6/12 sm:not-italic italic"><a class="font-bold">PONDOK KERJA</a><br>
                                Di pondok ini, anggota tim reforestasi menginap dan beristirahat selama menjalankan tugasnya. Lantaran jauh dari peradaban, pondok kerja dilengkapi dengan kamar tidur di loteng, dapur sederhana, kamar mandi, dan sumur. Semua fasilitas tersebut jauh dari kemewahan. AGUS PRIJONO
                        </p>
                    </div>
                    <div class="w-full h-full max-w-2xl mx-auto">
                            <p class="mt-4 leading-relaxed new-font">Program reforestasi memang melibatkan masyarakat setempat
                                untuk memelihara tanaman, membabati rumput di sekat bakar,
                                menanam dan mengelola pembibitan. Sejenak melepas lelah, Fajar
                                dan rombongan meriung. Di sudut ruang belakang, terdapat dapur
                                sahaja dan kamar mandi. Sementara lantai atas digunakan untuk
                                istirahat dan berlindung dari satwa liar. </p>
                            <p class="mt-4 leading-relaxed new-font">Kebun bibit terdapat di samping pondok, beratapkan jaring
                                peneduh. Hutan galeri tumbuh menjalar di sepanjang sungai kecil
                                di belakang pondok. Dari teras loteng, yang terlihat hanya ham
                                -
                                paran alang-alang. Musim sedang ramah: ilalang menghijau segar.
                                Sebaliknya, pada saat kemarau, ucap Fajar, “Alang-alang berwarna
                                kuning. Semuanya menguning.”</p>
                            <p class="mt-4 leading-relaxed new-font">Lantas di mana tanaman untuk menumbuhkan kembali hutan
                                Way Kambas? Seluruh tanaman rupanya tenggelam dalam kepungan
                                alang-alang. Sekali lagi, untuk melihat tanaman reforestasi, Fajar
                                mesti menembus hamparan rumput. Alang-alang menutupi jalan
                                setapak. Ini benar-benar samudra ilalang.</p>
                            <p class="leading-relaxed new-font mt-4">Menghutankan kembali kawasan ini perlu kerja keras: menata
                                jalur tanam, memasang ajir, lalu menanam di tengah kepungan
                                rumput. Kemudian tim mesti merawat tanaman agar mampu bersaing
                                dengan rumput tinggi</p>
                            <p class="mt-4 leading-relaxed new-font">Usai Fajar menyibak ilalang, nampaklah bibit tanaman reforestasi.
                                “Jarak tanamnya 3 meter kali 3 meter,” jelasnya. Namun rapat
                                -
                                nya alang-alang membenamkan tanaman. Untuk mengecek setiap
                                tanaman, Fajar mesti menerjang rapatnya alang-alang. Di sekitar
                                tanaman, Fajar dan timnya menyiangi rumput untuk memberi ruang
                                tumbuh. Untuk mengecek satu demi satu tanaman, Fajar mesti
                                menyibaki alang-alang</p>
                            <p class="mt-4 leading-relaxed new-font">Berbeda dengan jalur tanam umumnya, tumbuhan reforestasi
                                ditanam dengan jalur petak berlapis. Jalur tanam ini akhirnya mem
                                -
                                bentuk bujur sangkar berlapis-lapis, yang semakin mengecil di pusat
                                bujur sangkar. Gagasan jalur tanam ini, papar Koordinator Konsor
                                -
                                sium Marcelius Adi, untuk memutus rembetan api kebakaran hutan.
                                Di areal reforestasi, sedikitnya telah ditanam 32.000 bibit dari jenis
                                sungkai, puspa, jambon, pulai, sempu, dan salam. Seluruh bibit itu
                                diambil anakan yang tumbuh di Way Kamas. Bibit cabutan dipilih
                                untuk memastikan tumbuhan yang ditanam asli Way Kambas.</p>
                    </div>
                        <div class="flex sm:flex-row flex-col sm:space-x-2 space-x-0 sm:space-y-0 space-y-2 mt-8">
                            <img src="{{asset('assets/9_3.png')}}" alt="" class="sm:h-96 h-full sm:w-6/12 w-full ">
                            <img src="{{asset('assets/9_2.png')}}" alt="" class="sm:h-96 h-full sm:w-6/12 w-full ">
                        </div>
                    <div class="w-full h-full max-w-2xl mx-auto">
                            <p class="mt-1 text-sm italic ">Bibit tanaman dipungut dari wilayah taman nasional untuk menjamin keaslian spesiesnya. Areal pembibitan berada di lapangan untuk membantu adaptasi bibit, serta memudahkan pengangkutan bibit ke areal penanaman. AGUS PRIJONO</p>

                            <p class="mt-8 leading-relaxed new-font"><a class="font-bold">MENUMBUHKAN</a> kembali hutan yang sirna dalam kepungan ilalang
                                bagaikan menegakkan benang basah. Sulitnya minta ampun. Saat
                                musim hujan, alang-alang tumbuh tinggi. Tumbuhan yang ditanam
                                mesti bersaing keras dengan rumput tangguh itu. </p>
                            <p class="mt-4 leading-relaxed new-font">Sebaliknya, pada musim kemarau, air sungguh sulit. Tantangan
                                pada musim kemarau semakin berat karena pemburu liar kerap
                                memperkeruh keadaan. Untuk menarik satwa, pemburu membakar
                                rumput. Sekali sulut, api akan berkobar. Pembakaran itu menum
                                -
                                buhkan rumput baru yang disukai satwa herbivora. Saat satwa
                                memakan rumput segar, pemburu mengincarnya. Tidak heran, bila
                                usai kebakaran, perburuan liar acap kali meningkat.</p>
                            <p class="mt-4 leading-relaxed new-font">Pembakaran oleh para pemburu itulah yang menghanguskan
                                tanaman reforestasi tahun 2014. Pada September 2014, kebakaran
                                melahap areal reforestasi seluas 46,8 hektare. Akibatnya: 90 persen
                                tanaman mati. “Proyek reforestasi dimulai pada pertengahan 2013,
                                dan kita mulai menanam pada saat musim hujan antara Januari
                                sampai Maret 2014,” kenang Fajar. Sayangnya, baru berumur 8 - 9
                                bulan, tanaman lebur dilalap api. Lantas, Fajar menyulami tanaman
                                yang mati terbakar. “Tapi akhirnya itu bukan penyulaman. Itu
                                penanaman ulang yang dilakukan pada Januari 2015. Jadi, tumbuhan
                                yang sekarang adalah hasil penamanan 2015.”</p>
                            <p class="mt-4 leading-relaxed new-font">Pada kebakaran 2014 itu, api menjalar dari arah utara. Biang
                                kebakaran itu tak ada yang tahu. Namun pengalaman menunjukkan
                                kebakaran bukan karena penyebab alami. “Ya, karena pemburu liar
                                membakar padang alang-alang. Kalau penyebab alami sangat kecil
                                kemungkinannya.”</p>

                    </div>
                </div>

            {{-- <div class=" h-full px-4 relative py-6 ">
                <img src="{{asset('assets/7.png')}}" alt="" class="w-full bg-cover relative">

                <div class="absolute sm:w-3/12 w-10/12 sm:bottom-16 bottom-6 right-5  ">
                    <p class="text-white sm:text-sm text-xs"><a class="font-bold">PONDOK KERJA</a> <br> Di pondok ini, anggota tim reforestasi
                            menginap dan beristirahat selama
                            menjalankan tugasnya. Lantaran jauh dari
                            peradaban, pondok kerja dilengkapi dengan
                            kamar tidur di loteng, dapur sederhana,
                            kamar mandi, dan sumur. Semua fasilitas
                            tersebut jauh dari kemewahan.</p>
                </div>
            </div> --}}

                <div class="max-w-2xl mx-auto text-justify px-4" >
                    <img src="{{asset('assets/9_1.png')}}" alt="" class="w-full bg-cover relative mt-4">

                        <p class="leading-relaxed new-font mt-4">
                            Fajar mengungkapkan bahwa intensitas perburuan rupanya sangat
                            tinggi. Pemburu kerap masuk dari sisi Rawa Kadut. “Dari pondok
                            kerja, bukan sekali dua kali kita mendengar tembakan, atau melihat
                            sorot senter di jalur tanam.”
                        </p>
                        <p class="mt-4 leading-relaxed new-font">
                            Sejak awal program, Konsorsium ALeRT-UNILA menyadari bahwa
                            upaya reforestasi harus diiringi dengan pencegahan kebakaran dan
                            patroli pengamanan. “Jadi tidak hanya urusan teknis penanaman,
                            tapi kita juga melakukan pencegahan kebakaran dan patroli bersama polisi hutan,” papar Marcelius Adi. Untuk menahan rembetan
                            api, sekat bakar dibangun di sisi utara areal reforestasi. Sekat bakar
                            membentang selebar 30 meter, sepanjang satu kilometer. Ujung
                            timur dan barat jalur sekat bakar bertemu dengan ujung barisan
                            vegetasi yang tumbuh di tepi sungai. Ujung hutan di tepi sungai itu,
                            kata Fajar, “Kerap disebut ‘kepala rawa’."
                        </p>
                        <p class="mt-4 leading-relaxed new-font">
                            Secara geografis, areal reforestasi dikelilingi hutan yang tetap
                            hijau sepanjang tahun yang tumbuh mengikuti aliran sungai kecil.
                            Hutan yang selalu hijau inilah yang menjadi benteng perlindungan
                            areal reforestasi dari kebakaran. Sementara di sisi utara, lantaran
                            tidak ada penghalang alami, Fajar membuat sekat bakar. “Kita tahu,
                            sisi utara itu langsung menyambung dengan hamparan rumput.”
                            Sayangnya, pada kebakaran hutan 2014, api melompati sekat bakar.
                        </p>
                        <p class="mt-4 leading-relaxed new-font">
                            Rupanya, saat itu rumput yang sempat dibabat sudah tumbuh
                            tinggi meski tidak setinggi rumput yang tumbuh liar. Tak terelakan,
                            api melalap tanaman. Ini ibarat adu balap antara menumbuhkan
                            hutan dengan cepatnya perkembangan ilalang.
                        </p>

                </div>
            </div>

            <div class="py-6 w-full  text-justify text-sm px-4">
                    <div class="w-full relative">
                        <img src="{{asset('assets/10.png')}}" alt="" class=" w-full relative">
                            <p class="sm:absolute  bottom-3 left-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-6/12 sm:not-italic italic">Tak mengenal waktu dan musim, tim reforestasi rutin membabati
                                rumput di areal sekat bakar. Pengalaman musnahnya tanaman
                                karena kebakaran hutan menuntut tim untuk selalu memangkasi
                                rumput di sekat bakar. Rumput kering amat sulit dipangkas: alot,
                                dan membelit bilah pisau potong.. AGUS PRIJONO </p>

                    </div>


                    <div class="max-w-2xl mx-auto w-full h-full  mt-4 border-black">
                            <p class="leading-relaxed new-font">Pembabatan rumput secara rutin telah dilakukan di jalur sekat
                                bakar. “Tapi, saat pembabatan bagian tengah misalnya, rumput di
                                pinggir sudah tumbuh lagi, entah itu setinggi 30 sentimeter ataupun
                                lebih.” Pertumbuhan alang-alang memang begitu cepat: dipotong di
                                sini, di sana sudah tumbuh kembali. Waktu kebakaran itu rumput
                                belum sempat dipotong, sehingga api menjalar ke areal reforestasi.
                                “Sebenarnya sempat dipadamkan, namun esok harinya api muncul
                                kembali. Mungkin masih ada bara yang belum padam,” simpul
                                Fajar.</p>
                            <p class="mt-4 leading-relaxed new-font">Personel di pondok kerja pun selalu memantau keadaan. Setiap
                                ada titik api, kendati lokasinya jauh, personel tetap siaga. Sejauh ini
                                pemadaman dilakukan secara manual: menyemprotkan air atau
                                menggebah api dengan dedaunan. “Sebenarnya untuk mengamankan
                                areal reforestasi kita harus proteksi lahan seluas 5.000 hektare. Tapi
                                kondisi Rawa Kadut saat ini belum memungkinkan. Kita baru bisa
                                memproteksi sekitar 100 hektare.”</p>
                            <p class="mt-4 leading-relaxed new-font">Memang tak mudah memadamkan api di padang alang-alang.
                                Ibaratnya, pada musim kering, ribuan tanaman reforestasi berada
                                dalam kepungan 'bahan bakar'. Daun alang-alang yang kering
                                adalah bahan bakar nan dahsyat: sekali sulut, api cepat merambat!
                                Tiadanya vegetasi penghalang memperburuk keadaan: embusan
                                angin menghamburkan bunga api ke segala penjuru. </p>
                            <p class="mt-4 leading-relaxed new-font">Lagipula, Rawa Kadut yang terpencil membuat pemadaman
                                makin sulit. Rawa Kadut terletak di Resor Toto Projo SPTN II
                                Bungur. Kedua kantor itu berada di desa terdekat, Tanjung Tirto,
                                yang jaraknya 10 kilometer dari areal reforestasi. Aksesibilitas yang
                                sulit berimbas pada rendahnya frekuensi patroli, sehingga Rawa
                                Kadut minim proteksi. Pun saat terjadi kebakaran, tim pemadam
                                juga tak bisa segera menjangkau lokasi. </p>
                    </div>
                    <div class="w-full relative">
                        <img src="{{asset('assets/8.png')}}" alt="" class=" w-full relative mt-4">
                            <p class="sm:absolute  bottom-3 left-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-6/12 sm:not-italic italic">Sekali ilalang terbakar, api akan mengamuk ke segala arah.
                                Kebakaran telah melumat bibit penghutanan kembali pada 2014.
                                Embusan angin mempersulit usaha memutus menjalarnya api. AGUS PRIJONO </p>

                    </div>
                    <div class="max-w-2xl mx-auto w-full h-full  mt-4 border-black">
                            <p class="mt-4 leading-relaxed new-font"><a class="font-bold">KEBAKARAN</a> hutan merupakan tantangan terbesar dalam memu
                                -
                                lihkan hutan Rawa Kadut. Sedikitnya, 75 persen tutupan lahan di
                                STPN II Bungur didominasi ilalang dan semak belukar. Jadi tak
                                mengejutkan bila api kerap membakar wilayah ini. Setiap tahun,
                                kebakaran hutan di Bungur adalah yang terluas di Way Kambas.
                                Tantangan inilah yang menguras energi. Fajar menuturkan, pada
                                2015 dilakukan penanaman ulang terhadap tanaman 2014 yang
                                habis dilumat api. “Akhirnya, kita menanam lagi. Itu jadinya bukan
                                penyulaman,” Fajar menegaskan.</p>
                            <p class="mt-4 leading-relaxed new-font">“Asal tidak terbakar, sebenarnya tanaman masih bisa tumbuh.
                                Dari teknis penanaman tidak ada masalah. Saat kemarau, tanaman
                                pasti tumbuh walaupun mungkin kekurangan air,” timpal Marcelius.
                                “Meski dilanda kemarau, kita selalu memasok air di lokasi penanaman.
                                Memang saat musim kering, air hilang sama sekali. Bahkan sumur
                                di pondok kerja juga mengering. Ke depan, kita harus membuat
                                sumur dalam sekitar 15 meter di lokasi reforestasi. Sumur yang ada
                                sekarang paling hanya sedalam 6 - 8 meter.”</p>
                                <p class="leading-relaxed new-font mt-4">Sejak tahap perencanaan, tim telah memilih tanaman pionir dan
                                    relatif tahan api. “Puspa, sempu, dan sungkai merupakan jenis pionir
                                    yang tahan api. Asal tanaman sudah tumbuh 50 sentimeter sampai
                                    1 meter, kalau pun terbakar, akarnya masih cukup kuat,” ungkap
                                    Marcelius. Kebakaran hebat pada 2014 memberikan pelajaran penting
                                    dalam upaya memulihkan hutan di Rawa Kadut dan sekitarnya. </p>
                                <p class="mt-4 leading-relaxed new-font">“Evaluasi kita ada beberapa hal. Pertama deteksi dini harus lebih
                                    cepat. Waktu itu api terdeteksi sudah sangat dekat dengan sekat bakar.
                                    Kedua, setelah api dipadamkan, harus dipantau kembali untuk
                                    memastikan bara benar-benar padam,” Fajar memaparkan. Pence
                                    -
                                    gahan kebakaran diperkuat dengan patroli rutin bersama polisi
                                    hutan. “Kita semakin rutin berpatroli, setiap bulan bisa dua sampai
                                    tiga kali patroli.” </p>
                                <p class="mt-4 leading-relaxed new-font">Ada tiga jalur patroli untuk operasi perlindungan dan penga
                                    -
                                    manan. “Tetapi waktu itu api begitu besar dan angin berhembus
                                    kencang. Situasi tidak terkendali lagi. Apalagi kebakaran terjadi pada
                                    malam hari, sehingga makin sulit memobilisasi orang,” tandas Fajar.</p>

                </div>
            </div>





            <div class="py-6 ">
                <div class="w-full  justify-between px-4 mt-4   text-justify text-sm">
                    <div class=" w-full relative">
                        <img src="{{asset('assets/13.png')}}" alt="" class=" w-full relative">
                        <p class="sm:absolute  bottom-3 left-5 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-6/12 sm:not-italic italic">Untuk membantu pertumbuhan, tim membersihkan ilalang di
                            sekitar tanaman muda. Penyiangan akan memberikan ruang
                            tumbuh bagi bibit yang masih rentan dalam bersaing dengan
                            ilalang.  AGUS PRIJONO </p>
                    </div>
                    <div class="max-w-2xl mx-auto">
                        <p class="mt-4 leading-relaxed new-font">Marcelius Adi mengingatkan kembali pentingnya merawat sekat
                            bakar. “Pembabatan untuk mempertahankan tinggi rumput di
                            bawah 5 sentimeter. Itu harus dijaga supaya api tidak menjalar.”
                            Demikian pula sekat bakar harus selebar minimal 30 meter. “Kalau
                            tidak sampai 30 meter, api masih bisa melompat karena embusan
                            angin. Sementara kalau tinggi rumput sudah di atas 10 sentimeter,
                            api juga sudah bisa merambat.” </p>
                        <p class="mt-4 leading-relaxed new-font">Pengalaman 2014 memberikan pelajaran penting dalam meng
                            -
                            hadapi musim kering 2015. Perlindungan yang memadukan sekat
                            bakar dengan patroli berhasil mempertahankan areal reforestasi dari
                            kebakaran pada musim kering 2015. Dalam tahun itu, kebakaran
                            melalap kawasan hutan di SPTN II Bungur seluas 3.000 hektare. Ini
                            merupakan kebakaran terbesar dalam 5 tahun terakhir. </p>
                        <p class="mt-4 leading-relaxed new-font">Selama tiga tahun, tim reforestasi Rawa Kadut telah menanam
                            32.000 tumbuhan dengan tingkat kelulusan hidup 58 persen. Tak
                            terlalu besar memang. Namun, mengingat besarnya tantangan,
                            tingkat lulus hidup itu terbilang lumayan. Bayangkan, di antara
                            kepungan ilalang 27.000 hektare, upaya pemulihan yang hanya 60
                            hektare saja, memerlukan kerja keras pengamanan yang melibatkan
                            masyarakat dan Balai Taman Nasional. Patroli terus dilakukan di
                            sekitar Rawa Kadut sebagai upaya proteksi dan deteksi dini. Selama
                            Juli 2015 hingga Maret 2016 misalnya, Konsorsium menggelar 22
                            kali patroli pemantauan kebakaran hutan, yang diperkuat oleh tim
                            pengendalian kebakaran hutan. </p>
                            <p class="mt-4 leading-relaxed new-font">Rawa Kadut memberikan hikmah penting: upaya pemulihan hu
                                -
                                tan butuh energi besar: tenaga, waktu dan biaya. Di balik kerja keras
                                itu, desain reforestasi yang menekankan perlindungan dan pembi
                                -
                                naan habitat, baik dengan intervensi manusia maupun suksesi alami,
                                menyediakan model pemulihan hutan bagi Balai Taman Nasional
                                dan pihak lain. ***</p>
                    </div>

                </div>
            </div>

            <div class=" h-full px-4  py-6 ">
                <img src="{{asset('assets/12.png')}}" alt="" class="w-full bg-cover ">

                <div class=" w-full  flex justify-end mt-4">
                    <p class="text-sm mt-1 italic text-left sm:w-6/12">Bila tak terbakar, semestinya tanaman sudah setinggi dua meteran,
                        seperti terlihat pada pohon yang menaungi sepeda motor. Deretan
                        pohon di depan pondok kerja ini selamat dari kobaran api 2014. AGUS PRIJONO </p>
                </div>
            </div>
            <div class=" h-full px-4 relative py-6 ">
                <img src="{{asset('assets/14.png')}}" alt="" class="w-full bg-cover relative">
                <div class="sm:absolute  bottom-16 right-6 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-3/12 sm:not-italic italic">
                    <p class=" sm:text-sm text-xs"><a class="font-bold">TANPA AMPUN </a> <br> Perlu waktu lama untuk mengurangi luasnya
                        padang ilalang. Upaya penghutanan
                        kembali tidak hanya menyangkut persoalan
                        teknis tanam-menanam. Tantangan justru
                        datang dari luar bidang teknis: keamanan
                        kawasan, perburuan liar dan kebakaran
                        hutan. Agaknya jalan masih panjang untuk
                        memulihkan hutan tropis di Way Kambas.</p>
                </div>
            </div>

            <div class=" h-full px-4 relative py-6 ">
                <img src="{{asset('assets/15.png')}}" alt="" class="w-full bg-cover relative">

                <div class="sm:absolute  bottom-16 left-10 sm:text-white text-black sm:text-sm text-xs sm:mt-0 mt-1 text-left sm:w-3/12 sm:not-italic italic">
                    <p class=" sm:text-sm text-xs"><a class="font-bold">BIBIT NAN RENTAN </a> <br> Masa depan kawasan ini tergantung pada
                        ribuan bibit tanaman reforestasi. Namun,
                        jumlah dalam bilangan 'ribuan' bagaikan
                        setetes air di samudra ilalang. Tahuntahun awal adalah masa yang menentukan
                        bagi bibit tanaman untuk tumbuh besar,
                        sehingga mampu bersaing dengan alangalang. </p>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection

