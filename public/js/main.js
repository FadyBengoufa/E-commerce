/**
 * Price range slider with jquery
 */

 $(document).ready(function(){
     $("#price_slider").slider({
        range: "min",
        value: 10,
        min: 1,
        max: 1000,
        slide:function(event,ui){
            $("#price").val("$ "+ui.value);
        }
     });

     $("#price").val("$" + $("#price_slider").slider("value"));
 });
