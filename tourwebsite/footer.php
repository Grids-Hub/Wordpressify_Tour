    <!-- Footer -->
    <footer>
        <div class="container-fluid footer">
            <div class="footers">
                <div class="row ">
                    <div  class="col-md-12 col-xs-12 col-lg-12 col-xl-5 mx-auto mb-4 text-xl-start text-lg-center text-md-center text-sm-center text-center foottext">                     
                        <?php if(is_active_sidebar('foot1')){
                            dynamic_sidebar("foot1");
                        }?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2  mx-auto p-0 mb-4 text-xl-start text-lg-center text-md-center text-sm-center text-center footlist">                       
                        <?php if(is_active_sidebar('foot2')){
                            dynamic_sidebar("foot2");
                        }?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mx-auto p-0  mb-4 text-xl-start text-lg-center text-md-center text-sm-center text-center footlist">
                        <?php if(is_active_sidebar('foot3')){
                            dynamic_sidebar("foot3");
                        }?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2  mx-auto p-0  mb-4 text-xl-start text-lg-center text-md-center text-sm-center text-center  footlist">
                        <?php if(is_active_sidebar('foot4')){
                            dynamic_sidebar("foot4");
                        }?>
                    </div>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-md-12 social text-center  ">
                        <?php if(is_active_sidebar('foot5')){
                            dynamic_sidebar("foot5");
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>
