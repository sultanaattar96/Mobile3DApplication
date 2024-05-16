// JavaScript Gallery Generator
$(document).ready(function() {
    // Create the XMLHttpRequest Object for communicating with the web server
    var xmlHttp = new XMLHttpRequest();
    // Stores number of horizontalColumns gallery has, if too large it won't fit in browser window
    var numberOfColumns = 2;
    // Stores newly generated gallery HTML code
    var htmlCode = "<table>"; // Start the table
    // Temporarily stores server response while code is generated
    var response;
    // Set up a path variable to the PHP function that reads the image directory to find the thumbnail file names
    var send = "../application/view/hook.php";
    // Open the connection to the web server
    xmlHttp.open("GET", send, true);
    // Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
    xmlHttp.send(null);
    // Check we get a valid server response
    xmlHttp.onreadystatechange = function() {
        if(xmlHttp.readyState == 4) {
            // Response handler code
            response = xmlHttp.responseText.split("~");
            for (var i = 0; i < response.length; i++) {
                // Open a new row for the first image or if the current image is a multiple of the numberOfColumns
                if (i % numberOfColumns === 0) {
                    if (i !== 0) { // Close the previous row if it's not the first image
                        htmlCode += '</tr>';
                    }
                    htmlCode += '<tr>'; // Start a new row
                }
                htmlCode += '<td id="gallery_cell">';
                //htmlCode += '<a href="assets/images/gallery_images' + response[i] + '">';
                htmlCode += '<a href="../application/assets/images/gallery_images' + response[i]+' " ' + ' data-fancybox data-caption="X3D model render" > ';
                htmlCode += '<img class="card-img-top img-thumbnail" src="../application/assets/images/gallery_images' + response[i] + '" id="image_thumbnail"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';
            }
            // Close the last row and the table after the loop
            htmlCode += '</tr></table>';
            document.getElementById('common_gallery').innerHTML = htmlCode;
        }
    }
});
