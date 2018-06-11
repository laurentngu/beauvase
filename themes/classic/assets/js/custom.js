/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
//console.log("javascript is running");

/* not used
$(document).ready(function() {

    var dynamic = $('.dynamic');
    var static = $('.static');

    static.height(dynamic.height());
    console.log("javascript...");

});   */

function myMove() {
    var elem = document.getElementById("myAnimationX");
    var pos = 0;
    var go_rightdown=1;
    var id = setInterval(frame, 5);
    function frame() {
        if (pos == 200) {
            //clearInterval(id);
            go_rightdown=2;
            pos--;

        } else if (go_rightdown == 1)
        { pos++;
            elem.style.top = pos + 'px';
            elem.style.left = pos + 'px';
        }
        else if (go_rightdown == 2 && pos>1)
        { pos--;
            elem.style.top = pos + 'px';
            elem.style.left = pos + 'px'; }
            else if (go_rightdown == 2 && pos==0)
            {clearInterval(id);
                go_rightdown=0;
            }

    }
}