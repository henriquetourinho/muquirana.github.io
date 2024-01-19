<div id="direitos-autorais"><a class="link-footer" href="/direitos-autorais">© 2021-<?php echo date('Y');?>, <?php include "/php/dados.php"; echo "$Nome";?>, ou suas Representações. Todos os Direitos Reservados.</a></div>
<script>
(async () => {
    const images = document.querySelectorAll("img.lazyload");
    if ('loading' in HTMLImageElement.prototype) {
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Importa dinamicamente uma biblioteca para lazy loading.
        // Neste exemplo, lazySizes, mas poderia ser qualquer outra.
        const lazySizesLib = await import('/lazysizes.min.js');
 
        // Inicializa LazySizes (lê data-src & class=lazyload)
        lazySizes.init();
    }
})();
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc_S7cUAAAAALgWu18-S31U5BVntTqM296TUyTw"></script>
