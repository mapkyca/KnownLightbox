<?php

namespace IdnoPlugins\LightBox {

    class Main extends \Idno\Common\Plugin {

	function registerPages() {
	    // Add custom CSS and js
	    \Idno\Core\site()->template()->extendTemplate('shell/head', 'lightbox/shell/head');

	    // Tracking code
	    \Idno\Core\site()->template()->extendTemplate('shell/footer', 'lightbox/shell/footer');
	}

    }

}