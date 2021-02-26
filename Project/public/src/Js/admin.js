$('#btn__add__product').click(()=>{
    $('.hidden__tab').css('visibility', 'visible');
    $('#form-create-product').css('visibility', 'visible');
    $('body').addClass('body');
});

const hiddenTab = document.getElementsByClassName('hidden__tab');

$(window).click(event => {
    if(event.target == hiddenTab[0]){
        $('.hidden__tab').css('visibility', 'hidden');
        $('#form-create-product').css('visibility', 'hidden');
        $('#form-update-product').css('visibility', 'hidden');
        $('body').removeClass('body');
    }
});

$('#table-product').html(total);

$('#total').click(()=>{
    $('#table-product').html(total);
    $('.table__product__title').html('Tổng sản phẩm');
    $('.table__product__category').html('Bảng hiển thị toàn bộ sản phẩm');
});

$('#hot').click(()=>{
    $('#table-product').html(hot);
    $('.table__product__title').html('Sản phẩm HOT');
    $('.table__product__category').html('Bảng hiển thị toàn bộ sản phẩm đang hot');
});

$('#sale').click(()=>{
    $('#table-product').html(sale);
    $('.table__product__title').html('Sản phẩm SALE');
    $('.table__product__category').html('Bảng hiển thị toàn bộ sản phẩm đang sale');
});

$('#male').click(function(){
    if($('.gender__category').html().includes('Sản phẩm Nam')){
        $('#table-product').html(female);
        $('.table__product__title').html('Sản phẩm Nữ');
        $('.table__product__category').html('Bảng hiển thị toàn bộ sản phẩm dành cho nữ');
    }
    else{
        $('#table-product').html(male);
        $('.table__product__title').html('Sản phẩm Nam');
    $('.table__product__category').html('Bảng hiển thị toàn bộ sản phẩm dành cho nam');
    }
});
