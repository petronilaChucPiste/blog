<div ng-controller='clientsCtrl' data-ng-init="getClients()">

<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Editar</th>
			<!-- <th>Eliminar</th> -->
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="client in clients">
			<td>{{client.name}}</td>
			<td>{{client.surname}}</td>
			<td><a class="btn btn-success" ng-href='{{"/clients/"+client.id}}'>Editar</a></td>
			<!-- <td><button class="btn btn-danger" ng-click="clientDelete(client.id)">Eliminar</button></td> -->
		</tr>
	</tbody>
</table>
</div>