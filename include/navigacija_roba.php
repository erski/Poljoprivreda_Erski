
    <table align="center"  width="50%">
        <tr>
            <td id="tabela" width="20%"><a href="3roba_kukuruz.php">KUKURUZ</a> </td>
            <td id="tabela" width="20%"><a href="3roba_soja.php">SOJA</a> </td>
            <td id="tabela" width="20%"><a href="3roba_secerna_repa.php">ŠEĆERNA REPA</a> </td>
            <td id="tabela" width="20%"><a href="3roba_suncokret.php">SUNCOKRET</a> </td>
            <td id="tabela" width="20%"><a href="3roba_zito.php">ŽITO</a> </td>
        </tr>
        <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal1">UNOS</a> </td>
        <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal2">UNOS</a> </td>
        <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal3">UNOS</a> </td>
        <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal4">UNOS</a> </td>
        <td id="tabela1" ><a href="" data-toggle="modal" data-target="#exampleModal5">UNOS</a> </td>
    </table>



    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS PREDATOG KUKURUZA</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="unos/3unos_roba.php">

                        <?php
                        include ("include/include_mesto_predaje.php");
                        include ("include/include_ime_predaje.php");
                        ?>

                        <div class="form-group">
                            <label class="control-label">Vrsta kulture:</label>
                            <select class="form-control" name="vrsta">
                                <option value="kukuruz">Kukuruz</option>
                                <option value="soja">Soja</option>
                                <option value="secerna repa">Šećerna repa</option>
                                <option value="suncokret">Suncokret</option>
                                <option value="zito">Žito</option>
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input class="form-control" type="date" name="datum"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Neto količina:</label>
                            <input class="form-control" type="number" name="neto_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Jus količina:</label>
                            <input class="form-control" type="number" name="jus_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Vlaga:</label>
                            <input class="form-control" type="text" name="vlaga" placeholder="Vlaga"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nečistoća:</label>
                            <input class="form-control" type="number" name="necistoca" placeholder="Nečistoća"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Broj odvage:</label>
                            <input class="form-control" type="number" name="br_o" placeholder="Broj odvage"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Komentar:</label>
                            <textarea class="form-control" type="text" name="Komentar" placeholder="Komentar" rows="4"></textarea><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick='unosRobe()' class="btn btn-default">Pošalji</button>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">UNES PREDATE SOJE</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="unos/3unos_roba.php">

                        <?php
                        include ("include/include_mesto_predaje.php");
                        include ("include/include_ime_predaje.php");
                        ?>

                        <div class="form-group">
                            <label class="control-label">Vrsta kulture:</label>
                            <select class="form-control" name="vrsta">
                                <option value="soja">Soja</option>
                                <option value="kukuruz">Kukuruz</option>
                                <option value="secerna repa">Šećerna repa</option>
                                <option value="suncokret">Suncokret</option>
                                <option value="zito">Žito</option>
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input class="form-control" type="date" name="datum"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Neto količina:</label>
                            <input class="form-control" type="number" name="neto_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Jus količina:</label>
                            <input class="form-control" type="number" name="jus_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Vlaga:</label>
                            <input class="form-control" type="text" name="vlaga" placeholder="Vlaga"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nečistoća:</label>
                            <input class="form-control" type="number" name="necistoca" placeholder="Nečistoća"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Broj odvage:</label>
                            <input class="form-control" type="number" name="br_o" placeholder="Broj odvage"><br><br><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Komentar:</label>
                            <textarea class="form-control" type="text" name="Komentar" placeholder="Komentar" rows="4"></textarea><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick="unosRobe()" class="btn btn-default">Pošalji</button>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS PREDATE ŠEĆERNE REPE</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="unos/3unos_roba.php">

                        <?php
                        include ("include/include_mesto_predaje.php");
                        include ("include/include_ime_predaje.php");
                        ?>

                        <div class="form-group">
                            <label class="control-label">Vrsta kulture:</label>
                            <select class="form-control" name="vrsta">
                                <option value="secerna repa">Šećerna repa</option>
                                <option value="suncokret">Suncokret</option>
                                <option value="kukuruz">Kukuruz</option>
                                <option value="soja">Soja</option>
                                <option value="zito">Žito</option>
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input class="form-control" type="date" name="datum"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Neto količina:</label>
                            <input class="form-control" type="number" name="neto_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Jus količina:</label>
                            <input class="form-control" type="number" name="jus_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Vlaga:</label>
                            <input class="form-control" type="text" name="vlaga" placeholder="Vlaga"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nečistoća:</label>
                            <input class="form-control" type="number" name="necistoca" placeholder="Nečistoća"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Broj odvage:</label>
                            <input class="form-control" type="number" name="br_o" placeholder="Broj odvage"><br><br><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Komentar:</label>
                            <textarea class="form-control" type="text" name="Komentar" placeholder="Komentar" rows="4"></textarea><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick='unosRobe()' class="btn btn-default">Pošalji</button>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS PREDATOG SUNCOKRETA</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="unos/3unos_roba.php">

                        <?php
                        include ("include/include_mesto_predaje.php");
                        include ("include/include_ime_predaje.php");
                        ?>

                        <div class="form-group">
                            <label class="control-label">Vrsta kulture:</label>
                            <select class="form-control" name="vrsta">
                                <option value="suncokret">Suncokret</option>
                                <option value="zito">Žito</option>
                                <option value="kukuruz">Kukuruz</option>
                                <option value="soja">Soja</option>
                                <option value="secerna repa">Šećerna repa</option>
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input class="form-control" type="date" name="datum"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Neto količina:</label>
                            <input class="form-control" type="number" name="neto_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Jus količina:</label>
                            <input class="form-control" type="number" name="jus_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Vlaga:</label>
                            <input class="form-control" type="text" name="vlaga" placeholder="Vlaga"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nečistoća:</label>
                            <input class="form-control" type="number" name="necistoca" placeholder="Nečistoća"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Broj odvage:</label>
                            <input class="form-control" type="number" name="br_o" placeholder="Broj odvage"><br><br><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Komentar:</label>
                            <textarea class="form-control" type="text" name="Komentar" placeholder="Komentar" rows="4"></textarea><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick='unosRobe()' class="btn btn-default">Pošalji</button>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">UNOS PREDATOG ŽITA</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="unos/3unos_roba.php">

                        <?php
                        include ("include/include_mesto_predaje.php");
                        include ("include/include_ime_predaje.php");
                        ?>

                        <div class="form-group">
                            <label class="control-label">Vrsta kulture:</label>
                            <select class="form-control" name="vrsta">
                                <option value="zito">Žito</option>
                                <option value="secerna repa">Šećerna repa</option>
                                <option value="soja">Soja</option>
                                <option value="kukuruz">Kukuruz</option>
                                <option value="suncokret">Suncokret</option>
                            </select><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Datum:</label>
                            <input class="form-control" type="date" name="datum"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Neto količina:</label>
                            <input class="form-control" type="number" name="neto_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Jus količina:</label>
                            <input class="form-control" type="number" name="jus_kolicina" placeholder="Količina"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Vlaga:</label>
                            <input class="form-control" type="text" name="vlaga" placeholder="Vlaga"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nečistoća:</label>
                            <input class="form-control" type="number" name="necistoca" placeholder="Nečistoća"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Broj odvage:</label>
                            <input class="form-control" type="number" name="br_o" placeholder="Broj odvage"><br><br><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Komentar:</label>
                            <textarea class="form-control" type="text" name="Komentar" placeholder="Komentar" rows="4"></textarea><br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Posalji" onclick='unosRobe()' class="btn btn-default">Pošalji</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


<script>
    function unosRobe() {
        alert("U slučaju da Vas vrati na početnu stranu, polja su Vam prazna! U suprotnom, uspešno ste uneli podatke!");
    }
</script>