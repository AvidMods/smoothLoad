/*
	smoothLoad
		v1.0 by Lachlan (http://steamcommunity.com/id/UnresolvedVice)
 */


/*
	BASIC SERVER INFORMATION
 */

// Define a custom server name
var useServerName = true;
// The server's name
var serverName = "smoothLoad by Lachlan";

// Use a server image
var useImage = true;
// Path to server image
var serverImage = "images/defaultServer.jpg";

// Background Image
var backgroundImage = "images/background.jpg";

/*
	SERVER DETAILS
 */

// Server description, won't be used if useDescArray is set to true.
var serverDesc = "This is a default server description. The server decription is capable of holding a lot of letters. The server description is also capable of using an array of server descriptions.. why you would need to use an array of server descriptions, I'm not entirely sure, but it's there for you if you wish to use it. Features are always nice.";

// Multiple description capability
var useDescArray = true;
// Delay (in milliseconds) between descriptions - Default is 10 seconds.
var descDelay = 10000;

// Use this only if the above is set to true
var serverDescription = [
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor nulla nulla. Cras accumsan sapien massa, eu accumsan neque scelerisque at. Etiam nulla odio, tristique eu ipsum vitae, malesuada ullamcorper ante. Vestibulum eget lacinia ligula, eget porta augue. Donec ullamcorper, ligula id facilisis eleifend, tortor dolor fringilla purus, ut feugiat neque risus ac ligula. Donec nec magna mattis, pellentesque magna id, congue leo. Sed id ipsum vel velit accumsan porta vitae at odio. Nullam maximus vestibulum cursus.",
	"Lorem ipsum dolor sit amet, adipscing elit. Suspendisse nulla nulla. Cras sapien massa, eu accumsan neque scelerisque at. Etiam nulla odio, tristique eu ipsum vitae, malesuada ullamcorper ante. Vestibulum eget lacinia ligula, eget porta augue. Donec ullamcorper, ligula id facilisis eleifend, tortor dolor fringilla purus, ut feugiat neque risus ac ligula. Donec nec magna mattis, pellentesque magna id, congue leo. Sed id ipsum vel velit accumsan porta vitae at odio."
];

// Delay (in milliseconds) between the rule fading - Default is 1 second.
var rulesDelay = 1000;

// Server rules list (max is 5)
var serverRules = [
	"Lorem ipsum dolor sit amet.",
	"Consectetur adipiscing elit. Suspendisse tempor nulla nulla.",
	"Cras sapien massa, eu accumsan neque scelerisque at nulla nulla.",
	"Consectetur adipiscing elit. Suspendisse tempor nulla nulla.",
	"Consectetur adipiscing elit. Suspendisse tempor nulla nulla.",
];
