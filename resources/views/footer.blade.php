        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed & Developed by <a href="javascript:void(0)" target="_blank">Zirochain</a> 2022</p>
            </div>
        </div>
        <!-- end Footer -->
    </div>
    <script src="{{asset('backend/assets/js/global/global.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart_js/Chart.bundle.min.js')}}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{asset('backend/assets/js/peity/jquery.peity.min.js')}}"></script>
    <!-- Dashboard 1 -->
    <script src="{{asset('backend/assets/js/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('backend/assets/js/demo.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.toaster.js')}}"></script>
    <script src="{{asset('backend/assets/js/idoTest.js')}}?</php echo time(); ?>"></script>
    <script type="text/javascript">
        checkAllowance();

        function deposit_new(valPara){
            var amt   = $("#amt_"+valPara).val();
            // var limit = $("#limit_"+valPara).val();
            deposit(amt);
        }

        setTimeout(() => {
            checkuser();
        }, 2000);

      function copyElementText(id) {
        var dummyLink = $("#"+id).html();
        var dummy = $('<input>').val(dummyLink).appendTo('body').select();
        dummy.focus();
        document.execCommand('copy');
        $.toaster({ priority : 'success', title : 'Copy Alert !', message :  "Copied" });
      }

      AOS.init();
    </script>
  </body>
</html>
