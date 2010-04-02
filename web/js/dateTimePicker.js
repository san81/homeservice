/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

	$(function() {
		$("#datepicker").datepicker();
		//$("#format").change(function() { $('#datepicker').datepicker('option', {dateFormat: $(this).val()}); });
        $('#datepicker').datepicker('option', {dateFormat: 'mm/dd/yy'});
	});

