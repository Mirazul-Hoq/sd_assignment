<footer >
	<div class="container my-auto">
	  <div class="copyright text-center my-auto">
	    <span>Copyright © Your Website 2019</span>
	  </div>
	</div>
</footer>

<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>


<script src="{{asset('student/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('student/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('student/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{asset('student/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('student/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('student/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('student/js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{asset('student/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('student/js/demo/chart-area-demo.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>










<script>
	$(document).ready( function () {
		$('#table_id tfoot th').each( function () {
	        var title = $(this).text();
	        if (title!='Edit' && title!='Delete' && title!='Details') {
	        	$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
	        }
	    } );
	    var table = $('#table_id').DataTable({
	    	"columnDefs": [
			    { "orderable": false, "targets": [2,5,6] }
			],
			dom: 'Bfrtip',
	        buttons: [
	            'excelHtml5',
	            'csvHtml5',
	            'pdfHtml5'
	        ]
	    });
	    table.columns().every( function () {
	        var that = this;
	 
	        $( 'input', this.footer() ).on( 'keyup change clear', function () {
	            if ( that.search() !== this.value ) {
	                that
	                    .search( this.value )
	                    .draw();
	            }
	        } );
	    } );
	} );
</script>