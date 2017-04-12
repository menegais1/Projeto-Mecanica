<div class="row data">
    <div class="row">
        <div class="col-md-1">
            <label class="control-label" for="numberPage">Number Per Page</label>
        </div>
        <div class="col-md-3">
            <select name="numberPage" id="numberPage" class="form-control input-lg">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <input class="form-control input-lg" id="search" type="text" placeholder="Procurar..."
                   name="search">

        </div>
    </div>
    <br>
    <div class="col-md-12">
        <table class="table table-bordered table-striped table-padded table-data">
            <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Cliente
                </th>
                <th>
                    Placa
                </th>
                <th>
                   Marca
                </th>
                <th>
                    Ano
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    12
                </td>
                <td>
                    Roberto Menegais
                </td>
                <td>
                    ypk-8228
                </td>
                <td>
                    Ford
                </td>
                <td>
                    2007
                </td>

            </tr>

            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="paginator">
                <a class="btn btn-sm btn-default pgn-btn-previous">Anterior</a>
                <a class="pgn-link">1</a>
                <a class="pgn-link">2</a>
                <a class="pgn-link">3</a>
                <a class="pgn-link">4</a>
                <a class="pgn-link">5</a>
                <a class="btn btn-sm btn-default pgn-btn-next">Próximo</a>
            </div>
        </div>
    </div>
</div>