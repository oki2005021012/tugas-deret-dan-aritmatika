<x-admin-layout>
    <h1 class="text-3xl text-black pb-6">DESA CEMPAGA</h1>

    <div class="w-full mt-6" x-data="{ openTab: 1 }">
        <div>
            <ul class="flex border-b">
                <li class="-mb-px mr-1" @click="openTab = 1">
                    <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Sejarah</a>
                </li>
                <li class="mr-1" @click="openTab = 2">
                    <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Hasil Pertanian</a>
                </li>
                <li class="mr-1" @click="openTab = 3">
                    <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tujuan Sistem</a>
                </li>
            </ul>
        </div>
        <div class="bg-white p-6">
            <div id="" class="" x-show="openTab === 1">
                <p>Masyarakat Desa Cempaga kebanyakan pekerjaanya adalah petani ,dikarenakan lokasinya berada didataran tinggi, yang menyebabkan banyak hasil alam yang tumbuh subur disini, seperti contoh cengkeh. Cengkehpun menjadi penghasilan utama bagi masyarakat desa cempaga dikarekan harganya yang cukup mahal, cengkeh yang kering lebih mahal dari pada yang basah dan kebanyakan masyarakat desa Cempaga menjual cengkeh yang kering,akan tetapi cengkeh hanya berbuah setiap 1 tahun sekali. Selain cengkeh buah-buahan seperti manggis, durian,langsat dan lainnya juga ada disini. </p>
            </div>
            <div id="" class="" x-show="openTab === 2">
                <p>Pengertian Posyandu adalah Pos Pelayanan Keluarga Berencana - Kesehatan Terpadu yang memiliki kegiatan kesehatan dasar yang diselenggarakan dari, oleh dan untuk masyarakat yang dibantu oleh petugas kesehatan. Posyandu merupakan salah satu upaya kesehatan bersumberdaya masyarakat. kegiatan kesehatan dasar yang diselenggarakan oleh dan untuk masyarakat yang dibantu oleh petugas kesehatan. Posyandu adalah pusat kegiatan masyarakat dalam upaya pelayanan kesehatan dan keluarga berencana. Posyandu adalah jenis pelayanan kepada anak berupa penimbangan untuk memantau pertumbuhan anak. Posyandu adalah jenis pelayanan kepada anak berupa penimbangan untuk memantau pertumbuhan anak. </p>
            </div>
            <div id="" class="" x-show="openTab === 3">
                <p>Tujuan dari perancangan dan pembuatan Sistem Penjualan Hasil Alam Desa Cempaga antara lain sebagai berikut:
                    1. Membuat rancang bangun Sistem Penjualan Hasil Alam Desa Cempaga.
                    2. Menerapkan Sistem Penjualan Hasil Alam Desa Cempaga.
                    3. Membantu masyarakat agar mudah untuk melakukan pemesanan dan mengetahui proses dari sistem penjualan Cempaga Gorden.
                </p>

            </div>
        </div>
    </div>
</x-admin-layout>