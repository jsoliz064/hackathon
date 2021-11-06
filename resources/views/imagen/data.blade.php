<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    @foreach ($imagens as $imagen)
    <center>
        <h1 class="desa_title">Especie</h1>
        <img src="{{asset('../' . $imagen->url)}}" alt="" height="20%" width="20%" class="">
       {{--   <div class="about_container container grid">
          
                <div class="center">
                    <h1 class="desa_title">Especie</h1>
                    
                    <h1 class="desa_title"></h1>
                         <span class="desa_subtitle"></span>
                         <p class="about_description">Descripcion: </p>
                    
                </div>
           
            
        </div>  --}}
   
</center>
    @endforeach
</body>