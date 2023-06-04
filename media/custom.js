$( document ).ready(function() {
    var categories = getCategories(document.URL);
    $('#menu-ggnews .filter input[type=checkbox]').each(function () {
        if(isInArray($(this).val(), categories)) {
            $(this).prop('checked', true);
        }
    });
});

$('#menu-ggnews .span-tree-1').click(function(){
    $(this).parent().find('ul').toggle();
});
$('.mean-expand').click(function() {
    var ul = $(this).parent().find('ul');
    ul.toggle();
    alert(ul.hasClass('ht-dropdown'));
    if(ul.hasClass('ht-dropdown')) {
        alert('test');
        ul.removeClass('ht-dropdown')
    }
    else {
        ul.addClass('ht-dropdown')
    }
});
$('#menu-ggnews .filter input[type=checkbox]').click(function() {
    if($(this).is(":checked")) {
        window.location.href = getSlugCategory(document.URL, $(this).val());
    }
    else {
        window.location.href = removeSlugCategory(document.URL, $(this).val());
    }
});

function getSlugCategory(url, $newCat) {
    var parts = url.split('/');
    var lastSegment = parts.pop() || parts.pop();
    var categories = lastSegment.split('+');
    categories.push($newCat);
    parts.push(categories.join('+'));
    return parts.join('/');
}

function removeSlugCategory(url, $newCat) {
    var parts = url.split('/');
    var lastSegment = parts.pop() || parts.pop();
    var categories = lastSegment.split('+');
    categories.splice(categories.indexOf($newCat), 1)
    parts.push(categories.join('+'));
    return parts.join('/');
}

function getCategories(url) {
    var parts = url.split('/');
    var lastSegment = parts.pop() || parts.pop();
    return lastSegment.split('+');
}

function isInArray(value, array) {
    return array.indexOf(value) > -1;
}