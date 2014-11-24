/*
 * Replace double quotes with single quotes
 * /"r'f"r'
 *
 * Replace single quotes with double quotes
 * /'r"f'r"
 *
 * ( is the <return> key)
 */

var $newdiv1 = $('<div/>'),
    newdiv2 = document.createElement('div'),
    existingdiv1 = document.getElementById('foo');
$('body').append($newdiv1, [newdiv2, existingdiv1]);
