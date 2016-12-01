 <table align="center" width="50%">
        <tr>
            <td id="tabela" width="25%"><a href="1radnici.php">RADNICI</a> </td>
            <td id="tabela" width="25%"><a href="1gorivo.php">GORIVO</a> </td>
        </tr>
        <tr>
            <td id="tabela1" width="25%"><a href="" data-toggle="modal" data-target="#exampleModal1">UNOS</a> </td>
            <td id="tabela1" width="25%"><a href="" data-toggle="modal" data-target="#exampleModal2">UNOS</a> </td>
        </tr>
    </table>



 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS RADNIKA</h4>
             </div>
             <div class="modal-body">
                 <form method="post" action="unos/1unos_radnika.php">

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input type="date" name="datum" placeholder="datum" class="form-control"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Ime i prezime radnika:</label>
                         <input type="text" name="ime_prezime" placeholder="Ime" class="form-control"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Broj sati koje je odradio:</label>
                         <input type="number" name="broj_sati"  placeholder="Br sati" class="form-control"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Plata:</label>
                         <input type="number" name="plata" placeholder="Cena" class="form-control"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Komentar:</label>
                         <textarea type="text" name="komentar" rows="3" placeholder="Komentar" class="form-control" ></textarea><br>
                     </div>

                     <div class="modal-footer">
                         <button type="submit" name="submit" value="Posalji" class="btn btn-default">Pošalji</button>
                         <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>








 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS GORIVA</h4>
             </div>
             <div class="modal-body">
                 <form method="post" action="unos/1unos_goriva.php">

                     <div class="form-group">
                         <label class="control-label">Tip:</label>
                         <select class="form-control" name="tip">
                             <option value="Ecto dizel" selected>Ecto dizel</option>
                             <option value="Dizel">Dizel</option>
                             <option value="Dizel">Benzin</option>
                         </select><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input class="form-control" type="date" name="datum" placeholder="Datum" id="datum"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Kolicina (broj litara):</label>
                         <input type="number" class="form-control" name="kolicina" placeholder="Kolicina" id="kolicina"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Cena:</label>
                         <input type="number" class="form-control"name="cena" placeholder="Cena" id="cena"><br>
                     </div>

                     <div class="modal-footer">
                         <button type="submit" name="submit" value="Posalji" class="btn btn-default">Pošalji</button>
                         <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                     </div>
                 </form>

             </div>

         </div>
     </div>
 </div>



