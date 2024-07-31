// 計算金額 // TODO 需要監聽的項目加上class
$(document).on('keyup ifChecked', 'input', function(event) {
    MoneyCalculate();
});

// 計算金額
function MoneyCalculate()
{
    // 支付總額
    var total_money = 0;

    // 報價模式
    var quotation_type = parseInt($('input[name=quotation_type]:checked').val());

    $("input[name='order_lists_key']").each(function(index) {

        var item_index = $(this).val();

        // 數量
        var quantity = parseInt($("input[name='order_lists[" + item_index + "][quantity]']").val());
        if ( isNaN( quantity ) ) quantity = 0;

        // 單價
        var unit_price = parseInt($("input[name='order_lists[" + item_index + "][unit_price]']").val());
        if ( isNaN( unit_price ) ) unit_price = 0;

        // 支付總額累計
        this_total_money = parseInt( quantity * unit_price );
        total_money += ( isNaN( this_total_money ) ) ? 0 : this_total_money;

        // 小計
        var subtotal = parseInt( quantity * unit_price );
        if ( isNaN( subtotal ) ) subtotal = 0;

        // 填入該列小計的值
        var _subtotal = $("#order_lists_" + item_index + "_subtotal").prop("tagName");
        if (_subtotal=='TD') {
            $("#order_lists_" + item_index + "_subtotal").text( subtotal.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
        } else {
            $("input[name='order_lists[" + item_index + "][subtotal]']").val( subtotal.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
        }

    });

    // 報價模式未稅要增加5%
    if ( quotation_type == 1 ) 
        total_money = Math.round(total_money * 1.05);

    // 計算稅額(四捨五入)
    // total_taxes = parseInt( (total_money + total_discount) - Math.round( (total_money + total_discount) / ( taxes / 100 ) ) );

    var _total = $("#total_money").prop("tagName");
    if (_total=='P') {

        $("#total_money").text(total_money.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        // $("#total_taxes").text(total_taxes.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        
    } else {

        $("#total_money").val(total_money.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        // $("#total_taxes").val(total_taxes.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    }
}
