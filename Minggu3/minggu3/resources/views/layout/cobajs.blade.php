<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="card">
          <img src="profil.jpeg" alt="Avatar" style="width:100%">
          <div class="container">
            <h4><b>John Doe</b></h4>
            <p>Architect & Engineer</p>
        </div>
          <button class="gantiwarna">Ganti Warna</button>
          
      </div>
      <div class="card">
        <img src="profil.jpeg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>John Doe</b></h4>
          <p>Architect & Engineer</p>
      </div>
        <button class="gantiwarna"></button> 
    </div>
  </div>

  <button></button>
  
</body>
</html>


<style>
.card {
  /* Add shadows to create the "card" effect */
  padding: 10px 0 0 0;
  margin-top: 10px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card.ganti{
  background-color: aqua;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

@media (min-width : 768px){
  .card{
    display: none;
  }

}
</style>


<Script>
  const ganti = document.querySelector('.card');
  ganti.addEventListener('click', function(){
    this.classList.toggle('ganti');
});
</Script>