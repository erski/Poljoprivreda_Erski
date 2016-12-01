
    <table align="center" width="50%">
        <tr>
            <td id="tabela" width="50%"><a href="6parcele_vecite.php">VEČITE</a> </td>
            <td id="tabela" width="50%"><a href="6parcele_godisnje.php">GODIŠNJE</a> </td>
        </tr>
    <tr>
        <td id="tabela1" width="50%"><a href="" data-toggle="modal" data-target="#exampleModal1">UNOS</a> </td>
        <td id="tabela1" width="50%"><a href="" data-toggle="modal" data-target="#exampleModal2">UNOS</a> </td>
    </tr>
    </table>





    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 align="center" class="modal-title" id="exampleModalLabel">NOVA PARCELA - VECITO</h4>

                </div>
                <div class="modal-body">

                    <form method="post" action="unos/6unos_parcela.php">

                        <div class="form-group">
                            <label for="naziv" class="control-label">Naziv parcele:</label><br>
                            <input class="form-control" type="text" name="naziv" placeholder="Naziv"><br>
                        </div>

                        <div class="form-group">
                            <label for="cena" class="control-label">Broj parcele:</label><br>
                            <input class="form-control" type="number" name="br_parcele"  placeholder="Broj parcele"><br>
                        </div>



                        <div class="form-group">
                            <label for="cena">Kordinate1:</label class="control-label"><br>
                            <input class="form-control" type="number" name="koordinate1"  placeholder="Kordinate1">
                            <label for="cena" class="control-label">Kordinate2:</label><br>
                            <input class="form-control" type="number" name="koordinate2"  placeholder="Kordinate2"><br>
                        </div>

                        <div class="form-group">
                            <label for="cena" class="control-label">Veličina parcele - hektari:</label><br>
                            <input class="form-control" type="number" name="velicina1"  placeholder="Velicina parcele - hektari">
                            <input class="form-control" type="number" name="velicina2"  placeholder="Velicina parcele - ari">
                            <input class="form-control" type="number" name="velicina3"  placeholder="Velicina parcele - metri"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="datum">Datum:</label><br>
                            <input  class="form-control" type="date" name="datum" ><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cena:</label>
                            <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="parcela">Vecita</label><br>
                            <select class="form-control" name="vecito_godisnje">
                                <option value="Vecita">Vecita</option>
                                <option value="Godisnje">Godisnje</option>
                            </select><br>
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
                    <h4 align="center" class="modal-title" id="exampleModalLabel">NOVA PARCELA - GODIŠNJE</h4>

                </div>
                <div class="modal-body">
                    <form method="post" action="unos/6unos_parcela.php">

                        <div class="form-group">
                            <label for="naziv" class="control-label">Naziv parcele:</label><br>
                            <input class="form-control" type="text" name="naziv" placeholder="Naziv"><br>
                        </div>

                        <div class="form-group">
                            <label for="cena" class="control-label">Broj parcele:</label><br>
                            <input class="form-control" type="number" name="br_parcele"  placeholder="Broj parcele"><br>
                        </div>



                        <div class="form-group">
                            <label for="cena">Kordinate1:</label class="control-label"><br>
                            <input class="form-control" type="number" name="koordinate1"  placeholder="Kordinate1">
                            <label for="cena" class="control-label">Kordinate2:</label><br>
                            <input class="form-control" type="number" name="koordinate2"  placeholder="Kordinate2"><br>
                        </div>

                        <div class="form-group">
                            <label for="cena" class="control-label">Veličina parcele - hektari:</label><br>
                            <input class="form-control" type="number" name="velicina1"  placeholder="Velicina parcele - hektari">
                            <input class="form-control" type="number" name="velicina2"  placeholder="Velicina parcele - ari">
                            <input class="form-control" type="number" name="velicina3"  placeholder="Velicina parcele - metri"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="datum">Datum:</label><br>
                            <input  class="form-control" type="date" name="datum" ><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cena:</label>
                            <input class="form-control"  type="number" name="cena" placeholder="Cena"><br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="parcela">Godišnje:</label><br>
                            <select class="form-control" name="vecito_godisnje">
                                <option value="Godisnje">Godisnje</option>
                                <option value="Vecita">Vecita</option>
                            </select><br>
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
