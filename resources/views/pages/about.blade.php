@extends('app')

@section('title', 'A propos | '. config('app.name'))



@section('content')
<div class="header">
    <h2>Contactez-nous</h2>
</div>
<div class="container contact">
	<div class="row">

		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nom:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="fname" placeholder="Nom" name="fname">
				  </div>
				  <label class="control-label col-sm-2" for="lname">Prénom:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="lname" placeholder="Prénom" name="lname">
				  </div>
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Exemple@exemple.fr" name="email">
				  </div>
    			  <label class="control-label col-sm-2" for="comment">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Envoyer</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection
