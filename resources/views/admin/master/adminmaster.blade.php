<!doctype html>
<html><head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
<style>
.things{
opacity:0.5;
}


.panel:hover .things{
display:block;
opacity: 1;
transition: width, border opacity .0s linear .2s;
-webkit-transition: width, border opacity .0s linear .2s;
-moz-transition: width, border opacity .0s linear .2s;
-ms-transition: width, border opacity .0s linear .2s;

transition: opacity .2s linear .2s;
-webkit-transition: opacity .2s linear .2s;
-moz-transition: opacity .2s linear .2s;
-ms-transition: opacity .2s linear .2s;
}

.panel-footer{
background:white;
border:0px;
font-size:16px;
}

</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<title>@yield('title')</title>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>
<body>
  <div class="site-wrapper">
    @include('admin.admin_partials.admin_header')
    @yield('container')

  </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
		$('div.alert').delay(2000).slideUp(300);
</script>

<script>
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
        console.log( editor );
      } )
      .catch( error => {
        console.error( error );
      } );
  </script>

  <script>
  $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>
<script>
$('#openBtn').click(function(){
    $('#myModal').modal({show:true})
});$('#myTab a').click(function (e) {
	 e.preventDefault();
	 $(this).tab('show');
});

$(function () {
$('#myTab a:last').tab('show');
})
$("[data-toggle=tooltip]").tooltip();
$("[data-toggle=popover]").popover();
$(".alert").delay(200).addClass("in").fadeOut(3500);

$(".alert").addClass("in").fadeOut(3500);

$('.typeahead').typeahead({
	source: function (typeahead, query) {
	 /* put your ajax call here..
	 return $.get('/typeahead', { query: query }, function (data) {
	    return typeahead.process(data);
	 });
	 */
	 return ['alpha','beta','bravo','delta','epsilon','gamma','zulu'];
	}
});
    $("[rel='tooltip']").tooltip();

    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );
    </script>

    <!--Bootbox-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <script>
	$('.delete').click(function(){
		var slug=$(this).attr('del');
		bootbox.confirm({
			message:'Are you sure You want to Delete?',
			buttons:{
        cancel:{
          label:'No',
          className:"btn-danger"
        },
				confirm:{
					label:'Yes',
					className:'btn-success'
				}
			},
			callback:function(result){
				if(result){
					window.location=slug;

				}
			}
		});

	});
</script>
</html>
