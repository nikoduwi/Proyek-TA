@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <section class="content">
        <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">Deskripsi Sistem Rent A Motorcycle</h3>
            </div>
            <div class="card-body">
                Motor menjadi salah satu modal transportasi yang paling banyak digunakan oleh masyarakat di Indonesia. Apalagi ditambah dengan kondisi jalanan yang sering macet membuat motor menjadi alat transportasi yang paling efektif. Namun, apabila Anda sedang bepergian jauh dari rumah dan kebetulan tidak menggunakan kendaraan bermotor, maka rental kendaraan bermotor menjadi salah satu pilihan terbaik.
                Bisnis rental kendaraan bermotor banyak dijumpai di kota-kota besar, kawasan wisata, area dekat kampus dan area yang berdekatan dengan fasilitas umum lainnya. Apalagi saat long weekend atau tahun ajaran baru, biasanya rental motor full boked semuanya. Untuk modal membuka bisnis rental motor tidaklah membutuhkan modal besar, Anda bisa menggunakan motor yang Anda miliki untuk memulai bisnis ini, kemudian pendapatan dari motor yang disewakan bisa dikumpulkan untuk menambah armada kendaraan bermotor. Untuk bisa sukses berbisnis rental kendaraan bermotor, Anda harus menyiapkan secara matang.
            </div>
        </div>
    </section>                  
                  

        
         

@endsection
