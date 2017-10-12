<script src="<?= \Idno\Core\site()->config()->url; ?>IdnoPlugins/Lightbox/vendor/ekko-lightbox.min.js"></script>

<script type="text/javascript">
    $("div.idno-entry-photo .entry-content img.u-photo").parent('a').click(function() {
	event.preventDefault();
	
	var src = $(this).attr('data-original-img');
	
	if (!src)
	    src = $(this).children('img').attr('src');
	
	$("div.idno-entry-photo .entry-content img.u-photo").parent('a').attr('href', src).attr('data-type', 'image');
	$(this).ekkoLightbox({
	    loadingMessage: "<?= addslashes(str_replace("\n",'', $this->__(['start-hidden' => false])->draw('entity/edit/spinner'))); ?>"
	});
    });

</script>
