function alerta(){
	swal({
  title: 'Multiple inputs',
  html:
  	"<div id='facebook-session'>"+
							  "<strong></strong>"+
							  "<img>"+
							  "<a href='#' id='login' class='btn btn-info'>Iniciar sesión</a>"+
							  "</div>"+
  	'<hr>'+
    '<input id="swal-input1" class="swal2-input">' +
    '<input id="swal-input2" class="swal2-input">',
  preConfirm: function () {
    return new Promise(function (resolve) {
      resolve([
        $('#swal-input1').val(),
        $('#swal-input2').val()
      ])
    })
  },
  onOpen: function () {
    $('#swal-input1').focus()
  }
}).then(function (result) {
  swal(JSON.stringify(result))
}).catch(swal.noop)
}