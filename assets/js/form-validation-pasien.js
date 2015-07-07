var Script = function () {

    $().ready(function() {
        // validate the comment form when it is submitted
        //$("#registerPasien").validate();

        // validate signup form on keyup and submit
        $("#registerPasien").validate({
            rules: {
				tgl_lahir: "required",
                nama: {
                    required: true,
					minlength: 2
                },
				tinggi_badan: {
                    maxlength: 3
                },
				berat_badan: {
                    maxlength: 3
                }
            },
            messages: {
				tgl_lahir: "Masukkan Tanggal Lahir",
				nama: {
                    required: "Masukkan Nama Pasien",
                    minlength: "Nama Minimal 2 huruf"
                },
				tinggi_badan: {
                    maxlength: "Tinggi Badan Maksimal 3 digit"
                },
				berat_badan: {
                    maxlength: "Berat Badan Maksimal 3 Digit"
                }
            }
        });
    });


}();