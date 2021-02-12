@extends ('layout.prodotti')

@section('title')
I nostri prodotti
@endsection

@section('products')

    <h1>Lunga</h1>
    <div class="flex-container">
        @foreach($data as $item)
            @if($item['tipo'] === "lunga")
            <div class="card">
                <div class="item">
                    <div class="img" style="background-image: url({{ $item['src'] }})"></div>
                    <a href="{{ route('prodotti.id', $loop -> index) }}" class="overlay">
                        <img class="icon" src="img/icon.svg" alt="icon">
                        <h3><em class="cottura">cottura: {{$item['cottura']}}</em></h3>
                    </a>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <h1>Corta</h1>
    <div class="flex-container">
        @foreach($data as $item)
            @if($item['tipo'] === "corta")
            <div class="card">
                <div class="item">
                    <div class="img" style="background-image: url({{ $item['src'] }})"></div>
                    <a href="{{ route('prodotti.id', $loop -> index) }}" class="overlay">
                        <img class="icon" src="img/icon.svg" alt="icon">
                        <h3><em class="cottura">cottura: {{$item['cottura']}}</em></h3>
                    </a>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <h1>Cortissima</h1>
    <div class="flex-container">
        @foreach($data as $item)
            @if($item['tipo'] === "cortissima")
            <div class="card">
                <div class="item">
                    <div class="img" style="background-image: url({{ $item['src'] }})"></div>
                    <a href="{{ route('prodotti.id', $loop -> index) }}" class="overlay">
                        <img class="icon" src="img/icon.svg" alt="icon">
                        <h3><em class="cottura">cottura: {{$item['cottura']}}</em></h3>
                    </a>
                </div>
            </div>
            @endif
        @endforeach
    </div>

@endsection