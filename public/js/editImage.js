$(document).ready(function(){
	console.log('this is jquery file');
	$('#edit-pic').change(function(){
		console.log('this is edit picture image');
		$('#edit-pic').show();
		console.log('showed?')
		var file = this.files[0];
		var imagefile = file.type;
		var match = ["image/jpg", "image/png", "image/jpeg"];
		if (!((imagefile === match[0]) || (imagefile === match[1]) || (imagefile === match[2]))){
			console.log('image format doesnt fit with any of existing format');
			return false;
		}
		else{
			console.log('here is else which image is fit with any format');
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
			console.log(typeof(formData));
		}

		function imageIsLoaded(e){
			$('#img').attr('src', e.target.result);
		}
	});
});