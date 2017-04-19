<div ng-controller="moviesCtrl" data-ng-init="getMovies()">

<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Director</th>
			<th>Año</th>
			<th>Género</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody ng-scope>

		<tr data-ng-repeat="movie in movies">
			<td>{{movie.name}}</td>
			<td>{{movie.director.name}} {{movie.director.surname}}</td>
			<td>{{movie.year}}</td>
			<td>{{movie.genre.name}}</td>
			<td><a class="btn btn-success" ng-href='{{"/movies/"+movie.id}}'>Editar</a></td>
			<td><button class="btn btn-danger" ng-click="movieDelete(movie.id)">Eliminar</button></td>
		</tr>

	
	</tbody>
</table>

</div>