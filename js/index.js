	var animData = {
		wrapper: document.querySelector('#animationWindow'),
		animType: 'svg',
		loop: true,
		prerender: true,
		autoplay: true,
		path: 's.cdpn.io/35984/LEGO_loader.json'
	};
	var anim = bodymovin.loadAnimation(animData);
anim.setSpeed(3.4);