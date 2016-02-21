<script src="<?= \Idno\Core\site()->config()->url; ?>IdnoPlugins/LightBox/vendor/ekko-lightbox.min.js"></script>

<script type="text/javascript">
    $("div.idno-entry-photo img.u-photo").parent('a').click(function() {
	event.preventDefault();
	$(this).ekkoLightbox();
    });

</script>
