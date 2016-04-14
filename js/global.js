/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on('click', '.accordion-toggle', function(e) {
            event.preventDefault();

            $('#accordion').find('.accordion-body').collapse('hide');
            $(this).parent().next().collapse('show');
        });