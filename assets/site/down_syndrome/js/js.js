/*=====================================================scroller[1]=================================*/
var scrollOverflowHideChild, scrollID, overFlowWidth, curPos=0, eachBoxWidth;
jQuery(document).ready(function () {
    jQuery('.feature_box').eq(0).css("background", "none");


    eachBoxWidth = jQuery('#scrollOverflowHide ul li:first').outerWidth() + 0; // 17=="margin-right"
    scrollOverflowHideChild = eachBoxWidth * jQuery('#scrollOverflowHide ul li').length;
    overFlowWidth = scrollOverflowHideChild - jQuery('#scrollOverflowHide').width(); //alert(overFlowWidth);
    jQuery('#scrollOverflowHide ul').css('width', scrollOverflowHideChild + '0px');


    if (overFlowWidth > 0) {

        var direction, tempCurPos;
        jQuery('.left_scoller, .right_scoller').click(function () {
            //alert('uzzal');
            //direction set:
            direction = jQuery(this).is('.left_scoller') ? +1 : -1;

            if (!((curPos == 0 && direction == 1) || (curPos == -overFlowWidth && direction == -1)))
                curPos += (eachBoxWidth * direction);
            else if (curPos == 0 && direction == 1) {
                curPos = -overFlowWidth;
            }
            else if (curPos == -overFlowWidth && direction == -1)
                curPos = 0;

            if (0 < curPos || curPos < -overFlowWidth)
                curPos = (0 < curPos) ? 0 : -overFlowWidth;

            if (tempCurPos != curPos)
                jQuery('#scrollOverflowHide ul').animate({ left: curPos }, 600);
            tempCurPos = curPos;
        });
    }
});
