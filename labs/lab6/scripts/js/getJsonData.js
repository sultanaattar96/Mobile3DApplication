$(document).ready(function(){
    
    // AJAX service request to get the main text data from the JSON data store
    $.getJSON('model/data.json', function(jsonObj) {
        //console.log(jsonObj); // Use for debugging, remove or comment out when done
        
        // Update the home page main text data
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
        $('#subtitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        // Update the coke home page main text data
        $('#title_cokehome').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
        $('#subtitle_cokehome').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
        $('#description_cokehome').html('<p>' + jsonObj.pageTextData[1].description + '</p>');
        
        // Update the home page left column text data
        // $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
        // $('#subtitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
        // $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        // Update the home page centre column text data
        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>');
        $('#subtitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>'); 
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        // Update the right column text data 
        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>'); 
        $('#subtitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>'); 
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

        //Get the coke main text data
		$('#x3dModelTitle_coke').html('<h2>' + jsonObj.pageTextData[4].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<p>' + jsonObj.pageTextData[4].x3dCreationMethod + '<p>');
		$('#title_coke').html('<h2>' + jsonObj.pageTextData[4].title + '<h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[4].subTitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj.pageTextData[4].description + '</p>');

        $('#x3dModelTitle_sprite').html('<h2>' + jsonObj.pageTextData[5].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + jsonObj.pageTextData[5].x3dCreationMethod + '<p>');
		$('#title_sprite').html('<h2>' + jsonObj.pageTextData[5].title + '<h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[5].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj.pageTextData[5].description + '</p>');		

		//Get the pepper main text data
		$('#x3dModelTitle_pepper').html('<h2>' + jsonObj.pageTextData[6].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_pepper').html('<p>' + jsonObj.pageTextData[6].x3dCreationMethod + '<p>');
 		$('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '<h2>');
		$('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subTitle + '</h3>');
		$('#description_pepper').html('<p>' + jsonObj.pageTextData[6].description + '</p>');

        //Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj.pageTextData[7].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

        $('#title_cokefooter').html('<h2>' + jsonObj.pageTextData[9].title + '</h2>');
        $('#subtitle_cokefooter').html('<h3>' + jsonObj.pageTextData[9].subTitle + '</h3>');
        $('#description_cokefooter').html('<p>' + jsonObj.pageTextData[9].description + '</p>');

        $('#index_recycle').html('<h2>' + jsonObj.pageTextData[10].title + '</h2>');
        $('#index_recycle_des').html('<p>' + jsonObj.pageTextData[10].description + '</p>');

        $('#index_coco').html('<h2>' + jsonObj.pageTextData[11].title + '</h2>');
        $('#index_coco_des').html('<p>' + jsonObj.pageTextData[11].description + '</p>');

        $('#index_sprite').html('<h2>' + jsonObj.pageTextData[12].title + '</h2>');
        $('#index_sprite_des').html('<p>' + jsonObj.pageTextData[12].description + '</p>');

        $('#history_title').html('<h2>' + jsonObj.pageTextData[13].title + '</h2>');
        $('#history_subtitle').html('<h3>' + jsonObj.pageTextData[13].subTitle + '</h3>');
        $('#history_des').html('<p>' + jsonObj.pageTextData[13].description + '</p> <p>' + jsonObj.pageTextData[13].description + '</p> <p>' + jsonObj.pageTextData[13].description + '</p>');

        $('#title_sprite').html('<h2>' + jsonObj.pageTextData[14].title + '</h2>');
        $('#description_sprite').html('<p>' + jsonObj.pageTextData[14].description + '</p>');

        $('#title_pepper').html('<h2>' + jsonObj.pageTextData[15].title + '</h2>');
        $('#description_pepper').html('<p>' + jsonObj.pageTextData[15].description + '</p>');

        $('#title_pepsi').html('<h2>' + jsonObj.pageTextData[16].title + '</h2>');
        $('#description_pepsi').html('<p>' + jsonObj.pageTextData[16].description + '</p>');

        $('#title_fizz').html('<h2>' + jsonObj.pageTextData[17].title + '</h2>');
        $('#description_fizz').html('<p>' + jsonObj.pageTextData[17].description + '</p>');

        $('#title_redbull').html('<h2>' + jsonObj.pageTextData[18].title + '</h2>');
        $('#description_redbull').html('<p>' + jsonObj.pageTextData[18].description + '</p>');

        $('#title_limca').html('<h2>' + jsonObj.pageTextData[19].title + '</h2>');
        $('#description_limca').html('<p>' + jsonObj.pageTextData[19].description + '</p>');

    });
});
