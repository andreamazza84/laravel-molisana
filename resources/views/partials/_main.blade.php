<!-- body -->
<main id="main">
    <h1>le lunghe</h1>
    <div class="flex-container">
        @foreach($json as $item)
        <div class="card">
            <div class="item">
                <!-- <div class="img"></div> -->
                <img src="{{$item['src']}}" alt="pasta">
                <div class="overlay">
                    <img class="icon" src="img/icon.svg" alt="icon">
                    <p class="titolo">{{$item['titolo']}}</p>
                    <p class="cottura">{{$item['cottura']}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>        
</main>

</body>
</html>
