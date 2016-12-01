 <table align="center" width="75%">
        <tr>
            <td id="tabela" width="20%"><a href="4obracunata_roba_kukuruz.php">OBRAČUNAT KUKURUZ</a> </td>
            <td id="tabela" width="20%"><a href="4obracunata_roba_soja.php">OBRAČUNATA SOJA</a> </td>
            <td id="tabela" width="20%"><a href="4obracunata_roba_secerna_repa.php">OBRAČUNATA ŠEĆERNA REPA</a> </td>
            <td id="tabela" width="20%"><a href="4obracunata_roba_suncokret.php">OBRAČUNAT SUNCOKRET</a> </td>
            <td id="tabela" width="20%"><a href="4obracunata_roba_zito.php">OBRAČUNATO ŽITO</a> </td>
        </tr>
     <tr>
         <td id="tabela1" width="20%"><a href="" data-toggle="modal" data-target="#exampleModal1">UNOS</a> </td>
         <td id="tabela1" width="20%"><a href="" data-toggle="modal" data-target="#exampleModal2">UNOS</a> </td>
         <td id="tabela1" width="20%"><a href="" data-toggle="modal" data-target="#exampleModal3">UNOS</a> </td>
         <td id="tabela1" width="20%"><a href="" data-toggle="modal" data-target="#exampleModal4">UNOS</a> </td>
         <td id="tabela1" width="20%"><a href="" data-toggle="modal" data-target="#exampleModal5">UNOS</a> </td>
     </tr>
 </table>





 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS OBRAČUNATOG KUKURUZA</h4>

             </div>
             <div class="modal-body">

                     <form method="post" action="unos/4unos_obracunate_robe.php">

                     <div class="form-group">
                         <label class="control-label">Vrsta kulture:</label>
                         <select class="form-control"  name="vrsta2">
                             <option value="kukuruz">Kukuruz</option>
                             <option value="soja">Soja</option>
                             <option value="secerna repa">Šećerna repa</option>
                             <option value="suncokret">Suncokret</option>
                             <option value="zito">Žito</option>
                         </select><br>
                     </div>

                         <?php
                         include ("include/include_mesto_predaje.php");
                         include ("include/include_ime_predaje.php");
                         ?>

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input class="form-control"  type="date" name="datum"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Količina:</label>
                         <input class="form-control"  type="number" name="kolicina" placeholder="Količina"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Cena:</label>
                         <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                     </div>

                         <?php
                         include ("include/include_racuni.php");
                         ?>

                     <div class="form-group">
                         <label class="control-label">Komentar:</label>
                         <textarea class="form-control" type="text" name="komentar" rows="5" cols="18" placeholder="komentar" ></textarea><br>
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
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS OBRAČUNATE SOJE</h4>

             </div>
             <div class="modal-body">

                 <form method="post" action="unos/4unos_obracunate_robe.php">

                     <div class="form-group">
                         <label class="control-label">Vrsta kulture:</label>
                         <select class="form-control"  name="vrsta2">
                             <option value="soja">Soja</option>
                             <option value="kukuruz">Kukuruz</option>
                             <option value="secerna repa">Šećerna repa</option>
                             <option value="suncokret">Suncokret</option>
                             <option value="zito">Žito</option>
                         </select><br>
                     </div>

                     <?php
                     include ("include/include_mesto_predaje.php");
                     include ("include/include_ime_predaje.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input class="form-control"  type="date" name="datum"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Količina:</label>
                         <input class="form-control"  type="number" name="kolicina" placeholder="Količina"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Cena:</label>
                         <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                     </div>

                     <?php
                     include ("include/include_racuni.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Komentar:</label>
                         <textarea class="form-control" type="text" name="komentar" rows="5" cols="18" placeholder="komentar" ></textarea><br>
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




 <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS OBRAČUNATE ŠEĆERNE REPE</h4>

             </div>
             <div class="modal-body">

                 <form method="post" action="unos/4unos_obracunate_robe.php">

                     <div class="form-group">
                         <label class="control-label">Vrsta kulture:</label>
                         <select class="form-control"  name="vrsta2">
                             <option value="secerna repa">Šećerna repa</option>
                             <option value="kukuruz">Kukuruz</option>
                             <option value="soja">Soja</option>
                             <option value="suncokret">Suncokret</option>
                             <option value="zito">Žito</option>
                         </select><br>
                     </div>

                     <?php
                     include ("include/include_mesto_predaje.php");
                     include ("include/include_ime_predaje.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input class="form-control"  type="date" name="datum"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Količina:</label>
                         <input class="form-control"  type="number" name="kolicina" placeholder="Količina"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Cena:</label>
                         <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                     </div>

                     <?php
                     include ("include/include_racuni.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Komentar:</label>
                         <textarea class="form-control" type="text" name="komentar" rows="5" cols="18" placeholder="komentar" ></textarea><br>
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





 <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS OBRAČUNATOG SUNCOKRETA</h4>

             </div>
             <div class="modal-body">

                 <form method="post" action="unos/4unos_obracunate_robe.php">

                     <div class="form-group">
                         <label class="control-label">Vrsta kulture:</label>
                         <select class="form-control"  name="vrsta2">
                             <option value="suncokret">Suncokret</option>
                             <option value="kukuruz">Kukuruz</option>
                             <option value="soja">Soja</option>
                             <option value="secerna repa">Šećerna repa</option>
                             <option value="zito">Žito</option>
                         </select><br>
                     </div>

                     <?php
                     include ("include/include_mesto_predaje.php");
                     include ("include/include_ime_predaje.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input class="form-control"  type="date" name="datum"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Količina:</label>
                         <input class="form-control"  type="number" name="kolicina" placeholder="Količina"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Cena:</label>
                         <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                     </div>

                     <?php
                     include ("include/include_racuni.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Komentar:</label>
                         <textarea class="form-control" type="text" name="komentar" rows="5" cols="18" placeholder="komentar" ></textarea><br>
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



 <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS OBRAČUNATOG ŽITA</h4>

             </div>
             <div class="modal-body">

                 <form method="post" action="unos/4unos_obracunate_robe.php">

                     <div class="form-group">
                         <label class="control-label">Vrsta kulture:</label>
                         <select class="form-control"  name="vrsta2">
                             <option value="zito">Žito</option>
                             <option value="kukuruz">Kukuruz</option>
                             <option value="soja">Soja</option>
                             <option value="secerna repa">Šećerna repa</option>
                             <option value="suncokret">Suncokret</option>
                         </select><br>
                     </div>

                     <?php
                     include ("include/include_mesto_predaje.php");
                     include ("include/include_ime_predaje.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Datum:</label>
                         <input class="form-control"  type="date" name="datum"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Količina:</label>
                         <input class="form-control"  type="number" name="kolicina" placeholder="Količina"><br>
                     </div>

                     <div class="form-group">
                         <label class="control-label">Cena:</label>
                         <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                     </div>

                     <?php
                     include ("include/include_racuni.php");
                     ?>

                     <div class="form-group">
                         <label class="control-label">Komentar:</label>
                         <textarea class="form-control" type="text" name="komentar" rows="5" cols="18" placeholder="komentar" ></textarea><br>
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