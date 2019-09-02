@extends('template')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="contact-me-map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60253.13078627701!2d-81.404534322376!3d19.290163063024465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f2586f64c1f9699%3A0x8c51ee3c8bb6bfdd!2sGeorge%20Town%2C%20Cayman%20Islands!5e0!3m2!1sen!2slv!4v1567459291062!5m2!1sen!2slv" width="500" height="450" frameborder="0" allowfullscreen=""></iframe>
    <div class="contact-me-container" style="margin-left:50px; width: 450px">
        <h2>Piebiedrojies kaķu klubam!</h2>
        <form action="/test/contacts/submit" method="POST">
            @csrf
            <label for="email">E-pasts</label>
            <input value="{{@old('email')}}" type="text" id="email" name="email" placeholder="E-pasts" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br />
            <label for="temats">Temats</label>
            <select id="temats" name="temats" class="form-control @error('temats') is-invalid @enderror">
            <option value="atsauksmes" {{ (@old("temats") == "atsauksmes" ? "selected":"") }}>Atsauksmes</option>
            <option value="kaki" {{ (@old("temats") == "kaki" ? "selected":"") }}>Kaķi</option>
            <option value="kakis" {{ (@old("temats") == "kakis" ? "selected":"") }}>Es esmu kaķis</option>
            </select>
            @error('temats')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br />
            <label for="message_body">Teksts</label>
            <br />
            <textarea id="message_body" name="message_body"
                placeholder="Raksti savu ziņu šeit!" style="height:170px"
                class="form-control @error('message_body') is-invalid @enderror">{{@old('message_body')}}</textarea>
            @error('message_body')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br />
            <input type="submit" value="Sazināties">
        </form>
    </div>
</div>
<hr>
<div>
<div class="reviews-container">
    <h2 style="text-align: center;"><b>Why cats love me?</b></h2>

    <div class="review">
        <img class="review-img" src="/img/pukainis.jpg" alt="cat">
        <div> <i>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Maecenas congue ante et cursus dignissim. Cras finibus augue libero.</i>
            <div><b>Pūkainis</b>, Pieredzējis ņaudētājs.</div>
        </div>
    </div>
    <div class="review">
            <img class="review-img" src="/img/rizais.jpg" alt="cat">
            <div><i>
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Maecenas congue ante et cursus dignissim. Cras finibus augue libero.</i>
                <div><b>Rižais</b>, Ielas bosiks.</div>
            </div>
        </div>
        <div class="review">
                <img class="review-img" src="/img/goldeneyes.jpg" alt="cat">
                <div> <i>
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Maecenas congue ante et cursus dignissim. Cras finibus augue libero.</i>
                    <div><b>Zeltacis</b>, Normāls mājas kaķis.</div>
                </div>
            </div>
</div>
@endsection


