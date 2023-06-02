<center>
	<a href="category/create"><h3>Add new category</h3></a>

			<table border=2>
				<thead>
					<tr>
						<th scope="col">category name</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($categories as $category)
					<tr>
						<td>{!! $category->name !!}</td>
						<td><a href="owner/{!! $category->id !!}/edit">Edit</a>
                        <a href="owner/{!! $category->id !!}/delet">delet</a><td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No categories found</td>
					</tr>
					@endforelse
				</tbody>
			
			</table>
			<br>
			<a href="/public/">back home</a>
</center>
			
