
    <table align="center" width="50%">
        <tr>
            <td id="tabela" width="33.3%"><a href="2prasak.php">PRAŠAK</a> </td>
            <td id="tabela" width="33.3%"><a href="2hemija.php">HEMIJA</a> </td>
            <td id="tabela"><a href="2seme.php">SEME</a> </td>
        </tr>
        <tr>
            <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal1">UNOS</a> </td>
            <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal2">UNOS</a> </td>
            <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal3">UNOS</a> </td>
        </tr>
    </table>


    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 align="center" class="modal-title" id="exampleModalLabel">KUPLJEN PRAŠAK</h4>
                </div>
                <div class="modal-body">
                    <form align="center" action="unos/2unos_praska.php" method="post">

                        <div class="form-group">
                            <label class="control-label">Naziv:</label>
                            <input type="text" name="naziv" placeholder="Naziv" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kolicina:</label>
                            <input type="number" name="kolicina"  placeholder="Kolicina" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cena:</label>
                            <input type="number" name="cena" placeholder="Cena" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input type="date" name="datum"class="form-control"><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick="novPrasak()" class="btn btn-default">Pošalji</button>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">KUPLJENA HEMIJA</h4>
                </div>
                <div class="modal-body">
                    <form align="center" action="unos/2unos_hemije.php" method="post">

                        <div class="form-group">
                            <label class="control-label">Naziv:</label>
                            <input type="text" name="naziv" placeholder="Naziv" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kolicina:</label>
                            <input type="number" name="kolicina"  placeholder="Kolicina" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cena:</label>
                            <input type="number" name="cena" placeholder="Cena" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input type="date" name="datum" class="form-control"><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick="novaHemija()" class="btn btn-default">Pošalji</button>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">KUPLJENO SEME</h4>
                </div>
                <div class="modal-body">
                    <form align="center" action="unos/2unos_semena.php" method="post">

                        <div class="form-group">
                            <label class="control-label">Vrsta kulture:</label>
                            <select class="form-control" name="vrsta">
                                <option value="1">Kukuruz</option>
                                <option value="2">Soja</option>
                                <option value="3">Šećerna repa</option>
                                <option value="4">Suncokret</option>
                                <option value="5">Žito</option>
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Sorta:</label>
                            <input class="form-control" type="text" name="sorta" placeholder="Sorta"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Kolicina:</label>
                            <input type="number" name="kolicina"  placeholder="Kolicina" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cena:</label>
                            <input type="number" name="cena" placeholder="Cena" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input type="date" name="datum" placeholder="Datum" class="form-control"><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick="novoSeme()" class="btn btn-default">Pošalji</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<script>

    function novoSeme() {
        alert("Uspešno ste uneli novo kupljeno seme!");
    }
    function novaHemija() {
        alert("Uspešno ste uneli novu kupljenu hemiju!");

    }
    function novPrasak() {
        alert("Uspešno ste uneli nov kupljen prašak!")
    }
</script>