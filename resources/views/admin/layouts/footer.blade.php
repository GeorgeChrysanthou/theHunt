<footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-sm-none d-md-block">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src={{asset("admin/plugins/jquery/jquery.min.js")}}></script>
    <!-- Bootstrap -->
    <script src={{asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <!-- AdminLTE App -->
    <script src={{asset("admin/dist/js/adminlte.js")}}></script>
  
    <!-- Bootstrap WYSIHTML5 -->
<script src={{asset("admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}></script>
<script>
      // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
    <!-- PAGE SCRIPTS -->
    <script src={{asset("admin/dist/js/pages/dashboard2.js")}}></script>