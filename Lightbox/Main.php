<?php

namespace IdnoPlugins\LightBox {

    class Main extends \Idno\Common\Plugin {

	function registerPages() {
	    
	    // Lightbox CSS and init code
	    \Idno\Core\Idno::site()->template()->extendTemplate('shell/head', 'lightbox/shell/head');
	    \Idno\Core\Idno::site()->template()->extendTemplate('shell/footer', 'lightbox/shell/footer');
	    
	}

    }

}