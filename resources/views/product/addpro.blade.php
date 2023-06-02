<center><form method="POST" action="">
	<label for="name">Title</label>
    <input type="text" id="name"  name="name" required>
	<label for="body">Short Notes</label>
    <label for="body">Price</label>
	<input type="text" id="price" name="price"required>

				@csrf

				<label for="cat">category of product:</label>
				<select name="cat" id="cat">
				@forelse($categories as $category)
				<option value="{!! $category->id !!}">{!! $category->name !!}</option>
						
				@empty
					
						
					@endforelse

</select>



<button type="submit">Add New</button></div>
			</form>

			
			</center>