<script>
  function initMap(){
    const marcador = { lat: -16.515892972222, lng:-68.128947972222 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: marcador,
    });
    const marker = new google.maps.Marker({
      position: marcador,
      map: map,
    });
  }
  </script>