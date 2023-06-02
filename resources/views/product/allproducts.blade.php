<center>
	<a href="product/create"><h3>Add new product</h3></a>

			<table border=2>
				<thead>
					<tr>
						<th>Product name</th>
						<th>Price</th>
						<th >category</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($products as $product)
					<tr>
						<td>{!! $product->name !!}</td>
						<td >{!! $product->price !!}</td>
						<td >{!! $product->cat_id !!}</td>
						<td><a href="product/{!! $product->id !!}/edit">Edit</a>-
						<a href="product/{!! $product->id !!}/delet">delet</a></td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
				</tbody>
			
			</table>
			<br>
			<a href='/'>back home</a>
			
</center>
			
