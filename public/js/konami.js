/**********************************************/
/**************** Make it Snow ****************/
/**********************************************/

var SCREEN_WIDTH = window.innerWidth;
var SCREEN_HEIGHT = window.innerHeight;

var container;

var divName = "snow";
var pDivName = "particles-js";
var urlRoot = "/";

var particle;

var camera;
var scene;
var renderer;

var mouseX = 0;
var mouseY = 0;

var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;

var particles = [];
var particleImage = new Image(); // THREE.ImageUtils.loadTexture( "img/ParticleSmoke.png" );
particleImage.src = urlRoot + 'img/ParticleSmoke.png';


function loadScript(url, callback)
{
    // Adding the script tag to the head as suggested before
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;

    // Then bind the event to the callback function.
    // There are several events for cross browser compatibility.
    script.onreadystatechange = callback;
    script.onload = callback;

    // Fire the loading
    head.appendChild(script);
}

function init() {

	container = document.createElement('div');
	container.className = divName;
	document.body.appendChild(container);

	camera = new THREE.PerspectiveCamera( 75, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 10000 );
	camera.position.z = 1000;

	scene = new THREE.Scene();
	scene.add(camera);

	renderer = new THREE.CanvasRenderer();
	renderer.setSize(SCREEN_WIDTH, SCREEN_HEIGHT);
	var material = new THREE.ParticleBasicMaterial( { map: new THREE.Texture(particleImage) } );

	for (var i = 0; i < 500; i++) {

		particle = new Particle3D( material);
		particle.position.x = Math.random() * 2000 - 1000;
		particle.position.y = Math.random() * 2000 - 1000;
		particle.position.z = Math.random() * 2000 - 1000;
		particle.scale.x = particle.scale.y =  1;
		scene.add( particle );

		particles.push(particle);
	}

	container.appendChild( renderer.domElement );

	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.addEventListener( 'touchstart', onDocumentTouchStart, false );
	document.addEventListener( 'touchmove', onDocumentTouchMove, false );
    document.addEventListener( 'mouseup', onDocumentClear, false );

	setInterval( loop, 1000 / 60 );

}

function initSnow() {

    container = document.createElement('div');
    container.className = divName;
    container.id = divName;
    document.body.appendChild(container);

    particlesJS.load(divName, 'scripts/particlesjs-snow.json', function() {
        console.log('particles.js loaded - callback');
    });

}

function initAtom() {

    container = document.createElement('div');
    container.className = divName;
    container.id = divName;
    document.body.appendChild(container);

    particlesJS.load(divName, 'scripts/particlesjs-atom.json', function() {
        console.log('particles.js loaded - callback');
    });

}

function onDocumentClear() {
    $('.' + divName).css({"display":"none"});
}

function empty(elem) {
    while (elem.lastChild) elem.removeChild(elem.lastChild);
}

function onDocumentMouseMove( event ) {

    mouseX = event.clientX - windowHalfX;
    mouseY = event.clientY - windowHalfY;
}

function onDocumentTouchStart( event ) {

	if ( event.touches.length == 1 ) {

		event.preventDefault();

		mouseX = event.touches[ 0 ].pageX - windowHalfX;
		mouseY = event.touches[ 0 ].pageY - windowHalfY;
	}
}

function onDocumentTouchMove( event ) {

	if ( event.touches.length == 1 ) {

		event.preventDefault();

		mouseX = event.touches[ 0 ].pageX - windowHalfX;
		mouseY = event.touches[ 0 ].pageY - windowHalfY;
	}
}

//

function loop() {

    for (var i = 0; i < particles.length; i++) {

		var particle = particles[i];
		particle.updatePhysics();

		with(particle.position)
		{
			if(y<-1000) y+=2000;
			if(x>1000) x-=2000;
			else if(x<-1000) x+=2000;
			if(z>1000) z-=2000;
			else if(z<-1000) z+=2000;
		}
	}

	camera.position.x += ( mouseX - camera.position.x ) * 0.05;
	camera.position.y += ( - mouseY - camera.position.y ) * 0.05;
	camera.lookAt(scene.position);

	renderer.render( scene, camera );
}



/**********************************************/
/************* Perform Konami Code ************/
/**********************************************/

// Initiate available codes
bindcode('admin', alertSuccess);    // When 'admin' is entered, fire off start command
bindcode('ogsnow', originalSnow);   // When 'ogsnow' is entered, Original 3D Snowfall
bindcode('MAKEITSNOW', loadSnow);   // When 'makeitsnow' is entered, Flat bubble snow
bindcode("&&((%'%'BA", loadMagic);	// Konami = ↑ ↑ ↓ ↓ ← → ← → B A



/**********************************************/
/*************** Search for Word **************/
/**********************************************/

// Our callback function
function alertSuccess () {
    window.location.replace("/admin");
    alert("You've accessed the admin area");
    //init();
}

function loadMagic() {
    loadScript("scripts/particles.js", createMagic);
}

function originalSnow() {
    init();
}

var createMagic = function () {
    // What to do When entered correctly
    // init();

    initAtom();

    // Re-initiate codes
    bindcode("stop", onDocumentClear);
};

function loadSnow() {
    loadScript("scripts/particles.js", createSnow);
}
var createSnow = function () {
    // What to do When entered correctly
    // init();

    initSnow();

    // Re-initiate codes
    bindcode('MAKEITSNOW', showSnowAgain);
};

function showAgain () {
    // What to do When entered correctly
    $('.' + divName).css({"display":"block"});

    // Re-initiate codes
    bindcode("&&((%'%'BA", showAgain);
}

function showSnowAgain () {
    // What to do When entered correctly
    $('.' + divName).css({"display":"block"});

    // Re-initiate codes
    bindcode("MAKEITSNOW", showAgain);
}

// The bindcode function takes a code, a callback, and an optional element
function bindcode( code, callback, element ) {
    var input = [];
    // When the "keydown" event occurs on either your element, or the document
    $(element || document).on("keydown", function(e){
        // Push the new character onto the input array
        input.push(String.fromCharCode(e.which));
        // Convert to a string and check for presence of code
        if (input.join("").indexOf(code.toUpperCase()) > -1) {
            // Unbind the "keydown" event, and fire off callback
            $(this).off("keydown");
            callback();
        }
    });
}
