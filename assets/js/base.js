$(document).ready(function(){
    var menu = $('#acessoUser');
    
    $(window).resize(function(){
        var verItem = $('#menu-institucional').find("#menu-search"); //SERVE PARA VERIFICAR SE O "MENU-INSTITUCIONAL" POSSUI A DIV "MENU-SEARCH"
        
        //CONTROLE DE EXIBIÇÃO DO MENU X RESOLUÇÃO
        if($(this).width() <= 768 && verItem.length == 0){
            menu.find('a').css('background', '#1b1b1b');
            
            $("#menu-institucional").append(menu);
            $("#menu-institucional").append($("#menu-search"));
        }else if($(this).width() > 768 && verItem.length > 0){
            $("#menu-items").append($("#menu-search"));
            $("#menu-items").append(menu);
        }//FIM CONTROLE
    });
});