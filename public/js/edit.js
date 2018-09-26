$(document).ready(function(){
    $("#products").hide();
    $("#categories").show();
    $("#products-select").attr("name","none-route");
    $("#categories-select").attr("name","route");

    $('#criteria').on('change', function() {
        val = this.value ;
        if(val == 0){
            $("#products").hide();
            $("#categories").show();
            $("#products-select").attr("name","none-route");
            $("#categories-select").attr("name","route");
            
        }
        else{
            $("#products").show();
            $("#categories").hide();
            $("#categories-select").attr("name","none-route");
            $("#products-select").attr("name","route");
            
        }
      });
});