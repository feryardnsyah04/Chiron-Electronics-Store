@extends('layouts.app')

@section('title', 'Contact Us - Chiron Corporation')

@section('content')
<div class="container py-5">
    <div class="header">
        <h1><b>Kontak Kami</b></h1>
    </div>

    <div class="contact-details">
        <div>
            <p><strong>Alamat</strong></p>
            <p>Jl. MH Thamrin No.1, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310.</p>
            <p><strong>Phone:</strong> (021) 808-746-0</p>
            <p><strong>Fax:</strong> (021) 347-231-7</p>
            <p><strong>Email:</strong> <a href="mailto:sales@chiron.com">sales@chiron.com</a></p>
            <p><strong>Website:</strong> <a href="http://www.chiron.com">www.chiron.com</a></p>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.519008103285!2d106.81795051903427!3d-6.195041115387274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5849ccc0371%3A0xb04ce66a7cb711d9!2sGrand%20Indonesia!5e0!3m2!1sid!2sid!4v1735994525349!5m2!1sid!2sid"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
@endsection
