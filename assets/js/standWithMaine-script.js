jQuery(document).ready( function () {
    let counter = 1;
    let counterArray = ['1'];

    jQuery('.grid-item').each(function(index,item){
        if(index>2){
            jQuery(item).addClass('hidden').hide();
            let z = index + 1;
            if(z%3 != 0){
                let counterClass = String(counter);
                jQuery(item).addClass(counterClass);

            }
            if(z%3 == 0){
                let counterClass = String(counter);
                jQuery(item).addClass(counterClass);
                counter++;
                counterClass = String(counter);
                counterArray.push(counterClass)
            }
        }
    });

    jQuery('.grid').masonry('layout');

    jQuery('#showmore').on('click', function(){
        let b = '.' + counterArray[0];
        let target = jQuery(b);
        target.removeClass('hidden').slideDown();
        counterArray.shift();
        setTimeout(function(){
            jQuery('.grid').masonry('layout');
        }, 440);
    })
});
