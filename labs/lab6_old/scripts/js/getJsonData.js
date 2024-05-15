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

        //Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj.pageTextData[7].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

        $('#title_cokefooter').html('<h2>' + jsonObj.pageTextData[9].title + '</h2>');
        $('#subtitle_cokefooter').html('<h3>' + jsonObj.pageTextData[9].subTitle + '</h3>');
        $('#description_cokefooter').html('<p>' + jsonObj.pageTextData[9].description + '</p>');

        $('#index_recycle').html('<h2>' + jsonObj.pageTextData[10].title + '</h2>');
        $('#index_recycle_des').html('<p>' + jsonObj.pageTextData[10].description + '</p>');
    });
});
