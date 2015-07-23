/* Theme Name:iDea - Clean & Powerful Bootstrap Theme
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Author e-mail:htmlcoder.me@gmail.com
 * Version: 1.1.0
 * Created:October 2014
 * License URI:http://support.wrapbootstrap.com/
 * File Description: Place here your custom scripts
 */

$(document).ready(function() {
	$('#employment_status').on('change', function() {
		var emp_status = $(this).val();

		if(emp_status == 'Student' || emp_status == 'Employed' || emp_status == 'Self Employed') {
			if(emp_status == 'Student') {
				$('#organization_info').find('h3').html('School Information');
				$('#position_container').hide();
				$('#org_name').parent().find('label').html('Name of school');
				$('#org_name').prop('placeholder', 'Name of the school');
			} else {
				$('#organization_info').find('h3').html('Company Information');
				$('#position_container').show();
				$('#org_name').parent().find('label').html('Name of employer');
				$('#org_name').prop('placeholder', 'Name of the current employer');
			}

			$('#organization_info').show('fast');
		} else {
			$('#organization_info').hide('fast');
		}
	});
});