<div class="row app-header justify-content-center align-items-center">
	<div class="col-auto animate__animated animate__rubberBand animate__infinite">
		<img src="././img/libro-1.png" class="img-libro1">
	</div>
	<div class="col-auto">
		<h1 class="header-title text-white animate__animated animate__pulse animate__infinite">PRESTAMO DE LIBROS</h1>
	</div>
	<div class="col-auto animate__animated animate__rubberBand animate__infinite">
		<img src="././img/libro-2.png" class="img-libro2">
	</div>
</div>
<script>
	const SCREEN_HEIGHT = window.screen.height;
	const HEADER_HEIGHT = (SCREEN_HEIGHT * 12) / 100;
	const IMG_WIDTH = (SCREEN_HEIGHT * 10) / 100;
	document.querySelector('.app-header').style.height = `${HEADER_HEIGHT}px`;
	document.querySelector('.img-libro1').style.height = `${IMG_WIDTH}px`;
	document.querySelector('.img-libro2').style.height = `${IMG_WIDTH}px`;
</script>