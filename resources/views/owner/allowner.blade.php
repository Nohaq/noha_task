<center>
	<a href="owner/create"><h3>Add new owner</h3></a>
<br>
			<table border=2>
				<thead>
					<tr>
						<th scope="col">owners name</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($owners as $owner)
					<tr>
						<td>{!! $owner->name !!}</td>
						<td><a href="owner/{!! $owner->id !!}/edit">Edit</a>
                        <a href="owner/{!! $owner->id !!}/delet">delet</a></td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No owners found</td>
					</tr>
					@endforelse
				</tbody>
			
			</table>
			<br>
			<a href="/">back home</a>
</center>
			
