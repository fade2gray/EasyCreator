/**
 * @package EasyCreator
 * @subpackage Javascript
 * @author Nikolai Plath
 * @author Created on 11-Oct-2009
 * @license GNU/GPL, see JROOT/LICENSE.php
 */

function deleteZipFile(path, file) {
    var url = 'index.php?option=com_easycreator&tmpl=component&format=raw';
    url += '&controller=ziper&task=delete';
    url += '&file_path=' + path;
    url += '&file_name=' + file;

    var box = document.id('ajaxMessage');
    var debug = document.id('ajaxDebug');

    switch(ECR_JVERSION)
    {
        case '1.5':
            var fx = box.effects( {
                duration : 1000,
                transition : Fx.Transitions.Quart.easeOut
            });
            break;
        case '1.6':
        case '1.7':
        case '2.5':
            var fx = new Fx.Morph(box, {});
            break;
        default:
            alert(jgettext('Undefined Joomla! version: %s', ECR_JVERSION));
            break;
    }// switch

    new Request({
        url: url,
        onRequest : function() {
            box.innerHTML = jgettext('Deleting...');
        },

        onComplete : function(response) {
            resp = JSON.decode(response);
            box.set('text', resp.message);

            box.style.color = 'green';

            if (resp.status) {
                box.style.color = 'red';
                debug = resp.debug;

                return;
            } else {
                $('row' + file).setStyle('display', 'none');
            }

            fx.start( {}).chain(function() {
                this.start.delay(1000, this, {
                    'opacity' : 0
                });
            }).chain(function() {
                box.style.display = "none";
                this.start.delay(100, this, {
                    'opacity' : 1
                });
            });
        }
    }).send();
}//function

function updateName(ecr_project)
{
    var url = 'index.php?option=com_easycreator&tmpl=component&format=raw&controller=ajax';
    url += '&ecr_project='+ecr_project;
    url += '&cst_format=' + document.id('cst_format').value;
    new Request({
        url: url + '&task=update_project_name',
        'onRequest': function()
        {
            document.id('ajMessage').className = 'ajax_loading16';
            document.id('ajMessage').innerHTML = jgettext('Loading...');
        },
        'onComplete': function(request)
        {
            document.id('ajName').innerHTML = request;

            document.id('ajMessage').innerHTML = '';
            document.id('ajMessage').className = '';
        }
    }).send();
}//function
