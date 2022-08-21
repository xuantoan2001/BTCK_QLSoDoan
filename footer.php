<?php echo "</section>" ?>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="../public/js/jquery.js"></script>
<script src="../public/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="../public/bs3/js/bootstrap.min.js"></script>
<script src="../public/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../public/js/jquery.scrollTo.min.js"></script>
<script src="../public/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="../public/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="../public/js/skycons/skycons.js"></script>
<script src="../public/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../public/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="../public/js/calendar/moment-2.2.1.js"></script>
<script src="../public/js/evnt.calendar.init.js"></script>
<script src="../public/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../public/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="../public/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="../public/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="../public/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="../public/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="../public/js/morris-chart/morris.js"></script>
<script src="../public/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="../public/js/flot-chart/jquery.flot.js"></script>
<script src="../public/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="../public/js/flot-chart/jquery.flot.resize.js"></script>
<script src="../public/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="../public/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="../public/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="../public/js/dashboard.js"></script>
<script src="../public/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="../public/js/scripts.js"></script>
<script src="~/Scripts/jquery.unobtrusive-ajax.js"></script>
<!--script for this page-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#AlertBox').removeClass('hide');
        $('#AlertBox').delay(1500).slideUp(500);
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#nav-accordion a.active').removeClass('active');
        var url = window.location.pathname,
                urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        $('#nav-accordion a').each(function () {
            if (window.location.pathname != '/') {
                if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                    $(this).addClass('active');
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('form').submit(function () {
            var id = document.forms["delete"]["id"].value;
            var x = confirm("Ban có muốn xóa sinh viên đã nộp sổ?" + "\n Mã sổ đoàn: "+id);
            if (x)
            {
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    // other AJAX settings goes here
                    // ..
                }).done(function (response) {
                    // Process the response here
                    $('#row'.concat(id)).remove();
                });

            }

            event.preventDefault(); // <- avoid reloading
//            alert(id);
//            $('#row'.concat(id)).remove();
        });
    })
</script>
</body>
</html>