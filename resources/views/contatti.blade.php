@extends ('layout.no-prodotti')

@section('title')
    Contatti
@endsection

@section('contacts')
    <div id="contacts" class="container">
        <h1>Contatti</h1>
        <form action="#">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name">
            <label for="surname">Cognome:</label>
            <input type="text" name="surname" id="surname">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="contact-us">Scrivi qui il tuo messaggio</label>
            <textarea name="contact-us" id="contact-us" cols="30" rows="10"></textarea>
            <input type="submit" value="Invia" class="btn">
        </form>
    </div>
@endsection