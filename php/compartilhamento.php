<center>
    <a href="" id="telegram-share-btt" rel="nofollow" target="_blank" class="telegram-share-button"></a>    
    <!-- Você pode colocar este script num arquivo externo -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href); //url
            var title = encodeURIComponent(document.title); //título
            var telegramLink = "https://telegram.me/share/url?url=" + url + "&text=" + title;
            document.getElementById("telegram-share-btt").href = telegramLink;
        }, false);
    </script>
    <a href="" id="twitter-share-btt" rel="nofollow" target="_blank" class="twitter-share-button"></a>
    
    <!-- Você pode colocar este script num arquivo externo -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href);
            var titulo = encodeURIComponent(document.title);
            //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
            //altera a URL do botão
            document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo;
            
            //se for usar o atributo via, utilize a seguinte url
            //document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via;
        }, false);
    </script>

    <a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank" class="whatsapp-share-button"></a>
    
    <!-- Você pode colocar este script num arquivo externo -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //conteúdo que será compartilhado: Título da página + URL
            var conteudo = encodeURIComponent(document.title + " " + window.location.href);
            //altera a URL do botão
            document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
        }, false);
    </script>


        <a href="" id="mail-share-btt" rel="nofollow" target="_blank" class="mail-share-button"></a>    
    <!-- Você pode colocar este script num arquivo externo -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = window.location.href; //url
            var title = encodeURIComponent(document.title); //título
            var mailToLink = "mailto:?subject="+title;
            
            //tenta obter o conteúdo da meta tag description
            var desc = document.querySelector("meta[name='description']");            
            desc = (!!desc)? desc.getAttribute("content") : null;
            
            //se a meta tag description estiver ausente...
            if(!desc){
                //...tenta obter o conteúdo da meta tag og:description
                desc = document.querySelector("meta[property='og:description']");
                desc = (!!desc)? desc.getAttribute("content") : null;
            }
            //Se houver descrição, combina a descrição com a url
            //senão o corpo da mensagem terá apenas a url
            var body = (!!desc)? desc + " " + url : url;
            //altera o link do botão
            mailToLink = mailToLink + "&body=" + encodeURIComponent(body);
            document.getElementById("mail-share-btt").href = mailToLink;
        }, false);
    </script>


    <a href="" id="facebook-share-btt" rel="nofollow" target="_blank" class="facebook-share-button"></a>
    
    <!-- Você pode colocar este script num arquivo externo -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {            
            //altera a URL do botão
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href);
        }, false);
    </script>
</center>
