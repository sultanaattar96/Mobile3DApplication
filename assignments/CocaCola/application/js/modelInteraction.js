function getActiveModel() {
    if (document.getElementById('coke').style.display !== 'none') {
        return 'cokeModel';
    } else if (document.getElementById('sprite').style.display !== 'none') {
        return 'spriteModel';
    } else if (document.getElementById('pepper').style.display !== 'none') {
        return 'pepperModel';
    } else {
        return null; // No active model
    }
}

function getActiveModelWire() {
    if (document.getElementById('coke').style.display !== 'none') {
        return 'cokeWire';
    } else if (document.getElementById('sprite').style.display !== 'none') {
        return 'spriteWire';
    } else if (document.getElementById('pepper').style.display !== 'none') {
        return 'pepperWire';
    } else {
        return null; // No active model
    }
}

function animateModel() {
    var modelName = getActiveModel(); // Get the active model name
    if (modelName) {
        var rotationTimerId = modelName + '__RotationTimer'; // Construct the rotation timer ID
        var element = document.getElementById(rotationTimerId);
        if (element) {
            var isEnabled = element.getAttribute('enabled') === 'true';
            element.setAttribute('enabled', (!isEnabled).toString()); // Toggle the 'enabled' attribute
            console.log('Rotation ' + (isEnabled ? 'stopped' : 'started') + ' for ' + modelName);
        } else {
            console.log('Rotation timer element not found for ' + modelName);
        }
    } else {
        console.log('No active model found');
    }
}

//All camera directions with modeltype has been covered here.
function setCamera(modelName, cameraDirection) {
    var cameraId = modelName + '__Camera' + cameraDirection;
	console.log('cameraId');
	console.log(cameraId);
    var element = document.getElementById(cameraId);
    
    if (element) {
        element.setAttribute('bind', 'true');
    } else {
        console.log('Invalid model ID or camera direction');
    }
}

// Function to start rotation around the X-axis
function rotateX() {
    var modelName = getActiveModel();
    var rotationId = modelName + '__RotationTimer';
    var element = document.getElementById(rotationId);

    if (element) {
        element.setAttribute('rotation', '1 0 0 0.785398'); // Rotate 45 degrees around X-axis
        element.setAttribute('enabled', 'true');
    } else {
        console.log('Invalid model ID for rotation around X-axis');
    }
}

// Function to start rotation around the Y-axis
function rotateY() {
    var modelName = getActiveModel();
    var rotationId = modelName + '__RotationTimer';
    var element = document.getElementById(rotationId);

    if (element) {
        element.setAttribute('rotation', '0 1 0 0.785398'); // Rotate 45 degrees around Y-axis
        element.setAttribute('enabled', 'true');
    } else {
        console.log('Invalid model ID for rotation around Y-axis');
    }
}

// Function to start rotation around the Z-axis
function rotateZ() {
    var modelName = getActiveModel();
    var rotationId = modelName + '__RotationTimer';
    var element = document.getElementById(rotationId);

    if (element) {
        element.setAttribute('rotation', '0 0 1 0.785398'); // Rotate 45 degrees around Z-axis
        element.setAttribute('enabled', 'true');
    } else {
        console.log('Invalid model ID for rotation around Z-axis');
    }
}

// Function to stop rotation
function stopRotation() {
    var modelName = getActiveModel();
    var rotationTimerId = modelName + '__RotationTimer';
    var element = document.getElementById(rotationTimerId);

    if (element) {
        element.setAttribute('enabled', 'false');
    } else {
        console.log('Invalid model ID for stopping rotation');
    }
}

var lightOn = true;

// Function to toggle headlight for any model
function toggleHeadlight(modelName) {
    lightOn = !lightOn;
    var headlightId = modelName + '__headlight';
    var element = document.getElementById(headlightId);
    if (element) {
        element.setAttribute('headlight', lightOn.toString());
    } else {
        console.log('Invalid headlight ID for model: ' + modelName);
    }
    console.log('Headlight for ' + modelName + ': ' + (lightOn ? 'On' : 'Off'));
}

// Function to toggle target light for any model
function toggleTargetLight(modelName) {
    lightOn = !lightOn;
    var targetLightId = modelName + '__targetLight';
    var element = document.getElementById(targetLightId);
    if (element) {
        element.setAttribute('headlight', lightOn.toString());
    } else {
        console.log('Invalid target light ID for model: ' + modelName);
    }
    console.log('Target light for ' + modelName + ': ' + (lightOn ? 'On' : 'Off'));
}

// Function to toggle all omni lights for a given model
function toggleAllOmniLights(modelName) {
    var omniLightIds = ['omniLight1', 'omniLight2', 'omniLight3', 'omniLight4', 'omniLight5', 'omniLight6'];
	//'omniLight7', 'omniLight8', 'omniLight9', 'omniLight10'
    omniLightIds.forEach(function(lightId) {
        var fullLightId = modelName + '__' + lightId;
        toggleOmniLightById(fullLightId);
    });
}

// Function to toggle an omni light by full ID
function toggleOmniLightById(fullLightId) {
    var lightElement = document.getElementById(fullLightId);
    if (lightElement) {
        // Assuming lightOn is a global variable indicating the state of the lights
        lightOn = !lightOn;
        lightElement.setAttribute('intensity', lightOn ? '0.400000005960464' : '0');
        console.log(fullLightId + ' intensity: ' + (lightOn ? '0.400000005960464' : '0'));
    } else {
        console.log('Invalid light ID: ' + fullLightId);
    }
}


function wireFrame() {
    var modelName = getActiveModelWire(); // Get the active model name
    if (modelName) {
        var wireframeId = modelName; // Construct the wireframe ID
        var e = document.getElementById(wireframeId);
        if (e && e.runtime && typeof e.runtime.togglePoints === 'function') {
            e.runtime.togglePoints(true); // Toggle the points to show the wireframe
            console.log('Wireframe toggled for ' + modelName);
        } else {
            console.log('Wireframe element not found or togglePoints function not available for ' + modelName);
        }
    } else {
        console.log('No active model found');
    }
}

function togglePolygonView() {
    var modelName = getActiveModel(); // Get the active model name
    if (modelName) {
        var polygonId = modelName + '__Polygon'; // Construct the polygon ID
        var e = document.getElementById(polygonId);
        if (e && e.runtime && typeof e.runtime.togglePolygon === 'function') {
            e.runtime.togglePolygon(); // Toggle the polygon view
            console.log('Polygon view toggled for ' + modelName);
        } else {
            console.log('Polygon element not found or togglePolygon function not available for ' + modelName);
        }
    } else {
        console.log('No active model found');
    }
}

function resetToDefault() {
    var modelName = getActiveModel(); // Get the active model name
    if (modelName) {
        // Reset transformations
        var rotationTimerId = modelName + '__RotationTimer';
        var element = document.getElementById(rotationTimerId);
        if (element) {
            element.setAttribute('enabled', 'false'); // Stop any rotations
            element.setAttribute('rotation', '0 0 0 0'); // Reset rotation
            // Reset any other transformations or visual settings here
            console.log('Model reset to default for ' + modelName);
        } else {
            console.log('Rotation timer element not found for ' + modelName);
        }

        // Reset visual settings
        // Example: Reset wireframe view
		// var wireframeId = getActiveModelWire();
        // var wireframeElement = document.getElementById(wireframeId);
        // if (wireframeElement && wireframeElement.runtime && typeof wireframeElement.runtime.togglePoints === 'function') {
        //     wireframeElement.runtime.togglePoints(false); // Assuming 'false' hides the wireframe
        // }

        // Add more resets as needed for other visual settings like lighting, textures, etc.

    } else {
        console.log('No active model found');
    }
}

// Function to start rotation - working
/*function startRotation(modelName, rotationDirection) {
    var rotationId = modelName + '__RotationTimer';
    console.log('rotationId');
    console.log(rotationId);
    var element = document.getElementById(rotationId);

    if (element) {
        element.setAttribute('enabled', 'true');
    } else {
        console.log('Invalid model ID or rotation direction');
    }
}

// Function to stop rotation
function stopRotation(modelName) {
    var rotationTimerId = modelName + '__RotationTimer';
    var element = document.getElementById(rotationTimerId);

    if (element) {
        element.setAttribute('enabled', 'false');
    } else {
        console.log('Invalid model ID');
    }
}*/


/*
function rotateY() {
	if (spinning) {
		rotation += 0.01;
		transformNode.setAttribute('rotation', `0 1 0 ${rotation}`);
		requestAnimationFrame(spinModelX);
	}
	console.log('${rotation}');
  }

  document.getElementById('spinButtonX').addEventListener('click', function() {
	spinning = !spinning;
	if (spinning) {
		rotateY();
		this.textContent = 'Stop Spinning';
	} else {
		this.textContent = 'Spin X';
   }
});*/



/*function cameraFront() {
	
	var element = document.getElementById('pepperModel__CameraFront');

	console.log('sul');
	console.log(element.id);

	if (element.id === 'pepperModel__CameraFront') {
	  document.getElementById('pepperModel__CameraFront').setAttribute('bind', 'true');
	} else if (element.id === 'spriteModel__CameraFront') {
	  document.getElementById('spriteModel__CameraFront').setAttribute('bind', 'true');
	} else if (element.id === 'cokeModel__CameraFront') {
	  document.getElementById('cokeModel__CameraFront').setAttribute('bind', 'true');
	} else {
	  console.log('Invalid model ID');
	}
  }*/


/*
var rotationY = 0; // Global variable to track the Y rotation angle
var rotationZ = 0; // Global variable to track the Z rotation angle
var transformNodeY = document.getElementById('spinButtonY'); // Ensure this is the correct ID
var transformNodeZ = document.getElementById('spinButtonZ'); // Ensure this is the correct ID

function rotateY() {
    if (spinning) {
        rotationY += 0.01;
        transformNodeY.setAttribute('rotation', '0 1 0 ' + rotationY);
        requestAnimationFrame(rotateY);
    }
    console.log(rotationY);
}

function rotateZ() {
    if (spinning) {
        rotationZ += 0.01;
        transformNodeZ.setAttribute('rotation', '0 0 1 ' + rotationZ);
        requestAnimationFrame(rotateZ);
    }
    console.log(rotationZ);
}

// Event listener for the Y rotation button
document.getElementById('spinButtonY').addEventListener('click', function() {
    spinning = !spinning;
    if (spinning) {
        rotateY();
        this.textContent = 'Stop Spinning Y';
    } else {
        this.textContent = 'Spin Y';
    }
});

// Event listener for the Z rotation button
document.getElementById('spinButtonZ').addEventListener('click', function() {
    spinning = !spinning;
    if (spinning) {
        rotateZ();
        this.textContent = 'Stop Spinning Z';
    } else {
        this.textContent = 'Spin Z';
    }
});

*/