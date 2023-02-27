<footer id="footer" class="footer color-bg footer_bottom">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="module-heading">

                    </div>
                    <!-- /.module-heading -->

                    @php
                    $setting = App\Models\SiteSetting::find(1);
                    @endphp

                    <div class="module-body">
                        <ul class="toggle-footer clearfix" style="">

                            <li class="media-backss">
                                <div class="pull-left"> </div>

                                <div class="footer_p"><b>Contact Us</b></div>

                            </li>
                            <li class="media-backss">
                                <div class="pull-left"> <span class="fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body-backss">
                                    <p class="footer_p">377325 Yonge St, Toronto, ON L4P 0E8</p>
                                </div>
                            </li>
                            <li class="media-backss">
                                <div class="pull-left"> <span class="fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body-backss">
                                    <p class="footer_p">647-656-8931</p>
                                </div>
                            </li>

                            <li class="media-backss">
                                <div class="pull-left"> <span class="fa-stack fa-lg"> <i class="fa fa-fax fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body-backss">
                                    <p class="footer_p">647-656-8931</p>
                                </div>
                            </li>

                            <li class="media-backss">
                                <div class="pull-left"> <span class="fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body-backss"> <a style="color:white;" href="mailto:Support@bestchoice.com"> <p class="footer_p">Support@bestchoice.com</p> </a> </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

            </div>
        </div>
    </div>
</footer>
