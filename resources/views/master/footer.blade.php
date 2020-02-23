<!-- Static Table End -->

<div class="footer-copyright-area" style="bottom:0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2019 <a href="">Zayyan R</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <!-- jquery
		============================================ -->
    <script src="jewelermaster/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="jewelermaster/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="jewelermaster/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="jewelermaster/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="jewelermaster/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="jewelermaster/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="jewelermaster/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="jewelermaster/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="jewelermaster/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="jewelermaster/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="jewelermaster/js/metisMenu/metisMenu.min.js"></script>
    <script src="jewelermaster/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="jewelermaster/js/data-table/bootstrap-table.js"></script>
    <script src="jewelermaster/js/data-table/tableExport.js"></script>
    <script src="jewelermaster/js/data-table/data-table-active.js"></script>
    <script src="jewelermaster/js/data-table/bootstrap-table-editable.js"></script>
    <script src="jewelermaster/js/data-table/bootstrap-editable.js"></script>
    <script src="jewelermaster/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="jewelermaster/js/data-table/colResizable-1.5.source.js"></script>
    <script src="jewelermaster/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="jewelermaster/js/editable/jquery.mockjax.js"></script>
    <script src="jewelermaster/js/editable/mock-active.js"></script>
    <script src="jewelermaster/js/editable/select2.js"></script>
    <script src="jewelermaster/js/editable/moment.min.js"></script>
    <script src="jewelermaster/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="jewelermaster/js/editable/bootstrap-editable.js"></script>
    <script src="jewelermaster/js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="jewelermaster/js/chart/jquery.peity.min.js"></script>
    <script src="jewelermaster/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="jewelermaster/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="jewelermaster/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="jewelermaster/js/main.js"></script>
    <!-- chosen JS
		============================================ -->
    <script src="jewelermaster/js/chosen/chosen.jquery.js"></script>
    <script src="jewelermaster/js/chosen/chosen-active.js"></script>
    <!-- select2 JS
		============================================ -->
    <script src="jewelermaster/js/select2/select2.full.min.js"></script>
    <script src="jewelermaster/js/select2/select2-active.js"></script>
    <!-- notification JS
		============================================ -->
    <script src="jewelermaster/js/notifications/Lobibox.js"></script>
    <script src="jewelermaster/js/notifications/notification-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="jewelermaster/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="jewelermaster/js/datapicker/datepicker-active.js"></script>
    <!-- Modal Popup -->
    <div id="WarningModalhdbgc2" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3">
                <h4 class="modal-title">QR Code Kunjungan CHECK IN/CHECK OUT</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            @php
            use App\Http\Services\vinegere;
            ini_set('date.timezone', 'Asia/Jakarta');
            $t=time();
            $setqr_ku="Kunjungan<~>".$t;
            $qrcode_vine_ku=vinegere::call_encode_vinegere($setqr_ku);
            @endphp
            <div class="modal-body">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(312)->generate($qrcode_vine_ku)) !!} ">
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
    </div>
