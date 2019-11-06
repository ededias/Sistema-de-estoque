var timer = setInterval(() => {
    $(document).on('load', function(){
        document.getElementById("#animacao").style = 'none';
        document.getElementById("corpo").style = 'block'
    })
}, 50000);