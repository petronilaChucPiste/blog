<div ng-controller="rentsCtrl" data-ng-init="getRents()">

<table class="table">
	<thead>
		<tr>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Movie Id</th>
			<th>Client Id</th>
			<th>Returned</th>
			<th>Editar</th> 
		</tr>
	</thead>
	<tbody ng-scope>

		<tr data-ng-repeat="rent in rents">
			<td>{{rent.date_start}}</td>
			<td>{{rent.date_end}}</td>
			<td>{{rent.movie.name}}</td>
			<td>{{rent.client.name}} {{rent.client.surname}}</td>
			<td> <input type="checkbox" ng-checked="rent.returned" /></td>
			<td><a class="btn btn-success" ng-href='{{"/rents/"+rent.id}}'>Editar</a></td> 
		</tr>

	
	</tbody>
</table>

</div>