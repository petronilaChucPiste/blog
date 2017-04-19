<div ng-controller="rentsCtrl" ng-scope>

    <form class="form-horizontal" data-ng-init="getOptions()">
        <fieldset>
            <!-- Form Name -->
            <legend>Nueva Renta</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="date_start">Inicio</label>
                <div class="col-md-4">
                    <input id="date_start" name="date_start" class="form-control input-md" type="date" ng-model="rent.date_start">
                </div>
            </div>
               <div class="form-group">
                <label class="col-md-4 control-label" for="date_end">Fin</label>
                <div class="col-md-4">
                    <input id="date_end" name="date_end" class="form-control input-md" type="date" ng-model="rent.date_end">
                </div>
            </div>
             <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="movie_id">Pelicula</label>
                <div class="col-md-4">
                    <select id="movie_id" name="movie_id" class="form-control" ng-model="rent.movie_id">
                        <option ng-repeat="movie in movies" value="{{movie.id}}">{{movie.name}}</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="client_id">Cliente</label>
                <div class="col-md-4">
                    <select id="client_id" name="client_id" class="form-control" ng-model="rent.client_id">
                        <option ng-repeat="client in clients" value="{{client.id}}">{{client.name}} {{client.surname}}</option>
                    </select>
                </div>
            </div>
 
          
            <!-- Button (Double) -->
            <div class="form-group">
               <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="rentSave();">Save</button>
                    <a class="btn btn-danger" onclick="highlightSearch()" ng-href="/rents">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>

</div>