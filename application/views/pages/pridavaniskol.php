<html>
    <head>
        <title>Přidávání škol</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <style>
             input{
    width: 35%;
    height: 5%;
    border: 1px;
    border-radius: 03px;
    padding: 4px 10px 4px 12px;
    margin: 5px 0px 1px 0px;
    box-shadow: 1px 1px 2px 1px grey;
}
.jumbotron{
    background-color:#00FFFF;
}
        </style>
    </head>
    <body style="background-color:lightblue;">
 <div class="row">
              <div class="col-2">      
               </div>
             <div class="row">
                          <div class="col-2">
                    </div>
        </div>
            <div class="col-8">
            <div class="text-center" style="color:black">
            <h1><b>Úprava dat škol</b></h1>
            <table class="table table-bordered table-striped table-light">               
    <tr>
           <th scope="col" class="text-center"  >ID</th>
         <th scope="col" class="text-center" >Název</th>
        <th scope="col"class="text-center" >Město</th>
        <th scope="col"class="text-center" >Geo-lat</th>
      <th scope="col"class="text-center" >Geo-long</th>
    </tr>
                        </table>
                        <center>
            <div class="col-5">
                <button type="button" class="btn btn-blue">
                <a class="nav-link text-dark" href="formular">Zpět na menu</a>
            </div> 
            </center>
            <div><br>&nbsp</div>
                </div>
        </div>
            </div>
            <div class="container">
        <div class="jumbotron">
    <center>
             <h2> Upravení dat Škol </h2>
         <form action="" method="POST">
             <input type="text" name="id" placeholder="Zadejte ID školy"/><br/>
              <input type="text" name="datum" placeholder="Zadejte nový název Školy"/><br/>
              <input type="text" name="zamestnanec" placeholder="Zadejte nové Město"/><br/>
              <input type="text" name="popis_zavady" placeholder="Zadejte nové Geo-lat"/><br/>
              <input type="text" name="vymenene_soucastky" placeholder="Zadejte nové Geo-long"/><br/>
              <input type="text" name="cas_opravy" placeholder="Zadejte novou dobu opravy"/><br/>
              
            <input type="submit" name="update" value="Klikněte pro upravení dat">
        </form>
    </center>
        </div>
        </div>
            </div>
              
              

            <div class="container">
        <div class="jumbotron">
    <center>
        <h2> Přidání nové školy do databáze </h2>
           <form action="" method="POST">
              <input type="text" name="datum" placeholder="Zadejte název školy"/><br/>
              <input type="text" name="zamestnanec" placeholder="Zadejte město"/><br/>
              <input type="text" name="popis_zavady" placeholder="Zadejte Geo-lat "/><br/>
              <input type="text" name="vymenene_soucastky" placeholder="Zadejte Geo-long"/><br/>
             <input type="submit" name="insert" value="Přidat data">
        </form>
    </center>
    </body>
</html>


