<!-- body -->
<main id="main">
    <h1>le lunghe</h1>
    <div class="flex-container">
        @foreach($json as $item)
        <div class="card">
            <div class="item">
                <div class="img" style="background-image: url({{ $item['src'] }})"></div>
                <!-- <img src="{{$item['src']}}" alt="pasta"> -->
                <div class="overlay">
                    <img class="icon" src="img/icon.svg" alt="icon">
                    <h3><em class="cottura">cottura: {{$item['cottura']}}</em></h3>
                    <!-- <h3 class="titolo">{{$item['titolo']}}</h3> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>        
</main>

</body>
</html>
