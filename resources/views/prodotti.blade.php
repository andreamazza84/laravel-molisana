@extends ('layout.prodotti')

@section('title')
I nostri prodotti
@endsection

@section('products')
    <div class="flex-container">
        @foreach($data as $item)
        <div class="card">
            <div class="item">
                <div class="img" style="background-image: url({{ $item['src'] }})"></div>
                <a href="{{ route('prodotti-id', $loop -> index) }}" class="overlay">
                    <img class="icon" src="img/icon.svg" alt="icon">
                    <h3><em class="cottura">cottura: {{$item['cottura']}}</em></h3>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection