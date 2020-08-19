$(document).ready(function(){

$("#descButton").click(function(){
    $("#specifications").hide();
    $("#review").hide();
    $("#description").show();
});

$("#specButton").click(function(){
    $("#specifications").show();
    $("#review").hide();
    $("#description").hide();
});

$("#reviewButton").click(function(){
    $("#specifications").hide();
    $("#review").show();
    $("#description").hide();
});


let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
let $deal_price = $("#deal-price");


$qty_up.click(function(e){

    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    let $price = $(`.prod-price[data-id='${$(this).data("id")}']`);
    
    $.ajax({url: "Templates/ajax.php", type: 'post', data: {itemid : $(this).data("id")}, success: function(result){
        
        let obj = JSON.parse(result);
        let item_price = obj[0]['prod_price'];
        

        if($input.val() >= 0 && $input.val() <= 9){
            $input.val(function(i, oldval){
            
                return ++oldval;
            })

            $price.text(parseInt(item_price * $input.val()).toFixed(2));

            let subTotal = parseInt($deal_price.text()) + parseInt(item_price);
            $deal_price.text(subTotal.toFixed(2));

        }


    }});

});

$qty_down.click(function(e){

    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    let $price = $(`.prod-price[data-id='${$(this).data("id")}']`);

    $.ajax({url: "Templates/ajax.php", type: 'post', data: {itemid : $(this).data("id")}, success: function(result){

        let obj = JSON.parse(result);
        let item_price = obj[0]['prod_price'];

        if($input.val() > 0 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            })

            $price.text(parseInt(item_price * $input.val()).toFixed(2));

            let subTotal = parseInt($deal_price.text()) - parseInt(item_price);
            $deal_price.text(subTotal.toFixed(2));

        }



    }});

});

    

});