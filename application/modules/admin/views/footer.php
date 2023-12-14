<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Footer -->
        <footer class="footer">
        <div><a href="https://coreui.io">Dapur Ricka © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
<!-- CoreUI and necessary plugins-->
    <script src="<?php echo get_theme_uri('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/vendors/simplebar/js/simplebar.min.js');?>"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo get_theme_uri('assets/vendors/chart.js/js/chart.min.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/vendors/@coreui/chartjs/js/coreui-chartjs.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/vendors/@coreui/utils/js/coreui-utils.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/js/main.js');?>"></script>
    <script>  var sidebarNode = document.querySelector('#mySidebar')
    var sidebar = coreui.Sidebar.getInstance(sidebarNode)
    sidebar.close()
    </script>
</body>
</html>