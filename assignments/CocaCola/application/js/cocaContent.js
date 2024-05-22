$(document).ready(function() {
    $.ajax({
        url: '../../CocaCola/index.php/getJsonData',
        type: 'GET',
        dataType: 'json',
        success: function(record) {
            console.log('Data received:', record);

            $('#title_home').html('<h2>' + record[0].title + '</h2>');
            $('#subtitle_home').html('<h3>' + record[0].subTitle + '</h3>');
            $('#description_home').html('<p>' + record[0].description + '</p>');

            // Update the coke home page main text data
            $('#title_cokehome').html('<h2>' + record[1].title + '</h2>');
            $('#subtitle_cokehome').html('<h3>' + record[1].subTitle + '</h3>');
            $('#description_cokehome').html('<p>' + record[1].description + '</p>');

            // Update the home page centre column text data
            $('#title_centre').html('<h2>' + record[2].title + '</h2>');
            $('#subtitle_centre').html('<h3>' + record[2].subTitle + '</h3>'); 
            $('#description_centre').html('<p>' + record[2].description + '</p>');

            // Update the right column text data 
            $('#title_right').html('<h2>' + record[3].title + '</h2>'); 
            $('#subtitle_right').html('<h3>' + record[3].subTitle + '</h3>'); 
            $('#description_right').html('<p>' + record[3].description + '</p>');

            //Get the coke main text data
            $('#x3dModelTitle_coke').html('<h2>' + record[4].modelTitle + '<h2>');
            $('#x3dCreationMethod_coke').html('<p>' + record[4].method + '<p>');
            $('#title_coke').html('<h2>' + record[4].title + '<h2>');
            $('#subTitle_coke').html('<h3>' + record[4].subTitle + '</h3>');
            $('#description_coke').html('<p>' + record[4].description + '</p>');

            $('#x3dModelTitle_sprite').html('<h2>' + record[5].modelTitle + '<h2>');
            $('#x3dCreationMethod_sprite').html('<p>' + record[5].method + '<p>');
            $('#title_sprite').html('<h2>' + record[5].title + '<h2>');
            $('#subTitle_sprite').html('<h3>' + record[5].subTitle + '</h3>');
            $('#description_sprite').html('<p>' + record[5].description + '</p>');		

            //Get the pepper main text data
            $('#x3dModelTitle_pepper').html('<h2>' + record[6].modelTitle + '<h2>');
            $('#x3dCreationMethod_pepper').html('<p>' + record[6].method + '<p>');
            $('#title_pepper').html('<h2>' + record[6].title + '<h2>');
            $('#subTitle_pepper').html('<h3>' + record[6].subTitle + '</h3>');
            $('#description_pepper').html('<p>' + record[6].description + '</p>');

            //Get the gallery contents data
            $('.title_gallery').html('<h2>' + record[7].title + '<h2>');
            $('.description_gallery').html('<p>' + record[7].description + '</p>');

            $('#title_cokefooter').html('<h2>' + record[9].title + '</h2>');
            $('#subtitle_cokefooter').html('<h3>' + record[9].subTitle + '</h3>');
            $('#description_cokefooter').html('<p>' + record[9].description + '</p>');

            $('#index_recycle').html('<h2>' + record[10].title + '</h2>');
            $('#index_recycle_des').html('<p>' + record[10].description + '</p>');

            $('#index_coco').html('<h2>' + record[11].title + '</h2>');
            $('#index_coco_des').html('<p>' + record[11].description + '</p>');

            $('#index_sprite').html('<h2>' + record[12].title + '</h2>');
            $('#index_sprite_des').html('<p>' + record[12].description + '</p>');

            $('#history_title').html('<h2>' + record[13].title + '</h2>');
            $('#history_subtitle').html('<h3>' + record[13].subTitle + '</h3>');
            $('#history_des').html('<p>' + record[13].description + '</p> <p>' + record[13].description + '</p> <p>' + record[13].description + '</p>');

            $('#title_sprite').html('<h2>' + record[14].title + '</h2>');
            $('#description_sprite').html('<p>' + record[14].description + '</p>');

            $('#title_pepper').html('<h2>' + record[15].title + '</h2>');
            $('#description_pepper').html('<p>' + record[15].description + '</p>');

            $('#title_pepsi').html('<h2>' + record[16].title + '</h2>');
            $('#description_pepsi').html('<p>' + record[16].description + '</p>');

            $('#title_fizz').html('<h2>' + record[17].title + '</h2>');
            $('#description_fizz').html('<p>' + record[17].description + '</p>');

            $('#title_redbull').html('<h2>' + record[18].title + '</h2>');
            $('#description_redbull').html('<p>' + record[18].description + '</p>');

            $('#title_limca').html('<h2>' + record[19].title + '</h2>');
            $('#description_limca').html('<p>' + record[19].description + '</p>');

        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Request failed:', textStatus, errorThrown);
            console.log('jqXHR:', jqXHR);
        }
    });
});