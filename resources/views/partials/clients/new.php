<div ng-controller="clientsCtrl" ng-scope>

    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Nuevo Cliente</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nombre">Nombre</label>
                <div class="col-md-4">
                    <input id="nombre" name="nombre" class="form-control input-md" type="text" ng-model="client.name">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="apellido">Apellido</label>
                <div class="col-md-4">
                    <input id="apellido" name="apellido" class="form-control input-md" type="text" ng-model="client.surname">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="fecha_nacimiento">fecha nacimiento</label>
                <div class="col-md-4">
                    <input id="fecha_nacimiento" name="fecha_nacimiento" class="form-control input-md" type="date" ng-model="client.birth_date">
                </div>
            </div>
             <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="phone">Telefono</label>
                <div class="col-md-4">
                    <input id="phone" name="phone" class="form-control input-md" type="text" ng-model="client.phone">
                </div>
            </div>
             <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="address">Direccion</label>
                <div class="col-md-4">
                    <input id="address" name="address" class="form-control input-md" type="text" ng-model="client.address">
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="clientSave()">Save</button>
                    <a class="btn btn-danger" ng-href="/clients" onclick="highlightSearch()">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
    
</div>

  